<?php
class StylesController extends AppController {
	 public $name = 'Styles';
	 
	 public function admin_index() {
			$this->layout = "admin_layout";
			$styles = $this->Style->find('all');
			//$this->Fabric->read(null, $fabrics['Fabric']['collection_id']);// get collection list
			$this->set('styles', $styles);
	 }
	 
	 public function admin_add() {
	 		$this->layout = "admin_layout";
			$this->Session->setFlash('');
			if(!empty($this->request->data)) {
				$this->Style->save($this->request->data);
				$this->Session->setFlash("<div class='alert alert-success'>Add Style success</div>");
				$this->redirect(array( 'action' => 'admin_index'));
			} else {
				
			}
	 }
	 
	 public function admin_edit($id = null) {
	 		if($id == null) {
				$this->redirect(array('action' => 'index'));
			}	
	 		$this->layout = "admin_layout";
			$this->Style->id = $id;
			if ( !empty($this->request->data) ) {
				if( $this->Style->save($this->request->data) ) {
					$this->Session->setFlash('Your Style has been update');
					$this->redirect(array('action '=> 'index'));
				} else {
					$this->Session->setFlash('Unable to update this Fabric');
				}
			} else {
				$this->request->data = $this->Style->findById($id); 
			}
	 }
	 
	function admin_delete($id){
			if($this->Style->delete($id)){
				$this->Session->setFlash("<div class='alert alert-success'>The fabric with id = " . $id . " has been deleted.</div>");
				$this->redirect(array('action' => 'index'));
			}
		
	}
		

}
