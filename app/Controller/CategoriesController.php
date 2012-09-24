<?php
class CategoriesController extends AppController {
    public $name = 'Categories';

		function index() {
			$Categorylist = $this->Category->generateTreeList(null,null,null," - ");
		 	$this->set(compact('Categorylist'));
		 }
		function add() {
			if(!empty($this->data)) {
				$this->Category->save($this->data);
				$this->redirect(array( 'action' => 'index'));
			} else {
				$parents[0] = '[ No Parent ]';
				$Categorylist = $this->Category->generateTreeList(null, null, null, " - ");
				if($Categorylist) {
					foreach ( $Categorylist as $key=>$value ){
						$parent[$key] = $value;
					}
					$this->set(compact('parents'));
				}
			}
		}
		
		function edit($id = null) {
			if( !empty($this->data) ) {
				if ( $this->Category->save($this->data) == false ) {
					$this->Session->setFlash('Error saving Category. ');
					$this->redirect( array('action' => 'index') );
				} else {
					if ( $id == null ) die("No ID received");
					$this->data = $this->Category->read(null, $id);
					$parents[0] = "[ No Parent ]";
					$Categorylist = $this->Category->generateTreeList(null, null, null, " - ");
					if ( $Categorylist ) {
						foreach ( $Categorylist as $key=>$value ){
							$parent[$key] = $value;
						}
					}
					$this->set(compact('parents'));
				}
			}
		}
		function delete($id = null) {
			if( $id == null ){
				die("No ID received");
			}
			$this->Category->id = $id;
			if($this->Category->delete() == false) {
				$this->Session->setFlash('The Category could not be deleted.');
			}
			$this->redirect( array('action'=>'index') );
		}
		
		public function moveup($id = null, $delta = null) {
		    $this->Category->id = $id;
		    if (!$this->Category->exists()) {
		       throw new NotFoundException(__('Invalid category'));
		    }
		
		    if ($delta > 0) {
		        $this->Category->moveUp($this->Category->id, abs($delta));
		    } else {
		        $this->Session->setFlash('Please provide a number of positions the category should be moved up.');
		    }
		
		    $this->redirect(array('action' => 'index'), null, true);
		}
		
		public function movedown($id = null, $delta = null) {
		    $this->Category->id = $id;
		    if (!$this->Category->exists()) {
		       throw new NotFoundException(__('Invalid category'));
		    }
		
		    if ($delta > 0) {
		        $this->Category->moveDown($this->Category->id, abs($delta));
		    } else {
		        $this->Session->setFlash('Please provide the number of positions the field should be moved down.');
		    }
		
		    $this->redirect(array('action' => 'index'), null, true);
		}
				
		function removeNode($id=null) {
			if($id== null) {
				die("No Id received");
			}
			if($this->Category->removeFromTree($id) == false) {
				$this->Session->setFlash('The Category could not be removed. ');
			}
			$this->redirect( array('action'=>'index') );
		}
		
		
		
		// admin
	function admin_index() {
		$this->layout = "admin_layout";
		$Categorylist = $this->Category->generateTreeList(null,null,null," - ");
	 	$this->set(compact('Categorylist'));
	 }
		
	function admin_add() {
			$this->layout = "admin_layout";
			$this->Session->setFlash('');
			if(!empty($this->data)) {
				$parent_id = $this->data['Category']['parent_id'];
				//$parent = $this->Category->getById($parent_id, true);
				$this->Category->save($this->data);
				$this->redirect(array( 'action' => 'admin_index'));
			} else {
				$parents[0] = '[ Top ]';
				$Categorylist = $this->Category->generateTreeList(null, null, null, " - ");
				if($Categorylist) {
					foreach ( $Categorylist as $key=>$value ){
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
				if ( $this->Category->save($this->data) == false ){
					$this->Session->setFlash('Can not edit Category');
				} 
				//$this->redirect(array('action' => 'admin_index'));	
			} else {
				if( $id == null ) die("No Id received");
				$this->data = $this->Category->read(null, $id);
				
				$parents[0] = " [ Top ] ";
				$Categorylist = $this->Category->generateTreeList(null, null, null, " - ");
				if( $Categorylist ) {
					foreach ( $Categorylist as $key => $value ) {
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
		$this->Category->id=$id;
		if($this->Category->removeFromTree($id,true)==false)
		$this->Session->setFlash('Không thể xóa danh mục.');
		$this->Session->setFlash('<p class="info" id="success"><span class="info_inner">Đã xóa danh mục '.$ten.'</span></p>');
	}
		
		
		
}