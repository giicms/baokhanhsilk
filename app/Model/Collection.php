<?php
App::uses('AuthComponent', 'Controller/Component');
class Collection extends AppModel {
	public $name = 'Collection';
	
	var $validate = array(
		'name' => array(
			'required' => true,
			'allowEmpty' => false,
			'rule' => array('minLength' => 255),
			'message' => 'This field is required.'
		)
	);
  public $actsAs = array('Tree');
	public $hasMany = 'Design';
}

?>