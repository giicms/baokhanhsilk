<?php
//pr($this->request->data);

//get code
$fabric = $this->request->data['Fabric'];
$code = $fabric['code'];
$description = $fabric['description'];
$price = $fabric['price'];
$category_id = $fabric['category_id'];
$image_id = $fabric['image_id'];
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
			<?php echo $this->Form->create('Fabric', array('type' => 'file')); ?>
			<?php
			App::import('model','Category');
			$categoryModel = new Category();
			$Categorylist = $categoryModel->generateTreeList(null, null, null, " - ");
			?>	
				<legend>Edit Fabric</legend>
				<div class="wrapControl">
					<label>Code</label>
					<input name="data[Fabric][code]" maxlength="20" type="text" id="FabricCode" value="<?=$code ?>" class="required">
					<label>Collection</label>
					<select id="FabricCategoryId" class = "" name="categoryId">
						<?php foreach ($Categorylist as $key => $value) { ?>
							<option value="<?=$key; ?>" <?=($key == $category_id ? 'selected="selected"' : '')?>><?=$value; ?></option>
						<?php } ?>
					</select>
					<label>Description</label>
					<textarea name="data[Fabric][description]" cols="30" rows="6" id="FabricDescription"  class="required"><?=$description ?></textarea>
					<label>price</label>
					<input name="data[Fabric][price]" maxlength="20" type="text" id="Fabricprice" value="<?=$price ?>" class="required">
					<label>Image</label>
					<img id="img" src="<?=$this->webroot.$image_url?>" alt="" />
					<input type="hidden" name="data[image_id]" value="<?=$image_id?>" />
					<input type="file" name="data[Fabric][file]" id="FabricFile" value="abc" >
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
		$('#FabricAdminEditForm').validate();
		$('#FabricFile').hide();
		$('#chk').click(function(){	
			if($(this).is(':checked')) {
				$('#FabricFile').show();
				$('#FabricFile').addClass('required');
				$('#img').hide();
			} else {
				$('#FabricFile').hide();
				$('#FabricFile').removeClass();
				$('#img').show();
			}
		});
	});
</script>