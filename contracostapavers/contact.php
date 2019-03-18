<?php include 'php/section/header.php';?>
<style> .customclass{display:none!important; } </style>
<?php
		$_SESSION['token'] = md5(microtime());
?>
<?php include 'php/section/click2call.php';?>
<div class="bar2">
	<div class="container">
		<div class="row">
			<div class="col-md-6 text-center">
				<h5 class="t-Color1"><em>Showroom Coming Soon To This Location</em></h5>
				<?php echo $GoogleMap;?>
			</div>
			<div class="col-md-6">
				<div class="form-contact efecto1">
					<form action="contact2.php" method="post" class="t-black">
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
									<label><i class="fa fa-check"></i> Write Code <img src="captcha.php" /></label>
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
		</div>
	</div>
	<div class="container mt-5">
	    <div class="row align-items-center text-center">
	      <div class="col-md-12">
	        <h4 class="t-Color2"><?php echo $Phrase[8];?></h4>
	        <h4 class="t-Color2" style="font-size: 140%;">Call us for a free estimate today</h4>
	        
	      </div>
	    </div>
	  </div>
</div>
<?php include 'php/section/footer.php';?>