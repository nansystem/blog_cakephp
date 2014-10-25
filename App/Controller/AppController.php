<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	public $components = [
		'Session',
		'Auth' => [
			'loginRedirect' => ['controller'=>'posts', 'action' => 'index'],
			'logoutRedirect' => ['controller'=>'posts', 'action' => 'index'],
			'authorize' => ['Controller'],
		]
	];

	public function beforeFilter() {
		$this->Auth->allow('index', 'view');
	}

	public function isAuthorized( $user ) {
		if( isset($user['role']) && $user['role'] === 'admin') {
			return true;
		}
		$this->redirect(array('controller' => 'posts', 'action' => 'index'));
		return false;
	}

}