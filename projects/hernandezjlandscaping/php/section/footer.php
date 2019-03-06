<footer class="bg-color3">
  <div class="">
  <div class="container padding1">
    <div class="row">
      <div class="col-12 col-sm-12 t-color1 text-center1">
        <h3 class="text-center1 t-color5 px-3 mt-3"><?php echo $Company?></h3>
          <p class="px-3">
            <i class="fa fa-home font-footer"></i> <?php echo "$Address".'&emsp;' ?> <br class="d-md-none d-block">
            <a href="<?php echo "$PhoneRef";?>" class="t-color1" title="<?php echo "$Phone";?>"><i class="fa fa-phone font-footer"></i> <?php echo "$Phone".'&emsp;';?></a> <br class="d-block d-sm-none">
            <?php if ($Phone2!='') { ?><a href="<?php echo "$Phone2Ref";?>" class="t-color1" title="<?php echo "$Phone2";?>"><i class="fa fa-phone font-footer"></i> <?php echo "$Phone2";?></a> <br class="d-block d-sm-none"><?php } ?>
            <a href="<?php echo "$MailRef";?>" title="<?php echo "$Mail";?>" class="t-color1 font-footer"><i class="fa fa-envelope font-footer"></i> <?php echo "$Mail";?></a>
          </p>              
          <p class="t-color1 px-3">
            <i class="fa fa-file font-footer"></i> <?php echo "$Estimates".'&emsp;';?> <br class="d-md-none d-block">
            <i class="fa fa-user font-footer"></i> <?php echo "$License"; if ($License1!='') { echo '. ' .$License1;} ?> <br class="d-md-none d-block">            
          </p>
          <p class="t-color1 px-3">
            <i class="fa fa-money font-footer"></i> <?php echo "$Payment".'&emsp;';?> <br class="d-md-none d-block">
            <i class="fa fa-clock-o font-footer"></i> <?php echo "$Schedule"; if ($Schedule2!='') { echo '. '."$Schedule2";}?>
          </p>
          <!-- <p class="px-3"><img src="images/elements/cards.png" class="img-fluid"/></p> -->

          <!-- <div class="text-center mt-1">
            <a class="mr-4 mr-sm-5 t-color2-hover t-color1 btn bg-color1-hover borderWhite faSize-footer" href="<?php echo $facebook;?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a class="mr-4 mr-sm-5 t-color2-hover t-color1 btn bg-color1-hover borderWhite faSize-footer" href="<?php echo $googleplus;?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
            <a class="mr-4 mr-sm-5 t-color2-hover t-color1 btn bg-color1-hover borderWhite faSize-footer" href="<?php echo $instagram;?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a class="mr-4 mr-sm-5 t-color2-hover t-color1 btn bg-color1-hover borderWhite faSize-footer" href="<?php echo $youtube;?>"><i class="fa fa-youtube" aria-hidden="true"></i></a>
          </div>  -->           
      </div>          
    </div>
  </div>
</div>
</footer>
        
<div class="bg-color3">
  <div class="">
    <div class="container text-center">
      <span class="t-color1 font10">Copyright &copy; <span itemprop="copyrightYear"><?php echo date('Y');?></span>  <a href="index.php" class="t-color1" title="Home" itemprop="creator"><b><?php echo "$Company";?></b></a> &nbsp;| &nbsp;All Rights Reserved</span>
    </div>
  </div>
</div>  

<!-- Bootstrap core JavaScript -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/carousel.js"></script>
<script src="js/main.js"></script>
<script src="js/lightbox.min.js"></script>
   
</body>
</html>
