<footer>
  <?php if ($page_name!='contact.php' && $page_name!='404.php') { ?>
  <div class="container pt-5">
    <div class="row">
      <div class="col-lg-12 text-center mb-3">
        <img src="images/logo2.png" class="img-fluid" alt="<?php echo $Company;?>">
      </div>
    </div>
    <div class="row t-white">
      <div class="col-lg-4 text-center">
        <h1>
        <i class="fa fa-map-marker sr-contact t-Color1"></i>
        </h1>
        <h3 class="t-Color2 text-uppercase">Cover</h3>
        <p> <?php echo $Cover2;?></p>
      </div>
      <div class="col-lg-4 t-white text-center">
        <h1>
        <i class="fa fa-phone sr-contact t-Color1"></i>
        </h1>
        <h3 class="t-Color2 text-uppercase">Info</h3>
        <p>
           <a href="<?php echo $PhoneRef;?>" class="t-white"><?php echo $Phone;?></a> <br>
          <?php if(!empty($Phone2)){ ?>
           <a href="<?php echo $Phone2Ref;?>" class="t-white"><?php echo $Phone2;?></a> <br>
          <?php } ?>
          <span class="d-none d-sm-block"><a href="<?php echo $MailRef;?>" class="t-white"><?php echo $Mail;?></a><br></span>
          <span class="d-sm-none"><a href="<?php echo $MailRef;?>" class="t-white">Click to Send a Email</a><br></span>
          <!-- <span class="d-none d-sm-block"><a href="<?php echo $Mail2Ref;?>" class="t-white"><?php echo $Mail2;?></a><br></span> -->
          <span class="d-sm-none"><a href="<?php echo $Mail2Ref;?>" class="t-white">Click to Send a Email</a><br></span>
        </p>
      </div>
      <div class="col-lg-4 t-white text-center">
        <h1>
        <i class="fa fa-clock-o sr-contact t-Color1"></i>
        </h1>
        <h3 class="t-Color2 text-uppercase">Schedule</h3>
        <p> <?php echo $Schedule2;?></p>
        <!-- <img src="images/elements/payment.png" alt="Card Logo" class="img-fluid"> -->
      </div>
    </div>
  </div>
  <?php } ?>
  <div class="container copyright pt-4">
    <div class="row text-center">
      <div class="col-lg-12 t-white">
        <p>Copyright &copy;<?=date('Y')?> by <?php echo $Company;?></p>
      </div>
    </div>
  </div>
</footer>
<a href="#" id="scroll" style="display: none;"><span></span></a>
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="vendor/scrollreveal/scrollreveal.min.js"></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<!-- Custom scripts for this template -->
<script src="js/creative.min.js"></script>
<script>
$(document).ready(function(){
$(window).scroll(function(){
if ($(this).scrollTop() > 100) {
$('#scroll').fadeIn();
} else {
$('#scroll').fadeOut();
}
});
$('#scroll').click(function(){
$("html, body").animate({ scrollTop: 0 }, 600);
return false;
});
});
</script>
</body>
</html>
</html>