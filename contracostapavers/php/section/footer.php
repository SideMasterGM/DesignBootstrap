<footer>
  <?php if ($page_name!='404.php') { ?>
  <div class="container">
    <div class="row pt-5 t-Color1">
      <div class="col-lg-6 col-md-5">
        <ul class="icon-align-ul">
          <li><i class="fa fa-map-marker sr-contact icon-align"></i> <?php echo $Address;?><br><em>*Showroom  Coming Soon</em></li>
          <li><i class="fa fa-phone sr-contact icon-align"></i> <a href="<?php echo $PhoneRef;?>" class="t-Color1"><?php echo $Phone;?></a></li>
          <?php if(!empty($Phone2)){ ?>
          <li><i class="fa fa-phone sr-contact icon-align"></i> <a href="<?php echo $Phone2Ref;?>" class="t-Color1"><?php echo $Phone2;?></a></li>
          <?php } ?>
          <li><span class="d-none d-sm-block"><i class="fa fa-envelope-o sr-contact icon-align"></i> <a href="<?php echo $MailRef;?>" class="t-Color1"><?php echo $Mail;?></a><br></span></li>
          <li> <span class="d-sm-none"><i class="fa fa-envelope-o sr-contact icon-align"></i> <a href="<?php echo $MailRef;?>" class="t-Color1">Send Us A Email</a><br></span> </li>
          <!-- <li><i class="fa fa-money sr-contact icon-align"></i> <?php echo $Payment;?></li> -->
        </ul>
        <!--  <a href="<?php echo $yelp; ?> "><img src="images/elements/directorios/yelp.png" alt="yelp" class="efecto1"></a> -->
      </div>
      <div class="col-lg-6 col-md-7 t-Color1">
        <ul class="icon-align-ul">
          <li><i class="fa fa-clock-o sr-contact icon-align"></i><?php echo $Schedule;?><br><em>*by appointment only</em></li>
          <li><i class="fa fa-id-card-o sr-contact icon-align"></i> <?php echo $License;?></li>
          <li><i class="fa fa-user sr-contact icon-align"></i> <?php echo $Estimates;?></li>
          <!-- <li><i class="fa fa-money sr-contact icon-align"></i> <?php echo $Payment;?></li> -->
        </ul>
        <!-- <img src="images/elements/payment.png" alt="Card Logo" class="img-fluid"> -->
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">
        <a target="_blank" href=""><img src="images/elements/directorios/gmb.png" alt="gmb" class="mr-2 efecto1" height="30px"></a>
        <a target="_blank" href="<?php echo $homeadvisor;?>"><img src="images/elements/directorios/homeadvisor1.png" alt="homeadvisor" class="mr-2 efecto1" height="30px"></a>
        <a target="_blank" href="<?php echo $yelp;?>"><img src="images/elements/directorios/yelp1.png" alt="yelp" class="mr-2 efecto1" height="30px"></a>
        <a target="_blank" href="<?php echo $facebook;?>"><img src="images/elements/directorios/fb.png" alt="Facebook" class="efecto1" height="30px"></a>
      </div>
    </div>
  </div>
  <?php } ?>
  <div class="container copyright pt-4">
    <div class="row vcenter">
      <div class="pull-left col-lg-12 col-12 t-Color1 text-center">
        <p>Copyright &copy;<?=date('Y')?> by<br class="d-md-none"> <?php echo $Company;?> |<br class="d-md-none"> All Rights Reserved</p>
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