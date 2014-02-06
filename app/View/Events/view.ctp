<div class="events view">
<h2><?php echo __('Event'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($event['Event']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Event Visible'); ?></dt>
		<dd>
			<?php echo h($event['Event']['event_visible']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Event Position'); ?></dt>
		<dd>
			<?php echo h($event['Event']['event_position']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Event Pic Name'); ?></dt>
		<dd>
			<?php echo h($event['Event']['event_pic_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Event Path'); ?></dt>
		<dd>
			<?php echo h($event['Event']['event_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Event Description'); ?></dt>
		<dd>
			<?php echo h($event['Event']['event_description']); ?>
			&nbsp;
		</dd>
	</dl>
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
