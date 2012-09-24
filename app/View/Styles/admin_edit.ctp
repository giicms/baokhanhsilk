<?php
$style = $this->request->data['Style'];
$name = $style['name'];
$description = $style['description'];
$type = $style['type'];
?>

<div class="main">
	
<div class="row-fluid">
	<div class="span2">
		
	</div>
	<div class="span8">
		<?php echo $this->Form->create('Style'); ?>
			<legend>Add Design</legend>
			<label>Name</label>
			<input name="data[Style][name]" type="text" id="StyleName" class="required" value="<?=$name?>">
			<label>Type</label>
			<select id="Type" class = "" name="data[Style][type]" >
					<option value="1" <?=($type == 1 ? 'selected="selected"' : '')?>>Men</option>
					<option value="0" <?=($type == 0 ? 'selected="selected"' : '')?>>Women</option>
			</select>
			<label>Description</label>
			<textarea name="data[Style][description]" cols="30" rows="6" id="StyleDescription" class="required"><?=$description?></textarea>
			<button type="submit" id="px-submit" class="btn btn-primary">Edit</button>
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

