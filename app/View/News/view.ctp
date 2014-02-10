<div class="news view">
<h2><?php echo __('News'); ?></h2>
		<p>
			<strong><?php echo __('New Title'); ?></strong>
			<br>
			<?php echo h($news['News']['new_title']); ?>
		</p>
		<p>
			<strong><?php echo __('New Content'); ?></strong>
			<br>
			<?php echo h($news['News']['new_content']); ?>
		</p>
		<p>
			<strong><?php echo __('New Visible'); ?></strong>
			<br>
			<?php echo h($news['News']['new_visible']); ?>
		</p>
		<p>
			<strong><?php echo __('New Created In'); ?></strong>
			<br>
			<?php echo h($news['News']['new_created_in']); ?>
		</p>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit News'), array('action' => 'edit', $news['News']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete News'), array('action' => 'delete', $news['News']['id']), null, __('Are you sure you want to delete # %s?', $news['News']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List News'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New News'), array('action' => 'add')); ?> </li>
	</ul>
</div>
