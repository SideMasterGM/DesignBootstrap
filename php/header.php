<?php
    $Phone = "(404) 379-1482";
    $PhoneRef = "tel:4043791482";

    $Mail = "contact@hernandezjlandscaping.com";
    $MailRef = "mailto:contact@hernandezjlandscaping.com";

    $Cover = "We Cover 85 Miles Around Clarkston";
?>

<div class="container py-2 middle-header">
    <div class="row align-items-center">
    <div class="col-lg-4 col-md-4 offset-md-0 col-sm-8 offset-sm-2 col-xs-12 text-center">
      <a href="./"><img src="src/logo/logo.png" class="img-fluid logo-img-fluid"></a>
    </div>

    <div class="col-lg-6 col-md-8 text-right d-none d-md-block d-lg-block">
      <div class="row">
        <div class="col-md-12 d-none d-sm-block">
            <a href="<?php echo $PhoneRef;?>" class="t-color3 t-color2-hover">
                <i class="fa fa-phone"></i> 
                <?php echo $Phone;?>
            </a>
        </div>
        <div class="col-md-12 d-none d-sm-block"><a href="<?php echo $MailRef;?>" class="t-color3 t-color2-hover"><i class="fa fa-envelope"></i> <?php echo $Mail;?></a></div>
        <div class="col-md-12 d-none d-sm-block"><i class="fa fa-map-marker"></i> <?php echo $Cover;?></a></div>
      </div>
    </div>

    <div class="col-xl-2 text-center d-none d-xl-block text-center">
      <!-- <a href="<?php echo "sddfsdf";?>" target="blank"><em class="font-info t-color2">Find Us At</em><br><img src="images/elements/brands/bbbA+.png" class="img-fluid"></a> -->
      <a href="https://www.facebook.com/Hernandez-J-landscaping-1305435579559128/" class="social_network" target="_blank"><img src="src/credit-cards/fb.png" alt="Facebook Page"/></a>
      <a href="contact.php" class="btn btn-md boton1"><strong><i class="fa fa-phone"></i> Get In Touch</strong></a>
    </div>
    </div>
  </div>
  

  <style>
    .container .logo-img-fluid {
        height: 125px;
        float: left;
    }

    .pb-2, .py-2 {
        padding-bottom: .5rem !important;
    }

    .pt-2, .py-2 {
        padding-top: .5rem !important;
    }
  </style>

<?php
    include ("php/hd-menu.php");
    // include ("php/hd-logo.php");

    if ($filename == "index.php"){
        include ("php/hd-slide.php");
        // include ("libs/php/lightgallery/lg-body.php");
    }

?>