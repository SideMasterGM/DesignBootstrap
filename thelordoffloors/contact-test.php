<link rel="stylesheet" type="text/css" href="https://matuteroofing.com/j-folder/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="https://matuteroofing.com/j-folder/css/j-forms.css">
<link rel="stylesheet" type="text/css" href="https://matuteroofing.com/assets/css/pages-style.css">
<br/>

<div class="wrapper wrapper-500">
	<?php $_SESSION['token'] = md5(microtime()); ?>
	<form action="contact2.php" method="post" class="j-forms">
		<!-- end /.header-->

		<div class="content">

			<div class="row">
				<!-- start name -->
				<div class="col-md-6 unit">
					<label class="label">First and Last Name</label>
					<div class="input">
						<label class="icon-right" for="custom-name">
							<i class="fa fa-user"></i>
						</label>
						<input type="text" id="custom-name" name="custom-name" placeholder="Your Name *">
					</div>
				</div>
				<!-- end name -->
		        
		         <!-- start phone -->
				<div class="col-md-6 unit">
					<label class="label">Phone #</label>
					<div class="input">
						<label class="icon-right" for="custom-phone">
							<i class="fa fa-phone"></i>
						</label>
						<input type="text" placeholder="e.g. 123-456-7890 *" id="custom-phone" name="custom-phone">
					</div>
				</div>
				<!-- end phone -->
			</div>

			<div class="row">
				<!-- start name -->
				<div class="col-md-6 unit">
					<!-- start email  -->
					<label class="label">Email</label>
					<div class="input">
						<label class="icon-right" for="custom-email">
							<i class="fa fa-envelope-o"></i>
						</label>
						<input type="email" placeholder="E-mail *" id="custom-email" name="custom-email">
					</div>
					<!-- end email url -->
				</div>
				<!-- end name -->
		        
		         <!-- start phone -->
				<div class="col-md-6 unit">
					<!-- start address -->
						<label class="label">Street Address where service is needed</label>
			            <div class="input">
							<label class="icon-right" for="custom-address">
								<i class="fa fa-building-o"></i>
							</label>
							<input type="text" id="custom-address" name="custom-address" placeholder="Enter Full Address *">
						</div>
					<!-- end address -->
				</div>
				<!-- end phone -->
			</div>

			<div class="row">
				<!-- start name -->
				<div class="unit col-md-6">
					<div class="row">
						<!-- start referral -->
						<div class="unit col-md-12">
				        	How did you hear about us?<br><br>
							<label class="input select">
								<select id="custom-referral" name="custom-referral">
									<option value="none">Please select how you heard about us</option>
									<option value="referral">Referral</option>
									<option value="search engine">Web Search</option>
									<option value="marketing">Marketing Material</option>
				                    <option value="Sign">Saw our Sign</option>
				                    <option value="truck">Saw our Truck</option>
								</select>
								<i></i>
							</label>
						</div>
					</div>

					I'm Interested in the following Services:
					<div class="row unit">
						<div class="col-md-4 unit">
							<label class="checkbox-toggle">
								<input type="checkbox" name="news_group[]" value="<?php echo $SN1;?>">
								<i></i>
								<?php echo $SN1; ?>
							</label>
						</div>

						<div class="col-md-4 unit">
							<label class="checkbox-toggle">
								<input type="checkbox" name="news_group[]" value="<?php echo $SN2;?>">
								<i></i>
								<?php echo $SN2; ?>
							</label>
						</div>

						<div class="col-md-4 unit">
							<label class="checkbox-toggle">
								<input type="checkbox" name="news_group[]" value="<?php echo $SN3;?>" >
								<i></i>
								<?php echo $SN3; ?>
							</label>
						</div>

						<div class="col-md-4 unit">
							<label class="checkbox-toggle">
								<input type="checkbox" name="news_group[]" value="<?php echo $SN4;?>" >
								<i></i>
								<?php echo $SN4;?>
							</label>
						</div>

						<div class="col-md-4 unit">
							<label class="checkbox-toggle">
								<input type="checkbox" name="news_group[]" value="<?php echo $SN5;?>" >
								<i></i>
								<?php echo $SN5;?>
							</label>
						</div>

						<div class="col-md-4 unit">
							<label class="checkbox-toggle">
								<input type="checkbox" name="news_group[]" value="<?php echo $SN6;?>" >
								<i></i>
								<?php echo $SN6;?>
							</label>
						</div>
					</div>

				</div>
				<div class="unit col-md-6">

					<!-- start captcha -->
					<div class="unit">
						<label class="label">Captcha</label>
						<div class="captcha-group">
							<div class="input">
								<label class="icon-right" for="code">
									<i class="fa fa-unlock-alt"></i>
								</label>
								<input type="text" id="captcha_code" name="captcha_code" placeholder="solve the captcha">
								<span class="tooltip tooltip-right-top">Enter the digits</span>
							</div>
							<label class="captcha" for="captcha_code">
								<img src="captcha.php" />
							</label>
						</div>
					</div>
					<!-- end captcha -->

					<!-- start textarea -->
					<div class="unit">
						<label class="custom-label">Message</label>
						<div class="input">
							<textarea spellcheck="false" id="custom-message" name="custom-message"></textarea>
						</div>
					</div>
					<!-- end textarea -->
				</div>
			</div>
			
			<br><br>


		</div>
		<!-- end /.content -->
		<input type="hidden" name="url" id="dir"/>
		<input type="hidden" name="firstname" id="firstname">
		<input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>">

		<div class="footer">
			<button type="submit" class="primary-btn">Enviar</button>
		</div>
		<!-- end /.footer -->

	</form>

</div>

<script>
	// $(document).ready(function(){

	// 	$(".btn-event-click").click(function(){
	// 		let name = $("#custom-name").val();
	// 		let phone = $("#custom-phone").val();
	// 		let email = $("#custom-email").val();
	// 		let address = $("#custom-address").val();
	// 		let message = $("#custom-message").val();
	// 		let captcha_code = $("#captcha_code").val();
	// 		let referral = $("#custom-referral").val();

	// 		console.log(`Datos: ${name}, ${phone}, ${email}, ${address}, ${message}, ${captcha_code}, ${referral}`);
	// 	});

	// });
</script>