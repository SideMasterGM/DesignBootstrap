<?php include 'php/section/header.php'; include 'php/section/click2call.php';?>
<div class="bar2">
	<div class="container text-center">
		<h2 class="t-Color2">Cleaning Services</h2>
		<p class="t-black"><?php echo $Phrase[0];?></p>
		<hr class="mb-5">
	</div>
	<div class="container">
		<?php for ($i=11; $i <=16 ; $i++) { ?>
		<div class="row mb-3 align-items-center">
			<div class="col-md-4">
				<img src="images/services/<?php echo $i;?>.jpg" alt="<?php echo $SN[$i];?>" class="img-fluid">
			</div>
			<div class="col-md-8">
				<h2 class="t-Color2"><?php echo $SN[$i];?></h2>
				<p class="summary t-black"><?php echo $SD[$i];?></p>
			</div>
		</div>
		<?php } ?>
	</div>
</div>
<?php include 'php/section/bar3.php';?>
<?php include 'php/section/social.php';?>
<?php include 'php/section/footer3.php';?>