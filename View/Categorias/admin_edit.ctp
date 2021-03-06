<div class="categorias form">
<?php echo $this->Form->create('Categoria'); ?>
	<fieldset>
		<legend><?php echo __('Editar Categoria'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
	?>
	<div class="upload-board">
		<div class="head_upload">
			<input id="file_upload" name="file_upload" type="file" multiple="false">
			<a class="upload_all btn btn-success" style="position: relative;" href="javascript:$('#file_upload').uploadifive('upload')" title="Subir Archivos">
				<span class="glyphicon glyphicon-open"></span>
			</a>
		</div>
		<div id="queue">
			<div class="print_images">
				<?php
			if (isset($this->request->data['Image'])) {
				$src = $this->request->data['Image']['seccion'].'/'.$this->request->data['Image']['id'].'.'.$this->request->data['Image']['extension'];
				if (file_exists(Configure::read('absolute_root').$src)) {
					echo $this->Html->tag(
						'div',
						$this->Html->image(
							'/files/'.$src  ,
							array(
								'class' => 'pic'
							)
						).
						$this->Html->link(
							$this->Html->image(
								'admin/delete.png',
								array(
									'style' => 'position:absolute;right:10px;top:10px',
									'class' => 'icon_control'
								)
							),
							'/upload/delete_imagen/'.$this->request->data['Image']['id'],
							array(
								'class' => 'drop',
								'escape' => false,
								'data' => $this->request->data['Image']['id']
							)	
						),
						array(
							'class' => 'pic_wrapper',
							'id' => $this->request->data['Image']['id']
						)
					);
				}
			}
			?>
			</div>
		</div>
	</div>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Categoria.id')), array('class' => 'btn btn-danger','escape'=>false), __('Are you sure you want to delete # %s?', $this->Form->value('Categoria.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Ver Categorias'), array('action' => 'index'),array('class' => 'btn btn-success','escape'=>false)); ?></li>
		<li><?php echo $this->Html->link(__('Ver Paquetes'), array('controller' => 'packages', 'action' => 'index'),array('class' => 'btn btn-success','escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Paquete'), array('controller' => 'packages', 'action' => 'add'),array('class' => 'btn btn-success','escape'=>false)); ?> </li>
	</ul>
</div>

<script type="text/javascript">
	<?php 
	$timestamp = time();
	$seccion = base64_encode('categorias');
	$url = $this->Html->url('/upload/Upload_File/?seccion='.$seccion);
	$check = $this->Html->url('/upload/check_exists/?seccion='.$seccion);
	$img = @$this->request->data['Categoria']['id'];
	?>
	$(function() {

		$('#file_upload').uploadifive({
			'auto'             : false,
			'checkScript'      : '<?php echo $check ?>',
			'formData'         : {
								   'timestamp' : '<?php echo $timestamp;?>',
								   'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
			                     },
			'queueID'          : 'queue',
			'uploadScript'     : '<?php echo $url."&img=".$img ?>',
			'onUploadComplete' : function(file, data) { 
				
				$('.print_images').empty();

				$('.print_images').append(data);

			}
		});
	});
</script>

