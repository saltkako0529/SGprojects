<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Core\Configure;
use Cake\ORM\TableRegistry;
/**
 * Projects Controller
 *
 * @property \App\Model\Table\ProjectsTable $Projects
 */
class ProjectsController extends AppController
{
    public function beforeFilter(Event $event)
    {
		// 選択肢項目読み込み
		$kind = Configure::read('Project.kind');
		$status = Configure::read('Project.status');
        $this->set(compact('kind','status'));

		// ページ情報
		$active = 'projects';
        $this->set(compact('active'));
    }

    /**
     * 一覧画面
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Clients']
        ];
        $projects = $this->paginate($this->Projects);

        $this->set(compact('projects'));
        $this->set('_serialize', ['projects']);
    }

    /**
     * 詳細画面
     */
    public function view($id = null)
    {
        $project = $this->Projects->get($id, [
            'contain' => ['Users', 'Clients']
        ]);
		// 外注マスタを取得->配列へ変換
        $outsourcings = TableRegistry::get('Outsourcings');
        $out = $outsourcings->find('list')->toArray();

        $this->set(compact('project', 'out'));
        $this->set('_serialize', ['project']);
    }

    /**
     * 案件編集画面
     */
    public function edit($id = null)
    {
		if(!empty($id)){// 編集
			$project = $this->Projects->get($id, [
				'contain' => ['Users', 'Clients']
			]);
		} else {// 新規追加
			$project = $this->Projects->newEntity();
		}
		// 外注マスタを取得->配列へ変換
        $outsourcings = TableRegistry::get('Outsourcings');
        $out = $outsourcings->find('list')->toArray();

        if ($this->request->is(['patch', 'post', 'put'])) {
            $project = $this->Projects->patchEntity($project, $this->request->data);
            if ($this->Projects->save($project)) {
                $this->Flash->success(__('登録が完了しました。'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('登録に失敗しました！登録内容を再度ご確認ください。'));
            }
        }
        $clients = $this->Projects->Clients->find('list');
        $users = $this->Projects->Users->find('list');
        $this->set(compact('project', 'users', 'clients', 'out'));
        $this->set('_serialize', ['project']);
    }

    /**
     * 削除メソッド
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $project = $this->Projects->get($id);

        if ($this->Projects->delete($user)) {
            $this->Flash->success(__('データを削除しました。'));
        } else {
            $this->Flash->error(__('データを削除できませんでした。'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
