<div class="contact">
	<div id="body" class="span8">
		<h4>Kalax contact</h4>
		<?php
			$this->params['controller'] = 'pages';
			echo $this->Form->create('Contactform.Contactform');

			echo $this->Form->input('Contactform.Name', array('label' => __d('contactform', 'Name')));
			echo $this->Form->input('Contactform.Mail', array('label' => __d('contactform', 'Email')));
			echo $this->Form->input('Contactform.Message', array('type' => 'textarea', 'label' => __d('contactform', 'Message')));
			echo $this->Form->label('Contactform.Spamprotection', __d('contactform', 'Spam protection').': '.$calculation);
			echo $this->Form->input('Contactform.Spamprotection', array('label' => false, 'autocomplete' => 'off'));

			echo $this->Form->submit('Send', array('label' => __d('contactform', 'submit')));

			echo $this->Form->end();

		?>
	</div>
</div>