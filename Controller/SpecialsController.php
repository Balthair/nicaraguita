<?php
App::uses('AppController', 'Controller');
/**
 * Specials Controller
 *
 * @property Special $Special
 */
class SpecialsController extends AppController {

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Special->recursive = 0;
		$this->set('specials', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Special->exists($id)) {
			throw new NotFoundException(__('Invalid special'));
		}
		$options = array('conditions' => array('Special.' . $this->Special->primaryKey => $id));
		$this->set('special', $this->Special->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Special->create();
			$this->Special->id = @$this->Special->find(
				'first',
				array(
					'conditions'=>array('Special.user_id'=>$this->Auth->user('id'),'Special.titulo'=>''),
					'fields' => 'Special.id'
				)
			);
			if ($this->Special->save($this->request->data)) {
				$this->Session->setFlash(__('The special has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The special could not be saved. Please, try again.'));
			}
		} else {
				$this->Special->deleteAll(
	    		array(
	    			'Special.titulo' => '',
					'user_id' => $this->Auth->user('id')
	    		)
	    	);
		}
		$users = $this->Special->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Special->exists($id)) {
			throw new NotFoundException(__('Invalid special'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Special->save($this->request->data)) {
				$this->Session->setFlash(__('The special has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The special could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Special.' . $this->Special->primaryKey => $id));
			$this->request->data = $this->Special->find('first', $options);
		}
		$users = $this->Special->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Special->id = $id;
		if (!$this->Special->exists()) {
			throw new NotFoundException(__('Invalid special'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Special->delete()) {
			$this->Session->setFlash(__('Special deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Special was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

	public function beforeFilter() {
        parent::beforeFilter();
        if ($this->params['admin'] == 1) {
        	$this->layout = 'admin';
        } 
        $this->Auth->allow('index', 'view'); // Letting users register themselves
    }
}
