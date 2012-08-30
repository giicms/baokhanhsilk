<?php
// app/Model/Collection.php
class Design extends AppModel {
    public $name = 'Design';
		public $belongsTo = 'Category';
}