
<div class="main">
	
<div class="row-fluid">
	<div class="span2">
		
	</div>
	<div class="span8">
		<?php echo $this->Form->create('Style'); ?>
			<legend>Add Design</legend>
			<label>Name</label>
			<input name="data[Style][name]" type="text" id="StyleName" class="required">
			<label>Type</label>
			<select id="Type" class = "" name="data[Style][type]">
					<option value="1">Men</option>
					<option value="0">Women</option>
			</select>
			<label>Description</label>
			<textarea name="data[Style][description]" cols="30" rows="6" id="StyleDescription" class="required"></textarea>
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
		$('#StyleAdminAddForm').validate();
	});
</script>

