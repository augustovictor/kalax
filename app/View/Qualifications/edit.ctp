<div class="qualifications form">
<?php echo $this->Form->create('Qualification'); ?>
	<fieldset>
		<legend><?php echo __('Edit Qualification'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('qualification_position');
		echo $this->Form->input('qualification_visible');
		echo $this->Form->input('qualification_path');
		echo $this->Form->input('qualification_name');
		echo $this->Form->input('qualification_role');
		echo $this->Form->input('qualification_description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Qualification.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Qualification.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Qualifications'), array('action' => 'index')); ?></li>
	</ul>
</div>
