<?php if ($page_name!='contact.php'): ?>
<div class="bg-color1">
	<div class="container padding3">
		<div class="row text-white">
			<div class="col-md-4">
				<strong class="t-blanco font-weight-bold"><?php echo $Company;?></strong>
				<p><?php echo $About[0];?></p>
				<p><a href="about.php" class="btn border border-light btn-sm t-blanco">About Us</a></p>
			</div>
			<div class="col-md-4 border border-white border-top-0 border-bottom-0">
				<strong class="t-blanco font-weight-bold">Services</strong>
				<ul>
					<?php for ($i=1; $i <=6; $i++) {?>
						<li><a href="services.php" class="text-white"><?php echo $SN[$i];?></a></li>
					<?php } ?>
				</ul>
			</div>
			<div class="col-md-4">
				<strong class="t-blanco font-weight-bold">Contact Info</strong>
				<ul class="list-style-none pl-0">
					<li><span class="t-blanco font-weight-bold"><i class="material-icons">local_phone</i></span> <a href="<?php echo $PhoneRef;?>" class="text-white"><?php echo $Phone;?></a></li>
					<li><span class="t-blanco font-weight-bold"><i class="material-icons">local_phone</i></span> <a href="<?php echo $Phone2Ref;?>" class="text-white"><?php echo $Phone2;?></a></li>
					<li><span class="t-blanco font-weight-bold"><i class="material-icons">pin_drop</i></span> <?php echo $Address;?></li>
					<li><span class="t-blanco font-weight-bold"><i class="material-icons">local_post_office</i></span> <a href="<?php echo $MailRef;?>" class="text-white"><?php echo $Mail;?></a></li>
					<li><span class="t-blanco font-weight-bold"><i class="material-icons">today</i></span> <?php echo $Schedule;?></li>
					<li><span class="t-blanco font-weight-bold"><i class="material-icons">today</i></span> <?php echo $Schedule2;?></li>
					<li><span class="t-blanco font-weight-bold"><i class="material-icons">today</i></span> <?php echo $Schedule3;?></li>
				</ul>
			</div>
		
		</div>
	</div>
</div>
<?php endif ?>
<div class="f-negro">
	<div class="container py-3">
		<div class="row">
			<div class="col-md-12 text-center text-white">
				<small>Copyright <?php echo @date('Y') ?> EOM, All Right Reserved</small>
			</div>
		</div>
	</div>
</div>
<a href="#" class="go-up" id="IrArriba"></a>


<script src="source/js/jquery.js"></script>
<script src="source/js/lightbox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>   
<script src="source/js/main.js"></script>
</body>

</html>