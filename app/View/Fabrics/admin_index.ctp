
<h2>Fabric Management</h2>
<?php
echo $this->Html->link('Add new fabric',array('action'=>'add'));
if(!empty($fabrics)){
?>
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Code</th>
				<th>Description</th>
				<th>Price</th>
				<th>Collection Name</th>
				<th>Images</th>
				<th>Action</th>
			</tr>
		</thead>
		
		<tbody>
		<?php foreach ($fabrics as $fb): ?>
		<tr>
		    <td><?php echo $fb['Fabric']['code']; ?></td>
		    <td><?php echo $fb['Fabric']['description']; ?></td>
		    <td><?php echo $fb['Fabric']['price']; ?></td>
		    <td><?php echo $fb['Collection']['name']; ?></td>
		    <td><?php echo $fb['Fabric']['image_id']; ?></td>
		    <td>
		    	<?php
		    		echo $this->Html->link('edit', array('action'=>'edit', $fb['Fabric']['id'])) . "&nbsp;&nbsp;&nbsp;"; 
		    		echo $this->Html->link(
						'delete', 
						array('action'=>'delete', $fb['Fabric']['id']),
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
	echo $this->Html->link('Add new fabric',array('action'=>'add'));
}else{
	echo("<div class='alert alert-info'>No record(s) was found.</div>");
} 

?>
	 