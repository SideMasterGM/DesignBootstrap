<footer>
  <?php if ($page_name!='contact.php' && $page_name!='404.php') { ?>
  <div class="container">
    <div class="row pt-5">
            
      <div class="col-lg-8 mx-auto text-sm-center text-left">
        <p class="section-heading t-white"><?php echo $Company;?></p>
        <div class="row">
          <div class="col-md-12">
            <h3><i class="fa fa-phone sr-contact icon-align"></i> <a class="t-white" href="<?php echo $PhoneRef;?>"><?php echo $Phone;?></a> </h3>
          </div>
        </div>
        
        <p>
          
          <!-- <i class="fa fa-phone mb-3 sr-contact"></i> Phone: <a href="<?php echo $Phone2Ref;?>"><?php echo $Phone2;?></a><br> -->
          <span class="d-none d-sm-block"><i class="fa fa-envelope-o sr-contact icon-align"></i> <a class="t-white" href="<?php echo $MailRef;?>"><?php echo $Mail;?></a><br></span>
          <span class="d-sm-none"><i class="fa fa-envelope-o sr-contact icon-align"></i> <a class="t-white" href="<?php echo $MailRef;?>">Click to Send an Email</a><br></span>

          <i class="fa fa-clock-o sr-contact icon-align"></i> <?php echo $ScheduleFooter;?><br class="d-sm-none">
          <!-- <i class="fa fa-map-marker sr-contact"></i> Location: <?php echo $Address;?><br> -->
          <i class="fa fa-flag sr-contact icon-align"></i> <?php echo $Bilingual;?><br>
          <span class="d-none d-sm-block"><i class="fa fa-money sr-contact icon-align"></i> <?php echo $Payment;?></span>
          <span class="d-sm-none"><i class="fa fa-money sr-contact icon-align"></i> <?php echo $Paymentmobile;?></span>
        </p>
        <img src="images/elements/payment.png" alt="Card Logo" class="img-fluid">
      </div>
    </div>
  </div>
  <?php } ?>
  <div class="container copyright pt-4">
    <div class="row vcenter">
      <div class="text-center col-lg-12 col-12 t-Color2">
        <p>Copyright &copy;2018 by <?php echo $Company;?></p>
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