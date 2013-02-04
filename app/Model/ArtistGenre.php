<?php
App::uses('AppModel', 'Model');
/**
 * ArtistGenre Model
 *
 * @property Genre $Genre
 * @property Artist $Artist
 */
class ArtistGenre extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Genre' => array(
			'className' => 'Genre',
			'foreignKey' => 'genre_id',
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
		)
	);
}
