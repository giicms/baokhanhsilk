
<div class="main">
	
<div class="row-fluid">
	<div class="span2">
		
	</div>
	<div class="span8">
		<?php echo $this->Form->create('StyleDetail', array('type' => 'file')); ?>
			<?php
			App::import('model', 'Style');
			$styleModel = new Style();
			$styles = $styleModel->find('all');
			?>
			<legend>Add Style Detail</legend>
			<label>Name</label>
			<input name="data[StyleDetail][name]" maxlength="20" type="text" id="StyleDetailName" class="required">
			<label>Style</label>
			<div id="style"></div>
			<select id="StyleId" class = "" name="styleId" class="required">
				<option>[----Select Style----]</option>
				<?php foreach($styles as $style)  { ?>
					<option value="<?=$style['Style']['id']; ?>"><?=$style['Style']['name']; ?></option>
				<?php } ?>
			</select>
			<label>Image</label>
			<input type="file" name="data[StyleDetail][file]" class="fileUpload {validate:{required:true,accept:true}} required" id="StyleDetailFile" >
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
		$('#StyleDetailAdminAddForm').validate();
		$('#StyleId').change(function() {
			var styleID = $(this).val();
			$.post(
				'getStyleName', // ajax file
				{style_id : styleID},
				//function that is called when server returns a value.
		    function(data){
		        $('#style').html(data);
		    },
		    "text"
				)
		});
	});
</script>
