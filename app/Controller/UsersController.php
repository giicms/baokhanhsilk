<?php
class UsersController extends AppController {
	
	public function login() {
		pr("dkdkdkdk");
		if($this->request->is('post')) {
			pr('zyx');
			pr($_POST);
			if ($this->Auth->login()) {
				pr($_POST);
				pr("acde");
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
