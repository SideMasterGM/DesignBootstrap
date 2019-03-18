<?php
$full_name = $_SERVER['PHP_SELF'];$name_array = explode('/',$full_name);$count = count($name_array);$page_name = $name_array[$count-1];
if($page_name=='index.php'){$namepage="Home";}
elseif ($page_name=='about.php') {$namepage="About";}
elseif ($page_name=='services.php') {$namepage="Services";}
elseif ($page_name=='portfolio.php') {$namepage="Portfolio";}
elseif ($page_name=='thank-you.php') {$namepage="Thank You";}
elseif ($page_name=='testimonials.php') {$namepage="Testimonials";}
elseif ($page_name=='404.php') {$namepage="Not Found";}
elseif ($page_name=='contact.php') {$namepage="Contact Us";}
//Info
	$EOMLink="http://www.eliteonlinemedia.com/";
	$Company="Toris Carpet Care & Janitorial Service";
	$Domain='www.toriscleaningcarpet.com';//No dejar pleca al final del dominio
	$Address='Sparks, NV';
	//Para SEO
		$Locality='Locality';
		$Region='Region';
		$StreetAddress='StreetAddress';

	$Phone='Main: (775) 815-2701';
	$PhoneConvert = str_replace(str_split('(-)/:*?"<>|\t\n\r\M\a\i'), '', $Phone);
	$PhoneRef = "tel:".str_replace(str_split(' '), '', $PhoneConvert);

	$Phone2='Secondary: (775) 762-0399';
	$Phone2Convert = str_replace(str_split('(-)/:*?"<>|\t\n\r\S\e\c\o\d\a\y'), '', $Phone2);
	$Phone2Ref = "tel:".str_replace(str_split(' '), '', $Phone2Convert);

	$SEOConvert= str_replace(str_split(' '), '-', $PhoneConvert);
	$SEOPhone='+1'.$SEOConvert;

	$Mail='contact@toriscleaningcarpet.com';$MailRef="mailto:".$Mail;
	$Services='Residential and Commercial Services';

	$Payment='We Accept Cash, Checks, and Credit Cards';
	$Experience='10 Years of Experience';
	$Schedule='Mon - Fri: 8 am to 5 pm';
	$Schedule2='Saturday from 8 am to 1 pm';
	$Schedule3='Available for Emergencies';
	$Bilingual='We Are Bilingual';
	$Estimates='Free Estimates Are Available';
	$Satisfaction='Your Satisfaction is Guaranteed';
	$Cover='We Cover 50 Miles Around Nevada';
	$License='We Are Licensed';

	$facebook='#';
	$twitter='#';
	$googleplus='#';

	$homeadvisor="#";$manta="#";$bbb="#";$buildzoom="#";$houzz="#";$yelp="#";
	$yellowpages="#"; $dexknow="#"; $yelp="#";

	$GoogleMap='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d98409.6343631316!2d-119.71544305!3d39.575364449999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80993ed409896c93%3A0xf189599a50856df9!2sSparks%2C+Nevada%2C+EE.+UU.!5e0!3m2!1ses-419!2sni!4v1550604267032" class="googlemap-theme"  height="250" allowfullscreen></iframe>';
//Phrases
	$Description="Exceeding customers’ expectations and offering the highest quality results are our main focus. Our belief is that through honesty and responsibility we will be able to achieve everything you expect from us and much more.";
 	$Phrase = array(
		"Meticulous Care for Your Space",
		"Cleaning Services that Live up to Your Expectations",
		"Cleaning that Truly Makes a Difference",
		"Cleaning Services that Exceed Your Expectations",
		"Remarkable Solutions that Leave Your Home Spotless",
	);
	$PhraseTop1='<strong>Certified</strong><br><span>'.$License.'</span>';
	$PhraseTop2='<strong>Get in Touch</strong><br><span>'.$Phone.' | '.$Phone2.'</span>';
	$PhraseTop3='<strong>Certified</strong><br><span>ISO 9001:2008</span>';
//Slider
	$Slider[1]=array($License, $Phrase[1],   "Toris Carpet Care & Janitorial Service, locally-owned and operated, was established over 10 years ago in Sparks, Nevada. Ever since the foundation of our company we have established quality...");
	$Slider[2]=array($Estimates, $Phrase[4], "Our company has grown over the years providing a wide range of services to create convenient and efficient solutions for all of our clients’ cleaning needs. We are able to maintain our...");
	$Slider[3]=array($Bilingual, $Phrase[0], "Exceeding customers’ expectations and offering the highest quality results are our main focus. Our belief is that through honesty and responsibility we will be able to achieve everything...");
//Home - Mission, etc.
	$Home = array(
		"Stop coming home from work to a second job! Toris Carpet Care & Janitorial Service does the cleaning for you so you don’t spend your free time dealing with dirty carpets and floors. We’ll keep your home cleaner with our standing cleaning techniques and will ensure that even those areas that are hard to reach are sparkly clean.",
		"Not only do we serve homeowners, but we also offer our services to businesses that wish to enhance their office appearance by having a clean environment. You can trust all of your cleaning needs today to our licensed team. We’ll help you save time and energy so that you can enjoy your free time on what really matters.",
		"Toris Carpet Care & Janitorial Service offers thorough services to both individuals and businesses. Whether you need carpet cleaning, carpet repair, janitorial cleaning, upholstery cleaning, move in and move out cleaning, carpet stretch, and much more, it’s time to call us and schedule your appointment. ",
		);
	$About = array(
		"Toris Carpet Care & Janitorial Service, locally-owned and operated, was established over 10 years ago in Sparks, Nevada. Ever since the foundation of our company we have established quality workmanship and open communication to ensure true customer satisfaction.",
		"Our company has grown over the years providing a wide range of services to create convenient and efficient solutions for all of our clients’ cleaning needs. We are able to maintain our position as a leading company in the cleaning industry because of our superior services achieved through teamwork and diligence. ",
		"Exceeding customers’ expectations and offering the highest quality results are our main focus. Our belief is that through honesty and responsibility we will be able to achieve everything you expect from us and much more. ",
		);
//Services
 	$SN=array(
 		"",//Siempre Vacio
		"Carpet Cleaning",
		"Carpet Repair",
		"Upholstery Cleaning",
		"Move In and Move Out Cleaning",
		"Janitorial Cleaning",
		"Other Services",
 	);
 	$SD=array(
 		"",//Siempre Vacio
		"Your carpet is exposed to stains, dirt, and wear and tear from everyday use. If you want to extend the life of your carpet fibers then it is crucial you get rid of all dirt and grime. Our professionals at Toris Carpet Care & Janitorial Service help you give your carpet the best care so that it stays clean all the time. ",
		"If you have noticed that parts of your carpet are damaged and need to get repaired, then it is important that you turn to our experts. We are able to handle anything from carpet rips, ripples, tears, wrinkles, bleach stains, and much more. Trust all of your carpet repair needs to us today! ",
		"Clean all of your upholstery without damaging it with our professionals! All of your upholstery items should be cleaned by a professional so that they can maintain their beauty and comfort. We use safe and proper products to ensure that unsightly dirt is removed. ",
		"Give yourself a fresh start by moving into a clean and fresh home and leaving your old one neat as well. You want to make sure that your new space is cleaned and sanitized before your family moves in. Toris Carpet Care & Janitorial Service makes your move-in or move-out process simpler by taking care of all the cleaning details. ",
		"Trust all of your office cleaning needs today to the experts at Toris Carpet Care & Janitorial Service! We arrive promptly and ready to work so that we can leave your space clean and smelling fresh. From mopping the floors to cleaning the bathrooms, you can rest assured our team will tackle everything. ",
		"1. Carpet Stretch<br>2. Pet Urine Treatment<br>3. Ozone Machine",
 	);

 	$ServicesNumber=count($SN)-1;
//Excerpt
	if (strlen($Description) > 10){$ExDescription=substr($Description, 0,152).'...';};
	if (strlen($About[0]) > 10){$ExAbout=substr($About[0], 0,191).'...'.'</p>';};

	if (strlen($SD[0]) > 10){$ExSD[0]=substr($SD[0], 0,140).'...';};
	if (strlen($SD[1]) > 10){$ExSD[1]=substr($SD[1], 0,122).'...';};
	if (strlen($SD[2]) > 10){$ExSD[2]=substr($SD[2], 0,125).'...';};
	if (strlen($SD[3]) > 10){$ExSD[3]=substr($SD[3], 0,150).'...';};
	if (strlen($SD[4]) > 10){$ExSD[4]=substr($SD[4], 0,150).'...';};
	if (strlen($SD[5]) > 10){$ExSD[5]=substr($SD[5], 0,149).'...';};
	if (strlen($SD[6]) > 10){$ExSD[6]=substr($SD[6], 0,175).'...';};
//Testimonials
	$Date='<i class="fa fa-calendar t_red-3"></i>&nbsp;<strong>Date:</strong>&nbsp;';
	$Review='<i class="fa fa-user t_green-3"></i>&nbsp;<strong>Review By:</strong>&nbsp;';
	$Project='<i class="fa fa-wrench t_red-3"></i>&nbsp;<strong>Project:</strong>&nbsp;';
	$Comment='<i class="fa fa-comment t_green-3"></i>&nbsp;';
	$Testimonial[1]= array("1-1-2018", "John Doe", "Project_name","Lorem ipsum dolor sit amet, consectetur adipiscing elit.Morbi molestie pretium arcu. Nunc magna augue, tincidunt ac dignissim ac, blandit nec nulla. Donec id hendrerit purus. Phasellus sodales orci id sapien condimentum placerat. Morbi blandit nisi sed sem rhoncus dictum. Etiam felis arcu, mattis et interdum quis.");
	$Testimonial[2]= array("1-1-2018", "John Doe", "Project_name","Lorem ipsum dolor sit amet, consectetur adipiscing elit.Morbi molestie pretium arcu. Nunc magna augue, tincidunt ac dignissim ac, blandit nec nulla. Donec id hendrerit purus. Phasellus sodales orci id sapien condimentum placerat. Morbi blandit nisi sed sem rhoncus dictum. Etiam felis arcu, mattis et interdum quis.");
	$Testimonial[3]= array("1-1-2018", "John Doe", "Project_name","Lorem ipsum dolor sit amet, consectetur adipiscing elit.Morbi molestie pretium arcu. Nunc magna augue, tincidunt ac dignissim ac, blandit nec nulla. Donec id hendrerit purus. Phasellus sodales orci id sapien condimentum placerat. Morbi blandit nisi sed sem rhoncus dictum. Etiam felis arcu, mattis et interdum quis.");
	$Testimonial[4]= array("1-1-2018", "John Doe", "Project_name","Lorem ipsum dolor sit amet, consectetur adipiscing elit.Morbi molestie pretium arcu. Nunc magna augue, tincidunt ac dignissim ac, blandit nec nulla. Donec id hendrerit purus. Phasellus sodales orci id sapien condimentum placerat. Morbi blandit nisi sed sem rhoncus dictum. Etiam felis arcu, mattis et interdum quis.");
//Landing Pages	
	$LandingURL[1]="landing-page";
	$LandingName[1]="Automotive Parts & System";
	$LandingExtract[1]="";
	$LandingDesc[1]=
	"
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>
	";
	$LandingURL[2]="landing-page";
	$LandingName[2]="Automotive Parts & System";
	$LandingExtract[2]="";
	$LandingDesc[2]=
	"
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>
	";
	$LandingURL[3]="landing-page";
	$LandingName[3]="Automotive Parts & System";
	$LandingExtract[3]="";
	$LandingDesc[3]=
	"
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>
	";

//Blog
	$PostTags=array("Delivery","Technology","Factory","System","Construction","Engineering","Energy","Space");

	$PostURL[1]="post-page";
	$PostDate[1]="05-02-2018";
	$PostAuthor[1]="Administrator";
	$PostName[1]="Punctual Delivery Time";
	$PostDesc[1]=
	"
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Morbi molestie pretium arcu. Nunc magna augue, tincidunt ac dignissim ac, blandit nec nulla. Donec id hendrerit purus. Phasellus sodales orci id sapien condimentum placerat. Morbi blandit nisi sed sem rhoncus dictum. Etiam felis arcu, mattis et interdum quis.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Morbi molestie pretium arcu. Nunc magna augue, tincidunt ac dignissim ac, blandit nec nulla. Donec id hendrerit purus. Phasellus sodales orci id sapien condimentum placerat. Morbi blandit nisi sed sem rhoncus dictum. Etiam felis arcu, mattis et interdum quis.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Morbi molestie pretium arcu. Nunc magna augue, tincidunt ac dignissim ac, blandit nec nulla. Donec id hendrerit purus. Phasellus sodales orci id sapien condimentum placerat. Morbi blandit nisi sed sem rhoncus dictum. Etiam felis arcu, mattis et interdum quis</p>
	";
	
	$PostURL[2]="post-page-2";
	$PostDate[2]="05-02-2018";
	$PostAuthor[2]="Administrator";
	$PostName[2]="High Technology Factory";
	$PostDesc[2]=
	"
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Morbi molestie pretium arcu. Nunc magna augue, tincidunt ac dignissim ac, blandit nec nulla. Donec id hendrerit purus. Phasellus sodales orci id sapien condimentum placerat. Morbi blandit nisi sed sem rhoncus dictum. Etiam felis arcu, mattis et interdum quis.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Morbi molestie pretium arcu. Nunc magna augue, tincidunt ac dignissim ac, blandit nec nulla. Donec id hendrerit purus. Phasellus sodales orci id sapien condimentum placerat. Morbi blandit nisi sed sem rhoncus dictum. Etiam felis arcu, mattis et interdum quis.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Morbi molestie pretium arcu. Nunc magna augue, tincidunt ac dignissim ac, blandit nec nulla. Donec id hendrerit purus. Phasellus sodales orci id sapien condimentum placerat. Morbi blandit nisi sed sem rhoncus dictum. Etiam felis arcu, mattis et interdum quis</p>
	";

	$PostURL[3]="post-page";
	$PostDate[3]="05-02-2018";
	$PostAuthor[3]="Administrator";
	$PostName[3]="High Standard Labors";
	$PostDesc[3]=
	"
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Morbi molestie pretium arcu. Nunc magna augue, tincidunt ac dignissim ac, blandit nec nulla. Donec id hendrerit purus. Phasellus sodales orci id sapien condimentum placerat. Morbi blandit nisi sed sem rhoncus dictum. Etiam felis arcu, mattis et interdum quis.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Morbi molestie pretium arcu. Nunc magna augue, tincidunt ac dignissim ac, blandit nec nulla. Donec id hendrerit purus. Phasellus sodales orci id sapien condimentum placerat. Morbi blandit nisi sed sem rhoncus dictum. Etiam felis arcu, mattis et interdum quis.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Morbi molestie pretium arcu. Nunc magna augue, tincidunt ac dignissim ac, blandit nec nulla. Donec id hendrerit purus. Phasellus sodales orci id sapien condimentum placerat. Morbi blandit nisi sed sem rhoncus dictum. Etiam felis arcu, mattis et interdum quis</p>
	";

	$PostURL[4]="post-page";
	$PostDate[4]="05-02-2018";
	$PostAuthor[4]="Administrator";
	$PostName[4]="Automotive Parts & System";
	$PostDesc[4]=
	"
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Morbi molestie pretium arcu. Nunc magna augue, tincidunt ac dignissim ac, blandit nec nulla. Donec id hendrerit purus. Phasellus sodales orci id sapien condimentum placerat. Morbi blandit nisi sed sem rhoncus dictum. Etiam felis arcu, mattis et interdum quis.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Morbi molestie pretium arcu. Nunc magna augue, tincidunt ac dignissim ac, blandit nec nulla. Donec id hendrerit purus. Phasellus sodales orci id sapien condimentum placerat. Morbi blandit nisi sed sem rhoncus dictum. Etiam felis arcu, mattis et interdum quis.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Morbi molestie pretium arcu. Nunc magna augue, tincidunt ac dignissim ac, blandit nec nulla. Donec id hendrerit purus. Phasellus sodales orci id sapien condimentum placerat. Morbi blandit nisi sed sem rhoncus dictum. Etiam felis arcu, mattis et interdum quis</p>
	";

	$PostURL[5]="post-page";
	$PostDate[5]="05-02-2018";
	$PostAuthor[5]="Administrator";
	$PostName[5]="Construction & Engineering";
	$PostDesc[5]=
	"
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Morbi molestie pretium arcu. Nunc magna augue, tincidunt ac dignissim ac, blandit nec nulla. Donec id hendrerit purus. Phasellus sodales orci id sapien condimentum placerat. Morbi blandit nisi sed sem rhoncus dictum. Etiam felis arcu, mattis et interdum quis.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Morbi molestie pretium arcu. Nunc magna augue, tincidunt ac dignissim ac, blandit nec nulla. Donec id hendrerit purus. Phasellus sodales orci id sapien condimentum placerat. Morbi blandit nisi sed sem rhoncus dictum. Etiam felis arcu, mattis et interdum quis.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Morbi molestie pretium arcu. Nunc magna augue, tincidunt ac dignissim ac, blandit nec nulla. Donec id hendrerit purus. Phasellus sodales orci id sapien condimentum placerat. Morbi blandit nisi sed sem rhoncus dictum. Etiam felis arcu, mattis et interdum quis</p>
	";

	$PostURL[6]="post-page";
	$PostDate[6]="05-02-2018";
	$PostAuthor[6]="Administrator";
	$PostName[6]="Power & Energy";
	$PostDesc[6]=
	"
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Morbi molestie pretium arcu. Nunc magna augue, tincidunt ac dignissim ac, blandit nec nulla. Donec id hendrerit purus. Phasellus sodales orci id sapien condimentum placerat. Morbi blandit nisi sed sem rhoncus dictum. Etiam felis arcu, mattis et interdum quis.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Morbi molestie pretium arcu. Nunc magna augue, tincidunt ac dignissim ac, blandit nec nulla. Donec id hendrerit purus. Phasellus sodales orci id sapien condimentum placerat. Morbi blandit nisi sed sem rhoncus dictum. Etiam felis arcu, mattis et interdum quis.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Morbi molestie pretium arcu. Nunc magna augue, tincidunt ac dignissim ac, blandit nec nulla. Donec id hendrerit purus. Phasellus sodales orci id sapien condimentum placerat. Morbi blandit nisi sed sem rhoncus dictum. Etiam felis arcu, mattis et interdum quis</p>
	";
//BlogEcxerpt
	if (strlen($PostDesc[1]) > 10){$ExPostDesc[1]=substr($PostDesc[1], 0,250).'...</p>';};
	if (strlen($PostDesc[2]) > 10){$ExPostDesc[2]=substr($PostDesc[2], 0,250).'...</p>';};
	if (strlen($PostDesc[3]) > 10){$ExPostDesc[3]=substr($PostDesc[3], 0,250).'...</p>';};
	if (strlen($PostDesc[4]) > 10){$ExPostDesc[4]=substr($PostDesc[4], 0,250).'...</p>';};
	if (strlen($PostDesc[5]) > 10){$ExPostDesc[5]=substr($PostDesc[5], 0,250).'...</p>';};
	if (strlen($PostDesc[6]) > 10){$ExPostDesc[6]=substr($PostDesc[6], 0,250).'...</p>';};
include 'php/posturl.php';
include 'php/landingurl.php';
?>
