<?php
class DashboardController extends AppController {

    function beforeFilter () {
    	parent::beforeFilter();
    	$this->set('active_item', array('dashboard'));
    }
	
	public function admin_index() {
	}
	
}
