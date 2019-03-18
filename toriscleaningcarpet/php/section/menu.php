<nav class="navbar navbar-expand-lg navbar-dark main-navbar">
 	<a class="navbar-brand d-block d-md-block d-lg-none" href="#">MAIN MENU</a>
 	<button class="navbar-toggler mb-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
 	  <span class="navbar-toggler-icon"></span>
 	</button>
 	<div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav navbar-left mx-auto">
	      <li itemprop="name" class="nav-item <?php echo ($page_name=='index.php')?'active':'';?>">
		    <a href="index.php" itemprop="url" title="Home" class="nav-link text-white px-3">Home</a>
		  </li>
		  <li itemprop="name" class="nav-item <?php echo ($page_name=='about.php')?'active':'';?>">
		    <a href="about.php" itemprop="url" title="About" class="nav-link text-white px-3">About</a>
		  </li>
		  <li itemprop="name" class="nav-item <?php echo ($page_name=='services.php')?'active':'';?>">
		    <a href="services.php" itemprop="url" title="Services" class="nav-link text-white px-3">Services</a>
		  </li>
		  <li itemprop="name" class="nav-item <?php echo ($page_name=='portfolio.php')?'active':'';?>">
		    <a href="portfolio.php" itemprop="url" title="Portfolio" class="nav-link text-white px-3">Portfolio</a>
		  </li>
		  <li itemprop="name" class="nav-item <?php echo ($page_name=='contact.php')?'active':'';?>">
		    <a href="contact.php" itemprop="url" title="Contact" class="nav-link text-white px-3">Contact</a>
		  </li>
	    </ul>
 	</div>
</nav>