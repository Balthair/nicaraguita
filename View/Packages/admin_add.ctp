<div class="packages form">
<?php echo $this->Form->create('Package'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Paquete'); ?></legend>
	<?php
		echo $this->Form->input('nombre',array('class'=>'form-control'));
		echo $this->Form->input('categoria_id',array('class'=>'form-control'));
		echo $this->Form->input('descripcion',array('class'=>'form-control wysiwyg'));
		echo $this->Form->input('precio',array('class'=>'form-control'));
		//echo $this->Form->input('recomendado',array('class'=>'form-control'));
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

		<li><?php echo $this->Html->link(__('Ver Paquetes'), array('action' => 'index'), array('class' => 'btn btn-success','escape'=>false)); ?></li>
		<li><?php echo $this->Html->link(__('Ver Categorias'), array('controller' => 'categorias', 'action' => 'index'), array('class' => 'btn btn-success','escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Categoria'), array('controller' => 'categorias', 'action' => 'add'), array('class' => 'btn btn-success','escape'=>false)); ?> </li>
	</ul>
</div>

<script type="text/javascript">
	$('textarea').tiny_mce();
</script>
