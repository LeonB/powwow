<?php
App::uses('AppModel', 'Model');

/**
 * User Model
 *
 * @property User $User
 */
class User extends AppModel {
	
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'email';
	
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'email' => array(
			'email' => array(
				'rule' => array('email'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	
/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Site' => array(
			'className' => 'Site',
			'joinTable' => 'users_sites',
			'foreignKey' => 'user_id',
			'associationForeignKey' => 'site_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);
	
    public function beforeSave($options = array()) {
    	if (isset($this->data['User']['password'])) {
    		$this->data['User']['salt'] = Security::generateAuthKey();
    		$this->data['User']['password'] = BcryptFormAuthenticate::hash($this->data['User']['password'], $this->data['User']['salt']);
    	}
        return true;
    }
    
}
