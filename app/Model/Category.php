<?php
// app/Model/Category.php
class Category extends AppModel {
    public $name = 'Category';
    public $actsAs = array('Tree');
		public $hasMany = array('Design' => array('className' => 'Design'));
}