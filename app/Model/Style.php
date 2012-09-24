<?php
class Style extends AppModel {
	public $name = 'Style';
	public function findById($id) {
		$style = $this->find('first', array(
									'conditions' => array('id' => $id),
									'recursive' => -1
									)
							);
		return $style;
	}
}
