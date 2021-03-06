<div class="packages form">
<?php echo $this->Form->create('Package'); ?>
	<fieldset>
		<legend><?php echo __('Editar Paquete'); ?></legend>
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
				if (isset($this->request->data['Image'])) foreach($this->request->data['Image'] as $a) {
					$src = $a['seccion'].'/'.$a['id'].'.'.$a['extension'];
					if (file_exists(Configure::read('absolute_root').$src)) {
						echo $this->Html->tag('div',
							$this->Html->image(	'/files/'.$src,
								array('class' => 'pic')
							).$this->Html->link(
								$this->Html->image('admin/delete.png',
									array(
										'style' => 'position:absolute;right:10px;top:10px',
										'class' => 'icon_control'
									)
								),
								'/upload/delete_imagen/'.$a['id'],
								array('class' => 'drop','escape' => false,'data' => $a['id'])	
							),
							array('class' => 'pic_wrapper','id' => $a['id'])
						);
					}
				}
				?>
			</div>
		</div>
	</div>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre',array('class'=>'form-control'));
		echo $this->Form->input('categoria_id',array('class'=>'form-control'));
		echo $this->Form->input('descripcion',array('class'=>'form-control'));
		echo $this->Form->input('precio',array('class'=>'form-control'));
	?>
	<div class="text input">
		<?php echo $this->Form->label('Recomendado'); ?>
		<label class="switch-light well" onclick="">
			<?php echo $this->Form->input('recomendado',array('type'=>'checkbox','label'=>false,'div'=>false)); ?>
			<span>
				<span>No</span>
				<span>Si</span>
			</span>
			<a class="btn btn-primary"></a>
		</label>
	</div>
	</fieldset>
<?php echo $this->Form->end(array('label'=>__('Guardar'),'class'=>'btn btn-success')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Package.id')), array('class' => 'btn btn-danger','escape'=>false), __('¿Estas seguro que deseas eliminar este paquete?', $this->Form->value('Package.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Ver Paquetes'), array('action' => 'index'),array('class' => 'btn btn-success','escape'=>false)); ?></li>
		<li><?php echo $this->Html->link(__('Ver Categorias'), array('controller' => 'categorias', 'action' => 'index'),array('class' => 'btn btn-success','escape'=>false)); ?> </li>
	</ul>
</div>

<script type="text/javascript">
	$('textarea').tiny_mce();

	<?php 
	$timestamp = time();
	$seccion = base64_encode('package');
	$url = $this->Html->url('/upload/Upload_File/?seccion='.$seccion);
	$check = $this->Html->url('/upload/check_exists/?seccion='.$seccion);
	$img = @$this->request->data['Package']['id'];
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
			'uploadScript'     : '<?php echo $url."&img=".$img."&multi=true" ?>',
			'onUploadComplete' : function(file, data) { 
				
				//$('.print_images').empty();

				$('.print_images').append(data);

			}
		});

		$('.drop').delete_img();
	});
</script>
