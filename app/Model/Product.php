<?php
App::uses('AppModel', 'Model');
/**
 * Product Model
 *
 * @property Category $Category
 */
class Product extends AppModel {

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
	public $displayField = 'name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'position' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'visible' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'description' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'category_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'image_path' => array(
			'uploadError' => array(
				'rule' => 'uploadError',
				'message' => 'The image upload failed.',
				'allowEmpty' => true,
			),	
			'mimeType' => array(
				'rule' => array('mimeType', array('image/gif', 'image/png', 'image/jpg', 'image/jpeg')),
				'message' => 'Please only upload images (gif, png, jpg, and jpeg).',
				'allowEmpty' => true,
			),
			'fileSize' => array(
				'rule' => array('fileSize', '<=', '5MB'),	
				'message' => 'Image must be less than 5MB.',
				'allowEmpty' => true,
			),
			'processImageUpload' => array(
				'rule' => 'processImageUpload',
				'message' => 'Unable to process image.',
				'allowEmpty' => true,
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Category' => array(
			'className' => 'Category',
			'foreignKey' => 'category_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public function processImageUpload($check = array()) {
		if (!is_uploaded_file($check['image_path']['tmp_name'])) {
			return false;
		}
		if (!move_uploaded_file($check['image_path']['tmp_name'], WWW_ROOT . 'img' . DS . 'uploads' . DS . $check['image_path']['name'])) {
			return false;
		}
		$this->data['Product']['image_path'] = 'uploads' . DS . $check['image_path']['name'];
		return true;
	}
	// End processImage
}
