
<div class="main">
	
<div class="row-fluid">
	<div class="span2">
		
	</div>
	<div class="span8">
		<?php
		//Get data
		$styleDesign = $this->request->data['StyleDetail'];
		
		$name = $styleDesign['name'];
		$styleId = $styleDesign['style_id'];
		$imageId = $styleDesign['image_id'];
		App::import('model','Image');
		$imageModel = new Image();
		$image = $imageModel->findById($imageId);
		$image_url = $image['Image']['url'];
		$belongCollection =""
		?>
		<?php echo $this->Form->create('StyleDetail', array('type' => 'file')); ?>
			<?php
			App::import('model', 'Style');
			$styleModel = new Style();
			$styles = $styleModel->find('all');
			// Cho nay lay ra style la Men hay Women
			$style = $styleModel->findById($styleId);
			if($style['Style']['type'] == '1') {
				$belongCollection = "Men Collection";
			} else {
				$belongCollection = "Women Collection";
			}
			?>
			<legend>Edit Style Detail</legend>
			<label>Name</label>
			<input name="data[StyleDetail][name]" maxlength="20" type="text" id="StyleDetailName" class="required" value="<?=$name?>">
			<label>Style</label>
			<div id="style"><?=$belongCollection?></div>
			<select id="StyleId" class = "" name="styleId" class="required">
				<?php foreach($styles as $style)  { ?>
					<option value="<?=$style['Style']['id']; ?>" <?=($style['Style']['id'] == $styleId ? 'selected="selected"': ''  )?>><?=$style['Style']['name']; ?></option>
				<?php } ?>
			</select>
			<label>Image</label>
			<img id="img" src="<?=$this->webroot.$image_url?>" alt="" />
			<input type="hidden" name="data[image_id]" value="<?=$imageId?>" />
			<input type="file" name="data[StyleDetail][file]" class="fileUpload {validate:{required:true,accept:true}} required" id="StyleDetailFile" >
			<input type="checkbox" id="chk" name="chk" />Change this image
			<button type="submit" id="px-submit" class="btn btn-primary">Update</button>
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

		$('#StyleDetailAdminEditForm').validate();
		$('#StyleDetailFile').hide();
		$('#chk').click(function(){	
			if($(this).is(':checked')) {
				$('#StyleDetailFile').show();
				$('#StyleDetailFile').addClass('required');
				$('#img').hide();
			} else {
				$('#StyleDetailFile').hide();
				$('#StyleDetailFile').removeClass();
				$('#img').show();
			}
		});
	});
</script>
