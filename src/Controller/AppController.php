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
class AppController extends Controller
{
public function initialize()
    {
        parent::initialize();
		$this->loadComponent('Paginator');
        $this->loadComponent('Flash'); 
        $this->loadComponent('RequestHandler'); 
        $this->loadComponent('Auth', [ // Authコンポーネントの読み込み
            'authenticate' => [
                'Form' => [ 
                    'fields' => [
                        'username' => 'loginid', 
                        'password' => 'password' 
                    ]
                ]
            ],
			'loginAction' => [
				'controller' => 'login',
				'action' => 'index'
			],
            'loginRedirect' => [ // ログイン後に遷移するアクションを指定
                'controller' => 'Hours',
                'action' => 'index'
            ],
            'logoutRedirect' => [ // ログアウト後に遷移するアクションを指定
                'controller' => 'Login',
                'action' => 'index',
            ],
            'authError' => 'ログインできませんでした。ログインしてください。',
        ]);
		// ユーザ情報を取得 -------------------------------------
		$user_auth = $this->Auth->user();
		$this->set(compact('user_auth'));
		// サイドメニュー取得 -----------------------------------
		$general_m = Configure::read('Menu.general');
		$admin_m = Configure::read('Menu.admin');
		$this->set(compact('general_m', 'admin_m'));
		
	}
	// ページネーション  -----------------------------------------
    public $paginate = [
        'limit' => 10,
        'templates' => 'paginator-templates'
    ];
		
		
	/**
	 * ログアウト
	 * @return bool
	 */
	public function logout()
	{
	    $this->request->session()->destroy(); // セッションの破棄
	    return $this->redirect($this->Auth->logout()); // ログアウト処理
	}


}
