<div class="qualifications view">
<h2><?php echo __('Qualification'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($qualification['Qualification']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qualification Position'); ?></dt>
		<dd>
			<?php echo h($qualification['Qualification']['qualification_position']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qualification Visible'); ?></dt>
		<dd>
			<?php echo h($qualification['Qualification']['qualification_visible']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qualification Path'); ?></dt>
		<dd>
			<?php echo h($qualification['Qualification']['qualification_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qualification Name'); ?></dt>
		<dd>
			<?php echo h($qualification['Qualification']['qualification_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qualification Role'); ?></dt>
		<dd>
			<?php echo h($qualification['Qualification']['qualification_role']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qualification Description'); ?></dt>
		<dd>
			<?php echo h($qualification['Qualification']['qualification_description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Qualification'), array('action' => 'edit', $qualification['Qualification']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Qualification'), array('action' => 'delete', $qualification['Qualification']['id']), null, __('Are you sure you want to delete # %s?', $qualification['Qualification']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Qualifications'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Qualification'), array('action' => 'add')); ?> </li>
	</ul>
</div>
