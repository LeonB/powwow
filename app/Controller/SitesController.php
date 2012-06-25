<?php
App::uses('AppController', 'Controller');
/**
 * Sites Controller
 *
 */
class SitesController extends AppController {

/**
 * Scaffold
 *
 * @var mixed
 */
	public $scaffold = 'admin';

    public function beforeFilter () {
    	parent::beforeFilter();
    	$this->set('active_item', array('sites'));
    }

	public function admin_index() {
		$this->set('sites', $this->Site->find('all'));
	}

}
