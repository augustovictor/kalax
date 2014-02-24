<div class="services">
	<div id="body" class="span8">

			<h4>
				Services
			</h4>					

			<div class="accordion" id="accordion2">
				<?php foreach($services as $service): ?>
				  <div class="accordion-group">
				    <div class="accordion-heading">
				      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse<?php echo $service['Service']['id']; ?>">
				       <strong> <?php echo $service['Service']['service_title']; ?></strong>
				      </a>
				    </div>
				    <div id="collapse<?php echo $service['Service']['id']; ?>" class="accordion-body collapse">
				      <div class="accordion-inner">
						<?php echo $service['Service']['service_description']; ?>
						<br />
				      </div>
				    </div>
				  </div>
				<?php endforeach; ?>
			</div>

		</div>
		<!-- End body -->
</div>

