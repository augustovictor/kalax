<div class="jobs form">
<?php echo $this->Form->create('Job'); ?>
	<fieldset>
		<legend><?php echo __('Add Job'); ?></legend>
	<?php
		echo $this->Form->input('job_visible');
		echo $this->Form->input('job_title');
		echo $this->Form->input('job_discipline');
		echo $this->Form->input('job_vacancies');
		echo $this->Form->input('job_deadline');
		echo $this->Form->input('job_location');
		echo $this->Form->input('job_start_date');
		echo $this->Form->input('job_term');
		echo $this->Form->input('job_hourly_rate');
		echo $this->Form->input('job_hours');
		echo $this->Form->input('job_description');
		echo $this->Form->input('job_skills');
		echo $this->Form->input('job_key_requirements');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Jobs'), array('action' => 'index')); ?></li>
	</ul>
</div>
