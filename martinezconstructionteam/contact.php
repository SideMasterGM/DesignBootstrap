<?php include 'php/section/header.php';?>
<style>
	.customclass{
		display:none!important;
	}
</style>
<?php
		$_SESSION['token'] = md5(microtime());
?>
<?php include 'php/section/click2call.php';?>
<div class="bar2">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2 class="t-Color2"><?php echo $Phrase[1];?></h2>
				<!-- <p class="t-black"><?php echo $Phrase[3];?></p> -->
				<hr class="mb-5">
				<div class="row">
					<div class="col-md-12 mt-3">
						<?php echo $GoogleMap;?>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-5 t-white mb-5">
				<div class="form-contact efecto1">
					<h2 class="t-white text-center">Contact Us Today!</h2>
					<form action="contact2.php" method="post" class="t-white">
						<div class="row">
							<div class="col-md-6">
								<input name="firstname" type="text" id="firstname" class="customclass">
								<div class="form-group">
									<label><i class="fa fa-user"></i> Name <span class="required">*</span></label>
									<input required type="text"
									value=""
									data-msg-required="Please enter your name."
									class="form-control"
									name="name" id="name">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label><i class="fa fa-phone"></i> Phone <span class="required">*</span></label>
									<input required type="tel"
									value=""
									maxlength="12"
									minlength="10"
									data-msg-required="Please enter the phone."
									class="form-control"
									name="phone"
									id="phone">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label><i class="fa fa-envelope-o"></i> Email <span class="required">*</span></label>
									<input required type="email"
									value=""
									data-msg-required="Please enter your email address."
									data-msg-email="Please enter a valid email address."
									class="form-control"
									name="email"
									id="email">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<lebel> <i class="fa fa-shield"></i> Security Code </lebel>
									<img src="captcha.php" />
									<input name="captcha" class="form-control" type="text" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label><i class="fa fa-commenting-o"></i> Subject <span class="required">*</span></label>
									<input required type="text"
									value=""
									data-msg-required="Please enter the subject."
									class="form-control"
									name="subject"
									id="subject">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>">
								<div class="form-group">
									<label><i class="fa fa-pencil"></i> Message <span class="required">*</span></label>
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
							<div class="col-md-12 text-center">

								<input type="submit" value="Send Message" class="hbtn hb-fill-middle2-rev-bg hpad2 hpill" data-loading-text="Loading...">
							</div>
						</div>
						<input type="hidden" name="url" id="dir"/>
					</form>
				</div>
			</div>
			<div class="col-md-6 t-black">
				<h2 class="t-Color2">Contact Information</h2>
				<ul class="icon-align-ul">
					<li><i class="fa fa-phone sr-contact icon-align"></i> <a href="<?php echo $PhoneRef;?>" class="t-black"><?php echo $Phone;?></a></li>
					<li>
						<span class="d-none d-sm-block"><i class="fa fa-envelope-o sr-contact icon-align"></i> <a class="t-black font-responsive" href="<?php echo $MailRef;?>"><?php echo $Mail;?></a></span>
					</li>
					<li>
						<span class="d-sm-none"><i class="fa fa-envelope-o sr-contact icon-align"></i> <a class="t-black font-responsive" href="<?php echo $MailRef;?>">Send us a Email</a></span>
					</li>
					<li>
						<span class="d-none d-sm-block"><i class="fa fa-envelope-o sr-contact icon-align"></i> <a class="t-black font-responsive" href="<?php echo $Mail2Ref;?>"><?php echo $Mail2;?></a></span>
					</li>
					<li>
						<span class="d-sm-none"><i class="fa fa-envelope-o sr-contact icon-align"></i> <a class="t-black font-responsive" href="<?php echo $Mail2Ref;?>">Send us a Email</a></span>
					</li>
					
					<li><i class="fa fa-home sr-contact  icon-align"></i> <?php echo $Address;?></li>
					<li>
						<span class="d-none d-sm-block"><i class="fa fa-map-marker sr-contact icon-align"></i> <?php echo $Cover;?></span>
					</li>
					<li>
						<span class="d-none d-sm-block"><i class="fa fa-clock-o sr-contact icon-align"></i> <?php echo $Schedule;?></span>
					</li>
					<li>
						<span class="d-sm-none"><i class="fa fa-clock-o sr-contact icon-align"></i> <?php echo $ScheduleFooter;?></span>
					</li>
					<li><i class="fa fa-drivers-license-o sr-contact icon-align"></i> <?php echo $License;?></li>
					<!-- <li><i class="fa fa-drivers-license-o sr-contact icon-align"></i> <?php echo $Lic;?></li> -->
					<li><i class="fa fa-users sr-contact icon-align"></i> <?php echo $Experience;?></li>
					<!-- <li><i class="fa fa-flag sr-contact ></i> <?php echo $Bilingual;?></li> -->
					<!-- <li><i class="fa fa-user sr-contact ></i> <?php echo $Services;?></li> -->
					<li>
						<span class="d-none d-sm-block"><i class="fa fa-money sr-contact icon-align"></i> <?php echo $Payment;?></span>
					</li>
					<li>
						<span class="d-sm-none"><i class="fa fa-money sr-contact icon-align"></i> <?php echo $Paymentmobile;?></span>
					</li>
				</ul>
				
			
				<!-- <img src="images/elements/payment.png" alt="Card Logo" class="img-fluid"> -->
				<div class="row mt-4">
					<div class="col-md-12">
						<h3 class="t-Color2">Find Us On</h3>
						<a href="<?php echo $facebook;?>" class="icons-sm fb-ic ml-0 t-black"><img src="images/elements/facebook-icon.png" alt="facebook" class="mr-lg-2"></a>
						<a href="<?php echo $googleplus;?> " class="icons-sm gplus-ic t-black"><img src="images/elements/googleplus-icon.png" alt="Google Plus" class="mr-lg-2"></a>
					</div>
				</div>
				<!-- <a href="<?php echo $facebook;?>" target="_blanc"><img src="images/elements/directorios/facebook.png" alt="facebook" class="img-fluid efecto1"></a> -->
			</div>
		</div>
	</div>
</div>
<?php include 'php/section/footer3.php';?>