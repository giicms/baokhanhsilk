<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {

/**
 * Controller name
 *
 * @var string
 */
	public $name = 'Pages';

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array();

/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 */
	public function display() {
		$path = func_get_args();

		$count = count($path);
		if (!$count) {
			$this->redirect('/');
		}
		$page = $subpage = $title_for_layout = null;

		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title_for_layout = Inflector::humanize($path[$count - 1]);
		}
		$this->set(compact('page', 'subpage', 'title_for_layout'));
		$this->render(implode('/', $path));
	}
	public function aboutUs() {
		//$this->layout = "home_layout";
	}
	
	public function contactUs() {
		
	}
	
	public function order_online() {
		
	}
	
	public function farbics() {
		
	}
	public function admin_index() {
		$this->layout = "admin_layout";

	}
	public function collections() {

	}
	
	public function order_step() {
		$this->layout = "default";
		$collectionId = $this->passedArgs[0];
		App::import('model','Design');
		App::import('model','Collection');
		App::import('model', 'Style');
		App::import('model', 'Category');
		$designModel = new Design();
		$designs = $designModel->findByCollectionId($collectionId);
		$this->set('designs',$designs);
		// cách làm là như ri: kiểm tra cái collection đó thuộc vô cái mô
		//1 xem collection la Men hay women
		$collectionModel = new Collection();
		$collection = $collectionModel->findById($collectionId);
		$parentId = $collection['Collection']['parent_id'];
		$collectionParent = $collectionModel->findById($parentId);
		$collectionName = $collectionParent['Collection']['name'];
		//2 Neu ma collectionName = Men thi loc trong bang Style lay nhung Style la co' type la 1
		// collectionName = Women thi laays syte type= 0
		$styleModel = new Style();
		$styles ="";
		$type = ""; 		// bien nay dung de xac dinh collection la Men hay Women
		
		if($collectionName == "Men") {
			$styles = $styleModel->findAllByType('1');
			$type = "1";
		} else {
			$styles = $styleModel->findAllByType('0');
			$type = "0";
		}
		$this->set('styles',$styles);
		
		// Toi phan fabric roi
		// lay ra category ne
		$categoryModel = new Category();
		$categories = $categoryModel->find('all');
		$this->set('categories', $categories);
		$this->set('type', $type);
	}
}
