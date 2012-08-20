<?php
class CollectionsController extends AppController {
    public $name = 'Collections';

		function index() {
			$collections = $this->Collection->find('all');
		 	$this->set('collections', $collections);
			$this->layout = 'admin_layout';
		 }
		 
		 /**
		  * add new record for <i>Collections</i> table
		  */
		 function add() {
			$this->layout = 'admin_layout';	
		 	$this->Collection->set($this->data);
			if (!empty($this -> data) && $this->Collection->validates()) {
				$this->Collection->save($this -> data);
				$this->Session->setFlash("<div class='alert alert-success'>A new collection has been added.</div>");
				$this->redirect(array('action' => 'index'));
			}
		}
		
		function edit($id = null){
			$this->layout = 'admin_layout';
			$this->Collection->id = $id;
			if( empty($this->data) ) {
				$this->data = $this->Collection->read();
			}else{
				if($this->Collection->save($this->data)){
					$this->Session->setFlash("<div class='alert alert-success'>Your collection has been updated.</div>");
					$this->redirect(array('action'=>'index'));	
				}
			}
		}
		
		function delete($id){
			$this->layout = 'admin_layout';
			if($this->Collection->delete($id)){
				$this->Session->setFlash("<div class='alert alert-success'>The Collection with id = " . $id . " has been deleted.</div>");
				$this->redirect(array('action' => 'index'));
			}
			
		}
 }
 ?>