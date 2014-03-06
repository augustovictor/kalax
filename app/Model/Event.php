<?php
App::uses('AppModel', 'Model');
/**
 * Event Model
 *
 */
class Event extends AppModel {

/**
 * Use database config
 *
 * @var string
 */
	public $useDbConfig = 'default';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'event_position' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'event_pic_name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'event_path' => array(
			'uploadError' => array(
				'rule' => 'uploadError',
				'message' => 'The image upload failed.',
				'allowEmpty' => true,
			),
			'mimeType' => array(
				'rule' => array('mimeType', array('image/gif', 'image/png', 'image/jpg', 'image/jpeg')),
				'message' => 'Please upload only images(gif, png, jpg, and jpeg)',
				'allowEmpty' => true,
			),
			'fileSize' => array(
				'rule' => array('fileSize', '<=', '5MB'),
				'message' => 'Image must be less than 5MB.',
				'allowEmpty' => true,
			),
			'processImageUpload' => array(
				'rule' => 'processImageUpload',
				'message' => 'Unable to process the image.',
				'allowEmpty' => true,
			),
		),
		'event_description' => array(
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

	public function processImageUpload($check = array()) {
		if(!is_uploaded_file($check['event_path']['tmp_name'])) return false;
		if(!move_uploaded_file($check['event_path']['tmp_name'], WWW_ROOT . 'img' . DS . 'uploads' . DS . $check['event_path']['name'])) return false;
		$this->data[$this->alias]['event_path'] = 'uploads' . DS . $check['event_path']['name'];
		return true;
	}
	// End processImageUpload

}
