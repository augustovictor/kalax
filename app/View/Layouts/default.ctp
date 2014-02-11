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
	    echo $this->Bootstrap->css();
		echo $this->fetch('script');
	    echo $this->Bootstrap->load();

	?>
</head>
<body>
	<div id="container">
		<div class="navbar">
			<div class="navbar-inner">
				<a class="brand" href="#">Kalax Computer Systems - Admin</a>
				<ul class="nav">
					<?php if (AuthComponent::user()): ?>
						<li><?php echo $this->Html->link(__('Services'), array('controller' => 'services', 'action' => 'index')); ?></li>
						<li><?php echo $this->Html->link(__('Products'), array('controller' => 'products', 'action' => 'index')); ?></li>
						<li><?php echo $this->Html->link(__('Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?></li>
						<li><?php echo $this->Html->link(__('News'), array('controller' => 'news', 'action' => 'index')); ?></li>
						<li><?php echo $this->Html->link(__('Events'), array('controller' => 'events', 'action' => 'index')); ?></li>
						<li><?php echo $this->Html->link(__('Qualifications'), array('controller' => 'qualifications', 'action' => 'index')); ?></li>
						<li><?php echo $this->Html->link(__('Users'), array('controller' => 'users', 'action' => 'index')); ?></li>
					<?php endif; ?>
					<li>
						<?php 
							if (AuthComponent::user()) {
								echo 'Hello, ' . AuthComponent::user('username');
								echo $this->Html->link(__('Logout'), array('controller' => 'users', 'action' => 'logout')); 
							} 
						?>
						<?php if (!AuthComponent::user()) echo $this->Html->link(__('Login'), array('controller' => 'users', 'action' => 'login')); ?>
					</li>
				</ul>


			</div>
		</div>
		<div id="header">
			<h1><?php echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
