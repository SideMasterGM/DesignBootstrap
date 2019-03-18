<form action="contact2.php" method="post">
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label class="t_black"><i class="material-icons">account_box</i> Name <span class="required">*</span></label>
					<input required type="text"
									value=""
									data-msg-required="Please enter your name."
									class="form-control"
									name="name" id="name">
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group">
				<label class="t_black"><i class="material-icons">email</i> Email <span class="required">*</span></label>
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
		<div class="col-md-12">
			<div class="form-group">
				<label class="t_black"><i class="material-icons">phone</i> Phone <span class="required">*</span></label>
					<input required type="tel"
									maxlength="12"
									minlength="10" 
									value=""
									data-msg-required="Please enter the subject."
									class="form-control"
									name="subject"
									id="subject">
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group">
				<label class="t_black"><i class="material-icons">view_list</i> Im Interesed In</label>
					<select name="service" required data-msg-required="Please Select Service" class="form-control" id="service">
					    <option value="service1"><?php echo $SN[1];?></option>
					    <option value="service2"><?php echo $SN[2];?></option>
					    <option value="service3"><?php echo $SN[3];?></option>
					    <option value="service4"><?php echo $SN[4];?></option>
					    <option value="service5"><?php echo $SN[5];?></option>
					</select>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label class="t_black"><i class="material-icons">forum</i> Message <span class="required">*</span></label>
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
			<input type="submit" value="Enviar Mensaje" class="btn btn-warning btn-sm b_black t_white" data-loading-text="Loading...">
		</div>
	</div>
	<input type="hidden" name="url" id="dir"/>
</form>