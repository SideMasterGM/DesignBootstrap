<div class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h3 class="t-color3 font-h2">Our Info</h3>
				<hr>
			</div>		
			<div class="col-12 col-sm-12 col-md-4 col-lg-4">				
				<p class="t-color2"><i class="fa fa-phone t-color2 py-2"></i> Main: <a href="<?php echo "$PhoneRef";?>" class="t-color3 t-color2-hover" title="<?php echo "$Phone";?>"><?php echo "$Phone";?></a></p>
				<p class="t-color2"><i class="fa fa-phone t-color2 py-2"></i> Phone: <a href="<?php echo "$Phone2Ref";?>" class="t-color3 t-color2-hover" title="<?php echo "$Phone2";?>"><?php echo "$Phone2";?></a></p>
				<p class="t-color2"><i class="fa fa-envelope b-color2  py-2"></i> <a href="<?php echo "$MailRef";?>" title="<?php echo "$Mail";?>" class="t-color3 t-color2-hover fontMail"><?php echo "$Mail";?></a></p>
			</div>
			<div class="col-12 col-sm-12 col-md-4 col-lg-4">
				<p class="t-color2 fontMail"><i class="fa fa-home t-color2 py-2"></i> <?php echo "$Address" ?></p>
				<p class="t-color2 fontMail"><i class="fa fa-clock-o t-color2 py-2"></i> <?php echo "$Schedule";?></p>
				<p class="t-color2 fontMail"><i class="fa fa-clock-o t-color2 py-2"></i> <?php echo "$Schedule2";?></p>
			</div>
			<div class="col-12 col-sm-12 col-md-4 col-lg-4">
				<p class="t-color2 fontMail"><i class="fa fa-flag t-color2 py-2"></i> <?php echo "$License";?></p>
				<p class="t-color2 fontMail"><i class="fa fa-flag t-color2 py-2"></i> <?php echo "$License1";?></p>
				<p class="t-color2 fontMail"><i class="fa fa-money t-color2 py-2"></i> <?php echo "$Payment";?></p>			
				
				<!-- <div class="col-12 col-sm-12 pt-1 pb-4">
                  <a class="px-3" href="<?php echo $facebook;?>"><i class="fa fa-facebook t-color2 t-color3-hover font-h4" aria-hidden="true"></i></a>
                  <a class="px-3" href="<?php echo $googleplus;?>"><i class="fa fa-google-plus t-color2 t-color3-hover font-h4" aria-hidden="true"></i></a>
                  <a class="px-3" href="<?php echo $youtube;?>"><i class="fa fa-youtube t-color2 t-color3-hover font-h4" aria-hidden="true"></i></a>
       			    <img src="images/elements/cards.png" class="img-fluid"/> 
              	</div> -->
			</div>
		</div>
		<div class="row pt-5">
			<div class="col-12 col-sm-12 col-lg-10 mx-auto">
				<div class="row widget border bordering py-2">
					<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<h3 class="text-center t-color3 font-h2">Free Estimates</h3><hr class="border3">
						<?php @session_start();?>
						<style>
						.customclass{
							display:none;
						}
						</style>
						<?php 
							$_SESSION['token'] = md5(microtime());
						?>
						<form action="contact2.php" method="post">
							<div class="row pt-5">
								<div class="col-lg-4">
									<input name="firstname" type="text" id="firstname" class="customclass">
									<div class="form-group">
										<label class="t-color3"><i class="fa fa-user t-color3"></i> First and Last Name <span class="required">*</span></label>
											<input required type="text"
															value=""
															placeholder="Full Name" 
															data-msg-required="Please enter your first and Last Name."
															class="form-control"
															name="name" id="name">
									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group">
										<label class="t-color3"><i class="fa fa-envelope t-color3"></i> Email <span class="required">*</span></label>
											<input required type="email" 
															value=""
															placeholder="E-mail" 
															data-msg-required="Please enter your email address."
															data-msg-email="Please enter a valid email address."
															class="form-control"
															name="email"
															id="email">
									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group">
										<label class="t-color3"><i class="fa fa-phone t-color3"></i> Phone <span class="required">*</span></label>
											<input required type="tel"
															maxlength="15"
															minlength="10" 
															placeholder="e.g. 8886710037" 
															value=""
															data-msg-required="Please enter the phone."
															class="form-control"
															name="phone"
															id="phone">
									</div>
								</div>
							</div>
							<div class="row">								
								<div class="col-md-12">
									<div class="form-group">
										<label class="t-color3"><i class="fa fa-home t-color3"></i> Street Address Where Service is Needed<span class="required">*</span></label>
											<input required type="text"
															value=""
															placeholder="Full Adrress" 
															data-msg-required="Please enter your address."
															class="form-control"
															name="address" id="address">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<label class="t-color3"><i class="fa fa-list t-color3"></i> I'm Interested in the following Services:</label>
								</div>								
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-6 col-lg-3">
											<div class="form-group"><label class="t-color4"> No / Yes</label><br>
												<label class="switch">
												  <input type="checkbox" value="Landscaping" name="services1">
												  <span class="slider round"></span>
												</label>
												<label><b> Landscaping</b></label>
											</div>
										</div>
										<div class="col-md-6 col-lg-3">
											<div class="form-group">
											<label class="t-color4"> No / Yes</label><br>
												<label class="switch">
												  <input type="checkbox" value="Rockwalls" name="services2">
												  <span class="slider round"></span>
												</label>
												<label><b> Rockwalls</b></label>
											</div>
										</div>
										<div class="col-md-6 col-lg-3">
											<div class="form-group"><label class="t-color4">No / Yes</label><br>
												<label class="switch">
												  <input type="checkbox" value="Pavers Patio" name="services3">
												  <span class="slider round"></span>
												</label>
												<label><b> Pavers Patio</b></label>
											</div>
										</div>
										<div class="col-md-6 col-lg-3">
											<div class="form-group"><label class="t-color4"> No / Yes</label><br>
												<label class="switch">
												  <input type="checkbox" value="Lawn Maintenance" name="services4">
												  <span class="slider round"></span>
												</label>
												<label><b> Lawn Maintenance</b></label>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="row">
										
									</div>
									<div class="row">
										
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="t-color3"><i class="fa fa-handshake-o t-color3"></i> How did you hear about us? <span class="required">*</span></label>

											<select class="form-control" name="heardAbout" required>
											  <option value="none">Please select how you heard about us</option>
											  <option value="Referral">Referral</option>
											  <option value="Web Search">Web Search</option>
											  <option value="Marketing Material">Marketing Material</option>
											  <option value="Saw our Sign">Saw our Sign</option>
											  <option value="Saw our Truck">Saw our Truck</option>
											</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="t-color3"><i class="fa fa-group t-color3"></i> Subject <span class="required">*</span></label>
										<input required type="text"
											value=""
											placeholder="Subject *"
											data-msg-required="Please enter your subject."
											class="form-control"
											name="subject" id="subject">
									</div>
								</div>
							</div>
							<div class="row">
								
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="t-color3"><i class="fa fa-comment t-color3"></i> Message <span class="required">*</span></label>
											<textarea
											data-msg-required="Please enter your message."
											rows="4"
											class="form-control"
											name="message"
											id="message"></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="t-color3"><i class="fa fa-list t-color3"></i> Write the Code</label>
										<input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>">
										<img src="captcha.php" />
										<input name="captcha" class="form-control" type="text" required>
									</div>
								</div>
								<div class="col-md-6 pt-4">									
									<input type="submit" value="Send Message" class="boton4" data-loading-text="Loading...">
									
								</div>
							</div>
							<input type="hidden" name="url" id="dir"/>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>