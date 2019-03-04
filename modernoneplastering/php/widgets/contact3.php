<div class="row widget bordering">
	<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
		<h3 class="uppercase font-h3">get in touch</h3><hr>
		<form action="contact2.php" method="post">
					<div class="row">
						<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
							<div class="form-group">
								<label>Name <span class="required">*</span></label>
									<input required type="text"
													value=""
													data-msg-required="Please enter your name."
													class="form-control bg-color4"
													name="name" id="name">
							</div>
						</div>
						<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
							
								<div class="form-group">
									<label>Phone <span class="required">*</span></label>
									<input required type="tel" 
										value=""
										maxlength="12" 
										minlength="10" 
										data-msg-required="Please enter the phone."
										class="form-control bg-color4"
										name="subject"
										id="subject">
								</div>								
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
							<div class="form-group">
								<label>Email <span class="required">*</span></label>
									<input required type="email" 
													value=""
													data-msg-required="Please enter your email address."
													data-msg-email="Please enter a valid email address."
													class="form-control bg-color4"
													name="email"
													id="email">
							</div>
						</div>
						
					</div>
					<div class="row">
						<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
							<div class="form-group">
								<label>Message <span class="required">*</span></label>
									<textarea
									data-msg-required="Please enter your message."
									rows="6"
									class="form-control bg-color4"
									name="message"
									id="message"></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
							<input type="submit" value="Send Message" class="boton1-hover boton3 font100" data-loading-text="Loading...">
						</div>
					</div>
					<input type="hidden" name="url" id="dir"/>
				</form>
	</div>
</div>