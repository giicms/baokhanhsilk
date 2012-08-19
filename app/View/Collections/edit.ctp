<?php
	//pr($this->data);
	echo $this->Html->link('Back',array('action'=>'index'));
	echo $this->Form->create('Collection');
	echo $this->Form->hidden('id');
	echo $this->Form->input('name');
	echo $this->Form->end('Update');
?>
