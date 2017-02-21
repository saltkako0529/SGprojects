<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Core\Configure; 
use Cake\Event\Event;
use Cake\Auth\DefaultPasswordHasher;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{
    public function beforeFilter(Event $event)
    {
		// 選択肢項目読み込み
		$empl = Configure::read('User.employment');
		$type = Configure::read('User.type');
		$affi = Configure::read('User.affiliation');
		$this->set(compact('empl', 'type', 'affi'));

		// ページ情報
		$active = 'users';
        $this->set(compact('active'));
    }

    /**
     * 一覧画面
     */
    public function index()
    {
        $users = $this->paginate($this->Users);
        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    /**
     * 編集画面
     */
    public function edit($id = null)
    {
	if(!empty($id)){// 編集
	        $user = $this->Users->get($id, [
	            'contain' => []
	        ]);
	} else {// 新規追加
	        $user = $this->Users->newEntity();
	}
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
		debug($user['files']);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('登録が完了しました。'));
		$this->Auth->setUser($user);
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('登録に失敗しました！登録内容を再度ご確認ください。'));
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * 削除アクション
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);

		if ($this->Users->delete($user)) {
            $this->Flash->success(__('データを削除しました。'));
        } else {
            $this->Flash->error(__('データを削除できませんでした。'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
