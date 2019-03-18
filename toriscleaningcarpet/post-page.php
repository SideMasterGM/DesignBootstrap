<?php include 'php/section/header.php';?>
<div class="jumbotron-fluid bg mb-0" style="background:url(images/blog/full/<?php echo $PostURL[1].'.jpg';?>);">
	<div class="bg_dark2">
		<div class="jumbotron mb-0">
  <div class="container">
    <h1 class="display-4 text-light"><?php echo $PostName[1];?></h1>
    <p class="lead text-light">
		<i class="material-icons text-warning">event</i> <?php echo $PostDate[1];?>
		&nbsp;|&nbsp;
		<i class="material-icons text-warning">person_pin</i> <?php echo $PostAuthor[1];?>
		&nbsp;|&nbsp;
		<i class="material-icons text-warning">local_offer</i> <?php echo $PostTags[0].', '.$PostTags[2].', '.$PostTags[3];?>
	</p>
  </div>
  </div>
  </div>
</div>
<?php include 'php/section/post-pagename.php';?>
<div class="container padding4">
	<div class="row">
		<div class="col-md-12">
			<?php echo $PostDesc[1] ?>
		</div>
	</div>
</div>

<?php include 'php/section/footer.php';?>