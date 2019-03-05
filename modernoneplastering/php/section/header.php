<!DOCTYPE html>
<?php include 'php/text.php'; ?>
<?php @session_start();?>
<html lang="en" <?php if($page_name!='blog.php'){echo "itemscope itemtype='http://schema.org/WebSite'";}?>>
<?php include 'setting.php';?>
<head>	
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=edge">
	<meta charset="utf-8">
   <?php include 'php/section/cannonical.php';?>
	<link rel="shortcut icon" href="images/favicon.png">
	  
	<?php //include 'php/css_minified.php';?>
	<link rel="stylesheet" href="css/estilo.css">
  <link rel="stylesheet" href="css/lightbox.css">
  <link rel="stylesheet" href="fonts/mainfont/stylesheet.css">
  
	<!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
	
    <!-- Custom fonts for this template -->
  <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body <?php if($page_name!='blog.php'){echo "itemscope itemtype='http://schema.org/WebPage'";}?>>
  <div class="container py-2 middle-header">
    <div class="row align-items-center">
    <div class="col-lg-4 col-md-4 offset-md-0 col-sm-8 offset-sm-2 col-xs-12 text-center">
      <a href="index.php"><img src="images/logo.png" class="img-fluid"></a>
    </div>
    <div class="col-lg-6 col-md-8 text-right d-none d-md-block d-lg-block">
      <div class="row">
        <div class="col-md-12 d-none d-sm-block"><a href="<?php echo $PhoneRef;?>" class="t-color3 t-color2-hover"><i class="fa fa-phone"></i> <?php echo $Phone;?> - English</a>
        &emsp; | &emsp;<a href="<?php echo $Phone2Ref;?>" class="t-color3 t-color2-hover"><i class="fa fa-phone"></i> <?php echo $Phone2;?> - Español</a></div>
        <div class="col-md-12 d-none d-sm-block"><a href="<?php echo $MailRef;?>" class="t-color3 t-color2-hover"><i class="fa fa-envelope"></i> <?php echo $Mail;?></a></div>
        <div class="col-md-12 d-none d-sm-block"><i class="fa fa-map-marker"></i> <?php echo $Cover;?></a></div>
      </div>
    </div>
    <div class="col-xl-2 text-center d-none d-xl-block text-center">
      <!-- <a href="<?php echo $bbb;?>" target="blank"><em class="font-info t-color2">Find Us At</em><br><img src="images/elements/brands/bbbA+.png" class="img-fluid"></a> -->
      <a href="contact.php" class="btn btn-md boton1"><strong><i class="fa fa-phone"></i> Get In Touch</strong></a>
    </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark main-navbar bg-color2">
        <a class="navbar-brand d-xs-block d-sm-block d-md-block d-lg-none d-lg-none t-color1" href="#">Main Menu</a>
        <button class="navbar-toggler bg-color3" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
              <li itemprop="name" class="nav-item <?php echo ($page_name=='index.php')?'active':'';?>">
                <a href="index.php" itemprop="url" title="Home" class="nav-link t-color1 px-4 t-color3-hover"><i class="fa fa-home"></i> Home</a>
              </li>
              <li itemprop="name" class="nav-item <?php echo ($page_name=='about.php')?'active':'';?>">
                <a href="about.php" itemprop="url" title="About Us" class="nav-link t-color1 px-4 t-color3-hover"><i class="fa fa-user"></i> About</a>
              </li>
              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle t-color1 px-4 t-color3-hover" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-plus"></i> Services</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="<?php echo $LandingURL[1].'.php'?>"><?php echo $LN[1]?></a>
                  <a class="dropdown-item" href="<?php echo $LandingURL[2].'.php'?>"><?php echo $LN[2]?></a>
                  <a class="dropdown-item" href="<?php echo $LandingURL[3].'.php'?>"><?php echo $LN[3]?></a>
                </div>
              </li> -->
              <li itemprop="name" class="nav-item <?php echo ($page_name=='services.php')?'active':'';?>">
                <a href="services.php" itemprop="url" title="Our Services" class="nav-link t-color1 px-4 t-color3-hover"><i class="fa fa-handshake-o"></i> Services</a>
              </li>
              <li itemprop="name" class="nav-item <?php echo ($page_name=='portfolio.php')?'active':'';?>">
                <a href="portfolio.php" itemprop="url" title="Our Portfolio" class="nav-link t-color1 px-4 t-color3-hover"><i class="fa fa-image"></i> Portfolio</a>
              </li>
             <!--  <li itemprop="name" class="nav-item <?php echo ($page_name=='testimonials.php')?'active':'';?>">
                <a href="testimonials.php" itemprop="url" title="Reviews" class="nav-link t-color1 t-color3-hover">Testimonials</a>
              </li> -->
              <li itemprop="name" class="nav-item <?php echo ($page_name=='contact.php')?'active':'';?>">
                <a href="contact.php" itemprop="url" title="Contact" class="nav-link t-color1 px-4 t-color3-hover"><i class="fa fa-address-book"></i> Contact</a>
              </li>
             <!--  <li class="nav-item dropdown">
                <a class="nav-link text-white dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="landing-page.php">Landing Page</a>
                  <a class="dropdown-item" href="blog.php" class="<?php echo ($page_name=='blog.php')?'active':'';?>">Blog Page</a>
                   <a class="dropdown-item" href="contact-variante2.php" class="<?php echo ($page_name=='contact-variante2.php')?'active':'';?>">Contact Variante 2</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="thank-you.php" class="<?php echo ($page_name=='thank-you.php')?'active':'';?>">Thank-You Page</a>
                </div>
              </li> -->
              <!-- <li class="d-none d-xl-block"><a href="<?php echo $PhoneRef;?>"><p class="font-h4 t-color1 mt-2 pl-1"><i class="fa fa-phone"></i> <?php echo $Phone;?></p></a></li> -->
            </ul>
        </div>
      </nav>
