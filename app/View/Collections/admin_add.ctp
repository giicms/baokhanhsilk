<?php

echo $this->Html->link('Back',array('action'=>'admin_index'));

echo $this->Form->create('Collection');
echo $this->Form->input('name',array('label'=>'Name'));
echo $this->Form->input('parent_id',array('label'=>'Parent'));
echo $this->Form->end('Add');

?>