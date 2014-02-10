<?php
App::uses('AppModel', 'Model');
/**
 * Qualification Model
 *
 */
class Qualification extends AppModel {

/**
 * Use database config
 *
 * @var string
 */
	public $useDbConfig = 'forbaking';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'qualification_position';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'qualification_position' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'qualification_visible' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'qualification_path' => array(
			'uploadError' => array(
				'rule' => 'uploadError',
				'message' => 'Unable to upload image.',
				'allowEmpty' => true,
			),
			'mimeType' => array(
				'rule' => array('mimeType', array('image/gif', 'image/png', 'image/jpg', 'image/jpeg')),
				'message' => 'Please update only images (gif, png, jpg, and jpeg)',
				'allowEmpty' => true,
			),
			'fileSize' => array(
				'rule' => array('fileSize', '<=', '5MB'),
				'message' => 'Image must be less than 5MB.',
				'allowEmpty' => true,
			),
			'processUploadImage' => array(
				'rule' => 'processUploadImage',
				'message' => 'Unable to process the image.',
				'allowEmpty' => true,
			),
		),
		'qualification_name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'qualification_role' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'qualification_description' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	public function processUploadImage($check = array()) {
		if(!is_uploaded_file($check['qualification_path']['tmp_name'])) return false;
		if(!move_uploaded_file($check['qualification_path']['tmp_name'], WWW_ROOT . 'img' . DS . 'uploads' . DS . $check['qualification_path']['name'])) return false;
		$this->data[$this->alias]['qualification_path'] = 'uploads' . DS . $check['qualification_path']['name'];
		return true;

	}
	// End processUploadImage
	
}
