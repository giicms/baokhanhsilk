<?php
App::uses('AuthComponent', 'Controller/Component');
class Collection extends AppModel {
	public $name = 'Collection';
	
	var $validate = array(
		/*'name' => array(
			'required'   => true,
			'allowEmpty' => false,
			'on'         => 'create',
			'message' => 'This field is required.'
		)*/
	);
  public $actsAs = array('Tree');
	public $hasMany = 'Design';
}

?>