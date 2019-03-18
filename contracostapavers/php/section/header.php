<?php @session_start();?>
<!DOCTYPE html>
<?php include 'php/text.php';?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo $ExDescription;?>">
    <meta name="author" content="">
    <title><?php
    if($page_name=='index.php'){echo "Home";}
    elseif ($page_name=='about.php') {echo "About Us";}
    elseif ($page_name=='services.php') {echo "Services";}
    elseif ($page_name=='portfolio.php') {echo "Portfolio";}
    elseif ($page_name=='testimonials.php') {echo "Testimonials";}
    elseif ($page_name=='blog.php') {echo "Blog";}
    elseif ($page_name=='blog-page.php') {echo "$BlogEntryT1";}
    elseif ($page_name=='landing.php') {echo "$LN1";}
    elseif ($page_name=='thank-you.php') {echo "Thank You";}
    elseif ($page_name=='404.php') {echo "404 Error";}
    elseif ($page_name=='contact.php') {echo "Contact Us";}?> - <?php echo "$Company";?></title>
    <?php include 'php/css_minified.php';?>
    <!-- <link rel="stylesheet" href="style-ham.css"> -->
    <link rel="icon" type="image/png" href="images/favicon.png" />
  </head>
  <body id="page-top">
    <!-- <div class="header-top-1">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 t-black d-none d-lg-block">
            <div>
              <i class="fa fa-check-square-o"></i> <em><?php echo $Services;?></em> &nbsp &nbsp
              <i class="fa fa-home"></i> <span><?php echo $Address;?></span> &nbsp &nbsp
              <i class="fa fa-handshake-o"></i> <span><?php echo $Experience;?></span> &nbsp &nbsp
              <i class="fa fa-flag-o"></i> <span><?php echo $Bilingual;?></span> &nbsp &nbsp
            </div>
          </div>
          <div class="col-lg-2 d-none d-lg-block">
            <div class="info-top2">
              <a href="<?php echo $facebook;?>" class="icons-sm fb-ic ml-0"><i class="fa fa-facebook t-black mr-lg-4 sr-contact"> </i></a>
              <a href="<?php echo $googleplus;?>" class="icons-sm gplus-ic"><i class="fa fa-google-plus t-black mr-lg-4 sr-contact"> </i></a>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top menu-bg" id="mainNav">
      <div class="container">
        <span class="t-white navbar-brand d-sm-block d-md-block d-lg-none">Menu</span>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link <?php echo ($page_name=='index.php')?'active':'';?>" href="index.php"><i class="fa fa-home"></i> Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo ($page_name=='about.php')?'active':'';?>" href="about.php"><i class="fa fa-user"></i> About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo ($page_name=='services.php')?'active':'';?>" href="services.php"><i class="fa fa-calendar"></i> Services</a>
            </li>
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle <?php echo ($page_name=='services.php' || $page_name=='landing.php')?'active':'';?>" data-toggle="dropdown" href="services.php" role="button" aria-haspopup="true" aria-expanded="false">Services</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="landing.php">Landing Pages</a>
                <a class="dropdown-item" href="404.php">404</a>
                <a class="dropdown-item" href="thank-you.php">Thank You</a>
                <div class="dropdown-divider"></div>
                <a class=" dropdown-item" href="services.php">All Services</a>
              </div>
            </li> -->
            <li class="nav-item">
              <a class="nav-link <?php echo ($page_name=='portfolio.php')?'active':'';?>" href="portfolio.php"><i class="fa fa-image"></i> Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo ($page_name=='contact.php')?'active':'';?>" href="contact.php"><i class="fa fa-address-book-o"></i> Contact Us</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link btn-menu t-Color2" href="<?php echo $PhoneRef;?>">Call us Today!</a>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>
    <div class="header-top">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-4 col-12 text-center text-lg-left">
            <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="<?php echo $Company;?>" class="logo-position img-fluid"></a>
          </div>
          <div class="col-lg-8 d-none d-lg-block">
            <div class="row info-top pull-right">
              <div class="col-md-12 ">
                <i class="fa fa-phone info-top-phone"></i><a href="<?php echo $PhoneRef;?>" class="t-black font-phone"><?php echo $Phone;?></a><br>
                <i class="fa fa-envelope info-top-phone"></i><a href="<?php echo $MailRef;?>" class="t-black"><?php echo $Mail;?></a>
                <div class="mt-3">
                  <a target="_blank" href=""><img src="images/elements/directorios/gmb.png" alt="gmb" class="mr-2 efecto1" height="30px"></a>
                  <a target="_blank" href="<?php echo $homeadvisor;?>"><img src="images/elements/directorios/homeadvisor1.png" alt="homeadvisor" class="mr-2 efecto1" height="30px"></a>
                  <a target="_blank" href="<?php echo $yelp;?>"><img src="images/elements/directorios/yelp1.png" alt="yelp" class="mr-2 efecto1" height="30px"></a>
                  <a target="_blank" href="<?php echo $facebook;?>"><img src="images/elements/directorios/fb.png" alt="Facebook" class="efecto1" height="30px"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php if ($page_name!="index.php" && $page_name!="landing.php" && $page_name!="404.php" && $page_name!="thank-you.php") {?>
    <div class="banner-top">
      <img src="images/elements/banner-top.jpg" class="" alt="top-banner" />
    </div>
    <?php include 'php/section/pagename.php';?>
    <?php } ?>