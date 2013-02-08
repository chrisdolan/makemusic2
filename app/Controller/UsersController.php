<?php
App::uses('AppController', 'Controller');


class UsersController extends AppController {

	public function beforeFilter() {
		parent::beforeFilter();
        $this->Auth->allow('login');
    }


    public function login() {
	    if ($this->Auth->login()) {
	 	   $this->redirect($this->Auth->redirect());
	    } else {
	   		if ($this->request->is('post')) {
	  	 		$this->Session->setFlash(__('Invalid username or password, try again'));
	   		}
	    }
    }


	public function logout() {
		$this->redirect($this->Auth->logout());
	}


	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}


	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}


	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
		$cities = $this->User->City->find('list');
		$this->set(compact('cities'));
	}


	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$cities = $this->User->City->find('list');
		$this->set(compact('cities'));
	}


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
}
