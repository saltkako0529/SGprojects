<?php
namespace App\Controller;

use Cake\Event\Event;
use Cake\Core\Configure;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Hours Controller
 *
 * @property \App\Model\Table\HoursTable $Hours
 */
class ApprovalsController extends AppController
{
    public function beforeFilter(Event $event)
    {
		// 選択肢項目読み込み
		$work_kind = Configure::read('Hour.work_kind');
        $this->set(compact('work_kind'));

		// ページ情報
		$active = 'approvals';
        $this->set(compact('active'));
	
    }
    /** -----------------------------------------------------------------------------
     * 一覧ページ
     */
	public function index()
    {
		// ユーザの担当データを取得する
		$user_id = $this->Auth->user('id');
		$this->Hours = TableRegistry::get('Hours');
		$records = $this->Hours
			->find()
			->where(
				[
				'Hours.officer' => $user_id ,
				'Hours.application' => 1 // 申請中のものを取得
				]
			);
        $users = $this->Hours->Users->find('list');
        $projects = $this->Hours->Projects->find('list');
		$users = $users->toArray();
		$projects = $projects->toArray();
		
        if ($this->request->is(['patch', 'post', 'put'])) {
			$records = $this->Hours->newEntity();
            $records = $this->Hours->patchEntity($records, $this->request->data());
			//pr($records);
            if ($this->Hours->save($records)) {
                $this->Flash->success(__('登録が完了しました。'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('登録に失敗しました！登録内容を再度ご確認ください。'));
            }
        }
		$this->set(compact('records', 'users', 'projects'));
    }
}
