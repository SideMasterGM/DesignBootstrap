<?php include 'php/section/header.php';?>
<style> .customclass{display:none!important; } </style>
<?php
		$_SESSION['token'] = md5(microtime());
?>
<?php include 'php/section/click2call.php';?>
<div class="bar2">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2 class="t-Color1">Contact Us!</h2>
				<p class="t-black"><?php echo $Phrase[3];?></p>
				<hr class="mb-5">
				<?php echo $GoogleMap;?>
			</div>
		</div>
	</div>
	<div class="container mt-5">
		<div class="row align-items-center">
			<div class="col-md-6 t-white mb-4">
				<div class="form-contact efecto1">
					<h2 class="t-white text-center">Send us a Message</h2>
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
						</div>
						<div class="row">
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
							<div class="col-md-6">
								<div class="form-group">
									<label><i class="fa fa-check"></i> Write the code <img src="captcha.php" /></label>
									<input name="captcha" class="form-control" type="text" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label><i class="fa fa-comment-o"></i> Subject <span class="required">*</span></label>
									<input required type="subject"
									value=""
									data-msg-required="Please enter your subject."
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
									<label> <i class="fa fa-edit"></i> Message <span class="required">*</span></label>
									<textarea
									data-msg-required="Please enter your message."
									rows="5"
									class="form-control"
									name="message"
									id="message"></textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-5 mx-auto">
								<input type="submit" value="Send Message" class="hbtn hb-fill-middle2-rev-bg hpad2 hpill" data-loading-text="Loading...">
							</div>
						</div>
						<input type="hidden" name="url" id="dir"/>
					</form>
				</div>
			</div>
			<div class="col-md-6 t-black">
				<h2 class="t-Color1">Contact Info!</h2>
				<!-- <p><?php echo $Why;?></p> -->
				<p>
					<i class="fa fa-phone sr-contact icon-align"></i> <a class="t-Color1" href="<?php echo $PhoneRef;?>"><?php echo $Phone;?></a><br>
					<?php if(!empty($Phone2)){ ?>
					<i class="fa fa-phone sr-contact icon-align"></i> <a class="t-Color1" href="<?php echo $Phone2Ref;?>"><?php echo $Phone2;?></a><br>
					<?php } ?>

					<span class="d-none d-sm-block"><i class="fa fa-envelope-o sr-contact icon-align"></i> <a class="t-Color1" href="<?php echo $MailRef;?>"><?php echo $Mail;?></a><br></span>
					<span class="d-sm-none"><i class="fa fa-envelope-o sr-contact icon-align"></i> <a class="t-Color1" href="<?php echo $MailRef;?>">Send us a Email</a><br></span>
					

					<i class="fa fa-home icon-align"></i> <?php echo $Address;?><br>
					<span class="d-none d-sm-block"><i class="fa fa-map-marker icon-align"></i> <?php echo $Cover;?><br></span>
					<span class="d-none d-sm-block"><i class="fa fa-clock-o icon-align"></i> <?php echo $Schedule;?><br></span>
					<span class="d-sm-none"><i class="fa fa-clock-o icon-align"></i> <?php echo $ScheduleMobile;?><br></span>
					
					<!-- <i class="fa fa-id-card-o "></i> <?php echo $License;?><br> -->
					<!-- <i class="fa fa-user "></i> <?php echo $Lic;?><br> -->
					<!-- <i class="fa fa-flag icon-align"></i> <?php echo $Bilingual;?><br> -->
					<!-- <i class="fa fa-user icon-align"></i> <?php echo $Services;?><br> -->
					<span class="d-none d-sm-block"><i class="fa fa-money icon-align"></i> <?php echo $Payment;?><br></span>
					<span class="d-sm-none"><i class="fa fa-money icon-align"></i> <?php echo $Paymentmobile;?><br></span>
				</p>
				<!-- <img src="images/elements/payment.png" alt="Card Logo" class="img-fluid mb-3"> -->
				<!-- <a href="<?php echo $bbb;?>"><img src="images/elements/directorios/bbb.png" alt="bbb" class="img-fluid efecto1"></a> -->
				<!-- <a href="<?php echo $facebook;?>"><img src="images/elements/directorios/facebook.png" alt="facebook" class="img-fluid efecto1"></a> -->
				<div class="row">
					<div class="col-md-12">
						<a href="<?php echo $facebook;?>"><img src="images/elements/facebook-icon.png" alt="facebook" class="img-fluid efecto1 mr-2"></a>
						<a href="<?php echo $googleplus;?>"><img src="images/elements/googleplus-icon.png" alt="googleplus" class="img-fluid efecto1 mr-2"></a>
						<!-- <a href="<?php //echo $facebook;?> " class="icons-sm fb-ic ml-0 t-Color1"><i class="fa fa-facebook mr-lg-4 "> </i></a>
						<a href="<?php //echo $googleplus;?> " class="icons-sm gplus-ic t-Color1"><i class="fa fa-google-plus mr-lg-4 "> </i></a> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include 'php/section/footer2.php';?>