<div class="row widget padding3 bg-color4 border-radius-3">
	<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
		<h3 class="t-color1">Get In Touch</h3>
		<?php @session_start();?>
		<style>
			.customclass{display:none; }
		</style>
		<?php $_SESSION['token'] = md5(microtime()); 
		?>
		<form action="contact2.php" method="post">
			<div class="row">
				<div class="col-md-12">
					<input name="firstname" type="text" id="firstname" class="customclass">
					<div class="form-group">
						<!-- <label class="t-color1"><i class="fa fa-user t-color1"></i> Name <span class="required">*</span></label> -->
							<input name="firstname" type="text" id="firstname" class="customclass">
							<input required type="text"
											value=""
											placeholder="Name *" 
											data-msg-required="Please enter your name."
											class="form-control"
											name="name" id="name">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<!-- <label class="t-color1"><i class="fa fa-envelope t-color1"></i> Email <span class="required">*</span></label> -->
							<input required type="email" 
											value=""
											placeholder="Email *" 
											data-msg-required="Please enter your email address."
											data-msg-email="Please enter a valid email address."
											class="form-control"
											name="email"
											id="email">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<!-- <label class="t-color1"><i class="fa fa-phone t-color1"></i> Phone <span class="required">*</span></label> -->
							<input required type="tel"
											maxlength="15"
											minlength="10" 
											value=""
											placeholder="Phone *" 
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
						<label class="t-color1"><i class="fa fa-list t-color1"></i> Write the Code</label>
						<input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>">
						<img src="captcha.php" /><br>
						<input name="captcha" class="form-control" type="text" required><br>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<!-- <label class="t-color1"><i class="fa fa-comment t-color1"></i> Message <span class="required">*</span></label> -->
							<textarea
							data-msg-required="Please enter your message."
							rows="4"
							placeholder="Message *" 
							class="form-control"
							name="message"
							id="message"></textarea>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-right">	
					<input type="submit" value="Send Message" class="boton3" data-loading-text="Loading...">
				</div>
			</div>
			<input type="hidden" name="url" id="dir"/>
		</form>
	</div>
</div>