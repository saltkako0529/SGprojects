<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * LiceApplicationControllernsed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Core\Configure; 
use Cake\Event\Event;
use Cake\Datasource\ConnectionManager;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class ApprovalController extends Controller
{
    public function beforeFilter(Event $event)
    {
		// �I�������ړǂݍ���
		$kind = Configure::read('Project.kind');
		$status = Configure::read('Project.status');
        $this->set(compact('kind','status'));

		// �y�[�W���
		$active = 'projects';
        $this->set(compact('active'));
    }

    /**
     * �ꗗ���
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
     * �ڍ׉��
     */
    public function view($id = null)
    {
        $project = $this->Projects->get($id, [
            'contain' => ['Users', 'Clients']
        ]);
	// �O���}�X�^���擾->�z��֕ϊ�
        $outsourcings = TableRegistry::get('Outsourcings');
        $out = $outsourcings->find('list')->toArray();

        $this->set(compact('project', 'out'));
        $this->set('_serialize', ['project']);
    }

    /**
     * �Č��ҏW���
     */
    public function edit($id = null)
    {
	if(!empty($id)){// �ҏW
	        $project = $this->Projects->get($id, [
	            'contain' => ['Users', 'Clients']
	        ]);
	} else {// �V�K�ǉ�
	        $project = $this->Projects->newEntity();
	}
	// �O���}�X�^���擾->�z��֕ϊ�
        $outsourcings = TableRegistry::get('Outsourcings');
        $out = $outsourcings->find('list')->toArray();

        if ($this->request->is(['patch', 'post', 'put'])) {
            $project = $this->Projects->patchEntity($project, $this->request->data);
            if ($this->Projects->save($project)) {
                $this->Flash->success(__('�o�^���������܂����B'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('�o�^�Ɏ��s���܂����I�o�^���e���ēx���m�F���������B'));
            }
        }
        $clients = $this->Projects->Clients->find('list');
        $users = $this->Projects->Users->find('list');
        $this->set(compact('project', 'users', 'clients', 'out'));
        $this->set('_serialize', ['project']);
    }

}
