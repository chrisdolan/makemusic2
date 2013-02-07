<?php
App::uses('AppModel', 'Model');
/**
 * Location Model
 *
 * @property City $City
 * @property User $User
 * @property Neighborhood $Neighborhood
 * @property LocationType $LocationType
 * @property LocationElectricity $LocationElectricity
 * @property LocationGenre $LocationGenre
 * @property LocationHour $LocationHour
 * @property Performance $Performance
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
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
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
		),
		'LocationType' => array(
			'className' => 'LocationType',
			'foreignKey' => 'location_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'LocationElectricity' => array(
			'className' => 'LocationElectricity',
			'foreignKey' => 'location_electricity_id',
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
		'LocationHour' => array(
			'className' => 'LocationHour',
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
		'Performance' => array(
			'className' => 'Performance',
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
