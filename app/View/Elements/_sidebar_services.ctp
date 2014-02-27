<div class="sidebar">
	<a href="#camerasModal" class="btn btn-large full_fil_side_bar_size gray_link" role="button" data-toggle="modal">
		Check out cameras
	</a>


	<br />
	<br />
	
	<div id="book_call_btn">
		<a class="btn dropdown-toggle btn-large full_fil_side_bar_size gray_link" data-toggle="dropdown" href="#">
			Book a call for today
			<!-- We call you -->
		</a>
	</div>
	<form id="call_booking_form" action="functions/book_call.php" method="post">
		<div id="call_booking_container">
			<div class="input-prepend">
				<span class="add-on">
					<i class="icon-user"></i>
				</span>
				<input class="side_bar_input" type="tel" name="name" placeholder="Name" required="true" pattern="[a-z A-Z]*"/>
			</div>

			<div class="input-prepend">
				<span class="add-on">
					P
				</span>
				<input class="side_bar_input" type="text" name="phone" placeholder="Phone number" required="true"/>
			</div>

			<div class="input-prepend">
				<span class="add-on">
					@
				</span>
				<input class="side_bar_input" type="email" name="mail" placeholder="E-mail" required="true"/>
			</div>

			<!-- <span class="help-block">Select from 9:30 am - 5:30 pm</span> -->

			<div class="input-prepend">
				<span class="add-on">
					<i class="icon-time"></i>
				</span>
				<select id="book_call_time_select" name="time">
					<option value="Any time: 9:30am - 5:00pm">Any time[9:30am - 5:00pm]</option>
					<option value="9.30 am">9:30 am</option>
					<option value="10 am">10:00 am</option>
					<option value="10.30 am">10:30 am</option>
					<option value="11 am">11:00 am</option>
					<option value="11.30 am">11:30 am</option>
					<option value="1 pm">1:00 pm</option>
					<option value="1.30 pm">1:30 pm</option>
					<option value="2 pm">2:00 pm</option>
					<option value="2.30 pm">2:30 pm</option>
					<option value="3 pm">3:00 pm</option>
					<option value="3.30 pm">3:30 pm</option>
					<option value="4 pm">4:00 pm</option>
					<option value="4.30 pm">4:30 pm</option>
					<option value="5">5:00 pm</option>
				</select>
			</div>

			<!-- <div>
				<label class="radio inline">
					<input id="option_time_am" type="radio" name="option_radio_time" value="am" />
					am
				</label>

				<label class="radio inline">
					<input id="option_time_pm" type="radio" name="option_radio_time" value="pm" />
					pm
				</label>
			</div> -->

			<br />

			<input type="submit" value="Done" class="btn" />
		</div>
		<!-- End call_booking_container -->
	</form>

	<h4 class="title_border">
		Services
	</h4>

	<ul class="unstyled styled_list">
		<?php foreach($services as $service): ?>
			<li>
				<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse<?php echo $service['Service']['id']; ?>">
			       <strong> <?php echo ucfirst($service['Service']['service_title']); ?></strong>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>

	<?php echo $this->Html->link(__('More services'), array('controller' => 'services', 'action' => 'public_page'), array('class' => 'btn btn-mini pull-right')); ?>

	<br>

	<!-- <h4 class="title_border">
		News
	</h4>

	<div class="feeds_visible_container">
		<div id="feeds_container" style="width: 0px;">

		
		


		</div> -->
		<!-- End feeds_container -->
	<!-- </div>

	<button id="prev_feed" type="button" class="btn">
		<i class="icon-arrow-left"> </i>				
	</button>

	<a href="http://eepurl.com/fLllY" class="btn btn-mini sign_up_news_btn" target="_blank">
		Newsletter sign up
	</a>

	<button id="next_feed" type="button" class="btn pull-right">
		<i class="icon-arrow-right"> </i>				
	</button> -->

	<hr class="hr1">

	<br>

	<p class="text-center">
		<a href="http://www.jdoqocy.com/click-7071860-10376674" target="_top">

		<img src="http://www.awltovhc.com/image-7071860-10376674" width="0" height="0" alt="Bluehost Web Hosting $6.95" border="0" style="display: none !important; visibility: hidden !important; opacity: 0 !important; background-position: 120px 60px;"></a><br>
		
		<a href="http://www.jdoqocy.com/click-7071860-10376739" target="_top">
			Easy Web Hosting $6.95
		</a>
		<img src="http://www.awltovhc.com/image-7071860-10376739" width="0" height="0" border="0" style="display: none !important; visibility: hidden !important; opacity: 0 !important; background-position: 1px 1px;">
	</p>



	<div id="camerasModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="camerasModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
			<h3 id="camerasModalLabel"> Our cameras</h3>
			<br />
			<small>To view this live feed QuickTime 7 or higher must be installed. To download it click <a href="http://www.apple.com/quicktime/download/" target="_blank"><strong>here</strong></a>.</small>

		</div>

		<div class="modal-body">
			<div class="tabbable tabs-left">
				<ul class="nav nav-tabs">
					<li class="active"> 
						<a href="#tab1" data-toggle="tab"> Kalax Office </a>
					</li>

					<li class=""> 
						<a href="http://www.nordictrails-tb.on.ca/webcam.htm" target="_blank"> Thunder Bay Nordic Trails </a>
					</li>

					<li class=""> 
						<a href="http://www.whitewatergolf.com/webcam/webcam.htm" target="_blank"> White Water Golf </a>
					</li>

					<li class=""> 
						<a href="http://www.seehawaiilive.com/oahu/waikiki-hotels" target="_blank"> Resorts </a>
					</li>
					<!-- <li> <a href="#tab2" data-toggle="tab"> Kamview </a></li>
					<li> <a href="#tab3" data-toggle="tab"> Whitewater Golf Course </a></li> -->
				</ul>

				<div class="tab-content">
					<div id="tab1" class="tab-pane active">
						<object style="margin: 0px 20px" classid="clsid:02bf25d5-8c17-4b23-bc80-d3488abddc6b" width="640" height="495" codebase="http://www.apple.com/qtactivex/qtplugin.cab">
							<param name="src" value="sample.qtif">
							<param name="autoplay" value="true">
							<param name="qtsrc" value="rtsp://kalax.dyndns.org/live.sdp">
							<embed src="sample.qtif" width="640" height="495" qtsrc="rtsp://kalax.dyndns.org/live.sdp"></embed>
						</object>
					</div>

					<!-- <div id="tab2" class="tab-pane">
						<p>Camera 2</p>
					</div>

					<div id="tab3" class="tab-pane">
						<p>Camera 3</p>
					</div> -->
				</div>
			</div>
		</div>

		<div class="modal-footer">
			<button type="button" class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
		</div>
	</div>
</div>