<?php
App::uses('AppController', 'Controller');

App::uses('CakeTime', 'Utility');
/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {

/**
 * admin_index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$this->paginate = array('order' => array('User.id' => 'DESC'));
		$this->set('users', $this->paginate());
		$this->set(
			array(
				'title_for_layout' => 'Usuarios'
			)
		);
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('El usuario no existe'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			$this->request->data['User']['password'] = AuthComponent::password($this->request->data['User']['password']);
			$this->request->data['User']['created'] = CakeTime::format('Y-m-d h:i:s', time());
			$this->request->data['User']['user_created'] = $this->Auth->user('id');
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('El usuario ha sido guardado correctamente'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El usuario no fue guardado. Por favor, Intente nuevamente.'));
			}
		}
		$perfils = $this->User->Perfil->find('list');
		$sucursales = $this->User->Sucursale->find('list');
		$this->set(compact('perfils', 'sucursales'));
		$this->set(
			array(
				'title_for_layout' => 'Usuarios'
			)
		);

	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('El usuario no existe'));
		}

		if ($this->request->is('post') || $this->request->is('put')) {
			$reg = $this->User->find(
				'first',
				array(
					'conditions' => array(
						'User.id' => $id
					)
				)
			);

			if ($this->request->data['User']['password'] != $reg['User']['password'])
				$this->request->data['User']['password'] = AuthComponent::password($this->request->data['User']['password']);

			$this->request->data['User']['modified'] = CakeTime::format('Y-m-d h:i:s', time());
			$this->request->data['User']['user_modified'] = $this->Auth->user('id');
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('El usuario ha sido guardado correctamente'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El usuario no fue guardado. Por favor, Intente nuevamente.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$perfils = $this->User->Perfil->find('list');
		$sucursales = $this->User->Sucursale->find('list');
		$this->set(compact('perfils', 'sucursales'));
		$this->set(
			array(
				'title_for_layout' => 'Usuarios'
			)
		);
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('User deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

	public function home() {
		$this->set(array('title_for_layout' => 'Administrador de NicaraguitaTours'));
	}

	public function login() {

		$this->layout = 'login';

		if ($this->request->is('post')) {

			if ($this->Auth->login()) {

				$this->redirect($this->Auth->redirect());

			} else {

				$this->Session->setFlash(__('Usuario o Contraseña Inválidos'));

			}

		}

	}

	public function logout() {

		$this->redirect($this->Auth->logout());

	}

	public function beforeFilter() {
        parent::beforeFilter();
        //if ($this->params['admin'] == 1) {
        $this->layout = 'admin';
    }
}
