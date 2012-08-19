
<h2>Collection Management</h2>
<?php
echo $this->Html->link('Add new collection',array('action'=>'add'));

if(!empty($collections)){
?>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Action</th>
			</tr>
		</thead>
		
		<tbody>
		<?php foreach ($collections as $collect): ?>
		<tr>
		    <td><?php echo $collect['Collection']['id']; ?></td>
		    <td><?php echo $collect['Collection']['name']; ?></td>
		    <td>
		    	<?php
		    		echo $this->Html->link('edit', array('action'=>'edit', $collect['Collection']['id'])); 
		    		echo $this->Html->link(
						'delete', 
						array('action'=>'delete', $collect['Collection']['id']),
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
}else{
	echo("<div class='alert alert-info'>No record(s) was found.</div>");
} 

?>
	 