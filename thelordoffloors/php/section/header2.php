<!DOCTYPE HTML>
<?php @session_start(); include ("php/text.php");?>
<html lang="en" <?php if($page_name!='blog.php'){echo "itemscope itemtype='http://schema.org/WebSite'";}?>>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>
		<?php 
		  if($page_name=='index.php'){echo "Home";}
		  elseif ($page_name=='about.php') {echo "About";}
		  elseif ($page_name=='services.php') {echo "Services";}
		  elseif ($page_name=='portfolio.php') {echo "Portfolio";}
		  elseif ($page_name=='testimonials.php') {echo "Testimonials";}
		  // elseif ($page_name=='blog.php') {echo "Blog";}
		  // elseif ($page_name=='blog-page.php') {echo "Blog Page";}
		  // elseif ($page_name=='landing-page.php') {echo "Landing Page";}
		  elseif ($page_name=='contact.php') {echo "Contact Us";}?> - <?php echo "$Company"; 
		?>
	</title>
	<meta name="description" content="The Lord of Floors is a well-known flooring contractor who founded in Sarasota, Florida. Our company was established more than 14 years ago...">
	<meta name="author" content="http://www.eliteonlinemedia.com/">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">

	
	<script async="async" src="js/jquery-3.1.0.min.js"></script>
	
	<?php include 'php/css_minified.php' ?>
	<script async="async" src="vendor/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
	<script async="async" src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script async="async" src="vendor/owl-carousel/owl.carousel.min.js"></script>

	<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
	<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <!--
    <link rel="stylesheet" href="css/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/owl-carousel/owl.carousel.min.css" media="screen">
	<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css" media="screen">
	<link rel="stylesheet" href="vendor/mediaelement/mediaelementplayer.css" />
	<link rel="stylesheet" href="vendor/rs-plugin/css/settings.css" media="screen">

    <link rel="stylesheet" href="css/theme.min.css">
	<link rel="stylesheet" href="css/skins/red.css">
	<link rel="stylesheet" href="css/custom.min.css">
	<link rel="stylesheet" href="css/fonts/mainfont/stylesheet.css">
	
	-->
	<script async="async" src="vendor/modernizr.js"></script>
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script src="vendor/respond.min.js"></script>
	<![endif]-->

	<!--[if IE]>
		<link rel="stylesheet" href="css/ie.css">
	<![endif]-->

	<link rel="shortcut icon" href="images/favicon.png">
	<?php //include 'php/seo_home.php';?>
	<script type="text/javascript">
	   onload=function() {
	   document.getElementById('dir').value = location.href;
	   }
	</script>

	
</head>
<body <?php if($page_name!='blog.php'){echo "itemscope itemtype='http://schema.org/WebPage'";}?>>

	<div class="site-wrapper">
		<header class="header header-top-colored menu-colored">
			<div class="header-top b_brown-7 t_white">
				<div class="container">
					<div class="header-top-left hidden-xs">
						<ul class="header-top-nav">
							<li><a href="<?php echo "$MailRef";?>" title="Mail" class="t_white lowercase btn btn-xs"><i class="fa fa-envelope t_white"></i> <?php echo "$Mail";?></a></li>
							<li><a href="<?php echo "$PhoneRef";?>" title="Phone" class="t_white btn btn-xs"><i class="fa fa-phone t_white"></i><?php echo "$Phone";?></a></li>
							<!-- <li><a href="<?php echo "$PhoneRef2";?>" title="Phone" class="t_white btn btn-xs"><i class="fa fa-phone t_white"></i> <?php echo "$Phone2";?></a></li> -->
						</ul>
					</div>
					<div class="header-top-right hidden-sm">
						<span class="info-item"><a href="<?php echo $facebook;?>" class="btn btn-xs b_blue-3" target="_blank"><i class="fa fa-facebook"></i></a></span>
						<span class="info-item"><a href="<?php echo $twitter;?>" class="btn btn-xs b_blue-2" target="_blank"><i class="fa fa-twitter"></i></a></span>
						<span class="info-item"><a href="<?php echo $googleplus;?>" class="btn btn-xs b_red-2" target="_blank"><i class="fa fa-google-plus"></i></a></span>
					</div>
				</div>
			</div>
			<div class="header-main">
				<div class="container">
					<nav class="navbar navbar-default fhmm" role="navigation">
						<div class="navbar-header ">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
								<i class="fa fa-bars"></i>
							</button>
							<div class="hidden-xs hidden-sm" style="margin: 0!important;">
								<a href="index.php" title="logo"><img src="images/logo.png" alt="<?php echo "$Company";?>" ></a> 
								 <!-- <h3 class="t_green-5"><?php echo "$Company";?></h3>   -->
							</div>
							
								<div class="logo visible-xs visible-sm" style="margin: 0!important;padding:0!important;top: 10px">
								<a href="index.php" title="logo"><img src="images/logosm.png" alt="<?php echo "$Company";?>" ></a> 
									 <!-- <h1 class="t_fuchsia-1 bars stroke"><?php echo "$Company";?></h1>   -->
								</div>
							
						</div>

						<div id="main-nav" class="navbar-collapse collapse" itemscope itemtype="http://schema.org/SiteNavigationElement">
							<div class="container">
								<ul class="nav navbar-nav">
									<li itemprop="name" class="<?php echo ($page_name=='index.php')?'active':'';?>">
									   <a itemprop="url" href="index.php" title="Home" class="t_brown-7 uppercase">Home</a>
									</li>
									<li itemprop="name" class="<?php echo ($page_name=='about.php')?'active':'';?>">
										   <a itemprop="url" href="about.php" title="About Us" class="t_brown-7 uppercase">About Us</a>
									</li>
									<li itemprop="name" class="<?php echo ($page_name=='services.php')?'active':'';?>" >
										   <a itemprop="url" href="services.php" title="Services" class="t_brown-7 uppercase">Services</a>
									</li>
									<li itemprop="name" class="<?php echo ($page_name=='portfolio.php')?'active':'';?>" >
										   <a itemprop="url" href="portfolio.php" title="Portfolio" class="t_brown-7 uppercase">Portfolio</a>
									</li>
									<li itemprop="name" class="<?php echo ($page_name=='testimonials.php')?'active':'';?>">
										   <a itemprop="url" href="testimonials.php" title="Testimonials" class="t_brown-7 uppercase">Testimonials</a>
									</li>
									<!--  -->
									<!-- <li itemprop="name" class="<?php echo ($page_name=='blog.php')?'active':'';?>">
										   <a itemprop="url" href="blog.php" title="Blog" class="uppercase">Blog</a>
									</li> -->
									<li itemprop="name" class="<?php echo ($page_name=='contact.php')?'active':'';?>">
										   <a itemprop="url" href="contact.php" title="Contact Us" class="t_brown-7 uppercase">Contact Us</a>
									</li>
									<!-- <li itemprop="name" class="dropdown <?php echo ($page_name=='landing-page.php')?'active':'';?>">
										<a itemprop="url" href="#" title="DropDown" data-toggle="dropdown" class="dropdown-toggle uppercase">Dropdown<b class="caret"></b></a>
										<ul class="dropdown-menu">
											<li itemprop="name" class="<?php echo ($page_name=='landing-page.php')?'active':'';?>"><a itemprop="url" href="landing-page.php" title="Landing Page" class="uppercase">Landing Page</a></li>
											<li itemprop="name" class="<?php echo ($page_name=='404.php')?'active':'';?>"><a itemprop="url" href="404.php" title="Error404" class="uppercase">Error404</a></li>
										</ul>
									</li> -->
								</ul>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</header>
		<div class="main" role="main">