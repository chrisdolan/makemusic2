<?php
App::uses('AuthComponent','Controller/Component','AppModel', 'Model');

class User extends AppModel {

	public $displayField = 'screenname';

	public $actsAs = array('KeepItClean');

	public $validate = array(
		'username' => array(
			'isEmail' => array(
				'rule' => 'email',
				'required' => true,
				'message' => 'Your username must be a valid email address'
			),
			'unique' => array(
				'rule' => array('isUnique'),
				'message' => 'Sorry, that email address is already registered'
			)
		),
		'password' => array(
			'rule' => array('minLength', 8),
			'message' => 'Your password must be at least 8 characters'
		),
		'screenname' => array(
			'minlength' => array(
				'rule' => array('minLength', 4),
				'required' => true,
				'message' => 'Your screenname must be at least 4 characters long'
			),
			'clean' => array(
				'rule' => array('isClean'), //KeepItCleanBehavior
				'message' => 'Your screenname must not contain naughty words'
			)
		)
	);


	public function beforeSave($options = array()) {
	    if (isset($this->data[$this->alias]['password'])) {
	        $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
	    }
	    return true;
	}


	public $belongsTo = array(
		'City' => array(
			'className' => 'City',
			'foreignKey' => 'city_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public $hasMany = array(
		'Artist' => array(
			'className' => 'Artist',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Location' => array(
			'className' => 'Location',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
