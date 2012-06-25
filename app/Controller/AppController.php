<?php
App::uses('Controller', 'Controller');
App::uses('BcryptFormAuthenticate', 'Controller/Component/Auth');

class AppController extends Controller {

    public $components = array(
	    'Auth' => array(
	        'loginAction' => array(
	            'controller' => 'users',
	            'action' => 'login',
	            'admin' => true,
	        ),
	//        'authError' => 'Did you really think you are allowed to see that?',
	        'authenticate' => array(
	            'BcryptForm' => array(
	                'fields' => array('username' => 'email')
	            )
	        )
	    ),
	    'Session',
	    'Security', //csrf
	);

    public $scaffold;
    public $helpers = array('Session', 'Html', 'Form', 'Link');

    function beforeFilter () {
    	parent::beforeFilter();
    }

    function beforeRender () {
        $admin = Configure::read('Routing.admin');

        if (isset($this->params[$admin]) && $this->params[$admin]) {
            $this->layout = 'admin';
        }
    }
}
