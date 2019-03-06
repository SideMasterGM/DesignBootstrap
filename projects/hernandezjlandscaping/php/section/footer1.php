
    <footer class="bg-color4">
      <div class="">
        <div class="container py-5">
          <div class="row px-3">
            <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7 mt-2">
              <h3 class="t-color5"><?php echo $License;?></h3>   <hr class="border border-secondary">
              <span class="t-color1"><?php echo $Home[2];?></span>
              <div class="my-3">
                <a class="mr-4 mr-sm-5 t-color3-hover t-color1 btn bg-color1-hover borderWhite faSize-footer" href="<?php echo $facebook;?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a class="mr-4 mr-sm-5 t-color3-hover t-color1 btn bg-color1-hover borderWhite faSize-footer" href="<?php echo $googleplus;?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                <!-- <a class="mr-4 mr-sm-5 t-color3-hover t-color1 btn bg-color1-hover borderWhite faSize-footer" href="<?php echo $instagram;?>"><i class="fa fa-instagram" aria-hidden="true"></i></a> -->
                <a class="mr-4 mr-sm-5 t-color3-hover t-color1 btn bg-color1-hover borderWhite faSize-footer" href="<?php echo $youtube;?>"><i class="fa fa-youtube" aria-hidden="true"></i></a>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 text-center1 mt-2">
              <h3 class="t-color5 ">Contact &nbsp; Information</h3>
              <hr class="border border-secondary">
              <p><a href="<?php echo "$PhoneRef";?>" class="t-color5 font-h4" title="<?php echo "$Phone";?>"><i class="fa fa-phone"></i> <?php echo "$Phone";?></a></p>
              <!-- <p><a href="<?php echo "$Phone2Ref";?>" class="t-color5 font-h4" title="<?php echo "$Phone2";?>" <?php echo "$Phone2";?></a></p> -->
              <p class="t-color1"><i class="fa fa-map-marker"></i> <?php echo "$Address" ?></p>              
              <p><a href="<?php echo "$MailRef";?>" title="<?php echo "$Mail";?>" class="t-color1"><i class="fa fa-envelope"></i> <?php echo "$Mail";?></a></p>
              <p class="t-color1"><i class="fa fa-clock-o"></i> <?php echo "$Schedule";?></p>
            </div>
          </div>
        </div>  
      </div>
    </footer>
        
    <div class="bg-color4">
      <div class="">
      <div class="container padding1 text-center">
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
