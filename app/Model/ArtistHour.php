<?php
App::uses('AppModel', 'Model');
/**
 * ArtistHour Model
 *
 * @property Artist $Artist
 */
class ArtistHour extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Artist' => array(
			'className' => 'Artist',
			'foreignKey' => 'artist_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
