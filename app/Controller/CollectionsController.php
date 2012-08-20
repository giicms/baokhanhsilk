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

	function admin_index() {
		$this->layout = "admin_layout";
		$CollectionList = $this->Collection->generateTreeList(null,null,null," - ");
	 	$this->set(compact('CollectionList'));
	}
	function admin_add() {
			$this->layout = "admin_layout";
			$this->Session->setFlash('');
			if(!empty($this->data)) {
				
				$parent_id = $this->data['Collection']['parent_id'];
				//$parent = $this->Collection->getById($parent_id, true);
				$this->Collection->save($this->data);
				$this->redirect(array( 'action' => 'admin_index'));
			} else {
				$parents[0] = '[ Top ]';
				$Collectionlist = $this->Collection->generateTreeList(null, null, null, " - ");
				if($Collectionlist) {
					foreach ( $Collectionlist as $key=>$value ){
						$parents[$key] = $value;
					}
					$this->set(compact('parents'));
				}
			}
	}
	function admin_edit($id = null) {
			$this->layout = 'admin_layout';
			if ( !empty($this->data) ) {
				pr($this->data);
				if ( $this->Collection->save($this->data) == false ){
					$this->Session->setFlash('Can not edit collection');
				} 
				//$this->redirect(array('action' => 'admin_index'));	
			} else {
				if( $id == null ) die("No Id received");
				$this->data = $this->Collection->read(null, $id);
				
				$parents[0] = " [ Top ] ";
				$Collectionlist = $this->Collection->generateTreeList(null, null, null, " - ");
				if( $Collectionlist ) {
					foreach ( $Collectionlist as $key => $value ) {
						$parents[$key] = $value;
					}
					$this->set(compact('parents'));
				}
			}
	}
	
	function admin_delete() {
		$id = $_POST['id'];
		$ten = $_POST['value'];
		if($id==null)
			die("No ID received");
		$this->Collection->id=$id;
		if($this->Collection->removeFromTree($id,true)==false)
		$this->Session->setFlash('Không thể xóa danh mục.');
		$this->Session->setFlash('Đã xóa danh mục '.$ten);
	}
 }
 ?>