<?php
class Image extends AppModel {
	public $name = 'Image';
	public function findById($id) {
		$image = $this->find('first', array(
									'conditions' => array('id' => $id),
									'recursive' => -1
									)
							);
		return $image;
	}
}
