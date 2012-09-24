<?php echo $this->Session->flash();?>
<div id="categories-list" class="categories index">
	<div class="list-title"><?php __('Danh sách danh mục');?></div>
	
	<div style=" line-height: 1.62em;">
	
	<ul class="wrapCollection">
	<?php	
		foreach($CollectionList as $key=>$value){
			$edit = $this->Html->link("Chỉnh sửa", array('action'=>'edit', $key));
			//$delete = $html->link("Xóa", array('action'=>'delete', $key));
	?>
			<li><?=$value?> &nbsp;&nbsp;&nbsp;[<?=$edit?>]&nbsp;&nbsp;&nbsp;[<a class="delete" data-value="<?=$value?>" data-key="<?=$key?>" >Xóa</a>]</li>
	<?php	
		}
	?>
		</ul>
	</div>

	<div style="padding-top:10px;">
		<?php	
			echo $this->Html->link("Thêm mới",array('action'=>'add'));
		?>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('.delete').click(function(){
		
		if(confirm("Bạn có muốn xóa danh muc: "+ $(this).data('value') +" không?")) {		
			$.ajax({
				type:'post',
				url: '<?=$this->base?>/admin/Collections/delete/',
				data: {'id' : $(this).data('key'),
								'value' : $(this).data('value')
							},
				success: function(){ location.reload(); }
			});
		}
			
		});
	});
</script>