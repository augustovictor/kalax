<div class="qualifications">
	<div id="body" class="span8">
		<h4>
			Professional qualifications
		</h4>

		
		<?php foreach($qualifications as $qualification): ?>
			<div class="team_member_container">
				<?php echo $this->Html->image($qualification['Qualification']['qualification_path']); ?>">
				<div class="team_member_desc">
					<ul class="unstyled">
						<li> <strong><?php echo $qualification['Qualification']['qualification_name']; ?></strong> </ame></li> 
						<li> <strong><?php echo $qualification['Qualification']['qualification_role']; ?></strong> </li>
						<li class="pull-right team_member_more"> <a class="team_member_more_link">More</a> </li>
						<li> <br /> </li>
						<li> <?php echo $qualification['Qualification']['qualification_description']; ?> </li>
					</ul>
				</div>
			</div>
			<!-- End team_member_container -->
		<?php endforeach; ?>
	</div>
</div>
<!-- End body -->