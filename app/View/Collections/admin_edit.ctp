<div class="row-fluid">
	<div class="span2">
		
	</div>
	<div class="span8">
		<div class="wrapFrm">
			<legend>Edit Collection 
				<span class="backLink"><?php echo $this->Html->link('Back',array('action'=>'admin_index')); ?></span> 
			</legend>
			<div class="wrapControl">
				<?php
				echo $this->Form->create('Collection');
				echo $this->Form->input('name',array('label'=>'Name'));
				echo $this->Form->hidden('id');
				echo $this->Form->input('parent_id',array('label'=>'Parent', 'selected' => $this->data['Collection']['parent_id']));
				echo $this->Form->end('Update');
				?>
			</div>
			<div class="wrapButton">

			</div>
		</div>
	</div>
	<div class="span2"></div>
</div>