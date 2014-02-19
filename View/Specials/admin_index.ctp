<div class="specials index">
	<h2><?php echo __('Especiales'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('titulo'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($specials as $special): ?>
	<tr>
		<td><?php echo h($special['Special']['id']); ?>&nbsp;</td>
		<td><?php echo h($special['Special']['titulo']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($special['User']['username'], array('controller' => 'users', 'action' => 'view', $special['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $special['Special']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $special['Special']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $special['Special']['id']), null, __('Are you sure you want to delete # %s?', $special['Special']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
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
		<li><?php echo $this->Html->link(__('Nuevo Especial'), array('action' => 'add'), array('class' => 'btn btn-success','escape'=>false)); ?></li>
	</ul>
</div>
