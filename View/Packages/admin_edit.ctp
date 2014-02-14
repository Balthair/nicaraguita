<div class="packages form">
<?php echo $this->Form->create('Package'); ?>
	<fieldset>
		<legend><?php echo __('Edit Package'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('categoria_id');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('precio');
		echo $this->Form->input('permalink');
		echo $this->Form->input('recomendado');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Package.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Package.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Packages'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categorias'), array('controller' => 'categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria'), array('controller' => 'categorias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
