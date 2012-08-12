<?php
class UsersController extends AppController {
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('*');
	}
	public function login() {
		if($this->request->is('post')) {
			if ($this->Auth->login()) {
				$this->redirect($this->Auth->redirect());
				
			} else {
				$this->Session->setFlash('Your username or passwordk was incorrect');
			}
		}
	}
	
	public function logout() {
		// leave empty for now
	}
	

}
