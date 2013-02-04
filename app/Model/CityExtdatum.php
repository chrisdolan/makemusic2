<?php
App::uses('AppModel', 'Model');
/**
 * CityExtdatum Model
 *
 * @property City $City
 */
class CityExtdatum extends AppModel {


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
		)
	);
}
