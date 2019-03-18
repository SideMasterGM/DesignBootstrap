<?php include 'php/section/header.php'; include 'php/section/pagename.php';?>
<div class="container padding2 content">
	<div class="row">
		<div class="col-md-12 p-0">
			<?php echo $GoogleMap;?>
		</div>
	</div>
	<div class="row mt-3 mb-3">
		<div class="col-md-4 bg-light p-1 sidebar">
			<!--<?php include 'php/widgets/call.php';?>-->
			<div class="widget p-2">
				
				<h3 class="text-uppercase text-dark">Contact Info</h3>
				<span class="badge badge-dark">Phone:</span>
				<p>
					<a href="<?php echo $PhoneRef;?>" class="text-dark"><i class="material-icons">phone</i> <?php echo $Phone;?></a>
					<br>
					<a href="<?php echo $Phone2Ref;?>" class="text-dark"><i class="material-icons">phone</i> <?php echo $Phone2;?></a>
				</p>
				<span class="badge badge-dark">E-Mail:</span>
				<p>
					<a href="<?php echo $MailRef;?>" class="text-dark"><i class="material-icons">email</i> <?php echo $Mail;?></a>
				</p>
				<span class="badge badge-dark">Location and Schedule</span>
				<p>
					<i class="material-icons">today</i> <?php echo $Schedule;?>
					<br>
					<i class="material-icons">today</i> <?php echo $Schedule2;?>
					<br>
					<i class="material-icons">today</i> <?php echo $Schedule3;?>
					<br>
					<i class="material-icons">pin_drop</i> <?php echo $Address;?>
					<br>
					<i class="material-icons">track_changes</i> <?php echo $Cover;?>
				</p>
				<span class="badge badge-dark">More Info</span>
				<p>
					<i class="material-icons">playlist_add_check</i> <?php echo $License;?>
					<br>
					<i class="material-icons">attach_money</i> <?php echo $Payment;?>
				</p>
			</div>
		</div>
		<div class="col-md-8 service-height">
			<h1 class="font-weight-light"><?php echo $namepage;?></h1>
			<?php include 'php/section/formulario.php';?>
		</div>
	</div>
</div>
<?php include 'php/section/footer.php';?>