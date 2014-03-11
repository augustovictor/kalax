<?php  

App::uses('AppController', 'Controller');

class UploadsController extends AppController {

	public function isAuthorized($user) {
		if (isset($this->action)) {
			return true;
		}

		return parent::isAuthorized($user);
	}

	public function beforeFilter() {
		parent::beforeFilter();
		$this->layout = 'admin';
	}

	public $components = array('Paginator');

	public function index() {
		$this->Upload->recursive = 0;
		$this->set('uploads', $this->Paginator->paginate());
	}
	// End index

	public function view($id = null) {
		if (!$this->Upload->exists($id)) {
			throw new NotFoundException(__('Invalid upload'));
		}
		$options = array('conditions' => array('Upload.' . $this->Upload->primaryKey => $id));
		$this->set('upload', $this->Upload->find('first', $options));
	}
	// End view

	public function add() {
		if ($this->request->is('post')) {
			$this->Upload->create();
			$data = $this->request->data['Upload'];

			if (!$data['upload_path']['name']) unset($data['upload_path']);

			if ($this->Upload->save($data)) {
				$this->Session->setFlash(__('The upload has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The upload could not be saved. Please, try again.'));
			}
		}
	}
	// End add

	public function edit($id = null) {
		if (!$this->Upload->exists($id)) {
			throw new NotFoundException(__('Invalid upload'));
		}
		if ($this->request->is(array('post', 'put'))) {
			
			$data = $this->request->data['Upload'];

			if (!$data['upload_path']['title']) unset($data['upload_path']);

			if ($this->Upload->save($data)) {
				$this->Session->setFlash(__('The upload has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The upload could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Upload.' . $this->Upload->primaryKey => $id));
			$this->request->data = $this->Upload->find('first', $options);
		}
	}
	// End edit

	public function delete($id = null) {
		$this->Upload->id = $id;
		if (!$this->Upload->exists()) {
			throw new NotFoundException(__('Invalid upload'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Upload->delete()) {
			$this->Session->setFlash(__('The upload has been deleted.'));
		} else {
			$this->Session->setFlash(__('The upload could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	// End delete
}
// UploadsController

?>