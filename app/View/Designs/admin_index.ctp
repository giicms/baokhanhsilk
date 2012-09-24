
<h2>Design Management</h2>
<?php
echo $this->Html->link('Add new design',array('action'=>'add'));
if(!empty($designs)){
?>
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Code</th>
				<th>Description</th>
				<th>Collection Name</th>
				<th>Images</th>
				<th>Action</th>
			</tr>
		</thead>
		
		<tbody>
		<?php foreach ($designs as $ds): ?>
		<?php
			//get image id
			$image_id = $ds['Design']['image_id'];
			App::import('model','Image');
			$imageModel = new Image();
			$image = $imageModel->findById($image_id);
			$image_url = $image['Image']['url'];
		?>
		
		<tr>
		    <td><?php echo $ds['Design']['code']; ?></td>
		    <td><?php echo $ds['Design']['description']; ?></td>
		    <td><?php echo $ds['Collection']['name']; ?></td>
			<td><img src="<?=$this->webroot.$image_url?>" alt="" /></td>
		    <td>
		    	<?php
		    		echo $this->Html->link('edit', array('action'=>'edit', $ds['Design']['id'])) . "&nbsp;&nbsp;&nbsp;"; 
		    		echo $this->Html->link(
						'delete', 
						array('action'=>'delete', $ds['Design']['id']),
		    			null,
		    			"Are you sure?"
					);
		    	?>
		    </td>
		</tr>
		<?php endforeach; ?>
		</tbody>
	 </table>
	 
<?php
	echo $this->Html->link('Add new design',array('action'=>'add'));
}else{
	echo("<div class='alert alert-info'>No record(s) was found.</div>");
} 

?>
	 