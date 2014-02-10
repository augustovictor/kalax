<div class="qualifications form">
<?php echo $this->Form->create('Qualification', array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Add Qualification'); ?></legend>
	<?php
		echo $this->Form->input('qualification_position');
		echo $this->Form->input('qualification_visible');
		echo $this->Form->input('qualification_path', array('type' => 'file'));
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

		<li><?php echo $this->Html->link(__('List Qualifications'), array('action' => 'index')); ?></li>
	</ul>
</div>
