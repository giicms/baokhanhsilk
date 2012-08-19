<?php
class DesignsController extends AppController {
	public $name = "Designs";
	public function admin_index() {
		$this->layout = "admin_layout";
	}
	
	public function admin_add() {
		$this->layout = "admin_layout";
		pr($this->data);
	}
}
