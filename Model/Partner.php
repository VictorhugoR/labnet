<?php
App::uses('AppModel', 'Model');
/**
 * Partner Model
 *
 * @property Product $Product
 */
class Partner extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

/*
 * Validation rules
 *
 * @var array
 *
	public $validate = array(
	//	'email' => array(
	//		'email' => array(
		//		'rule' => array('email'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'phone' => array(
			'phone' => array(
		//		'rule' => array('phone', '128'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'movil' => array(
			'phone' => array(
			//	'rule' => array('phone', '128'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
/*
	public $belongsTo = array(
		'Product' => array(
			'className' => 'Product',
			'foreignKey' => 'product_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);*/
};
