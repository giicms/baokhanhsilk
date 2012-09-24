<?php
class StyleDetail extends AppModel {
	public $name = 'StyleDetail';
	
	var $belongsTo = array('Style' => array('className' => 'Style'));

	public function getById($id) {
		$styledetail = $this->find('first', array(
												'conditions' => array(
													'StyleDetail.id' => $id
												),
												'rescursive' => -1			
		));
		return $styledetail ;
	}
}

?>