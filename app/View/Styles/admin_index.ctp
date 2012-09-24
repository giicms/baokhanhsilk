<h2>Style Management</h2>
<?php
echo $this->Html->link('Add new style',array('action'=>'add'));
if(!empty($styles)){
?>
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Name</th>
				<th>Type</th>
				<th>Description</th>
				<th>Action</th>
			</tr>
		</thead>
		
		<tbody>
		<?php foreach ($styles as $st): ?>
		<tr>
		    <td><?php echo $st['Style']['name']; ?></td>
		    <td><?=($st['Style']['type'] == 0 ? 'Women': 'men')?></td>
		    <td><?php echo $st['Style']['description']; ?></td>
		    <td>
		    	<?php
		    		echo $this->Html->link('edit', array('action'=>'edit', $st['Style']['id'])) . "&nbsp;&nbsp;&nbsp;"; 
		    		echo $this->Html->link(
						'delete', 
						array('action'=>'delete', $st['Style']['id']),
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
	echo $this->Html->link('Add new Style',array('action'=>'add'));
}else{
	echo("<div class='alert alert-info'>No record(s) was found.</div>");
} 

?>
	 