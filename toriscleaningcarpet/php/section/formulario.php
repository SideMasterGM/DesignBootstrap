<form action="contact2.php" method="post">
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="t_black"><i class="material-icons">face</i> Name <span class="required">*</span></label>
					<input required type="text"
									value=""
									data-msg-required="Please enter your name."
									class="form-control"
									name="name" id="name">
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label class="t_black"><i class="material-icons">mail</i> Email <span class="required">*</span></label>
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
				<label class="t_black"><i class="material-icons">phone</i> Phone <span class="required">*</span></label>
					<input required type="tel"
									maxlength="12"
									minlength="10" 
									value=""
									data-msg-required="Please enter the phone."
									class="form-control"
									name="phone"
									id="phone">
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group mb-0 pt-0">
				<label class="t_black"><i class="material-icons">check</i> Write the Code</label>
				<input class="form-control" type="hidden" name="token" value="<?php echo $_SESSION['token'];?>">
				<img src="captcha.php" /><br>
				<input name="captcha" class="form-control" type="text" required><br>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label class="t_black"><i class="material-icons">reorder</i> Subject <span class="required">*</span></label>
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
			<div class="form-group">
				<label class="t_black"><i class="material-icons">message</i> Message <span class="required">*</span></label>
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
		<div class="col-md-12 text-right">
			<input type="submit" value="Send Message" class="btn btn-sm bg-color1 t-blanco" data-loading-text="Loading...">
		</div>
	</div>
	<input type="hidden" name="url" id="dir"/>
</form>