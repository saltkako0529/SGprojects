<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Core\Configure; 
use Cake\Auth\DefaultPasswordHasher;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class LoginController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
		$login = 'login_page';
		$this->set(compact('login'));
	    if($this->request->is('post')) {
	        $user = $this->Auth->identify();
	        if ($user){
	            $this->Auth->setUser($user);
		    $this->request->session()->delete('Auth.redirect');
	            return $this->redirect($this->Auth->redirectUrl());
	        } else {
	            $this->Flash->error('ログインエラーです');
	        }
	    }
    }
}
