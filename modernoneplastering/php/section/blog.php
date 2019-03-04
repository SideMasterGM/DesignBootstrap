<div class="padding3">
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<em><?php echo $Satisfaction?></em><h3 class="font-h3">Our Blog</h3>
				<hr class="border3 float-left">
			</div>
			<div class="row">
				<?php for($i=1;$i<=3;$i++){ ?>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">                        
                        <div class="card my-3">
                            <div class="zoom-image">
                                <img class="card-img-top img-fluid" src="images/blog/min/blog<?php echo $i;?>.jpg" alt="<?php echo $SN[$i];?>">
                                 <div class="blog-caption">
                                     <span class="t-color1"><i class="fa fa-user t-color5" aria-hidden="true"></i> <?php echo $BlogAuthor[$i];?> &emsp;|&emsp;</span>  <em class="t-color1 text-right"><i class="fa fa-calendar t-color5" aria-hidden="true"></i> <?php echo $BlogDate[$i];?></em>
                                 </div>
                            </div>
                            <div class="card-body bg-color4">
                               <h5 class="card-title"><?php echo $BlogEntryT[$i];?></h5>
                                <p class="card-text my-4"><?php echo $BlogEntryD[$i][0];?></p>
                                <a href="post-page.php" class="t-color5 font110 my-4"><b><i class="fa fa-angle-right"></i> Read More</b></a>
                            </div>
                        </div>
                    </div>
                <?php }?>
			</div>
		</div>
	</div>
</div>