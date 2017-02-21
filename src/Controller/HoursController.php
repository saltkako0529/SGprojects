<?php
namespace App\Controller;

use Cake\Event\Event;
use Cake\Core\Configure;
use App\Controller\AppController;

/**
 * Hours Controller
 *
 * @property \App\Model\Table\HoursTable $Hours
 */
class HoursController extends AppController
{
    public function beforeFilter(Event $event)
    {
		// 選択肢項目読み込み
		$work_kind = Configure::read('Hour.work_kind');
		$work = Configure::read('Hour.work');
		$appl = Configure::read('Hour.application');
	
        $this->set(compact('work_kind', 'work', 'appl'));
	
		// ページ情報
		$active = 'hours';
        $this->set(compact('active'));
	
    }
    /**
     * 一覧画面
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Projects']
        ];
        $hours = $this->paginate($this->Hours);

        $this->set(compact('hours'));
        $this->set(compact('hours'));
        $this->set('_serialize', ['hours']);
    }

    /**
     * 詳細画面
     */
    public function view($id = null, $year, $month, $date)
    {
		// 工数レコードを取得
		$hour = $this->Hours->find()
		->where(['Hours.users_id' => $id, 'Hours.year' => $year, 'Hours.month' => $month, 'Hours.date' => $date ]);	
		$hour = $hour->toArray();
		
        $users = $this->Hours->Users->find('list')->toArray();
        $projects = $this->Hours->Projects->find('list')->toArray();
		
        $this->set(compact('hour', 'users', 'projects', 'year', 'month', 'date'));
        $this->set('_serialize', ['hour']);
    }

    /**
     *　編集画面
     */
    public function edit($id = null, $year, $month, $date)
    {
		// 工数レコードを取得
		$hour = $this->Hours->find()
		->where(['Hours.users_id' => $id, 'Hours.year' => $year, 'Hours.month' => $month, 'Hours.date' => $date ]);	
		// 該当データが1つもない場合
		if(empty($hour)){// 編集
			$hour = $this->Hours->newEntity();
		} 		
		
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hour = $this->Hours->patchEntity($hour, $this->request->data);
            if ($this->Hours->save($hour)) {
                $this->Flash->success(__('登録が完了しました。'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('登録に失敗しました！登録内容を再度ご確認ください。'));
            }
        }
        $users = $this->Hours->Users->find('list');
        $projects = $this->Hours->Projects->find('list')->toArray();
		//$projects[] = ['0' => '案件名不明・社内作業・その他雑作業'];
        $this->set(compact('hour', 'users', 'projects'));
        $this->set('_serialize', ['hour']);
    }

}
