<?php
class CollectionsController extends AppController {
    public $name = 'Collections';

		function index() {
			$collections = $this->Collection->find('all');
		 	$this->set('collections', $collections);
		 }
		 
		 /**
		  * add new record for <i>Collections</i> table
		  */
		 function add() {
		 	$this->Collection->set($this->data);
	
			if (!empty($this -> data) && $this->Collection->validates()) {
				$this->Collection->save($this -> data);
				$this->Session->setFlash('A new collection has been added.');
				$this->redirect(array('action' => 'index'));
			}else {
				echo "empty data";
			}
		}
		
		function edit($id = null){
			$this->Collection->id = $id;
			if( empty($this->data) ) {
				$this->data = $this->Collection->read();
			}else{
				if($this->Collection->save($this->data)){
					$this->Session->setFlash('Your collection has been updated.');
					$this->redirect(array('action'=>'index'));	
				}
			}
		}
		
		function delete($id){
			if($this->Collection->delete($id)){
				$this->Session->setFlash('The Collection with id = ' . $id . ' has been deleted.');
				$this->redirect(array('action' => 'index'));
			}
			
		}
 }
 ?>