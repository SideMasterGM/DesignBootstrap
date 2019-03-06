<div class="">
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-12">
				<div class="col-12 col-md-10 mx-auto">	
					<h3 class="t-color2 mt-3 text-center1 font-h2">Contact Us</h3>
					<p class="text-center1"> <?php echo $Phrase[0];?></p>
					<hr class="border3">
				</div>
				<div class="row">
					<div class="col-md-5 t-color2">						
						<p class="pt-md-5"><i class="fa fa-phone btn t-color3 font-h4 px-2 py-2 border-none"></i> <a href="<?php echo "$PhoneRef";?>" class="t-color2 t-color2-hover" title="<?php echo "$Phone";?>"><?php echo "$Phone";?></a></p>
						<p class="d-block d-md-none"><i class="fa fa-envelope btn t-color3 font-h4 px-2 py-2 border-none"></i> <a href="<?php echo "$MailRef";?>" title="<?php echo "$Mail";?>" class="t-color2 t-color2-hover">Send an E-Mail</a></p>
						<p class="d-none d-md-block"><i class="fa fa-envelope btn t-color3 font-h4 px-2 py-2 border-none"></i> <a href="<?php echo "$MailRef";?>" title="<?php echo "$Mail";?>" class="t-color2 t-color2-hover"><?php echo "$Mail";?></a></p>
						<p><i class="fa fa-home btn t-color3 font-h4 px-2 py-2 border-none"></i> <?php echo "$Address" ?></p>
					</div>
					<div class="col-md-3 t-color2 border-left-right">						
						<p class="pt-md-5"><i class="fa fa-group btn t-color3 font-h4 px-2 py-2 border-none"></i> <?php echo "$Experience";?></p>
						<p><i class="fa fa-clock-o btn t-color3 font-h4 px-2 py-2 border-none"></i> <?php echo "$Schedule";?></p>
					</div>
					<div class="col-md-4 t-color2">
						<p class="pt-md-5"><i class="fa fa-file btn t-color3 font-h4 px-2 py-2 border-none"></i> <?php echo "$Estimates";?></p>
						<p><i class="fa fa-money btn t-color3 font-h4 px-2 py-2 border-none"></i> <?php echo "$Payment";?></p>
						<!-- <p><img src="images/elements/cards.png" class="img-fluid"/></p> -->
						<div class="col-12 col-sm-12 pt-1 pb-4">
		                  <a class="px-3" href="<?php echo $facebook;?>"><i class="fa fa-facebook t-color2 t-color3-hover font-h4" aria-hidden="true"></i></a>
		                  <a class="px-3" href="<?php echo $googleplus;?>"><i class="fa fa-google-plus t-color2 t-color3-hover font-h4" aria-hidden="true"></i></a>
		                </div>
					</div>
				</div>
			</div>
		</div>		
		<div class="row padding3">
			<div class="col-12 col-sm-12 col-md-7 border bordering bg-light border-radius-3 padding1">
				<div class="row widget bordering">
					<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<h3 class="text-center t-color3">Get In Touch</h3><hr class="border3">
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
							<div class="row">
								<div class="col-md-6">
									<input name="firstname" type="text" id="firstname" class="customclass">
									<div class="form-group">
										<label class="t-color2"><i class="fa fa-user t-color3"></i> Name <span class="required">*</span></label>
											<input required type="text"
															value=""
															data-msg-required="Please enter your name."
															class="form-control"
															name="name" id="name">
									</div>
								</div>
							
								<div class="col-md-6">
									<div class="form-group">
										<label class="t-color2"><i class="fa fa-envelope t-color3"></i> Email <span class="required">*</span></label>
											<input required type="email" 
															value=""
															data-msg-required="Please enter your email address."
															data-msg-email="Please enter a valid email address."
															class="form-control"
															name="email"
															id="email">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="t-color2"><i class="fa fa-phone t-color3"></i> Phone <span class="required">*</span></label>
											<input required type="tel"
															maxlength="15"
															minlength="10" 
															value=""
															data-msg-required="Please enter the phone."
															class="form-control"
															name="phone"
															id="phone">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="t-color2"><i class="fa fa-list t-color3"></i> Write the Code</label>
										<input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>">
										<img src="captcha.php" />
										<input name="captcha" class="form-control" type="text" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="t-color2"><i class="fa fa-group t-color3"></i> Subject <span class="required">*</span></label>
											<input required type="text"
															value=""
															data-msg-required="Please enter your subject."
															class="form-control"
															name="subject" id="subject">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="t-color2"><i class="fa fa-comment t-color3"></i> Message <span class="required">*</span></label>
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
								<div class="col-md-12">									
									<input type="submit" value="Send Message" class="boton1" data-loading-text="Loading...">									
								</div>
							</div>
							<input type="hidden" name="url" id="dir"/>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-5 mt-3">
				<?php echo $GoogleMap;?>
			</div>
		</div>
	</div>
</div>