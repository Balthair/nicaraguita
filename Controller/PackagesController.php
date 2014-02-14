<?php
App::uses('AppController', 'Controller');
/**
 * Packages Controller
 *
 * @property Package $Package
 */
class PackagesController extends AppController {

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Package->recursive = 0;
		$this->set('packages', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Package->exists($id)) {
			throw new NotFoundException(__('Invalid package'));
		}
		$options = array('conditions' => array('Package.' . $this->Package->primaryKey => $id));
		$this->set('package', $this->Package->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Package->create();
			$this->request->data['Edition']['permalink'] = $this->Funciones->generatePermalink($this->request->data['Edition']['nombre']);
			$this->request->data['Edition']['user_id'] = $this->Auth->user('id');
			$this->Package->id = @$this->Package->find(
				'first',
				array(
					'conditions'=>array('Package.user_id'=>$this->Auth->user('id'),'Package.nombre'=>''),
					'fields' => 'Package.id'
				)
			);
			if ($this->Package->save($this->request->data)) {
				$this->Session->setFlash('Se guardo el paquete','default',array('class'=>'bg-primary'));
				$this->redirect(array('action' => 'edit/'.$this->Package->id));
			} else {
				$this->Session->setFlash(__('No se pudo guardar el paquete, Por Favor intente de nuevo.'));
			}
		} else {
			$this->Package->deleteAll(
	    		array(
	    			'Package.nombre' => '',
					'user_id' => $this->Auth->user('id')
	    		)
	    	);
		}
		$categorias = $this->Package->Categoria->find('list');
		$users = $this->Package->User->find('list');
		$this->set(compact('categorias', 'users'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Package->exists($id)) {
			throw new NotFoundException(__('Invalid package'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Package->save($this->request->data)) {
				$this->Session->setFlash(__('The package has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The package could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Package.' . $this->Package->primaryKey => $id));
			$this->request->data = $this->Package->find('first', $options);
		}
		$categorias = $this->Package->Categoria->find('list');
		$users = $this->Package->User->find('list');
		$this->set(compact('categorias', 'users'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Package->id = $id;
		if (!$this->Package->exists()) {
			throw new NotFoundException(__('Invalid package'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Package->delete()) {
			$this->Session->setFlash(__('Package deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Package was not deleted'));
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
