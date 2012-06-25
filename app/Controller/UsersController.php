<?php

class UsersController extends AppController {

	public $scaffold = 'admin';

    function beforeFilter () {
    	parent::beforeFilter();
    	$this->Auth->allow('*');
    }

	public function login() {

	}

	public function admin_login() {
		// redirect user if already logged in
		if($this->Auth->loggedIn()) {
			return $this->redirect(array('controller'=>'dashboard', 'action'=>'index', 'admin'=>true));
		}

		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				return $this->redirect($this->Auth->redirect());
			} else {
				$this->Session->setFlash(__('Username or password is incorrect'), 'default', array());
			}
		}
	}

	public function admin_logout() {
		return $this->redirect($this->Auth->logout());
	}

	public function admin_password_recover() {

	}

}

?>
