<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
/**
 * Outsourcings Controller
 *
 * @property \App\Model\Table\OutsourcingsTable $Outsourcings
 */
class OutsourcingsController extends AppController
{

    public function beforeFilter(Event $event)
    {
        // ページ情報
        $active = 'outsourcings';
        $this->set(compact('active'));
    }
  
    /** -----------------------------------------------------------------------------
     * 
     * 一覧画面
     */
    public function index()
    {
				if ($this->request->is('post')) {
						$datas = $this->request->data;
						$outsourcings = $this->Outsourcings->find()
								->order(['id' =>'Asc'])
								->where(["name like " => '%' . $datas['name'] . '%']);
				} else {
						$outsourcings = $this->Outsourcings->find()->all();
				}      
        $this->set(compact('outsourcings'));
        $outsourcings = $this->paginate($this->Outsourcings);
        $this->set('_serialize', ['outsourcings']);
    }

    /** -----------------------------------------------------------------------------
     * 
     * 詳細画面
     */
    public function view($id = null)
    {
        $outsourcing = $this->Outsourcings->get($id, [
            'contain' => []
        ]);

        $this->set('outsourcing', $outsourcing);
        $this->set('_serialize', ['outsourcing']);
    }

    /** -----------------------------------------------------------------------------
     * 
     * 編集画面
     */
    public function edit($id = null)
    {
        if(!empty($id)){// 編集
            $outsourcing = $this->Outsourcings->get($id, [
                'contain' => []
            ]);
        } else {// 新規追加
            $outsourcing = $this->Outsourcings->newEntity();
        }

        if ($this->request->is(['patch', 'post', 'put'])) {
            $outsourcing = $this->Outsourcings->patchEntity($outsourcing, $this->request->data);
            if ($this->Outsourcings->save($outsourcing)) {
                $this->Flash->success(__('登録が完了しました。'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('登録に失敗しました！登録内容を再度ご確認ください。'));
            }
        }
        $this->set(compact('outsourcing'));
        $this->set('_serialize', ['outsourcing']);
    }


    /** -----------------------------------------------------------------------------
     * 
     * 削除アクション
     */
    public function delete($id = null)
    {
        $outsourcing = $this->Outsourcings->get($id);
        if ($this->Outsourcings->delete($outsourcing)) {
            $this->Flash->success(__('データを削除しました。'));
        } else {
            $this->Flash->error(__('データを削除できませんでした。'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
