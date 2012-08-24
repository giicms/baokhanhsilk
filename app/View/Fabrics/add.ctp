<?php


echo $this->Html->link('Back',array('action'=>'index'));

echo $this->Form->create('Fabric', array('url'=>array('controller'=>'Fabrics', 'action'=>'add'), 'class'=>'well'));
echo $this->Form->input('code',array('label'=>'Fabric Code', 'div' => false, 'class' => 'span3', 'placeholder' => 'Type fabric code'));
echo $this->Form->input('description',array('label'=>'Description', 'div' => false, 'class' => 'span3', 'placeholder' => 'Type description'));
echo $this->Form->input('price',array('label'=>'Price', 'div' => false, 'class' => 'span3', 'placeholder' => 'price'));

$options = array('M' => 'Male', 'F' => 'Female');
echo $this->Form->select('collection_id', $options, array('default'=>'M', 'label' => 'Select Collection', 'div'=>false, 'class' => 'span3'));
?>

<label></label>
<button type="submit" class="btn">Save</button>
<label></label>
<?php
echo $this->Form->end();
?>
