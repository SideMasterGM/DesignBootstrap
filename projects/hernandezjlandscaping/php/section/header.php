<!DOCTYPE html>
<?php include 'php/text.php'; ?>
<html lang="en" <?php if($page_name!='blog.php'){echo "itemscope itemtype='http://schema.org/WebSite'";}?>>
<?php include 'setting.php';?>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=edge">
	<meta charset="utf-8">
	<?php include 'php/section/cannonical.php';?>
  <link rel="shortcut icon" href="images/favicon.png">
	  
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
  
  <nav  class="<?php echo ($page_name=='index.php')?'navbar navbar-expand-lg headerTop navbar-light container-fluid':'navbar navbar-expand-lg  navbar-light headerTop container-fluid';?>" >
   
    <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 text-center">      
      <a href="index.php"><img src="images/logo.png" class="img-fluid logo-position" alt=""></a>
    </div>

    <div class="col-12 col-sm-12 col-md-12 col-lg-8 offset-lg-1">
      <nav class="navbar navbar-expand-lg navbar-dark main-navbar">
        <a class="navbar-brand d-xs-block d-sm-block d-md-block d-lg-none d-lg-none t-color1" href="#"></a>
        <button class="navbar-toggler bg-color2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto nav-back mt-4 mt-md-0">
              <li itemprop="name" class="nav-item <?php echo ($page_name=='index.php')?'active':'';?>">
                <a href="index.php" itemprop="url" title="Home" class="nav-link t-color2 t-color3-hover px-3">Home</a>
              </li>
              <li itemprop="name" class="nav-item <?php echo ($page_name=='about.php')?'active':'';?>">
                <a href="about.php" itemprop="url" title="About Us" class="nav-link t-color2 t-color3-hover px-3">About</a>
              </li>
              <li itemprop="name" class="nav-item <?php echo ($page_name=='services.php')?'active':'';?>">
                <a href="services.php" itemprop="url" title="Our Services" class="nav-link t-color2 t-color3-hover px-3">Services</a>
              </li>
              <li itemprop="name" class="nav-item <?php echo ($page_name=='portfolio.php')?'active':'';?>">
                <a href="portfolio.php" itemprop="url" title="Our Portfolio" class="nav-link t-color2 t-color3-hover px-3">Portfolio</a>
              </li>
              <li itemprop="name" class="nav-item <?php echo ($page_name=='contact.php')?'active':'';?>">
                <a href="contact.php" itemprop="url" title="Contact Us" class="nav-link t-color2 t-color3-hover px-3">Contact</a>
              </li>
              <li class="d-none d-xl-block mt-3">
                <a href="contact.php" class="boton4 font10"><strong><i class="fa fa-envelope"></i> Contact Us</strong></a>
              </li>
            </ul>
        </div>
      </nav>
    </div>
  </nav>
