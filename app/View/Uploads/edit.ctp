<div class="uploads form">
<?php echo $this->Form->create('Upload', array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Edit Upload'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('upload_path', array('type' => 'file', 'label' => 'Upload file (the file will keep the same if there is no new file)'));
		echo $this->Form->input('upload_description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Upload.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Upload.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Uploads'), array('action' => 'index')); ?></li>
	</ul>
</div>
