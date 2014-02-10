<?php
App::uses('AppController', 'Controller');
/**
 * Qualifications Controller
 *
 * @property Qualification $Qualification
 * @property PaginatorComponent $Paginator
 */
class QualificationsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Qualification->recursive = 0;
		$this->set('qualifications', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Qualification->exists($id)) {
			throw new NotFoundException(__('Invalid qualification'));
		}
		$options = array('conditions' => array('Qualification.' . $this->Qualification->primaryKey => $id));
		$this->set('qualification', $this->Qualification->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Qualification->create();

			$data = $this->request->data['Qualification'];

			if(!$data['qualification_path']['name']) unset($data['qualification_path']);

			if ($this->Qualification->save($data)) {
				$this->Session->setFlash(__('The qualification has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The qualification could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Qualification->exists($id)) {
			throw new NotFoundException(__('Invalid qualification'));
		}
		if ($this->request->is(array('post', 'put'))) {

			$data = $this->request->data['Qualification'];

			if(!$data['qualification_path']['name']) unset($data['qualification_path']);

			if ($this->Qualification->save($data)) {
				$this->Session->setFlash(__('The qualification has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The qualification could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Qualification.' . $this->Qualification->primaryKey => $id));
			$this->request->data = $this->Qualification->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Qualification->id = $id;
		if (!$this->Qualification->exists()) {
			throw new NotFoundException(__('Invalid qualification'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Qualification->delete()) {
			$this->Session->setFlash(__('The qualification has been deleted.'));
		} else {
			$this->Session->setFlash(__('The qualification could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
