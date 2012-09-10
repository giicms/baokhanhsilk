<?php 
	App::import('model','Category');
	$categoryModel = new Category();
	$categoryList = $categoryModel->generateTreeList(null, null, null, "-");
	
?>

<div class="container-fluid">
	<div class="row-fluid">
		<div class="span2 min-col">
			<h3>CATEGORIES</h3>
			<ul>
			<?php foreach($categoryList as $key => $value){ ?>
				<li><?= $this->Html->link($value, "/#/" . $key) ?></li>				
			<?php } ?>
			</ul>
		</div>
		<div class="span10">
		  Body content of category
		</div>
	</div>
</div>