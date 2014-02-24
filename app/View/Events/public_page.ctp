<div class="events">
	<div id="body" class="span8">
		<h4>
			Kalax in the community
		</h4>

		<div id="myCarousel2" class="carousel slide photos_carousel">
			<!-- <ol class="carousel-indicators">
				<li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel2" data-slide-to="1">  </li>
				<li data-target="#myCarousel2" data-slide-to="2">  </li>
			</ol> -->

			<div class="carousel-inner">

				<?php foreach($events as $event): ?>
					<div class="item <?php if($event['Event']['event_position'] == 1) echo 'active'; ?>"> 
						<?php echo $this->Html->image($event['Event']['event_path'], array('class' => 'gallery_img')); ?> 
						
						<div class="carousel-caption subtitle_no_style">
							<p> <?php echo $event['Event']['event_description']; ?> </p>
						</div>
					</div>
				<?php endforeach; ?>
				
			</div>

			<a class="carousel-control left" href="#myCarousel2" data-slide="prev">&lsaquo;</a>
			<a class="carousel-control right" href="#myCarousel2" data-slide="next">&rsaquo;</a>

		</div>
		<!-- End myCarousel2 -->
	</div>
	<!-- End body -->
</div>