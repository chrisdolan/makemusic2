<?php
App::uses('AppModel', 'Model');
/**
 * Performance Model
 *
 * @property Location $Location
 * @property Artist $Artist
 * @property Timeslot $Timeslot
 */
class Performance extends AppModel {


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
		'Artist' => array(
			'className' => 'Artist',
			'foreignKey' => 'artist_id',
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
