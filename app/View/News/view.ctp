<div class="news view">
<h2><?php echo __('News'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($news['News']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('New Title'); ?></dt>
		<dd>
			<?php echo h($news['News']['new_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('New Content'); ?></dt>
		<dd>
			<?php echo h($news['News']['new_content']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('New Visible'); ?></dt>
		<dd>
			<?php echo h($news['News']['new_visible']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('New Created In'); ?></dt>
		<dd>
			<?php echo h($news['News']['new_created_in']); ?>
			&nbsp;
		</dd>
	</dl>
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
