    <footer class="bg-color3">
      <div class="pt-5">
        <div class="container">
          <div class="row mx-auto align-items-center text-center">
            <div class="col-12 col-sm-12 col-md-4 t-color1">
              <p><i class="fa fa-phone"></i> <a href="<?php echo "$PhoneRef";?>" class="t-color1" title="<?php echo "$Phone";?>"><?php echo $PhoneName.$Phone;?></a></p>
              <p><i class="fa fa-map-marker"></i> <?php echo "$Address";?></p>

            </div>
            <div class="col-12 col-sm-6 col-md-5 t-color1 pt-md-0">
              <p class="d-none d-md-inline-block"><i class="fa fa-envelope"></i> <a href="<?php echo "$MailRef";?>" title="<?php echo "$Mail";?>" class="t-color1 fontMail"><?php echo "$Mail";?></a></p>
              <p class="d-block d-md-none"><i class="fa fa-envelope"></i> <a href="<?php echo "$MailRef";?>" title="<?php echo "$Mail";?>" class="t-color1 fontMail">Send an E-Mail</a></p>
              <p><i class="fa fa-clock-o"></i> <?php echo "$Schedule";?></p>
            </div>
            <div class="col-12 col-sm-6 col-md-3 t-color1 pt-3 pt-md-0">
              <div class="row">
                <div class="col-8 mx-auto">
                  <a target="blank" href="<?php echo $facebook;?>"> <img src="images/elements/brands/facebook.jpg" class="img-fluid mb-2"/> </a>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </footer>
        
    <div class="bg-color3">
      <button onclick="topFunction()" id="myBtn" title="Go to top" style="display: block;"><i class="fa fa-arrow-up"></i></button>
      <div class="container padding1 text-center">
        <span class="t-color1 font10">Copyright &copy; <span itemprop="copyrightYear"><?php echo date('Y');?></span><a href="index.php" class="t-color1" title="Home" itemprop="creator"> <?php echo "$Company";?></a></span>    
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
