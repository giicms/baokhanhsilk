
<div class="main">
	
<div class="row-fluid">
	<div class="span2">
		
	</div>
	<div class="span8">
		<?php echo $this->Form->create('Fabric', array('type' => 'file')); ?>
		<?php
		App::import('model','Collection');
		$collectionModel = new Collection();
		$Collectionlist = $collectionModel->generateTreeList(null, null, null, " - ");
		?>	
			<legend>Add Fabric</legend>
			<label>Code</label>
			<input name="data[Fabric][code]" maxlength="20" type="text" id="FabricCode" class="required">
			<label>Collection</label>
			<select id="FabricCollectionId" class = "" name="collectionId">
				<?php foreach ($Collectionlist as $key => $value) { ?>
					<option value="<?=$key; ?>"><?=$value; ?></option>
				<?php } ?>
			</select>
			<label>Description</label>
			<textarea name="data[Fabric][description]" cols="30" rows="6" id="FabricDescription" class="required"></textarea>
			<label for="FabricPrice">Price</label>
			<input name="data[Fabric][price]" class="required" placeholder="price" step="any" type="number" id="FabricPrice">
			<label>Image</label>
			<input type="file" name="data[Fabric][file]" class="fileUpload {validate:{required:true,accept:true}} required" id="FabricFile" >
			<button type="submit" id="px-submit" class="btn btn-primary">Add</button>
			<button type="reset" id="px-clear" class="btn">Clear</button>
		<?php echo $this->Form->end(); ?>
	</div>
	<div class="span2"></div>
</div>

	
</div> 


<div class="row-fluid">
	<!-- blank -->
	<div class="span12"></div>
</div>
<script type="text/javascript">
	$().ready(function() {
		$('#FabricAdminAddForm').validate();
	});
</script>
