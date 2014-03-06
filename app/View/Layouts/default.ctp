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
	    echo $this->Html->css('bootstrap-responsive');
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('style');

		echo $this->Html->script('jquery-1-11-0');
		echo $this->Html->script('custom-js');
		echo $this->Html->script('bootstrap.min');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	    // echo $this->Bootstrap->load();
		echo $scripts_for_layout;

	?>
</head>
<body>
	<div id="container">
		
		<div class="navbar">
			<div class="navbar-inner">
				<?php echo $this->Html->link(__('Kalax Computer Systems'), array('controller' => 'pages', 'action' => 'home'), array('class' => 'brand')) ?>
				<ul class="nav">
					<li><?php echo $this->Html->link(__('Home'), array('controller' => 'pages', 'action' => 'home')); ?></li>
					<!-- <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							Services
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<?php #foreach($services as $service): ?>
								<li> <?php #echo $this->Html->link(__($service['Service']['service_title']), array('controller' => 'services', 'action' => 'public_page')); ?> </li>
							<?php #endforeach; ?>
						</ul>
					</li> -->

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							Tec Direct
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li>
								<?php echo $this->Html->link(__('The company'), array('controller' => 'pages', 'action' => 'tec_direct')); ?>
							</li>

							<li>
								<?php echo $this->Html->link(__('Products'), array('controller' => 'products', 'action' => 'public_page')); ?>
							</li>
						</ul>
					</li>

					<li class="dropdown">
				      	<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				      		Drivers
				      		<b class="caret"> </b>
				      	</a>

				      	<ul class="dropdown-menu">

				      		<li class="dropdown-submenu"> 
				      			<a href="#"> 
				      				Pc/Notebook 
				      			</a> 
				      			<ul class="dropdown-menu">
						      		<li> <a target="_blank"  target="_blank" href="http://www.ibm.com/products/finder/ca/en/finders?pg=ddfinder"> IBM </a> </li>
						      		<li> <a target="_blank"  href="http://welcome.hp.com/country/ca/en/support.html?pageDisplay=drivers"> HP </a> </li>
						      		<li> <a target="_blank"  href="http://support.dell.com/support/downloads/index.aspx?c=ca&l=en&s=gen"> Dell </a> </li>
						      		<li> <a target="_blank"  href="http://support.gateway.com/support/drivers/dlcenter.asp"> Gateway </a> </li>
						      		<li> <a target="_blank"  href="http://www.touch-systems.ca/support/driver.html"> Touch </a> </li>
						      		<li> <a target="_blank"  href="http://www.acer.ca/ac/en/CA/content/drivers"> Acer </a> </li>
						      		<li> <a target="_blank"  href="http://esupport.sony.com/US/perl/select-system.pl?DIRECTOR=DRIVER"> Sony </a> </li>
						      		<li> <a target="_blank"  href="http://support.gateway.com/us/en/emac/product/default.aspx"> EMachine </a> </li>
						      		<li> <a target="_blank"  href="http://www.nec.com/global/support/downloads/index.html"> NEC </a> </li>
						      		<li> <a target="_blank"  href="http://www8.hp.com/ca/en/support.html"> Compaq </a> </li>
						      		<li> <a target="_blank"  href="http://www.official-drivers.com/installer/?seed=toshiba&gclid=CKv84Z7Hp7cCFcdFMgodcDIAZA"> Toshiba </a> </li>
						      		<li> <a target="_blank"  href="http://www.fujitsu.ca/support/"> Fujitsu </a> </li>
						      		<li> <a target="_blank"  href="http://support.asus.com/download/download.aspx?SLanguage=en-us"> Asus </a> </li>
						      		<li> <a target="_blank"  href="http://support.alienware.com/Support_Pages/Restricted_Pages/driver_downloads.aspx"> Alienware </a> </li>
						      		<li> <a target="_blank"  href="http://www.sharp.ca/downloads/default2.asp"> Sharp	 </a> </li>
				      			</ul>
				      		</li>

				      		<li class="dropdown-submenu"> 
				      			<a href="#"> 
				      				Network 
				      			</a> 
				      			<ul class="dropdown-menu">
						      		<li> <a target="_blank"  href="http://downloadcenter.intel.com/default.aspx"> Intel </a> </li>
						      		<li> <a target="_blank"  href="http://www.broadcom.com/support/?source=top"> Broadcom </a> </li>
						      		<li> <a target="_blank"  href="http://support.dell.com/support/downloads/index.aspx?c=ca&l=en&s=gen"> Dell </a> </li>
						      		<li> <a target="_blank"  href="http://support.dlink.ca/downloads/"> DLink </a> </li>
						      		<li> <a target="_blank"  href="http://www.buffalotech.com/support/downloads/"> Buffalo </a> </li>
						      		<li> <a target="_blank"  href="http://homesupport.cisco.com/en-ca/support"> Cisco-Linksys </a> </li>
						      		<li> <a target="_blank"  href="http://kbserver.netgear.com/downloads_support.asp"> Netgear </a> </li>
						      		<li> <a target="_blank"  href="http://www.belkin.com/support/"> Belkin </a> </li>
				      			</ul>
				      		</li>

				      		<li class="dropdown-submenu"> 
				      			<a href="#"> 
				      				Video 
				      			</a> 
				      			<ul class="dropdown-menu">
						      		<li> <a target="_blank" href="http://www.nvidia.com/Download/index.aspx?lang=en-us"> NVidea </a> </li>
						      		<li> <a target="_blank" href="http://ati.amd.com/support/driver.html"> ATI </a> </li>
						      		<li> <a target="_blank" href="http://downloadcenter.intel.com/default.aspx"> Intel </a> </li>
						      		<li> <a target="_blank" href="http://www.dmmsupport.com/index.php?action=file_library"> Diamond </a> </li>
						      		<li> <a target="_blank" href="http://www.visiontek.com/support/downloads/drivers.html"> VisionTek </a> </li>
						      		<li> <a target="_blank" href="http://www3.pny.com/support/support.aspx"> PNY </a> </li>
				      			</ul>
				      		</li>

				      		<li class="dropdown-submenu"> 
				      			<a href="#"> 
				      				Sound 
				      			</a> 
				      			<ul class="dropdown-menu">
						      		<li> <a target="_blank" href="http://www.realtek.com.tw/downloads/"> RealTek </a> </li>
						      		<li> <a target="_blank" href="http://us.creative.com/support/downloads/"> Creative Labs </a> </li>
						      		<li> <a target="_blank" href="http://turtlebeach.com/support/index.php?View=files"> Turtle Beach </a> </li>
						      		<li> <a target="_blank" href="http://www.dmmsupport.com/index.php?action=file_library"> Diamond </a> </li>
						      		<li> <a target="_blank" href="http://download.aopen.com.tw/Default.aspx?sDropDownCategory=Driver"> AOpen </a> </li>
				      			</ul>
				      		</li>

				      		<li class="dropdown-submenu"> 
				      			<a href="#"> 
				      				IP Cameras 
				      			</a> 
				      			<ul class="dropdown-menu">
						      		<li> <a target="_blank" href="http://www.vivotek.com/web/support/faq.aspx"> Vivotek </a> </li>
						      		<li> <a target="_blank" href="http://www.3jtech.com.tw/downloads/downloads.htm"> 3Jtech eCamit </a> </li>
				      			</ul>
				      		</li>

				      		<li class="dropdown-submenu"> 
				      			<a href="#"> 
				      				Printers 
				      			</a> 
				      			<ul class="dropdown-menu">
						      		<li> <a target="_blank" href="http://welcome.solutions.brother.com/bsc/Public/CountryTop.aspx?reg=us&c=ca&lang=en"> Brother </a> </li>
						      		<li> <a target="_blank" href="http://www.canon.ca/inetCA/suppdrv?m=load"> Canon </a> </li>
						      		<li> <a target="_blank" href="http://support.dell.com/support/downloads/index.aspx?c=ca&l=en&s=gen"> Dell </a> </li>
						      		<li> <a target="_blank" href="http://www.epson.ca/cgi-bin/ceStore/support/SupportIndex.jsp?BV_UseBVCookie=yes"> Epson </a> </li>
						      		<li> <a target="_blank" href="http://welcome.hp.com/country/ca/en/support.html?pageDisplay=drivers"> HP </a> </li>
						      		<li> <a target="_blank" href="http://support.lexmark.com/index?page=productSelection&channel=supportAndDownloads&locale=EN&userlocale=EN_US"> Lexmark </a> </li>
						      		<li> <a target="_blank" href="http://www.samsung.com/ca/support/download/supportDownloadMain.do"> Samsung </a> </li>
						      		<li> <a target="_blank" href="http://www.sharp.ca/downloads/default2.asp"> Sharp </a> </li>
						      		<li> <a target="_blank" href="http://www.support.xerox.com/go/prodselect.asp?Xlang=en_US&Xcntry=USA"> Xerox </a> </li>
				      			</ul>
				      		</li>
				      		
				      	</ul>

				      </li>
				    <li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								About us
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><?php echo $this->Html->link(__('Kalax in the community'), array('controller' => 'events', 'action' => 'public_page')); ?></li>
								<li><?php echo $this->Html->link(__('Professional qualifications'), array('controller' => 'qualifications', 'action' => 'public_page')); ?></li>
								<li><?php echo $this->Html->link(__('Partnerships'), array('controller' => 'pages', 'action' => 'partnerships')); ?></li>
								<li><?php echo $this->Html->link(__('Careers'), array('controller' => 'jobs', 'action' => 'public_page')); ?></li>
							</ul>
					</li>
					<li><a href="#contactForm" role="button" data-toggle="modal">Contact</a></li>
					<li> <?php echo $this->Html->link(__('Client area'), array('controller' => 'pages', 'action' => 'client_area')); ?> </li>
					<?php if (AuthComponent::user()): ?>
						<ul class="nav pull-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<?php echo '<strong>Hello, ' . AuthComponent::user('username') . '</strong>';?>
									<b class="caret"></b>
								</a>
								<ul class="dropdown-menu">
									<li><?php echo $this->Html->link(__('Admin'), array('controller' => 'jobs', 'action' => 'index')); ?></li>
									<li><?php echo $this->Html->link(__('Logout'), array('controller' => 'users', 'action' => 'logout')); ?></li>
								</ul>
							</li>
						</ul>
					<?php endif; ?>
				</ul>

			</div>
		</div>
		<div id="header">
			<div id="myCarousel" class="carousel slide">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<!-- <li data-target="#myCarousel" data-slide-to="1">  </li> -->
			<!-- <li data-target="#myCarousel" data-slide-to="2">  </li> -->
		</ol>

		<div class="carousel-inner">
			
			<div class="item active"> 
				<?php echo $this->Html->image('office-2.jpg'); ?>
				
				<div class="carousel-caption carousel-caption-margin">
					<div class="text_container_carousel">
						<!-- <h4> More than <?php# echo date("Y") - 1983; ?></h4> -->
						<p> As a Canadian-controlled, locally-owned corporate entity, we are excited to announce our <?php echo date("Y") - 1983; ?>st Anniversary providing long-standing, superior service throughout Thunder Bay and the surrounding area. </p>
					</div>
				</div>
			</div>
		</div>

		<!-- <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a> -->

	</div>
</div>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
			<?php if($this->params['controller'] == 'Services') echo $this->element('_sidebar'); ?>
			<?php if($this->params['controller'] != 'Services') echo $this->element('_sidebar'); ?>
		</div>

		<div id="footer">
			<div id="default_footer_container">
				<div class="text-center">
					<address>
						<p class="text-center">
							<strong style="color: blue">KALAX COMPUTER SYSTEMS INC.</strong><br>
							<p class="address">
								<strong>
									<a class="address_link gray_link decoration_underline">
										<i class="icon-map-marker"> </i>
										715 Hewitson St, Suite 1002 - 
										Thunder Bay, ON, Canada P7B 6B5
									</a>
								</strong>
								<br>
								<abbr title="Phone">P: (807) 623-4566 </abbr>
							</p>
						</p>
					</address>

					<hr class="hr1 hr_divider5"/>
					<br class="clear-fix"/>

					<div class="footer_menu_container span12">

						<ul class="unstyled footer_menu">
							<li> <strong> <?php echo $this->Html->link(__('Home'), array('controller' => '', 'action' => '')); ?> </strong></li>
						</ul>
						<ul class="unstyled footer_menu inline-block">
							<li> <strong> <?php echo $this->Html->link(__('Services'), array('controller' => '', 'action' => '')); ?> </strong> </li>
							<li> <?php echo $this->Html->link(__('Client Area'), array('controller' => '', 'action' => '')); ?> </li>
						</ul>

						<ul class="unstyled footer_menu">
							<li> <strong> <?php echo $this->Html->link(__('Tec Direct'), array('controller' => '', 'action' => '')); ?> </strong> </li>
							<li> <?php echo $this->Html->link(__('Products'), array('controller' => '', 'action' => '')); ?> </li>
						</ul>

						<!-- <ul class="unstyled footer_menu">
							<li> <strong> <a href="#">Web Store</a> </strong> </li>
						</ul> -->

						<ul class="unstyled footer_menu">
							<li> <strong> <?php echo $this->Html->link(__('Drivers'), array('controller' => '', 'action' => '')); ?> </strong> </li>
						</ul>

						<ul class="unstyled footer_menu">
							<li> <strong> <?php echo $this->Html->link(__('About us'), array('controller' => '', 'action' => '')); ?> </strong> </li>
							<li> <?php echo $this->Html->link(__('Kalax in the community'), array('controller' => '', 'action' => '')); ?> </li>
							<li> <?php echo $this->Html->link(__('Partnerships'), array('controller' => 'pages', 'action' => 'partnerships')); ?> </li>
							<li> <?php echo $this->Html->link(__('Professional qualifications'), array('controller' => '', 'action' => '')); ?> </li>
							<li> <?php echo $this->Html->link(__('Contact'), array('controller' => '', 'action' => '')); ?> </li>
							<li> <?php echo $this->Html->link(__('Employment'), array('controller' => '', 'action' => '')); ?> </li>
						</ul>


						<ul class="unstyled footer_menu">
							<li> <strong> <a href="http://www.kalax.on.ca/blog/" target="_blank">Blog</a> </strong> </li>
						</ul>

						<ul class="unstyled footer_menu">
							<li> <strong> <?php echo $this->Html->link(__('Admin'), array('controller' => 'users', 'action' => 'login')); ?> </strong> </li>
						</ul>
					</div>

				</div>
			</div>

			<div id="location_map">
				<div id="back_button_map" class="text-center">
					BACK
				</div>
				<iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt&amp;geocode=&amp;q=715+Hewitson+St,+Suite+1002+-+Thunder+Bay,+ON,+Canada+P7B+6B5+&amp;aq=&amp;sll=48.411428,-89.24057&amp;sspn=0.247033,0.617294&amp;ie=UTF8&amp;hq=&amp;hnear=715+Hewitson+St+%231002,+Thunder+Bay,+Ontario+P7B+5M6,+Canad%C3%A1&amp;t=m&amp;ll=48.404933,-89.254131&amp;spn=0.005698,0.008583&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
			</div>
		</div>
	</div>
	<!-- Contact Modal -->
	<div id="contactForm" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
	    <h3 id="myModalLabel">Contact us</h3>
	  </div>

		<?php 
			if(isset($success)) {
				echo '<p>' . $success . '</p>';
			} 
		?>

		<form id="contact_modal" action="functions/contact.php" method="POST">
		  <div class="modal-body">
		    	<div id="contact_container">
			    	<input type="text" name="name" placeholder="Name" required/>
			    	<input type="email" name="email" placeholder="Email" required/>
			    	<input type="text" name="phone" placeholder="Phone" />
		    	</div>
		    	<textarea rows="5" cols="13" name="text" placeholder="Message" required></textarea>
		  </div>
		  <div class="modal-footer">
		    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
		    <input class="btn btn-primary" type="submit" value="Send"/>
		  </div>
		</form>
	</div>
	<!-- End Contact Modal -->

	<?php #echo $this->element('sql_dump'); ?>
</body>
</html>
