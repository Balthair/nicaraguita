<div class="categorias index">
	<h2><?php echo __('Categorias'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('permalink'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($categorias as $categoria): ?>
	<tr>
		<td><?php echo h($categoria['Categoria']['id']); ?>&nbsp;</td>
		<td><?php echo h($categoria['Categoria']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($categoria['Categoria']['permalink']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $categoria['Categoria']['id']),array('class' => 'btn btn-info','escape'=>false)); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $categoria['Categoria']['id']), array('class' => 'btn btn-danger','escape'=>false), __('¿Estas seguro que deseas eliminar esta categoria?', $categoria['Categoria']['id'])); ?>
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
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Agregar Categoria'), array('action' => 'add'),array('class' => 'btn btn-success','escape'=>false)); ?></li>
		<li><?php echo $this->Html->link(__('Ver Paquetes'), array('controller' => 'packages', 'action' => 'index'),array('class' => 'btn btn-success','escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Paquete'), array('controller' => 'packages', 'action' => 'add'),array('class' => 'btn btn-success','escape'=>false)); ?> </li>
	</ul>
</div>
