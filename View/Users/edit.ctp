<div class="btn-toolbar actions-menu" role="toolbar">
	<div class="btn-group">
		<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('User.id')), array('class' => 'btn btn-danger','escape'=>false), __('Seguro que quiere eliminar el usuario %s?', $this->Form->value('User.nombre'))); ?>
	</div>
	<div class="btn-group">
		<?php echo $this->Html->link(__('Ver Usuarios'), array('action' => 'index'),array('class' => 'btn btn-default','escape'=>false)); ?>
	</div>
</div>
<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Editar Usuario'); ?></legend>
	<?php
		echo $this->Form->input('id',array('class'=>'form-control'));
		echo $this->Form->input('username',array('class'=>'form-control'));
		echo $this->Form->input('password',array('class'=>'form-control'));
	?>
	<div class="text input">
		<?php echo $this->Form->label('Super Usuario'); ?>
		<label class="switch-light well" onclick="">
			<?php echo $this->Form->input('super_user',array('type'=>'checkbox','label'=>false,'div'=>false)); ?>
			<span>
				<span>Off</span>
				<span>On</span>
			</span>
			<a class="btn btn-primary"></a>
		</label>
	</div>
	<?php 
		echo $this->Form->input('perfil_id',array('class'=>'form-control'));
		echo $this->Form->input('sucursale_id',array('class'=>'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->end(array('label'=>__('Guardar'),'class'=>'btn btn-success')); ?>
</div>