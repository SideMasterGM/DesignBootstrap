<footer>
  <?php if ($page_name!='contact.php' && $page_name!='404.php') { ?>
  <div class="container">
    <div class="row pt-5">
      <div class="col-lg-4 t-white text-center">
        <img src="images/logo.png" class="img-fluid mb-4" alt="<?php echo $Company;?>">
        <!-- <p><?php echo $Ex2About;?></p> -->
      </div>
      <div class="col-lg-3">
        <h2 class="section-heading t-Color2">Services</h2>
          <p>
            <i class="fa fa-check"></i> <a class="t-white" href="services.php"><?php echo $SN[1];?></a><br>
            <i class="fa fa-check"></i> <a class="t-white" href="services.php"><?php echo $SN[2];?></a><br>
            <i class="fa fa-check"></i> <a class="t-white" href="services.php"><?php echo $SN[3];?></a><br>
            <i class="fa fa-check"></i> <a class="t-white" href="services.php"><?php echo $SN[4];?></a><br>
            
          </p>
       
       <!--  <a href="<?php echo $yelp; ?> "><img src="images/elements/directorios/yelp.png" alt="yelp" class="efecto1"></a> -->
      </div>
      <div class="col-lg-5 t-white">
        <h2 class="section-heading t-Color2">Contact Info</h2>
            <p>
              <?php echo $Company;?><br>
              <i class="fa fa-phone sr-contact icon-align"></i> <a href="<?php echo $PhoneRef;?>" class="t-white"><?php echo $Phone;?></a> <br>
              <?php if(!empty($Phone2)){ ?>
              <i class="fa fa-phone sr-contact icon-align"></i> <a href="<?php echo $Phone2Ref;?>" class="t-white"><?php echo $Phone2;?></a> <br>
              <?php } ?>
              
              <i class="fa fa-envelope-o sr-contact icon-align"></i> <a href="<?php echo $MailRef;?>" class="t-white"><?php echo $Mail;?></a><br>
              
              <?php if(!empty($Mail)){ ?>
              <i class="fa fa-map-marker sr-contact icon-align"></i> <?php echo $Address;?><br>
              <?php } ?>
              <!-- <i class="fa fa-clock-o"></i> <span class="email-largo"><?php echo $Schedule2;?></span><br> -->
              <i class="fa fa-money sr-contact icon-align"></i> <?php echo $Payment;?>
            </p>
        
        <!-- <img src="images/elements/payment.png" alt="Card Logo" class="img-fluid"> -->
      </div>
    </div>
  </div>
  <?php } ?>
  <div class="container copyright pt-4">
    <div class="row vcenter">
      <div class="pull-left col-lg-5 col-xs-12 t-white">
        <p>Copyright &copy;<?=date('Y')?> by <?php echo $Company;?></p>
      </div>
      <div class="col-lg-4 col-lg-offset-4 col-xs-12 d-none d-md-inline-block">
        <div class="pull-right">
          <a href="contact.php" class="t-white">Contact Us</a> |
          <a href="services.php" class="t-white">Services</a>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="vendor/scrollreveal/scrollreveal.min.js"></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<!-- Custom scripts for this template -->
<script src="js/creative.min.js"></script>
</body>
</html>