<?php include 'php/section/header.php'; include 'php/section/pagename.php';?>
<div class="bg-color1">
<div class="container padding4">
	<div class="row">
		<?php for ($i=1; $i <=6; $i++) {?>
		<div class="col-md-6">
			<div class="container-overlay mt-3">
			  <img src="images/blog/min/<?php echo $i;?>.jpg" class="img-fluid">
			  <div class="overlay-main overlay-color">
			    <div class="text-overlay text-white"><a href="<?php echo $PostURL[$i].'.php';?>" class="btn btn-light btn-sm"><i class="material-icons">insert_link</i> Read More</a></div>
			  </div>
			</div>
			<div class="p-3 mb-2 b-blanco">
				<div class="border-top-0 border-left-0 border-right-0 border border-secondary mt-2"></div>
				<div class="mt-2 mb-1">
					<small>
						<i class="material-icons text-warning">event</i> <?php echo $PostDate[$i];?>
						&nbsp;|&nbsp;
						<i class="material-icons text-warning">person_pin</i> <?php echo $PostAuthor[$i];?>
					</small>
				</div>
				<h5><a href="<?php echo $PostURL[$i].'.php';?>" class="text-dark"><?php echo $PostName[$i];?> <i class="material-icons">keyboard_arrow_right</i></a></h5>
				<div class="text-dark"><?php echo $ExPostDesc[$i];?></div>
			</div>
		</div>
		<?php } ?>
	</div>
</div>
</div>
<?php include 'php/section/footer.php';?>