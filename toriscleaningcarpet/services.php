<?php include 'php/section/header.php'; include 'php/section/pagename.php';?>
<div class="container padding4 content">
	<div class="row">
		<div class="col-md-10 offset-md-1 service-height">
			<div data-spy="scroll" data-target="#services-list" data-offset="0" class="services-list">
				<?php for ($i=1; $i <=6; $i++) {?>
					<div class="row align-items-center">
						<div class="col-md-3 mb-3"><img src="images/services/<?php echo $i;?>.jpg" class="img-fluid border border-secondary" alt="<?php echo $SN[$i];?>"></div>
						<div class="col-md-9">
							<h4 id="list-item-<?php echo $i;?>"><?php echo $SN[$i];?></h4>
							<p><?php echo $SD[$i];?></p>
						</div>
					</div>
					<p>&nbsp;</p>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
</div>
<?php include 'php/section/footer.php';?>