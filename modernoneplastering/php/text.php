<?php
$full_name = $_SERVER['PHP_SELF'];$name_array = explode('/',$full_name);$count = count($name_array);$page_name = $name_array[$count-1];
if($page_name=='index.php'){$page_name2="Home";}
elseif ($page_name=='about.php') {$page_name2="About Us";}
elseif ($page_name=='services.php') {$page_name2="Our Services";}
elseif ($page_name=='portfolio.php') {$page_name2="Our Portfolio";}
elseif ($page_name=='thank-you.php') {$page_name2="Thank You";}
elseif ($page_name=='post-page.php') {$page_name2="Post Name";}
elseif ($page_name=='blog.php') {$page_name2="Blog";}
elseif ($page_name=='testimonials.php') {$page_name2="Testimonials";}
elseif ($page_name=='testimonials-bd.php') {$page_name2="Testimonials BD";}
elseif ($page_name=='404.php') {$page_name2="Not Found";}
elseif ($page_name=='contact.php') {$page_name2="Contact Us";}
elseif ($page_name=='contact-variante2.php') {$page_name2="Contact Variante 2";}
//Info
	$EOMLink="http://www.eliteonlinemedia.com/";
	$Company="Modern One Plastering";
	$Domain='www.modernoneplastering.com';//No dejar pleca al final del dominio
	$Address='Bell Gardens, California';
	//Para SEO
		$Locality='Locality';
		$Region='Region';
		$StreetAddress='StreetAddress';

	$Phone='(323) 743-7865';
	$PhoneConvert = str_replace(str_split('(-)/:*?"<>|\t\n\r'), '', $Phone);
	$PhoneRef = "tel:".str_replace(str_split(' '), '', $PhoneConvert);

	$Phone2='(323) 826-4545';
	$Phone2Convert = str_replace(str_split('(-)/:*?"<>|\t\n\r'), '', $Phone2);
	$Phone2Ref = "tel:".str_replace(str_split(' '), '', $Phone2Convert);

	$SEOConvert= str_replace(str_split(' '), '-', $PhoneConvert);
	$SEOPhone='+1'.$SEOConvert;

	$Mail='contact@modernoneplastering.com';$MailRef="mailto:".$Mail;
	$Mail2='wilmar@modernoneplastering.com ';$Mail2Ref="mailto:".$Mail2;
	$Services='Residential and Commercial Services';
	$Payment='We Accept Checks, Cash & Credit Cards';
	$Experience='We Have 15 Years of Experience';
	$Schedule='Monday to Friday from 7 am to 5 pm';
	$Bilingual='We are Bilingual';
	$Estimates='We Offer Free Estimates';
	$Cover='We Cover all of California';
	$License='We are Licensed #1043621';

	$facebook='#';
	$twitter='#';
	$googleplus='#';

	$GoogleMap='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d160909.28501110311!2d-118.2023638993925!3d33.99383150407749!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2cdd603bf9115%3A0xde6a2bfb09fddf9b!2sBell+Gardens%2C+California+90201%2C+EE.+UU.!5e0!3m2!1ses-419!2sni!4v1536682164739" class="googlemap" allowfullscreen></iframe>';

//Phrases
	$Description="Our team of specialists will be ready to help with any kind of plastering that you might need for your property. Since plastering is considered a superior building material, we assure you that every project we complete is done with excellence and professionalism. Get your property’s holes and damages fixed today!  ";
 	$Phrase = array(
		"The Right Plaster for Your Walls",
		"All You Need in Plastering",
		"Save Money on Plaster Services",
		"Just Look at that Finish",
		"Where Quality is a Promise",
		"",
	);

//Home - Mission, etc.
	$Home = array(
		"If you were on the search for the best plastering service in town, then you have come to the right place! Modern One Plastering has been providing clients all around California with high quality plastering services over 15 years. Get superior strength and insulation for your home from our plastering specialists! ",
		"Our company provides exceptional services at market competitive prices. Our team of specialists is ready and trained to tackle all of your plastering needs, no job is too big or small for us. We guarantee that we will complete every project in a reasonable amount of time. Don’t wait any longer and contact us now to get a free estimate!",
		"Our residential and commercial services are:<br> • Exterior Stucco<br> • Scaffolding Rental<br> • Venetian Plastering Interior<br> • Plastering Marmorino<br> • Interior Decorative Plaster<br> • Textured Finishes<br> • Smooth Finish",
		);

	$About = array(
		"Modern One Plastering with over 15 years of experience has been delivering high-quality services in the area of Bell Gardens, California. We are set apart from the competition as we are able to exceed our clients’ needs and demands by providing the best plastering services in town. ",
		"Our team of specialists will be ready to help with any kind of plastering that you might need for your property. Since plastering is considered a superior building material, we assure you that every project we complete is done with excellence and professionalism. Get your property’s holes and damages fixed today!  ",
		"Our company’s core values are:<br> •  Quality<br> •  Responsibility<br> •  Honesty<br> •  Efficiency<br> •  Professionalism<br> •  Diligence",
		);

	$Why=    "If you want your plastering projects to be on time, under budget, and within quality standards then the best choice is always Modern One Plastering.";
	$Mission="Our mission at Modern One Plastering is to outperform the competition with outstanding prices and unwavering excellence.";
	$Vision= "Our vision at Modern One Plastering is to be the leading plaster contractors in town through work that promotes value, service, and quality.";

//Services
	$SN[1]="Exterior Stucco Lath And Plaster";
	$SD[1]="There are many benefits behind stucco. When you apply traditional stucco lath to your property’s exterior, you benefit from insulation, energy efficiency, and curb appeal. Learn more about the endless benefits of this outstanding finish by working alongside Modern One Plastering. ";
	$SN[2]="Scaffolding Rental	";
	$SD[2]="Our friendly team at Modern One Plastering, offers reliable and efficient scaffolding services at competitive prices. At Modern One Plastering, you will find scaffolds that vary in style including narrow, post shores, and standard. Get more information on our product rental by calling today.";
	$SN[3]="Venetian Plastering Interior";
	$SD[3]="Create optimal indoor air quality. More than that, benefit from antibacterial surfaces when you install venetian plaster to your property’s interior. Our skilled staff at Modern One Plastering is experienced in the venetian plastering trade. This amazing finish inhibits the growth of mold and other fungi.";
	$SN[4]="Plastering Marmorino";
	$SD[4]="Get a sense of depth for your walls with marmorino plastering. Our professionals at Modern One Plastering specialize in his polished plaster application that brings natural shade variations to your surfaces. Contact us today and save money on all your plastering needs.";
	$SN[5]="Interior Decorative Plaster";
	$SD[5]="Get ornamental plaster for your walls, and see how this transforms your spaces from ordinary to extraordinary in no time. Our skilled staff is always ready to assist residential and commercial clients with beautiful decorative plasters for kitchens, bathrooms, living rooms, and more. ";
//Excerpt
	if (strlen($Description) > 10){$ExDescription=substr($Description, 0,152).'...';};
	if (strlen($SD[1]) > 10){$ExSD[1]=substr($SD[1], 0,150).'...';};
	if (strlen($SD[2]) > 10){$ExSD[2]=substr($SD[2], 0,150).'...';};
	if (strlen($SD[3]) > 10){$ExSD[3]=substr($SD[3], 0,150).'...';};
	if (strlen($SD[4]) > 10){$ExSD[4]=substr($SD[4], 0,150).'...';};
	if (strlen($SD[5]) > 10){$ExSD[5]=substr($SD[5], 0,170).'...';};
//Testimonials
	$Date='<i class="fa fa-calendar t_red-3"></i>&nbsp;<strong>Date:</strong>&nbsp;';
	$Review='<i class="fa fa-user t_green-3"></i>&nbsp;<strong>Review By:</strong>&nbsp;';
	$Project='<i class="fa fa-wrench t_red-3"></i>&nbsp;<strong>Project:</strong>&nbsp;';
	$Comment='<i class="fa fa-comment t_green-3"></i>&nbsp;';
	$Testimonial[1]= array("22-05-2017", "Client 1", "Orem ipsum dolor sit amet","Orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam.");
	$Testimonial[2]= array("22-06-2017", "Client 2", "Orem ipsum dolor sit amet","Orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam.");
	$Testimonial[3]= array("22-07-2017", "Client 3", "Orem ipsum dolor sit amet","Orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam.");
	$Testimonial[4]= array("22-07-2017", "Client 4", "Orem ipsum dolor sit amet","Orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam.");
//Landing Pages	
	$LN[1]=$SN[1];
	$LandingURL[1]="";
	$LandingExtract[1]="";
	$LD[1]=
	"
	<p><p>
	<p><p>
	<p><p>
	";

	$LN[2]=$SN[2];
	$LandingURL[2]="";
	$LandingExtract[2]="";
	$LD[2]=
	"
	<p><p>
	<p><p>
	<p><p>
	";

	$LN[3]=$SN[3];
	$LandingURL[3]="";
	$LandingExtract[3]="";
	$LD[3]=
	"
	<p></p>
	<p></p>
	<p></p>
	";

//Blog
	$BlogEntryT[1]="Blog Entry Title 1";
	$BlogEntryD[1]= array(
	"
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>",
	"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>",
	"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>",
	"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>
	");
	$BlogDate[1]="1/Jan/2016";
	$BlogAuthor[1]="Administrator";

	$BlogEntryT[2]="Blog Entry Title 2";
	$BlogEntryD[2]=array(
	"
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>",
	"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>",
	"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>",
	"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>
	");
	$BlogDate[2]="2/Jan/2016";
	$BlogAuthor[2]="Administrator";

	$BlogEntryT[3]="Blog Entry Title 3";
	$BlogEntryD[3]=array(
	"
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>",
	"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>",
	"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>",
	"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>
	");
	$BlogDate[3]="3/Jan/2016";
	$BlogAuthor[3]="Administrator";


include 'php/landingurl.php';
//BlogEcxerpt
	//if (strlen($BlogEntryD[1]) > 1){$ExBlogEntryD[1]= ucwords(substr($BlogEntryD[1], 3));};

	// if (strlen($BlogEntryD2) > 10){$ExBlogEntryD2=substr($BlogEntryD2, 0,160).'...';};
	// if (strlen($BlogEntryD2) > 10){$ExBlogEntryD2=substr($BlogEntryD2, 0,160).'...';};
?>
