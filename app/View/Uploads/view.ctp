<div class="uploads view">
<h2><?php echo __('Upload'); ?></h2>
		<p>
			<strong><?php echo __('Upload title'); ?></strong>
			<br>
			<?php echo h($upload['Upload']['title']); ?>
		</p>
		<p>
			<strong><?php echo __('Upload Path'); ?></strong>
			<br>
			<?php echo h($upload['Upload']['upload_path']); ?>
		</p>
		<p>
			<strong><?php echo __('Upload Description'); ?></strong>
			<br>
			<?php echo h($upload['Upload']['upload_description']); ?>
		</p>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Upload'), array('action' => 'edit', $upload['Upload']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Upload'), array('action' => 'delete', $upload['Upload']['id']), null, __('Are you sure you want to delete # %s?', $upload['Upload']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Uploads'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Upload'), array('action' => 'add')); ?> </li>
	</ul>
</div>
