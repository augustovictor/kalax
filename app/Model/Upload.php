<?php  

App::uses('AppModel', 'Model');

class Upload extends AppModel {
	public $useDbConfig = 'default';

	public $displayField = 'title';

	public $validate = array(
		'title' => array(
			'not_empty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'upload_path' => array(
			'uploadError' => array(
				'rule' => 'uploadError',
				'message' => 'The upload failed.',
				'allowEmpty' => true,
			),
			// 'mimeType' => array(
			// 	'rule' => array('mimeType', array()),
			// 	'message' => 'Upload not allowed.',
			// 	'allowEmpty' => true,
			// ),
			// 'fileSize' => array(
			// 	'rule' => array('fileSize', '<=', '100000MB'),
			// 	'message' => 'Image must be less than 100000 MB.',
			// 	'allowEmpty' => true,
			// ),
			'processUpload' => array(
				'rule' => 'processUpload',
				'message' => 'Unable to process the upload.',
				'allowEmpty' => true,
			),
		),
		'upload_description' => array(
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
	// End validation

	public function processUpload($check = array()) {
		if(!is_uploaded_file($check['upload_path']['tmp_name'])) return false;
		if(!move_uploaded_file($check['upload_path']['tmp_name'], WWW_ROOT . 'img' . DS . 'uploads' . DS . $check['upload_path']['name'])) return false;
		$this->data[$this->alias]['upload_path'] = 'uploads' . DS . $check['upload_path']['name'];
		return true;
	}
	// End processUpload

}
// End Upload

?>