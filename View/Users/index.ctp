<div class="btn-toolbar actions-menu" role="toolbar">
	<div class="btn-group">
		<?php echo $this->Html->link(__('Nuevo Usuario'), array('action' => 'add'),array('class'=>'btn btn-default','escape'=>false)); ?>
	</div>
	<div class="btn-group actions-menu">
		<?php echo $this->Html->link(__('Ver Sucursales'), array('controller' => 'sucursales', 'action' => 'index'),array('class' => 'btn btn-default','escape'=>false)); ?>
		<?php echo $this->Html->link(__('Nueva Sucursal'), array('controller' => 'sucursales', 'action' => 'add'),array('class' => 'btn btn-default','escape'=>false)); ?>
	</div>
</div>
<div class="users index">
	<h2><?php echo __('Usuarios'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('username','Usuario'); ?></th>
			<th><?php echo $this->Paginator->sort('super_user', 'Super Usuario'); ?></th>
			<th><?php echo $this->Paginator->sort('created', 'Creado'); ?></th>
			<th><?php echo $this->Paginator->sort('modified', 'Modificado'); ?></th>
			<th><?php echo $this->Paginator->sort('perfil_id', 'Perfil'); ?></th>
			<th><?php echo $this->Paginator->sort('sucursale_id', 'Sucursal'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
		<td><?php echo $user['User']['super_user']==1?'Si':'No'; ?>&nbsp;</td>
		<td><?php echo h($user['User']['created']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['modified']); ?>&nbsp;</td>
		<td><?php echo h($user['Perfil']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($user['Sucursale']['nombre']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $user['User']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
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
		echo $this->Paginator->prev('< ' . __('anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>