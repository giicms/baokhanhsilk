<!--

<form enctype="multipart/form-data" method="post" action="add">
Choose your file here:
<input name="uploaded_file" type="file"/><br /><br />
<input type="submit" value="Upload It"/>
</form>-->

<?php
	echo $this->Form->create('Images', array('type' => 'file'));
	echo $this->Form->input('file', array(
		'type' => 'file', 
		'label' => false, 'div' => false,
		'class' => 'fileUpload', 
	//	'multiple' => 'multiple'
	));		
	echo $this->Form->button('Upload', array('type' => 'submit', 'id' => 'px-submit'));
	echo $this->Form->button('Clear', array('type' => 'reset', 'id' => 'px-clear'));
	echo $this->Form->end();
?>