<footer>
  <?php if ($page_name!='contact.php' && $page_name!='404.php') { ?>
  <div class="container">
    <div class="row pt-5">
      <div class="col-lg-12 text-center">
        <h3 class="section-heading t-Color2"><?php echo $Company;?></h3>
      </div>
      <div class="col-lg-4 text-center">
        <h2><i class="fa fa-phone sr-contact t-Color2"></i></h2>
        <p><a class="t-white" href="<?php echo $PhoneRef;?>"><?php echo $Phone;?></a></p>
      </div>
      <div class="col-lg-4 text-center">
        <h2><i class="fa fa-envelope-o sr-contact t-Color2"></i></h2>
        <span class="d-none d-sm-block"><a class="t-white" href="<?php echo $MailRef;?>"><?php echo $Mail;?></a><br></span>
        <span class="d-sm-none"><a class="t-white" href="<?php echo $MailRef;?>">Click to Send an Email</a><br></span>
        <span class="d-none d-sm-block"><a class="t-white" href="<?php echo $Mail2Ref;?>"><?php echo $Mail2;?></a><br></span>
        <span class="d-sm-none"><a class="t-white" href="<?php echo $Mail2Ref;?>">Click to Send an Email</a><br></span>
      </div>
      <div class="col-lg-4 text-center">
        <h2><i class="fa fa-clock-o sr-contact t-Color2"></i></h2>
        <p><?php echo $Schedule1;?><br class="d-sm-none"></p>
      </div>
      <div class="col-lg-8 mx-auto text-sm-center text-left">
      </div>
    </div>
  </div>
  <?php } ?>
  <div class="container copyright pt-4">
    <div class="row vcenter">
      <div class="text-center col-lg-12 col-12 t-white">
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