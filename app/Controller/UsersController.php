<?php
App::uses('AppController', 'Controller');


class UsersController extends AppController {

	public function beforeFilter() {
		parent::beforeFilter();
        $this->Auth->allow('login', 'register');
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


	public function register() {
		if ($this->request->is('post')) {
			$this->User->contain();
			if ($this->User->find('first', array('conditions' => array('User.username' => $this->request->data['User']['username'] )))) {
				$this->User->invalidate('username', 'Sorry, this email address is already taken');
				$this->set('taken', true);
				return;
			}
			if ($this->User->find('first', array('conditions' => array(
				'User.screenname' => $this->request->data['User']['screenname'],
				'User.city_id' => Configure::read('city_id'),
			)))) {
				$this->User->invalidate('screenname', 'Sorry, this screenname is already taken');
				$this->set('taken', true);
				return;
			}

			$this->User->create();
			$this->request->data['User']['city_id'] = Configure::read('city_id');
			if ($this->User->save($this->request->data)) {
				$this->redirect('/');
			}
		}
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
