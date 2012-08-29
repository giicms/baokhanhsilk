<?php
	App::import('model','Collection');
	$collectionModel = new Collection();
	$Collectionlist = $collectionModel->generateTreeList(null, null, null, "");
	pr($Collectionlist);
	
	echo $this->Html->link('Back',array('action'=>'index'));
	
	echo $this->Form->create('Fabric', array('url'=>array('controller'=>'Fabrics', 'action'=>'add'), 'class'=>'well'));
	echo $this->Form->input('code',array('label'=>'Fabric Code', 'div' => false, 'class' => 'span3', 'placeholder' => 'Type fabric code'));
	echo $this->Form->input('description',array('label'=>'Description', 'div' => false, 'class' => 'span3', 'placeholder' => 'Type description'));
	echo $this->Form->input('price',array('label'=>'Price', 'div' => false, 'class' => 'span3', 'value' => '0'));
	
	$options = array('0' => '--Select Collection--');
	
	foreach($Collectionlist as $key => $value){
		$options[$key] = $value;
	}
	//pr($options);
		
	echo("</br>");
	echo $this->Form->select('collection_id', $options, array('empty' => false, 'escape' => false, 'default'=>'0', 'label' => 'Select Collection', 'div'=>false, 'class' => 'span3'));
	echo("</br>");
	echo $this->Form->input('file', array(
		'type' => 'file', 
		'label' => false, 'div' => false,
		'class' => 'fileUpload', 
	//	'multiple' => 'multiple'
	));	
?>
	<label/>
<?php
	echo $this->Form->button('Add', array('type' => 'submit', 'id' => 'px-submit', 'class' => 'btn'));
	echo $this->Form->button('Clear', array('type' => 'reset', 'id' => 'px-clear', 'class' => 'btn'));
	echo $this->Form->end();
?>
