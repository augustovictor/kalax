<div class="products">
	<div id="body" class="span8">
		<h4>
			Products
		</h4>

			<ul class="nav nav-tabs" id="myTab">
				<?php foreach($businesses as $business): ?>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<?php echo ucfirst($business['Business']['title']); ?>
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<?php foreach($categories as $category): ?>
								<?php if($business['Business']['id'] == $category['Category']['business_id']): ?>
									<li> 
										<a data-toggle="tab" href="<?php echo '#' . $category['Category']['category_name'] . $business['Business']['title']; ?>">
											<?php if($business['Business']['id'] == $category['Category']['business_id']) echo $category['Category']['category_name']; ?>
										</a> 
									</li>
								<?php endif; ?>
							<?php endforeach; #categories ?>
						</ul>
					</li>
				<?php endforeach; #business ?>
			</ul>

			<div class="tab-content">
				<?php foreach($businesses as $business): ?>
					<?php foreach($categories as $category): ?>
						<?php if($category['Category']['business_id'] == $business['Business']['id']): ?>
							<div class="tab-pane" id="<?php echo $category['Category']['category_name'] . $business['Business']['title']; ?>">
								<strong><?php echo ucfirst($category['Category']['category_name']); ?></strong>
								<br>
								<br>
								<?php foreach($products as $product): ?>
									<?php if($product['Product']['category_id'] == $category['Category']['id']): ?>
										<?php echo $product['Product']['name']; ?>
										<?php echo $this->Html->image(__($product['Product']['image_path'])); ?>
										<br>
									<?php endif; ?>
								<?php endforeach; #products?>
							</div>
						<?php endif; ?>
					<?php endforeach; #categories ?>
				<?php endforeach; #businesses ?>
			</div>
			<!-- End tab-content -->

	</div>
	<!-- End body -->
</div>
<script>
  	$(function () {
		$('#myTab a:last').tab('show');
	})
	$('a[data-toggle="tab"]').on('shown', function (e) {
		e.target // activated tab
		e.relatedTarget // previous tab
	})
	$('#myTab a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	})
</script>