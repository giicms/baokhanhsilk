<?php
class UsersController extends AppController {
	var $name = "Users"; 
    var $helpers = array('Html', 'Form');
//	var $role = null;
	var $username = null; 
	var $password = null;
	var $queryStr = null;
     
    function index() 
    { 
         
    } 
    
	function beforeFilter() {
      $this->Auth->allow('signin');
	  $this->Auth->allow('logout');
  	}
	

	//Vinh.Le
	function login() {
		$this->set('error',false);

		if ( !empty($this->request->data) ) {
			$user = $this->User->findByUsername($this->request->data['username']);  // a viet bi nham, cai' ham ni han tra ve ri neh
			$username = $user['User']['username'];
			$password = $user['User']['password'];

			if ( $username == $this->request->data['username'] && $password == md5($this->request->data['password']) ) {
				// set "last_login" session equal to users last login time
				//$this->Session->write('last_login', $results['User']['last_login']);
				//$results['User']['last_login'] = date("Y-m-d H:i:s");
				// save last_login date
				//$this->User->save($results);
				
				//$this->Session->write('user', $this->request->data['username']);
	
				//Check users role 
				$this->set('authUser', $this->user);
				$this->checkRole($username);
	
			} else {
				$this->set('error',true);
				// login data is wrong, redirect to login page
				//$this->Session->setFlash('Wrong username / password. Please try again.');
				//$this->redirect('/users/login');
			}
		}
	}
	
	public function checkRole($username){
		//$queryStr = $this->User->query("SELECT role FROM users where username='".$username."';");
		$conditions = array("User.username" => $username);
		$queryStr = $this->User->find('all', array('conditions' => $conditions));
		//pr($queryStr[0]['User']['role']);
		if($queryStr[0]['User']['role'] == "Admin"){
			//$this->redirect(array('controller'=>'users','action'=>'admin/index'),null,true);
			echo("This is Role admin ...");
		}
		else{
			echo("This is Role members ...");
		}
	}

	public function logout() {
		$this->Session->destroy('user');
		$this->redirect($this->Auth->logout());
	}
	
	public function signin() {
		if(!empty($this->data)) {        
			//$this->User->create(); dong ni ko can
			$this->data['role'] = 'Members';
			$this->data['roleid'] = 2;

			if($this->User->save($this->data))
			{
				$this->Session->write('user', $this->data['User']['username']);
				$this->Auth->login($this->data);
				$this->redirect('/');
				//echo("Ban da dang ky thanh cong");
			}
			else{
				$this->redirect(array('action' => 'login'));
			}
		}
	}
	
}

