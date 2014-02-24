<div class="jobs">
	<div id="body" class="span8">
		<h4>
			Careers
		</h4>

		<strong>HOW TO APPLY</strong> 
		<br />
		Submit a resume, and cover letter outlining your knowledge and experience in relation to this position. Our e-mail: <strong>info@kalax.on.ca</strong>
		<br />
		<br />

		<strong>VACANCIES</strong> 

		<div class="accordion" id="accordion2">
			<?php foreach($jobs as $job): ?>
			  <div class="accordion-group">
			    <div class="accordion-heading">
			      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse<?php echo $job['Job']['id']; ?>">
			       <strong> <?php echo $job['Job']['job_title']; ?></strong>
			      </a>
			    </div>
			    <div id="collapse<?php echo $job['Job']['id']; ?>" class="accordion-body collapse">
			      <div class="accordion-inner">
			        

					<strong>Discipline:</strong> <?php echo $job['Job']['job_discipline']; ?>
					<br />
					<strong>Vacancies:</strong> <?php echo $job['Job']['job_vacancies']; ?>
					<br />
					<strong>Application deadline:</strong>  <?php echo $job['Job']['job_deadline']; ?>
					<br />
					<strong>Position Location:</strong> <?php echo $job['Job']['job_location']; ?>
					<br />
					<strong>Start date:</strong> <?php echo $job['Job']['job_start_date']; ?>
					<br />
					<strong>Term: </strong><?php echo $job['Job']['job_term']; ?>
					<br />
					<strong>Hourly rate:</strong> <?php echo $job['Job']['job_hourly_rate']; ?>
					<br />
					<strong>Hours:</strong> <?php echo $job['Job']['job_hours']; ?>
					<br />
					<br />
					<strong>Job description </strong>
					<br />
					<?php echo $job['Job']['job_description']; ?>
					<br />
					<br />
					<strong>Qualifications and skills</strong>
					<br />
					<?php echo $job['Job']['job_skills']; ?>
					<br />
					<br />
					<strong>Key requirements</strong>
					<br />
					<?php echo $job['Job']['job_key_requirements']; ?>
					<br />
					<br />
			      </div>
			    </div>
			  </div>
			<?php endforeach; ?>
		</div>
	</div> 
	<!-- End body -->
</div>
