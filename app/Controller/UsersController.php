<?php
class UsersController extends AppController {
	
	public function login() {
		
		if($this->request->is('post')) {
			pr('dldl');
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
	
	public function signin() {
		if(!empty($this->data)) {
			
		}
	}
	

}
