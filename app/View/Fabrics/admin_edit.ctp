<?php
App::import('model','Collection');
App::import('model','Image');
$collectionModel = new Collection();
$imgModel = new Image();
$Collectionlist = $collectionModel->generateTreeList(null, null, null, "");
	
echo $this->Html->link('Back',array('action'=>'index'));

echo $this->Form->create('Fabric', array('action' => 'edit', 'class' => 'well'));

echo $this->Form->input('code',array('label'=>'Fabric Code', 'div' => false, 'class' => 'span3', 'placeholder' => 'Type fabric code'));
echo $this->Form->input('description',array('label'=>'Description', 'div' => false, 'class' => 'span3', 'placeholder' => 'Type description'));
echo $this->Form->input('price',array('label'=>'Price', 'div' => false, 'class' => 'span3', 'placeholder' => 'price'));

$options = array('0' => '--Select Collection--');
	
foreach($Collectionlist as $key => $value){
	$options[$key] = $value;
}

echo("</br>");
echo $this->Form->select('collection_id', $options, array('empty' => false, 'escape' => false, 'label' => 'Select Collection', 'div'=>false, 'class' => 'span3'));
echo("</br>");

//get image url
$fabricImgId = $this->params->data['Fabric']['image_id'];

$imgItem = $imgModel->findById($fabricImgId);

echo $this->Html->image($imgItem['Image']['url'], array('alt'=>'fabric pattern'));

echo("</br>");
echo $this->Form->input('file', array(
	'type' => 'file', 
	'label' => false, 'div' => false,
	'class' => 'fileUpload', 
));

echo $this->Form->hidden('id');
echo("</br>");
echo $this->Form->button('Update', array('type' => 'submit', 'class' => 'btn'));
echo $this->Form->end();

?>