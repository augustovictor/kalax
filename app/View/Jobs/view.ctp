<div class="jobs view">
<h2><?php echo __('Job'); ?></h2>

		<p>
			<strong><?php echo __('Job Visible'); ?></strong>
		<br>
			<?php echo h($job['Job']['job_visible']); ?>
		</p>

		<p>
			<strong><?php echo __('Job Title'); ?></strong>
		<br>
			<?php echo h($job['Job']['job_title']); ?>
		</p>

		<p>
			<strong><?php echo __('Job Discipline'); ?></strong>
		<br>
			<?php echo h($job['Job']['job_discipline']); ?>
		</p>

		<p>
			<strong><?php echo __('Job Vacancies'); ?></strong>
		<br>
			<?php echo h($job['Job']['job_vacancies']); ?>
		</p>

		<p>
			<strong><?php echo __('Job Deadline'); ?></strong>
		<br>
			<?php echo h($job['Job']['job_deadline']); ?>
		</p>

		<p>
			<strong><?php echo __('Job Location'); ?></strong>
		<br>
			<?php echo h($job['Job']['job_location']); ?>
		</p>

		<p>
			<strong><?php echo __('Job Start Date'); ?></strong>
		<br>
			<?php echo h($job['Job']['job_start_date']); ?>
		</p>

		<p>
			<strong><?php echo __('Job Term'); ?></strong>
		<br>
			<?php echo h($job['Job']['job_term']); ?>
		</p>

		<p>
			<strong><?php echo __('Job Hourly Rate'); ?></strong>
		<br>
			<?php echo h($job['Job']['job_hourly_rate']); ?>
		</p>

		<p>
			<strong><?php echo __('Job Hours'); ?></strong>
		<br>
			<?php echo h($job['Job']['job_hours']); ?>
		</p>

		<p>
			<strong><?php echo __('Job Description'); ?></strong>
		<br>
			<?php echo nl2br(h($job['Job']['job_description'])); ?>
		</p>

		<p>
			<strong><?php echo __('Job Skills'); ?></strong>
		<br>
			<?php echo nl2br(h($job['Job']['job_skills'])); ?>
		</p>

		<p>
			<strong><?php echo __('Job Key Requirements'); ?></strong>
		<br>
			<?php echo nl2br(h($job['Job']['job_key_requirements'])); ?>
		</p>

</div>
<div class="actions">
<strong>	<h3><?php echo __('Actions'); ?></h3></strong>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Job'), array('action' => 'edit', $job['Job']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Job'), array('action' => 'delete', $job['Job']['id']), null, __('Are you sure you want to delete # %s?', $job['Job']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('action' => 'add')); ?> </li>
	</ul>
</div>
