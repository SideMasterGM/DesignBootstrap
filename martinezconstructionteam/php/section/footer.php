<footer>
  <?php if ($page_name!='contact.php' && $page_name!='404.php') { ?>
  <div class="container">
    <div class="row pt-5">
      <div class="col-lg-4 text-center">
        <img src="images/logo.png" class="img-fluid mb-3 " alt="<?php echo $Company;?>">
        <p><?php echo $Ex2About;?></p>
      </div>
      <div class="col-lg-3">
        <h2 class="section-heading">Services</h2>
        <ul>
          <li><a href="services.php" class="t-white"><?php echo $SN[1];?></a></li>
          <li><a href="services.php" class="t-white"><?php echo $SN[2];?></a></li>
          <li><a href="services.php" class="t-white"><?php echo $SN[3];?></a></li>
          <li><a href="services.php" class="t-white"><?php echo $SN[4];?></a></li>
          <li><a href="services.php" class="t-white"><?php echo $SN[5];?></a></li>
          
        </ul>
        <!-- <a href="<?php echo $facebook;?>" target="_blanc"><img src="images/elements/directorios/facebook.png" alt="facebook" class="img-fluid efecto1"></a> -->
      </div>
      <div class="col-lg-5">
        <h2 class="section-heading">Contact Info</h2>
        <p>
          <span class="t-white"><?php echo $Company;?></span><br>
          <i class="fa fa-phone sr-contact icon-align"></i> <a href="<?php echo $PhoneRef;?>"><?php echo $Phone;?></a><br>
          <!-- <i class="fa fa-phone mb-3 sr-contact icon-align"></i> <a href="<?php echo $Phone2Ref;?>"><?php echo $Phone2;?></a><br> -->
          <i class="fa fa-envelope-o sr-contact icon-align"></i> <a class="t-white font-responsive" href="<?php echo $MailRef;?>"><?php echo $Mail;?></a><br>
          <i class="fa fa-clock-o sr-contact icon-align"></i> <?php echo $ScheduleFooter;?><br>
          <!-- <i class="fa fa-map-marker sr-contact"></i> Location: <?php echo $Address;?><br> -->
          <i class="fa fa-drivers-license-o sr-contact icon-align"></i> <?php echo $License;?><br>
          <i class="fa fa-money sr-contact icon-align"></i> <?php echo $Payment;?>
        </p>
        <!-- <img src="images/elements/payment.png" alt="Card Logo" class="img-fluid"> -->
      </div>
    </div>
  </div>
  <?php } ?>
  <div class="container copyright pt-4">
    <div class="row vcenter">
      <div class="text-center col-lg-12 col-xs-12">
        <p>Copyright &copy;<?=date('Y')?> by <?php echo $Company;?></p>
      </div>
      <!-- <div class="col-lg-4 col-lg-offset-4 col-xs-12">
        <div class="pull-right">
          <a class="t-white" href="contact.php">Contact Us</a> |
          <a class="t-white" href="services.php">Services</a> |
        </div>
      </div> -->
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