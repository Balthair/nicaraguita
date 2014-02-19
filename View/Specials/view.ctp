<div class="specials view">
<h2><?php  echo __('Special'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($special['Special']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($special['Special']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($special['User']['username'], array('controller' => 'users', 'action' => 'view', $special['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Special'), array('action' => 'edit', $special['Special']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Special'), array('action' => 'delete', $special['Special']['id']), null, __('Are you sure you want to delete # %s?', $special['Special']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Specials'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Special'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
