<div class="client_area">
	<div id="body" class="span8">

			<h4>
				Client area
			</h4>					

			<div>

				<p>
					Welcome to the Kalax Client Area. From here you can use these links to access some of our online services. Keep in mind they do require authentication. If you haven't received a login yet please call our office at (807) 623-4566 and speak to one of our professionals.
				</p>

				<div class="accordion" id="accordion2">

				  <div class="accordion-group">
				    <div class="accordion-heading">
				      <a class="accordion-toggle" target="_blank" href="http://www.kalax.on.ca/client_FTP/">
				        FTP Login
				      </a>
				    </div>
				  </div>

				  <div class="accordion-group">
				    <div class="accordion-heading">
				      <a class="accordion-toggle" target="_blank" href="http://www.kalax.on.ca/reminder">
				        Reminder System
				      </a>
				    </div>
				  </div>

				  <!-- <div class="accordion-group">
				    <div class="accordion-heading">
				      <a class="accordion-toggle" target="_blank" href="http://www.kalax.on.ca/calendar/Web">
				        CCalendar Login
				      </a>
				    </div>
				  </div> -->

				  <div class="accordion-group">
				    <div class="accordion-heading">
				      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
				        Remote Support
				      </a>
				    </div>
				    <div id="collapseTwo" class="accordion-body collapse">
				      <div class="accordion-inner">
						<form method="POST" action="http://go.mikogo.com">
							<input type="hidden" name="sl" id="value=" en"="">
							<input type="hidden" id="cm" name="cm" value="1" checked="checked">
							<input type="hidden" name="css" id="value=" "="">
							<table border="0">
								<tbody><tr>
									<td>Session ID:</td>
									<td><input type="text" name="sid" id="sid"></td>
								</tr>
								<tr> 
									<td>Password:</td>
									<td><input type="text" name="sp" id="sp"></td>
								</tr><tr>
								</tr><tr>
									<td>Name:</td>
									<td><input type="text" name="sn" id="sn"></td>
								</tr>
								<tr>
									<td></td>
									<td><input class="btn" type="submit" value="Join Session" name="btnSubmit" id="btnSubmit"></td>
								</tr>
							</tbody></table>
						</form> <!-- Powered By Mikogo http://www.mikogo.com/ -->
				      </div>
				    </div>
				  </div>


				  <div class="accordion-group">
				    <div class="accordion-heading">
				      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
				        Remote Training
				      </a>
				    </div>
				    <div id="collapseThree" class="accordion-body collapse">
				      <div class="accordion-inner">
						<form method="POST" action="http://go.mikogo.com" id="">
							<input type="hidden" name="sl" id="value=" en"="">
							<input type="hidden" name="css" id="value=" "="">
							<table border="0">
								<tbody><tr>
									<td>Session ID:</td>
									<td><input type="text" name="sid" id="sid"></td>
								</tr>
								<tr> 
									<td>Password:</td>
									<td><input type="text" name="sp" id="sp"></td>
								</tr><tr>
								</tr><tr>
									<td>Name:</td>
									<td><input type="text" name="sn" id="sn"></td>
								</tr>
								<tr>
									<td>Connection Method:</td>
									<td class="pull-right">
										<label class="radio inline">
											<input type="radio" id="cm" name="cm" value="1" checked="checked">Standard<br>
										</label>
										<label class="radio inline">
											<input type="radio" id="cm" name="cm" value="2">HTML Viewer
										</label>
									</td>
								</tr>
								<tr>
									<td></td>
									<td><input class="btn" type="submit" value="Join Session" name="btnSubmit" id="btnSubmit"></td>
								</tr>
							</tbody></table>
						</form> <!-- Powered By Mikogo http://www.mikogo.com/ -->
				      </div>
				    </div>
				  </div>
				</div>

				<h4>
					Files
				</h4>

				<ul>
					<?php foreach($uploads as $upload): ?>
					    <li><?php echo $this->Html->link(__($upload['Upload']['title']), array('controller' => 'uploads', 'action' => 'download', $upload['Upload']['id'])); ?></li>
					<?php endforeach; ?>
				</ul>

				<ul class="unstiled">
					<li>
						<a href="http://kalax.on.ca/test/project/files/Apache.exe"> Free office version</a>
					</li>

					<li>
						<a href="http://kalax.on.ca/test/project/files/eav7_nt64_enu.msi"> Nod32 Home Edition - Version 7 64 bits</a>
					</li>

					<li>
						<a href="http://kalax.on.ca/uploads/eav_nt32_enu.msi"> Nod32 Home Edition - Version 7 32 bits</a>
					</li>

														</ul>



			</div>

		</div>
		<!-- End body -->
</div>

