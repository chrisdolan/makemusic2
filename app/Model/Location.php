<?php
App::uses('AppModel', 'Model');
/**
 * Location Model
 *
 * @property City $City
 * @property AdminUser $AdminUser
 * @property Neighborhood $Neighborhood
 * @property LocationGenre $LocationGenre
 * @property LocationTimeslot $LocationTimeslot
 */
class Location extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'City' => array(
			'className' => 'City',
			'foreignKey' => 'city_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'AdminUser' => array(
			'className' => 'AdminUser',
			'foreignKey' => 'admin_user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Neighborhood' => array(
			'className' => 'Neighborhood',
			'foreignKey' => 'neighborhood_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'LocationGenre' => array(
			'className' => 'LocationGenre',
			'foreignKey' => 'location_id',
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
		'LocationTimeslot' => array(
			'className' => 'LocationTimeslot',
			'foreignKey' => 'location_id',
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
