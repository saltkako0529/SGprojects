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
class ListsController extends AppController
{
    public function beforeFilter(Event $event)
    {
				// 選択肢項目読み込み
				$priority = Configure::read('List.priority');
        $this->set(compact('priority'));
	
				// ページ情報
				$active = 'lists';
        $this->set(compact('active'));
	
    }
    /** -----------------------------------------------------------------------------
     * 
		 * topページ
     */
		public function index()
    {

    }
}
