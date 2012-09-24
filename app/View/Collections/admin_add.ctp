<div class="row-fluid">
	<div class="span2">
		
	</div>
	<div class="span8">
		<div class="wrapFrm">
			<legend>Add Collection 
				<span class="backLink"><?php echo $this->Html->link('Back',array('action'=>'admin_index')); ?></span> 
			</legend>
			<div class="wrapControl">
<?php

echo $this->Html->link('Back',array('action'=>'admin_index'));

echo $this->Form->create('Collection');
echo $this->Form->input('name',array('label'=>'Name'));
echo $this->Form->input('parent_id',array('label'=>'Parent'));
echo $this->Form->end('Add');

?>
			</div>
			<div class="wrapButton">
				<?php echo $this->Form->end('Add'); ?>
			</div>
		</div>
	</div>
	<div class="span2"></div>
</div>