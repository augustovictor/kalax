<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'Kalax');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('script');
	    echo $this->Bootstrap->load();

	?>
</head>
<body>
	<div id="container">
		<div class="navbar">
			<div class="navbar-inner">
				<?php echo $this->Html->link(__('Kalax Computer Systems - Admin'), array('controller' => 'services', 'action' => 'public_page'), array('class' => 'brand')) ?>
				<ul class="nav">
						<li><?php echo $this->Html->link(__('Services'), array('controller' => 'services', 'action' => 'public_page')); ?></li>
						<li><?php echo $this->Html->link(__('Products'), array('controller' => 'products', 'action' => 'public_page')); ?></li>
						<li><?php echo $this->Html->link(__('Jobs'), array('controller' => 'jobs', 'action' => 'public_page')); ?></li>
						<li><?php echo $this->Html->link(__('Events'), array('controller' => 'events', 'action' => 'public_page')); ?></li>
						<li><?php echo $this->Html->link(__('Qualifications'), array('controller' => 'qualifications', 'action' => 'public_page')); ?></li>
					<li>
						<?php 
							if (AuthComponent::user()) {
								echo '<strong>Hello, ' . AuthComponent::user('username') . '</strong>';
								echo $this->Html->link(__('Logout'), array('controller' => 'users', 'action' => 'logout')); 
								echo $this->Html->link(__('Admin'), array('controller' => 'jobs', 'action' => 'index'));
							} 
						?>
						<?php if (!AuthComponent::user()) echo $this->Html->link(__('Login'), array('controller' => 'users', 'action' => 'login')); ?>
					</li>
				</ul>


			</div>
		</div>
		<div id="header">
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
