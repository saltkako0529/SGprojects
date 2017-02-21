<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProjectOutsourcings Controller
 *
 * @property \App\Model\Table\ProjectOutsourcingsTable $ProjectOutsourcings
 */
class ProjectOutsourcingsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projects', 'Outsourcings']
        ];
        $projectOutsourcings = $this->paginate($this->ProjectOutsourcings);

        $this->set(compact('projectOutsourcings'));
        $this->set('_serialize', ['projectOutsourcings']);
    }

    /**
     * View method
     *
     * @param string|null $id Project Outsourcing id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projectOutsourcing = $this->ProjectOutsourcings->get($id, [
            'contain' => ['Projects', 'Outsourcings']
        ]);

        $this->set('projectOutsourcing', $projectOutsourcing);
        $this->set('_serialize', ['projectOutsourcing']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projectOutsourcing = $this->ProjectOutsourcings->newEntity();
        if ($this->request->is('post')) {
            $projectOutsourcing = $this->ProjectOutsourcings->patchEntity($projectOutsourcing, $this->request->data);
            if ($this->ProjectOutsourcings->save($projectOutsourcing)) {
                $this->Flash->success(__('The project outsourcing has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The project outsourcing could not be saved. Please, try again.'));
            }
        }
        $projects = $this->ProjectOutsourcings->Projects->find('list', ['limit' => 200]);
        $outsourcings = $this->ProjectOutsourcings->Outsourcings->find('list', ['limit' => 200]);
        $this->set(compact('projectOutsourcing', 'projects', 'outsourcings'));
        $this->set('_serialize', ['projectOutsourcing']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Project Outsourcing id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projectOutsourcing = $this->ProjectOutsourcings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projectOutsourcing = $this->ProjectOutsourcings->patchEntity($projectOutsourcing, $this->request->data);
            if ($this->ProjectOutsourcings->save($projectOutsourcing)) {
                $this->Flash->success(__('The project outsourcing has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The project outsourcing could not be saved. Please, try again.'));
            }
        }
        $projects = $this->ProjectOutsourcings->Projects->find('list', ['limit' => 200]);
        $outsourcings = $this->ProjectOutsourcings->Outsourcings->find('list', ['limit' => 200]);
        $this->set(compact('projectOutsourcing', 'projects', 'outsourcings'));
        $this->set('_serialize', ['projectOutsourcing']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Project Outsourcing id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projectOutsourcing = $this->ProjectOutsourcings->get($id);
        if ($this->ProjectOutsourcings->delete($projectOutsourcing)) {
            $this->Flash->success(__('The project outsourcing has been deleted.'));
        } else {
            $this->Flash->error(__('The project outsourcing could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
