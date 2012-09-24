<?php
App::uses('AuthComponent', 'Controller/Component');
class Fabric extends AppModel {
	public $name = 'Fabric';
	
	var $belongsTo = array('Category' => array('className' => 'Category'));
	
	/* Tam thoi comment validate lai
	 * tuan sau xu ly no 
	var $validate = array(
			'code' => array(
				'required' => true,
				'allowEmpty' => false,
				'rule' => array('minLength' => 255),
				'message' => 'This field is required.'
			),
			'price' => array(
				'rule' => '/^[0-9]*\\.?[0-9]+$/',
				'message' => 'This must be a positive decimal number'  
			)
		);*/
	public function getById($id) {
		$fabric = $this->find('first', array(
												'conditions' => array(
													'Fabric.id' => $id
												),
												'rescursive' => -1			
		));
		return $fabric ;
	}
}

?>