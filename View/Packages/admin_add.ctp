<div class="packages form">
<?php echo $this->Form->create('Package'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Paquete'); ?></legend>
	<?php
		echo $this->Form->input('nombre',array('class'=>'form-control'));
		echo $this->Form->input('categoria_id',array('class'=>'form-control'));
		echo $this->Form->input('descripcion',array('class'=>'form-control'));
		echo $this->Form->input('precio',array('class'=>'form-control'));
		echo $this->Form->input('permalink',array('class'=>'form-control'));
		//echo $this->Form->input('recomendado',array('class'=>'form-control'));
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
				
			</div>
		</div>
	</div>
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

		<li><?php echo $this->Html->link(__('Ver Paquetes'), array('action' => 'index'), array('class' => 'btn btn-success','escape'=>false)); ?></li>
		<li><?php echo $this->Html->link(__('Ver Categorias'), array('controller' => 'categorias', 'action' => 'index'), array('class' => 'btn btn-success','escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Categoria'), array('controller' => 'categorias', 'action' => 'add'), array('class' => 'btn btn-success','escape'=>false)); ?> </li>
	</ul>
</div>

<script type="text/javascript">
	<?php 
	$timestamp = time();
	$seccion = base64_encode('editions');
	$url = $this->Html->url('/upload/Upload_File/?seccion='.$seccion);
	$check = $this->Html->url('/upload/check_exists/?seccion='.$seccion);
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
			'uploadScript'     : '<?php echo $url ?>',
			'onUploadComplete' : function(file, data) { 
				
				$('.print_images').empty();

				$('.print_images').append(data);

			}
		});
	});
</script>
