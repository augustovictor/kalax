<div class="qualifications view">
<h2><?php echo __('Qualification'); ?></h2>
		<p>
			<strong><?php echo __('Qualification Position'); ?></strong>
			<br>
			<?php echo h($qualification['Qualification']['qualification_position']); ?>
		</p>

		<p>
			<strong><?php echo __('Qualification Visible'); ?></strong>
			<br>
			<?php echo h($qualification['Qualification']['qualification_visible']); ?>
		</p>

		<p>
			<strong><?php echo __('Qualification Path'); ?></strong>
			<br>
			<?php echo h($qualification['Qualification']['qualification_path']); ?>
		</p>

		<p>
			<strong><?php echo __('Qualification Name'); ?></strong>
			<br>
			<?php echo h($qualification['Qualification']['qualification_name']); ?>
		</p>

		<p>
			<strong><?php echo __('Qualification Role'); ?></strong>
			<br>
			<?php echo h($qualification['Qualification']['qualification_role']); ?>
		</p>

		<p>
			<strong><?php echo __('Qualification Description'); ?></strong>
			<br>
			<?php echo h($qualification['Qualification']['qualification_description']); ?>
		</p>

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
