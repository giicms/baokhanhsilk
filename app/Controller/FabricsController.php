<?php
class FabricsController extends AppController {
    public $name = 'Fabrics';

		function index() {
			$fabrics = $this->Fabric->find('all');
			$this->Fabric->read(null, $fb['Fabric']['collection_id']);// get collection list
			//pr($fabrics);
		 	$this->set('fabrics', $fabrics);
			$this->layout = 'admin_layout';
		 }
		 
		 /**
		  * add new record for <i>Collections</i> table
		  */
		 function add() {
			$this->layout = 'admin_layout';	
		 	$this->Fabric->set($this->data);
			if (!empty($this -> data) && $this->Fabric->validates()) {
				$this->Fabric->save($this -> data);
				$this->Session->setFlash("<div class='alert alert-success'>A new fabric has been added.</div>");
				$this->redirect(array('action' => 'index'));
			}
		}
		
		function edit($id = null){
			$this->Fabric->read(null, $id);
			$this->layout = 'admin_layout';
			$this->Fabric->id = $id;
			if( empty($this->data) ) {
				$this->data = $this->Fabric->read();
			}else{
				if($this->Fabric->save($this->data)){
					$this->Session->setFlash("<div class='alert alert-success'>Your fabric has been updated.</div>");
					$this->redirect(array('action'=>'index'));	
				}
			}
		}
		
		function delete($id){
			$this->layout = 'admin_layout';
			if($this->Fabric->delete($id)){
				$this->Session->setFlash("<div class='alert alert-success'>The fabric with id = " . $id . " has been deleted.</div>");
				$this->redirect(array('action' => 'index'));
			}
			
		}
 }
 ?>