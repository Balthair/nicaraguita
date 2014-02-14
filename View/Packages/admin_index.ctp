<div class="packages index">
	<h2><?php echo __('Paquetes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('categoria_id'); ?></th>
			<th><?php echo $this->Paginator->sort('precio'); ?></th>
			<th><?php echo $this->Paginator->sort('recomendado'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($packages as $package): ?>
	<tr>
		<td><?php echo h($package['Package']['id']); ?>&nbsp;</td>
		<td><?php echo h($package['Package']['nombre']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($package['Categoria']['nombre'], array('controller' => 'categorias', 'action' => 'view', $package['Categoria']['id'])); ?>
		</td>
		<td><?php echo h($package['Package']['precio']); ?>&nbsp;</td>
		<td><?php echo $package['Package']['recomendado']==0?'No':'Si'; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($package['User']['username'], array('controller' => 'users', 'action' => 'view', $package['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $package['Package']['id']), array('class' => 'btn btn-info','escape'=>false)); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $package['Package']['id']), array('class' => 'btn btn-danger','escape'=>false), __('Are you sure you want to delete # %s?', $package['Package']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Pagina {:page} de {:pages}, Mostrando {:current} de {:count} total, Iniciando en {:start}, Terminando en {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Agregar Paquete'), array('action' => 'add'), array('class' => 'btn btn-success','escape'=>false)); ?></li>
		<li><?php echo $this->Html->link(__('Ver Categorias'), array('controller' => 'categorias', 'action' => 'index'), array('class' => 'btn btn-success','escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Categoria'), array('controller' => 'categorias', 'action' => 'add'), array('class' => 'btn btn-success','escape'=>false)); ?> </li>
	</ul>
</div>
