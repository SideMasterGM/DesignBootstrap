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
	$Company="Hernandez J Landscaping";
	$Domain='www.hernandezjlandscaping.com';//No dejar pleca al final del dominio
	$Address='1132 Vaughan St, Clarkston, GA, 30021';
	//Para SEO
		$Locality='Locality';
		$Region='Region';
		$StreetAddress='StreetAddress';
	
	$PhoneName='';
	$Phone='(404) 379-1482';
	$PhoneConvert = str_replace(str_split('(-)/:*?"<>|\t\n\r'), '', $Phone);
	$PhoneRef = "tel:".str_replace(str_split(' '), '', $PhoneConvert);

	$Phone2Name='';
	$Phone2='';
	$Phone2Convert = str_replace(str_split('(-)/:*?"<>|\t\n\r'), '', $Phone2);
	$Phone2Ref = "tel:".str_replace(str_split(' '), '', $Phone2Convert);

	$SEOConvert= str_replace(str_split(' '), '-', $PhoneConvert);
	$SEOPhone='+1'.$SEOConvert;

	$Mail='contact@hernandezjlandscaping.com';$MailRef="mailto:".$Mail;
	$Mail2='hernandezjlandscaping34@hotmail.com';$Mail2Ref="mailto:".$Mail2;
	$Services='Residential and Commercial Services';
	$Payment='We Accept Cash, Checks, and Credit Cards';
	$Experience='20 Years of Experience';
	$Schedule='Monday to Friday from 07:00 am to 05:30 pm';
	$Schedule2='';
	$Bilingual='';
	$Estimates='Free Estimates Are Available';
	$Satisfaction='';
	$Cover='We Cover 85 Miles Around Clarkston ';
	$License='';
	$License1='';

	$facebook='https://www.facebook.com/Hernandez-J-landscaping-1305435579559128/';
	$twitter='#'; $googleplus='#'; $youtube="#"; $instagram="";

	$homeadvisor="#";$manta="#";$bbb="#";$buildzoom="#";$houzz="#"; $yellowpages="#"; $dexknow="#"; $yelp="#";

	$GoogleMap='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3314.910330608848!2d-84.24221278516197!3d33.81462703766256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f5a844bfa5a2eb%3A0xa45ce7eb16bbbca7!2s1132+Vaughan+St%2C+Clarkston%2C+GA+30021%2C+EE.+UU.!5e0!3m2!1ses!2sni!4v1551714230222" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>';

//Phrases
	$Description="";
 	$Phrase = array(
		"Your Perfect Landscape Starts Here",
		"Making Your Landscape Thrive and Grow Healthy",
		"Beautiful Designs to Enhance Your Outside Space",
		"Growing All Your Landscape Needs",
		"Let Us Help You Achieve the Perfect Landscape Design",
		"",
	);

//Home - Mission, etc.
	$Home = array(
		"When considering a company that will come to your yard and make changes to suit your needs, you want someone that is reliable and trustworthy. Hernandez J Landscaping understands this which is why we strive to be considerate of your different needs and treat your landscape with the best care. When working with us, you won’t have to worry about just anyone else working on your landscape.",
		"At Hernandez J Landscaping we are constantly training our crew with various landscaping techniques and practices. We never stop learning to be able to provide you with the landscape you’ve dreamed of. Everyone in our team is friendly and will make sure that you have a pleasant experience when working with us.",
		"Whether it is for a residential or commercial project, it is important that your landscape stays in the best shape, which is why Hernandez J Landscaping is here if you need: <br/>1. Landscaping Design and Maintenance<br/>2. Mulching<br/>3. Lawn Mowing <br/>4. Sod Installation<br/>5. Patios<br/>6. Pine Straw<br/>7. Flower Bed Design<br/>8. Sprinkler System Installation and Repair <br/>9. Gardening<br/>10. Tree Services and much more!",
		);

	$About = array(
		"With more than two decades of experience in the industry, Hernandez J Landscaping serves customers in Clarkston, Georgia and surrounding areas with the highest quality workmanship. We have worked on several landscapes and have created beautiful outdoor spaces. Our hope is that we can do the same for your dream landscape.",
		"We take pride in our innovative designs and beautiful creations and how we have been able to take our clients’ visions and make them a reality. Our team will work together with you to understand your specific needs and how you want your landscape to look. You can count on us to help your landscape thrive and remain healthy.",
		"You can count on Hernandez J Landscaping to deliver the highest quality services as we abide by the following core values: <br/>1. Honesty<br/>2. Punctuality<br/>3. Responsibility<br/>4. Quality work<br/>5. Reliability",
		);

//Services
	
	$SN[1]="Landscaping Design and Maintenance";
	$SD[1]="A green and lush landscape not only improves your home’s exterior but also enhances the rest of the neighborhood. Hernandez J Landscaping can help you bring to life the design that you have in mind for your landscape. After we have designed and installed your beautiful landscape we can also help you give it the proper maintenance to keep it healthy all the time.";
	$SN[2]="Mulching";
	$SD[2]="Mulching is one of the best ways to keep your landscape in the best shape possible. The benefits that come with mulching are effective weed control, soil temperature regulation, the addition of essential nutrients to the soil, and much more! If you want to apply mulch to your landscape you can call our experts to properly do it!.";
	$SN[3]="Lawn Mowing";
	$SD[3]="If you want to make sure that your lawn remains clean and is also free from any kind of dirt or other contamination then you need proper and regular mowing services. When your lawn looks unruly or has grown beyond the limits you have set out for it, then your entire landscape can look dirty and disorderly. Our team provides professional mowing services to keep your lawn in top condition.";
	$SN[4]="Sod Installation";
	$SD[4]="When looking for the quickest way to have a lush and beautiful yard we recommend sod installation. Whether you are changing your lawn type or there’s new construction going on, sod installation can give you immediate results. You can count on our experts for the most efficient and proper way to install sod to make your landscape thrive!.";
	$SN[5]="Patios";
	$SD[5]="Are you looking for the perfect addition that will complement your landscape? At Hernandez J Landscaping we believe that a well-designed patio can add that touch of beauty that your landscape needs. Whatever your needs are you can expect the most exceptional results when working with our skilled team.";
	$SN[6]="Other Services";
	$SD[6]="1. Pine Straw<br/>2. Flower Bed Design<br/>3. Sprinkler System Installation and Repair<br/>4. Gardening<br/>5. Tree Services and more!.";


//Excerpt
	if (strlen($Description) > 10){$ExDescription=substr($Description, 0,152).'...';};
	if (strlen($SD[1]) > 10){$ExSD[1]=substr($SD[1], 0,174).'...';};
	if (strlen($SD[2]) > 10){$ExSD[2]=substr($SD[2], 0,179).'...';};
	if (strlen($SD[3]) > 10){$ExSD[3]=substr($SD[3], 0,188).'...';};
	if (strlen($SD[4]) > 10){$ExSD[4]=substr($SD[4], 0,110).' ...';};
	if (strlen($SD[5]) > 10){$ExSD[5]=substr($SD[5], 0,110).'...';};
	if (strlen($SD[6]) > 10){$ExSD[6]=substr($SD[6], 0,200).'...';};
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
	<p></p>
	<p></p>
	<p></p>
	";

	$LN[2]=$SN[2];
	$LandingURL[2]="";
	$LandingExtract[2]="";
	$LD[2]=
	"
	<p></p>
	<p></p>
	<p></p>
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
//Services Landing Page List
	$ListServices= array($SN[1],$SN[2],$SN[3],$SN[4],$SN[5],$SN[6]);
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