<?php echo $this->Html->script('ckeditor/ckeditor');?>
<?php

echo $this->Html->link('Back',array('action'=>'admin_index'));

echo $this->Form->create('Category');
echo $this->Form->input('name',array('label'=>'Name'));
echo $this->Form->input('parent_id',array('label'=>'Parent'));
//echo $this->Form->textarea('content',array('class'=>'ckeditor'));
echo $this->Form->end('Add');

?>