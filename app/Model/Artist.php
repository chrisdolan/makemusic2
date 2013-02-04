<?php
App::uses('AppModel', 'Model');
/**
 * Artist Model
 *
 * @property User $User
 * @property ArtistGenre $ArtistGenre
 * @property ArtistTimeslot $ArtistTimeslot
 */
class Artist extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'groupname';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
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
		'ArtistGenre' => array(
			'className' => 'ArtistGenre',
			'foreignKey' => 'artist_id',
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
		'ArtistTimeslot' => array(
			'className' => 'ArtistTimeslot',
			'foreignKey' => 'artist_id',
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
