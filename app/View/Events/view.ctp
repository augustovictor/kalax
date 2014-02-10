<div class="events view">
<h2><?php echo __('Event'); ?></h2>
		<p>
			<strong><?php echo __('Event Visible'); ?></strong>
			<br>
			<?php echo h($event['Event']['event_visible']); ?>
		</p>
		<p>
			<strong><?php echo __('Event Position'); ?></strong>
			<br>
			<?php echo h($event['Event']['event_position']); ?>
		</p>
		<p>
			<strong><?php echo __('Event Pic Name'); ?></strong>
			<br>
			<?php echo h($event['Event']['event_pic_name']); ?>
		</p>
		<p>
			<strong><?php echo __('Event Path'); ?></strong>
			<br>
			<?php echo $this->Html->image(h($event['Event']['event_path'])); ?>
		</p>
		<p>
			<strong><?php echo __('Event Description'); ?></strong>
			<br>
			<?php echo h($event['Event']['event_description']); ?>
		</p>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Event'), array('action' => 'edit', $event['Event']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Event'), array('action' => 'delete', $event['Event']['id']), null, __('Are you sure you want to delete # %s?', $event['Event']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('action' => 'add')); ?> </li>
	</ul>
</div>
