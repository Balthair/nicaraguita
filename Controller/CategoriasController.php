<?php
App::uses('AppController', 'Controller');
/**
 * Categorias Controller
 *
 * @property Categoria $Categoria
 */
class CategoriasController extends AppController {

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Categoria->recursive = 0;
		$this->set('categorias', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Categoria->exists($id)) {
			throw new NotFoundException(__('Invalid categoria'));
		}
		$options = array('conditions' => array('Categoria.' . $this->Categoria->primaryKey => $id));
		$this->set('categoria', $this->Categoria->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Categoria->create();
			$this->request->data['Categoria']['permalink'] = $this->Funciones->generatePermalink($this->request->data['Categoria']['nombre']);
			$this->request->data['Categoria']['user_id'] = $this->Auth->user('id');
			$this->Categoria->id = @$this->Categoria->find(
				'first',
				array(
					'conditions'=>array('Categoria.user_id'=>$this->Auth->user('id'),'Categoria.nombre'=>''),
					'fields' => 'Categoria.id'
				)
			);
			if ($this->Categoria->save($this->request->data)) {
				$this->Session->setFlash('Se ha agregado la categoria','default',array('class'=>'bg-primary'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se pudo guardar la categoria, Por Favor intente de nuevo.'));
			}
		} else {
			$this->Categoria->deleteAll(
	    		array(
	    			'Categoria.nombre' => '',
					'user_id' => $this->Auth->user('id')
	    		)
	    	);
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Categoria->exists($id)) {
			throw new NotFoundException(__('Invalid categoria'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Categoria->save($this->request->data)) {
				$this->Session->setFlash(__('The categoria has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The categoria could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Categoria.' . $this->Categoria->primaryKey => $id));
			$this->request->data = $this->Categoria->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Categoria->id = $id;
		if (!$this->Categoria->exists()) {
			throw new NotFoundException(__('Invalid categoria'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Categoria->delete()) {
			$this->Session->setFlash(__('Categoria deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Categoria was not deleted'));
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
