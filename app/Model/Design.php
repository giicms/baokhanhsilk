<?php
// app/Model/Collection.php
class Design extends AppModel {
    public $name = 'Design';
	public $belongsTo = 'Collection';
	public function findByCollectionId($collectionId) {
		$designs = $this->find('all', array(
											'conditions' => array('collection_id' => $collectionId),
											'order' => array('Design.id DESC')
					));
		return $designs;
	}
	public function getById($id) {
		$design = $this->find('first', array(
												'conditions' => array(
													'Design.id' => $id
												),
												'rescursive' => -1			
		));
		return $design;
	}
}