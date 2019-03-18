<?php include 'php/section/header.php'; include 'php/section/click2call.php';?>
<section class="banner-landing1">
	<div class="bg-opacity">
		<div class="bar3">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 class="t-Color1 text-center pb-4"><?php echo $LN1;?></h1>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 pt-5">
						<h2 class="shadow-text-slider">Call Us Today! <a href="<?php echo $PhoneRef;?>"><?php echo $Phone;?></a></h2>
						<p class="shadow-text-slider"><?php echo $Phrase[4];?></p>
						<hr class="text-left">
						<p class="shadow-text-slider"><?php echo $LD1[0];?></p>
						<a class="hbtn hb-fill-middle2-rev-bg hpad2 hpill" href="<?php echo $PhoneRef;?>">Call Us Today!</a>
					</div>
					<div class="col-md-6">
						<div class="form-landing efecto1">
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
											placeholder="987-654-3219"
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
											rows="3"
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
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="bar2">
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-3">
				<div>
					<div class="box-action efecto1">
						<div class="bg-opacity">
							<div class="py-4 px-2">
								<img src="images/logo.png" alt="" class="img-fluid">
								<p class="my-4"><?php echo $Phrase[2];?></p>
								<a class="hbtn hb-fill-middle2-rev-bg hpad2 hpill" href="<?php echo $PhoneRef;?>">Click to Call!<br><?php echo $Phone;?></a>
							</div>
						</div>
					</div>
					<h3 class="t-Color2">Our Services</h3>
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
			<div class="col-md-9">
				<h3 class="t-Color2"><?php echo $Phrase[3];?></h3>
				<hr>
				<p class="t_black"><?php echo $LD1[1];?></p>
				<p class="t_black"><?php echo $LD1[2];?></p>
				<div class="row">
					<div class="col-md-8">
						<h3 class="t_black"><?php echo $LD1[3];?></h3>
						<p class="t_black"><?php echo $LD1[4];?></p>
						<p class="t_black"><?php echo $LD1[5];?></p>
					</div>
					<div class="col-md-4 mt-4">
						<img src="images/portfolio/min/10.jpg" alt="Landing services" class="img-fluid">
					</div>
				</div>
			</div>
			
		</div>
	</div>
</section>
<section class="py-2">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<img src="images/coupon/coupon.jpg" alt="Coupon" class="img-fluid">
			</div>
		</div>
	</div>
</section>

<?php include 'php/section/testimonials2.php';?>
<?php include 'php/section/directorios.php';?>
<?php include 'php/section/bar3.php';?>
<?php include 'php/section/social.php';?>
<?php include 'php/section/footer.php';?>