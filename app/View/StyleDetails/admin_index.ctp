
<h2>Style Details</h2>
<?php
echo $this->Html->link('Add new fabric',array('action'=>'add'));
if(!empty($styledetails)){
?>
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Name</th>
				<th>Style Name</th>
				<th>Images</th>
				<th>Action</th>
			</tr>
		</thead>
		
		<tbody>
		<?php foreach ($styledetails as $st): ?>
		<?php
			//get image id
			$image_id = $st['StyleDetail']['image_id'];
			App::import('model','Image');
			$imageModel = new Image();
			$image = $imageModel->findById($image_id);
			$image_url = $image['Image']['url'];
		?>
		<tr>
		    <td><?php echo $st['StyleDetail']['name']; ?></td>
		    <td><?php echo $st['StyleDetail']['style_id']; ?></td>
			<td><img src="<?=$this->webroot.$image_url?>" alt="" /></td>
		    <td>
		    	<?php
		    		echo $this->Html->link('edit', array('action'=>'edit', $st['StyleDetail']['id'])) . "&nbsp;&nbsp;&nbsp;"; 
		    		echo $this->Html->link(
						'delete', 
						array('action'=>'delete', $st['StyleDetail']['id']),
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
	echo $this->Html->link('Add new Style Details',array('action'=>'add'));
}else{
	echo("<div class='alert alert-info'>No record(s) was found.</div>");
} 

?>
	 