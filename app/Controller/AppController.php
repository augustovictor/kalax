<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
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
	public $helpers = array('BootstrapCake.Bootstrap'); 


	public $components = array(
		'Session',
		'Auth' => array(
			'loginRedirect' => array('controller' => 'services', 'action' => 'index'),
			'logoutRedirect' => array('controller' => 'services', 'action' => 'public_page'),
			'authorize' => array('Controller')
		)
	);

	public function beforeFilter() {
		$this->loadModel('Service');
		$this->set('services', $this->Service->find('all'));

		$this->loadModel('New');
		$this->set('news', $this->New->find('all'));	

		$this->loadModel('Business');
		$this->set('businesses', $this->Business->find('all'));	

		$this->loadModel('Category');
		$this->set('categories', $this->Category->find('all'));

		$this->loadModel('Product');
		$this->set('products', $this->Business->Category->Product->find('all'));

		$allowed_pages = array(
			'public_page', 
			'home', 
			'client_area', 
			'partnerships',
			'tec_direct',
		);
		$this->Auth->allow($allowed_pages);
	}
	// End beforeFilter

	public function isAuthorized($user) {
		if(isset($user['role'])) {
			return true;
		}
		return false;
	}

}
