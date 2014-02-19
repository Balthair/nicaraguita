<div class="specials form">
<?php echo $this->Form->create('Special'); ?>
	<fieldset>
		<legend><?php echo __('Add Special'); ?></legend>
	<?php
		echo $this->Form->input('titulo',array('class'=>'form-control'));
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
	</fieldset>
<?php echo $this->Form->end(array('label'=>__('Guardar'),'class'=>'btn btn-success')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Ver Especiales'), array('action' => 'index'),array('class' => 'btn btn-success','escape'=>false)); ?></li>
	</ul>
</div>

<script type="text/javascript">
	<?php 
	$timestamp = time();
	$seccion = base64_encode('specials');
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
