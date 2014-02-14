<div class="categorias view">
<h2><?php  echo __('Categoria'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($categoria['Categoria']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($categoria['Categoria']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Permalink'); ?></dt>
		<dd>
			<?php echo h($categoria['Categoria']['permalink']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Categoria'), array('action' => 'edit', $categoria['Categoria']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Categoria'), array('action' => 'delete', $categoria['Categoria']['id']), null, __('Are you sure you want to delete # %s?', $categoria['Categoria']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Categorias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Packages'), array('controller' => 'packages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Package'), array('controller' => 'packages', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Packages'); ?></h3>
	<?php if (!empty($categoria['Package'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Categoria Id'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Precio'); ?></th>
		<th><?php echo __('Permalink'); ?></th>
		<th><?php echo __('Recomendado'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($categoria['Package'] as $package): ?>
		<tr>
			<td><?php echo $package['id']; ?></td>
			<td><?php echo $package['nombre']; ?></td>
			<td><?php echo $package['categoria_id']; ?></td>
			<td><?php echo $package['descripcion']; ?></td>
			<td><?php echo $package['precio']; ?></td>
			<td><?php echo $package['permalink']; ?></td>
			<td><?php echo $package['recomendado']; ?></td>
			<td><?php echo $package['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'packages', 'action' => 'view', $package['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'packages', 'action' => 'edit', $package['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'packages', 'action' => 'delete', $package['id']), null, __('Are you sure you want to delete # %s?', $package['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Package'), array('controller' => 'packages', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
