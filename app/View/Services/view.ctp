<div class="services view">
<h2><?php echo __('Service'); ?></h2>
		<p>
			<strong><?php echo __('Position'); ?></strong>
			<br>
			<?php echo h($service['Service']['position']); ?>
		</p>
		<p>
			<strong><?php echo __('Service Title'); ?></strong>
			<br>
			<?php echo h($service['Service']['service_title']); ?>
		</p>
		<p>
			<strong><?php echo __('Service Description'); ?></strong>
			<br>
			<?php echo h($service['Service']['service_description']); ?>
		</p>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Service'), array('action' => 'edit', $service['Service']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Service'), array('action' => 'delete', $service['Service']['id']), null, __('Are you sure you want to delete # %s?', $service['Service']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Services'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('action' => 'add')); ?> </li>
	</ul>
</div>
