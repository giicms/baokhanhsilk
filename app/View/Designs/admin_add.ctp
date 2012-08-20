
<?php
	echo $this->Form->create('Design', array('type' => 'file'));
	App::import('model','Collection');
	$collectionModel = new Collection();
	$Collectionlist = $collectionModel->generateTreeList(null, null, null, " - ");
	pr($Collectionlist);
?>
	<select id="DesignCollectionId" class = "" name="collectionId">
		<?php foreach ($Collectionlist as $key => $value) { ?>
			<option value="<?=$key; ?>"><?=$value; ?></option>
		<?php } ?>
	</select>
<?php	
	echo $this->Form->input('code',array('label'=>'Code'));
	echo $this->Form->input('description',array('label'=>'Description'));
	echo $this->Form->input('file', array(
		'type' => 'file', 
		'label' => false, 'div' => false,
		'class' => 'fileUpload', 
	//	'multiple' => 'multiple'
	));		
	echo $this->Form->button('Add', array('type' => 'submit', 'id' => 'px-submit'));
	echo $this->Form->button('Clear', array('type' => 'reset', 'id' => 'px-clear'));
	echo $this->Form->end();
?>