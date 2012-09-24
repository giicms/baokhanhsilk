<?php
App::uses('AuthComponent', 'Controller/Component');
class Collection extends AppModel {
	public $name = 'Collection';
	public $actsAs = array('Tree');
	public $hasMany = array('Design' => array('className' => 'Design'));
	/*
	var $validate = array(
		'name' => array(
			'required' => true,
			'allowEmpty' => false,
			'rule' => array('minLength' => 5),
			'message' => 'This field is required.'
		)
	);
	*/
	public function getParentNode() {
		$collections = $this->find('all', array(
											'conditions' => array('parent_id' => 0),
											'order' => array('Collection.id DESC')
		));
		return $collections;
	}
	
	public function getChildCollection($parent_id) {
		$collections = $this->find('all', array(
											'conditions' => array('parent_id' => $parent_id),
											'order' => array('Collection.name DESC')
		));
		return $collections;
	}
}

?>
