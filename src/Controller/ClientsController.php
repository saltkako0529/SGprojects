<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Clients Controller
 *
 * @property \App\Model\Table\ClientsTable $Clients
 */
class ClientsController extends AppController
{

    public function beforeFilter(Event $event)
    {
	      // ページ情報
	      $active = 'clients';
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
						$clients = $this->Clients->find()
								->order(['id' =>'Asc'])
								->where(['OR' => [
									"name like " => '%' . $datas['name'] . '%', // 顧客名
									"shortname like " => '%' . $datas['name'] . '%' // 略称名
								]
						]);
				} else {
						$clients = $this->Clients->find()->all();
				}
        $this->set(compact('clients'));			
        $this->paginate = ['contain' => ['Users']];
        $clients = $this->paginate($this->Clients);
        $this->set('_serialize', ['clients']);
    }

    /** -----------------------------------------------------------------------------
     * 
     * 詳細画面
     */
    public function view($id = null)
    {
        $client = $this->Clients->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('client', $client);
        $this->set('_serialize', ['client']);
    }

    /** -----------------------------------------------------------------------------
     * 
     * 編集画面
     */
    public function edit($id = null)
    {
        if(!empty($id)){// 編集
            $client = $this->Clients->get($id, [
                'contain' => []
            ]);
        } else {// 新規追加
            $client = $this->Clients->newEntity();
        }

        if ($this->request->is(['patch', 'post', 'put'])) {
            $client = $this->Clients->patchEntity($client, $this->request->data);
            if ($this->Clients->save($client)) {
                $this->Flash->success(__('登録が完了しました。'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('登録に失敗しました！登録内容を再度ご確認ください。'));
            }
        }
        $users = $this->Clients->Users->find('list');
        $this->set(compact('client', 'users'));
        $this->set('_serialize', ['client']);
    }


    /** -----------------------------------------------------------------------------
     * 
     * 削除アクション
     */
    public function delete($id = null)
    {
        $client = $this->Clients->get($id);
        if ($this->Clients->delete($client)) {
            $this->Flash->success(__('データを削除しました。'));
        } else {
            $this->Flash->error(__('データを削除できませんでした。'));
        }
        return $this->redirect(['action' => 'index']);
    }

}
