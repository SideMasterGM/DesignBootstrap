<?php
	if (strlen($Home[0]) > 10){$ExHome[0]=substr($Home[0], 0,255)."...";};
	if (strlen($Home[1]) > 10){$ExHome[1]=substr($Home[1], 0,255)."...";};
	if (strlen($Home[2]) > 10){$ExHome[2]=substr($Home[2], 0,255)."...";};
	if (strlen($About[0]) > 10){$ExAbout[0]=substr($About[0], 0,255)."...";};
	if (strlen($About[1]) > 10){$ExAbout[1]=substr($About[1], 0,255)."...";};
	if (strlen($About[2]) > 10){$ExAbout[2]=substr($About[2], 0,255)."...";};

	if (strlen($LandingExtract[1]) > 10){$ExLandingExtract[1]=substr($LandingExtract[1], 0,255)."...";};
	if (strlen($LandingExtract[2]) > 10){$ExLandingExtract[2]=substr($LandingExtract[2], 0,255)."...";};
	if (strlen($LandingExtract[3]) > 10){$ExLandingExtract[3]=substr($LandingExtract[3], 0,255)."...";};
	/***INFORMACION DEL CLIENTE**/
	$pageName=$Company;
	$pagePhone=$Phone;
	$pageEmail=$Mail;

	/***Meta Author**/
	$author = $Company;

	//Meta Robots
	$robots ="index, follow";
	$robots2 ="noindex, nofollow";
	$social_img = "http://" . $_SERVER['HTTP_HOST'] . "/" . "images/slider/1.jpg";//Ejemplo, Dimension de la imagen 1200 x 630px / 600 x 315px
	$social_img2 = "http://" . $_SERVER['HTTP_HOST'] . "/" . "images/slider/1.jpg";
	
	//Lenguaje de la pagina
	$lang = "en-US";//por defecto

	//Activar el tab services en las siguiente paginas
	$services_Active = array();

	/***Array de nombre de archivos**/

		$file_Title = array('index.php'														=>"Index | $pageName",
							'about.php'														=>"About Us | $pageName",
							'services.php'													=>"Our Services | $pageName",
							'portfolio.php'										    		=>"Portfolio | $pageName",
							'contact.php'													=>"Contact Us | $pageName",
							'blog.php'														=>"Blog  | $pageName",
							'404.php'														=>"Page not Found",
							'thank-you.php'													=>"Thank You",

							// Blog post
							'blog-page.php'													=>"Title_Post",

							//landing page
							//
							$LandingURL[1].'.php'											=>$LandingName[1]."&nbsp;|&nbsp;".$pageName,
							$LandingURL[2].'.php'											=>$LandingName[2]."&nbsp;|&nbsp;".$pageName,
							$LandingURL[3].'.php'											=>$LandingName[3]."&nbsp;|&nbsp;".$pageName,
							);

	//Meta Description
	$DescriptionArray=array('index.php'														=>$ExHome[0],
							'about.php'														=>$ExHome[1],
							'services.php'													=>$ExHome[2],
							'portfolio.php'										    		=>$ExAbout[0],
							'contact.php'													=>$ExAbout[1],
							'blog.php'														=>$ExAbout[2],
							'404.php'														=>$ExHome[0],
							'thank-you.php'													=>$ExAbout[0],

							// Blog post
							'blog-page.php'													=>"blog_page_meta_description",

							//landing page
							//
							$LandingURL[1].'.php'											=>$ExLandingExtract[1],
							$LandingURL[2].'.php'											=>$ExLandingExtract[2],
							$LandingURL[3].'.php'											=>$ExLandingExtract[3],
						);

?>