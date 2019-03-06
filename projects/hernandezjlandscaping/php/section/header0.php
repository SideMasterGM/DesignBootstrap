<!DOCTYPE html>
<?php include 'php/text.php'; ?>
<html lang="en" <?php if($page_name!='blog.php'){echo "itemscope itemtype='http://schema.org/WebSite'";}?>>
<head>	
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=edge">
	<meta charset="utf-8">
	<title><?php echo $page_name2; ?> &nbsp;-&nbsp; <?php echo $Company; ?></title>
	<meta name="description" content="<?php echo $ExDescription;?>">
	<meta name="author" content="<?php echo $$EOMLink;?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="images/favicon.png">
	  
	<?php //include 'php/css_minified.php';?>
	<link rel="stylesheet" href="css/estilo.css">
  <link rel="stylesheet" href="css/lightbox.css">
  <link rel="stylesheet" href="fonts/mainfont/stylesheet.css">
  
	<!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
	
    <!-- Custom fonts for this template -->
  <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>
<body <?php if($page_name!='blog.php'){echo "itemscope itemtype='http://schema.org/WebPage'";}?>>
  
  <nav  class="<?php echo ($page_name=='index.php')?'navbar navbar-expand-lg headerTop navbar-light container-fluid':'navbar navbar-expand-lg  navbar-light banner-top container-fluid';?>" >
    
    <div class="col-12 col-sm-12 col-md-12 col-lg-3 offset-lg-1 col-xl-3 offset-xl-1 text-center">      
      <a href="index.php"><img src="images/logo.png" class="img-fluid" alt=""></a>
    </div>

    <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
      <div class="col-12 d-none d-lg-block">
        <div class="row middle-header">
          <div class="col-md-3 t-color1">
            <a href="<?php echo $PhoneRef;?>" class="t-color1 font-info"><i class="fa fa-phone"></i> <?php echo $Phone;?></a><br>
            <a href="<?php echo $Phone2Ref;?>" class="t-color1 font-info"><i class="fa fa-phone"></i> <?php echo $Phone2;?></a>            
            <!-- <p class="t-color1 font-info"><i class="fa fa-clock-o"></i> <?php echo $Schedule2;?> -->
          </div>          
          <div class="col-md-5 t-color1">
            <a href="<?php echo $MailRef;?>" class="t-color1 font-info"><i class="fa fa-envelope"></i> <?php echo $Mail;?></a><br>
              <i class="fa fa-map-marker"></i> <?php echo $Cover;?>
          </div>
          <!-- <div class="col-md-5">
            <p class="t-color1 font-info"><i class="fa fa-clock-o"></i> <?php echo $Schedule;?><br>
              <i class="fa fa-globe"></i> <?php echo $Address;?></p> 
          </div> -->
          <div class="col-md-3">
            <p class="t-color1 font-info"><i class="fa fa-globe"></i> <?php echo $Address;?><br>
            <a href="<?php echo $facebook;?>" class="px-1"><i class="fa fa-facebook t-color1 t-color5-hover" aria-hidden="true"></i></a>
            <a href="<?php echo $googleplus;?>" class="px-1"><i class="fa fa-google-plus t-color1 t-color5-hover" aria-hidden="true"></i></a></p>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-expand-lg navbar-dark main-navbar">
        <a class="navbar-brand d-xs-block d-sm-block d-md-block d-lg-none d-lg-none t-color1" href="#">Main Menu</a>
        <button class="navbar-toggler bg-color4" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
              <li itemprop="name" class="nav-item <?php echo ($page_name=='index.php')?'active':'';?>">
                <a href="index.php" itemprop="url" title="Home" class="nav-link t-color1 t-color5-hover px-4">Home</a>
              </li>
              <li itemprop="name" class="nav-item <?php echo ($page_name=='about.php')?'active':'';?>">
                <a href="about.php" itemprop="url" title="About Us" class="nav-link t-color1 t-color5-hover px-4">About</a>
              </li>
              <li itemprop="name" class="nav-item <?php echo ($page_name=='services.php')?'active':'';?>">
                <a href="services.php" itemprop="url" title="Our Services" class="nav-link t-color1 t-color5-hover px-4">Services</a>
              </li>
              <li itemprop="name" class="nav-item <?php echo ($page_name=='portfolio.php')?'active':'';?>">
                <a href="portfolio.php" itemprop="url" title="Our Portfolio" class="nav-link t-color1 t-color5-hover px-4">Portfolio</a>
              </li>
             <!--  <li itemprop="name" class="nav-item <?php echo ($page_name=='testimonials.php')?'active':'';?>">
                <a href="testimonials.php" itemprop="url" title="Reviews" class="nav-link t-color1 t-color3-hover">Testimonials</a>
              </li> -->
              <li itemprop="name" class="nav-item <?php echo ($page_name=='contact.php')?'active':'';?>">
                <a href="contact.php" itemprop="url" title="Contact" class="nav-link t-color1 t-color5-hover px-4">Contact</a>
              </li>
              <!-- <li class="nav-item dropdown">
                <a class="nav-link text-white dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="landing-page.php">Landing Page</a>
                  <a class="dropdown-item" href="blog.php" class="<?php echo ($page_name=='blog.php')?'active':'';?>">Blog Page</a>
                   <a class="dropdown-item" href="contact-variante2.php" class="<?php echo ($page_name=='contact-variante2.php')?'active':'';?>">Contact Variante 2</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="thank-you.php" class="<?php echo ($page_name=='thank-you.php')?'active':'';?>">Thank-You Page</a>
                </div>
              </li> -->             
            </ul>
        </div>
      </nav>
    </div>
  </nav>
