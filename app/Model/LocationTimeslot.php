<?php
App::uses('AppModel', 'Model');
/**
 * LocationTimeslot Model
 *
 * @property Location $Location
 * @property Timeslot $Timeslot
 */
class LocationTimeslot extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Location' => array(
			'className' => 'Location',
			'foreignKey' => 'location_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Timeslot' => array(
			'className' => 'Timeslot',
			'foreignKey' => 'timeslot_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
