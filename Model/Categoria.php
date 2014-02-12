<?php
App::uses('AppModel', 'Model');
/**
 * Categoria Model
 *
 * @property Package $Package
 */
class Categoria extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Package' => array(
			'className' => 'Package',
			'foreignKey' => 'categoria_id',
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
