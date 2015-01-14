<?php
App::uses('AppController', 'Controller');
/**
 * Atestados Controller
 *
 * @property Atestado $Atestado
 * @property PaginatorComponent $Paginator
 */
class AtestadosController extends AppController {

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
		$this->Atestado->recursive = 0;
		$this->set('atestados', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Atestado->exists($id)) {
			throw new NotFoundException(__('Invalid atestado'));
		}
		$options = array('conditions' => array('Atestado.' . $this->Atestado->primaryKey => $id));
		$this->set('atestado', $this->Atestado->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Atestado->create();
			if ($this->Atestado->save($this->request->data)) {
				$this->Session->setFlash(__('The atestado has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The atestado could not be saved. Please, try again.'));
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
		if (!$this->Atestado->exists($id)) {
			throw new NotFoundException(__('Invalid atestado'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Atestado->save($this->request->data)) {
				$this->Session->setFlash(__('The atestado has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The atestado could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Atestado.' . $this->Atestado->primaryKey => $id));
			$this->request->data = $this->Atestado->find('first', $options);
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
		$this->Atestado->id = $id;
		if (!$this->Atestado->exists()) {
			throw new NotFoundException(__('Invalid atestado'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Atestado->delete()) {
			$this->Session->setFlash(__('The atestado has been deleted.'));
		} else {
			$this->Session->setFlash(__('The atestado could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
