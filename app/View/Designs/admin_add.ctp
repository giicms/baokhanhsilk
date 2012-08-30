
<div class="main">
	
<div class="row-fluid">
	<div class="span2">
		
	</div>
	<div class="span8">
		<?php echo $this->Form->create('Design', array('type' => 'file')); ?>
		<?php
		App::import('model','Category');
		$categoryModel = new Category();
		$Categorylist = $categoryModel->generateTreeList(null, null, null, " - ");
		?>	
			<legend>Add Design</legend>
			<label>Code</label>
			<input name="data[Design][code]" maxlength="20" type="text" id="DesignCode" class="required">
			<label>Collection</label>
			<select id="DesignCategoryId" class = "" name="categoryId">
				<?php foreach ($Categorylist as $key => $value) { ?>
					<option value="<?=$key; ?>"><?=$value; ?></option>
				<?php } ?>
			</select>
			<label>Description</label>
			<textarea name="data[Design][description]" cols="30" rows="6" id="DesignDescription" class="required"></textarea>
			<label>Image</label>
			<input type="file" name="data[Design][file]" class="fileUpload {validate:{required:true,accept:true}} required" id="DesignFile" >
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
		$('#DesignAdminAddForm').validate();
	});
</script>

