<?php
echo $this->Html->link('Back',array('action'=>'index'));

echo $this->Form->create('Collection', array('url'=>array('controller'=>'Collections', 'action'=>'add'), 'class'=>'well'));
echo $this->Form->input('name',array('label'=>'Collection Name', 'div' => false, 'class' => 'span3', 'placeholder' => 'Type collection name'));
?>

<label></label>
<button type="submit" class="btn">Save</button>
<label></label>
<?php
echo $this->Form->end();
?>
