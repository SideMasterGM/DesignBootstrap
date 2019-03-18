<div class="col-md-4 t-black">
	<div class="box-action efecto1">
		<div class="bg-opacity">
			<div class="py-4 px-2">
				<img src="images/logo.png" alt="" class="img-fluid">
				<p class="my-4 t-white"><?php echo $Phrase[2];?></p>
				<a class="hbtn hb-fill-middle2-rev-bg hpad2 hpill" href="<?php echo $PhoneRef;?>">Click to Call!<br><?php echo $Phone;?></a>
			</div>
		</div>
	</div>
	<!-- Search Widget -->
	<div class="card my-4">
		<img src="images/coupon/coupon.jpg" class="img-fluid" alt="">
	</div>
	<div class="form-contact efecto1">
		<h2 class="t-Color2 text-center">Contact Us Today!</h2>
		<form action="contact2.php" method="post">
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label>Name <span class="required">*</span></label>
						<input required type="text"
						value=""
						data-msg-required="Please enter your name."
						class="form-control"
						name="name" id="name">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Email <span class="required">*</span></label>
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
						<label>Phone <span class="required">*</span></label>
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
				<div class="col-md-12">
					<div class="form-group">
						<label>Message <span class="required">*</span></label>
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
				<div class="col-md-12">
					<input type="submit" value="Send Message" class="hbtn hb-fill-middle2-rev-bg hpad2 hpill" data-loading-text="Loading...">
				</div>
			</div>
			<input type="hidden" name="url" id="dir"/>
		</form>
	</div>
	<!-- Categories Widget -->
	<div class="card my-4 ">
		<h5 class="card-header">Our Services</h5>
		<div class="list-group">
			<a href="services.php" class="list-group-item list-group-item-action"><?php echo $ListServices[0];?></a>
			<a href="services.php" class="list-group-item list-group-item-action"><?php echo $ListServices[1];?></a>
			<a href="services.php" class="list-group-item list-group-item-action"><?php echo $ListServices[2];?></a>
			<a href="services.php" class="list-group-item list-group-item-action"><?php echo $ListServices[3];?></a>
			<a href="services.php" class="list-group-item list-group-item-action"><?php echo $ListServices[4];?></a>
			<a href="services.php" class="list-group-item list-group-item-action">And More!</a>
		</div>
	</div>
</div>