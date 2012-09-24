<?php
//pr($this->request->data);

//get code
$design = $this->request->data['Design'];
$code = $design['code'];
$description = $design['description'];
$collection_id = $design['collection_id'];
$image_id = $design['image_id'];
App::import('model','Image');
$imageModel = new Image();
$image = $imageModel->findById($image_id);
$image_url = $image['Image']['url'];
//echo $collection_id;
?>

<div class="row-fluid">
	<div class="span2">
		
	</div>
	<div class="span8">
		<div class="wrapFrm">
			<?php echo $this->Form->create('Design', array('type' => 'file')); ?>
			<?php
			App::import('model','Collection');
			$collectionModel = new Collection();
			$Collectionlist = $collectionModel->generateTreeList(null, null, null, " - ");
			?>	
				<legend>Edit Design</legend>
				<div class="wrapControl">
					<label>Code</label>
					<input name="data[Design][code]" maxlength="20" type="text" id="DesignCode" value="<?=$this->request->data['Design']['code'] ?>" class="required">
					<label>Collection</label>
					<select id="DesignCollectionId" class = "" name="collectionId">
						<?php foreach ($Collectionlist as $key => $value) { ?>
							<option value="<?=$key; ?>" <?=($key == $collection_id ? 'selected="selected"' : '')?>><?=$value; ?></option>
						<?php } ?>
					</select>
					<label>Description</label>
					<textarea name="data[Design][description]" cols="30" rows="6" id="DesignDescription"  class="required"><?=$this->request->data['Design']['description'] ?></textarea>
					<label>Image</label>
					<img id="img" src="<?=$this->webroot.$image_url?>" alt="" />
					<input type="hidden" name="data[image_id]" value="<?=$image_id?>" />
					<input type="file" name="data[Design][file]" id="DesignFile" value="abc" >
					<p><input type="checkbox" id="chk" name="chk" /> Change this image</p>
				</div>
				<div class="wrapButton">
					<button type="submit" id="px-submit" class="btn btn-primary">Edit</button>
					<button type="reset" id="px-clear" class="btn">Clear</button>
				</div>
			<?php echo $this->Form->end(); ?>
		</div>
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
		$('#DesignAdminEditForm').validate();
		$('#DesignFile').hide();
		$('#chk').click(function(){	
			if($(this).is(':checked')) {
				$('#DesignFile').show();
				$('#DesignFile').addClass('required');
				$('#img').hide();
			} else {
				$('#DesignFile').hide();
				$('#DesignFile').removeClass();
				$('#img').show();
			}
		});
	});
</script>