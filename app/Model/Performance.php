<?php
App::uses('AppModel', 'Model');
/**
 * Performance Model
 *
 * @property Locations $Locations
 * @property Artists $Artists
 */
class Performance extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Locations' => array(
			'className' => 'Locations',
			'foreignKey' => 'locations_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Artists' => array(
			'className' => 'Artists',
			'foreignKey' => 'artists_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
