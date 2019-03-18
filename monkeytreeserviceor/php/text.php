<?php

	

	// exit();

$full_name = $_SERVER['PHP_SELF'];$name_array = explode('/',$full_name);$count = count($name_array);$page_name = $name_array[$count-1];
if($page_name=='index.php'){$page_name2="Home";}
elseif ($page_name=='about.php') {$page_name2="About Us";}
elseif ($page_name=='services.php') {$page_name2="Services";}
elseif ($page_name=='landing.php') {$page_name2="Landing Pages";}
elseif ($page_name=='portfolio.php') {$page_name2="Portfolio";}
elseif ($page_name=='thank-you.php') {$page_name2="Thank You";}
elseif ($page_name=='testimonials.php') {$page_name2="Testimonials";}
elseif ($page_name=='404.php') {$page_name2="Not Found";}
elseif ($page_name=='contact.php') {$page_name2="Contact Us";}
elseif ($page_name=='blog.php') {$page_name2="Blog";}
elseif ($page_name=='blog-page.php') {$page_name2="Blog Page";}
//Info
	$EOMLink="http://www.eliteonlinemedia.com/";
	$Company="Monkey Tree Service";
	$Domain='www.monkeytreeserviceor.com';//No dejar pleca al final del dominio
	$Address='Beaverton, OR.';

	//Para SEO
		//$Locality='Locality';
		//$Region='Region';
		//$StreetAddress='StreetAddress';
	$Phone='(971) 330-8300';
	$PhoneConvert = str_replace(str_split('(-)/:*?"<>|\t\n\r'), '', $Phone);
	$PhoneRef = "tel:".str_replace(str_split(' '), '', $PhoneConvert);

	$Phone2='(503) 960-5326';
	$Phone2Convert = str_replace(str_split('(-)/:*?"<>|\t\n\r'), '', $Phone2);
	$Phone2Ref = "tel:".str_replace(str_split(' '), '', $Phone2Convert);

	$SEOConvert= str_replace(str_split(' '), '-', $PhoneConvert);
	$SEOPhone='+1'.$SEOConvert;

	$Mail='contact@monkeytreeserviceor.com';$MailRef="mailto:".$Mail;
	$Mail2='monkeytreework@gmail.com';$Mail2Ref="mailto:".$Mail2;

	$Services='Residential and Commercial Services';
	$Payment='We Accept Cash and Checks';
	$Paymentmobile='We Accept Cash and Checks';

	$Experience='Seven Years of Experience';

	$Schedule='Monday to Saturday from 7 a.m. to 7 p.m.<br><i class="fa fa-clock-o icon-align"></i> Available 24 Hours for Emergency Calls';
	$Schedule2='Mon - Sat 7am to 7pm<br>Available 24 Hours for Emergency Calls';
	$ScheduleMobile='Mon - Sat 7am to 7pm<br><i class="fa fa-clock-o icon-align"></i> Available 24 Hours for Emergency Calls';

	$Bilingual='';
	$Estimates='Free Estimates Are Available';
	$Satisfaction='';

	$Cover='We Cover All of Oregon and Parts of Washington';
	$Cover2='All of Oregon and Parts of Washington';
	$CoverHeader='We Cover<br><span class="info-datos t-Color1">All of Oregon and Parts of Washington</span>';
	//$Area='';
	$License='We Are Licensed';
	//$Lic='';

	$facebook='#';
	$twitter='#';
	$googleplus='#';

	$homeadvisor="#";
	$bbb="#";

	$GoogleMap='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d301106.37142186525!2d-123.0870865962273!3d45.48021519352251!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5495082476f88863%3A0x10e0cf158aacbd08!2sBeaverton%2C+Oreg%C3%B3n%2C+EE.+UU.!5e0!3m2!1ses!2sni!4v1551208703375" class="googlemap" allowfullscreen></iframe>';

//Phrases

 	$Phrase = array(
		"It’s Time to Give Your Trees the Best Care",
		"Grow Your Trees with Love and Responsibility",
		"Exceeding Your Expectations One Tree at a Time",
		"The Right Experience for All Your Trees",
		"Enriching Your Landscape with Beautiful Trees",
	);

//Home - Mission, etc.
	$Home = array(
		"Your trees are beautiful and are an important part of your landscape that needs to be handled with proper care and expertise. Monkey Tree Service is a fully licensed and equipped company that will give all of your trees the maintenance they need to grow healthy and stay beautiful.",
		"At Monkey Tree Service we are dedicated to the health, preservation, and safety of all of your trees so that you are satisfied with your entire landscape. Individuals and businesses in the area have learned to trust us because of the high-quality results we deliver all the time. You can rest assured you will receive top quality work. ",
		"Whether it is for your home or commercial facility, Monkey Tree Service can help you with tree removal, tree trimming, tree pruning, or tree planting. We are here to provide you with the highest quality value and service. Contact us now and schedule a free estimate with our professionals. ",
		);
	$About = array(
		"Monkey Tree Service was founded with the mission of helping both residential and commercial customers in Beaverton, Oregon and surrounding areas with professional services. We are here to help you make your overall landscape look beautiful all the time by giving your trees the best care. ",
		"Our mission at Monkey Tree Service is to provide quality tree care safely and in a timely manner. You can expect the most professional solutions as well as outstanding customer service. We want to maintain long-lasting relationships with all of our clients so that they can choose us whenever they have other tree needs. ",
		"At Monkey Tree Service we are able to stay ahead of the competition due to our honesty, respect, punctuality, professionalism, and quality work. We long to exceed all of our clients’ expectations and become the area’s most trusted tree service company. ",
		);

	$Why=    "";
	$Mission="";
 	$Vision= "";

//Services
	$SN[1]="Tree Removal";
	$SD[1]="When a tree in your yard cannot be saved or when you simply don’t like it anymore, our team at Monkey Tree Service is here to provide you with the highest quality tree removal services. We are equipped and trained to properly and safely remove all trees from your yard, whether big or small. ";
	$SN[2]="Tree Trimming";
	$SD[2]="It is important to take proper care of your trees as they add significant value to your landscape as well as beauty. Well-maintained trees are attractive but poorly maintained ones can be a liability to the rest of your yard. We have the right equipment and skills to properly trim all of your trees. ";
	$SN[3]="Tree Pruning";
	$SD[3]="Improve the shape of your trees today with our outstanding tree pruning services. Tree pruning ensures proper tree form and structure. It can also permit new growth and improve air circulation. Contact our team today to help with all of your tree pruning needs. We guarantee your trees will beautiful all the time. ";
	$SN[4]="Tree Planting";
	$SD[4]="When you want to enhance your landscape and are looking to plant new trees, you need to leave this job to our experts. We have the expertise and tools needed to plant different kinds of trees. You can trust in our team to properly plant all of your trees so that they can grow healthy. ";
	$SN[5]="";
	$SD[5]="";
	$SN[6]="";
	$SD[6]="";

//Excerpt
	if (strlen($Home[0]) > 10){$ExDescription=substr($Home[0], 0,152).'...';};
	if (strlen($About[0]) > 10){$ExAbout=substr($About[0], 0,200).'...'.'</p>';};
	if (strlen($About[0]) > 10){$Ex2About=substr($About[0], 0,87).'...'.'<a href="about.php" class="t-white"><em>read more</em></a>'.'</p>';};

	if (strlen($SD[1]) > 10){$ExSD[1]=substr($SD[1], 0,128).'...';};
	if (strlen($SD[2]) > 10){$ExSD[2]=substr($SD[2], 0,133).'...';};
	if (strlen($SD[3]) > 10){$ExSD[3]=substr($SD[3], 0,124).'...';};
	if (strlen($SD[4]) > 10){$ExSD[4]=substr($SD[4], 0,246).'...';};
	if (strlen($SD[5]) > 10){$ExSD[5]=substr($SD[5], 0,245).'...';};
	// if (strlen($SD[6]) > 10){$ExSD[6]=substr($SD[6], 0,100).'...';};
//Testimonials
	$Date='<i class="fa fa-calendar t_red-3"></i>&nbsp;<strong>Date:</strong>&nbsp;';
	$Review='<i class="fa fa-user t_green-3"></i>&nbsp;<strong>Review By:</strong>&nbsp;';
	$Project='<i class="fa fa-wrench t_red-3"></i>&nbsp;<strong>Project:</strong>&nbsp;';
	$Comment='<i class="fa fa-comment t_green-3"></i>&nbsp;';
	//$Testimonial[1]= array("date", "review", "project","comment");
	$Testimonial[1]= array("08-02-2018", "Donna O. in Peoria, AZ", "Repair Stone Slab Countertops","If 5 is your highest rating then it isn't high enough. I would rate Garcia Tile a 10+. A little problem having my calls returned initially (I don't know what the problem was), but once, having hired them, I found that they were outstanding!!! I had been without a cooktop for almost a month because the new one had a larger base needed for the granite cutout space. Garcia Tile was not only a good value (much better than other bids, one from 'Home Advisor' that was twice the price for half the work) and Garcia tile knew what they were doing. They were quick, competent and polite. Having been forewarned that cutting granite was a very messy process, I was pleasantly surprised to find they had cleaned up everything spotlessly. No one would ever have known that they had even been here. They were fabulous. Please thank them for me. They were my 'Earth Angels' !!!");
	$Testimonial[2]= array("06-15-2018", "Dave S. in Chandler, AZ", "Repair Stone Slab Countertops","“They did a great job, I would hire them again.”");
	$Testimonial[3]= array("05-21-2018", "Joshua..", "Install Stone Slab Countertops","They have been doing work for us for the last 5 years.");

//Landing Pages
	$LN1 ="Landing Page Name";
	$LD1 = array(
	"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.",
	"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.",
	"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.",
	"Lorem ipsum dolor sit amet, consectetur adipisicing elit. ",
	"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.",
	"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.",
	);
//Services Landing Page List
	//$ListServices= array($SN[1],$SN[2],$SN[3],$SN[4],$SN[5],$SN[6],$SN[7],$SN[8],$SN[9],$SN[10]);
//Blog
	$BlogEntryT1="Blog Entry Title";
	$BlogEntryD1=
	"
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>
	";
	$BlogDate1="1/Jan/2016";
	$BlogAuthor1="Author Name";

	$BlogEntryT2="Blog Entry Title";
	$BlogEntryD2=
	"
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>
	";
	$BlogDate2="1/Jan/2016";
	$BlogAuthor2="Author Name";

//BlogEcxerpt
	if (strlen($BlogEntryD1) > 10){$ExBlogEntryD1=substr($BlogEntryD1, 0,250).'...';};
	if (strlen($BlogEntryD2) > 10){$ExBlogEntryD2=substr($BlogEntryD2, 0,160).'...';};
	

	$Reviews = array(
		array('date' => "02-19-2019", 
			'project' => "Trim Trees", 
			'review' => "Sally L. in Portland, OR", 
			'comment' => "The work was done nicely and the price was very reasonable. I would use them again.",
			'stars' => 5),

		array('date' => "02-06-2019", 
			'project' => "Trim Trees", 
			'review' => "Andy J. in Beaverton, OR", 
			'comment' => "Very quick response, the work was done nicely, with pretty reasonable price. I am happy with their service.",
			'stars' => 5),

		array('date' => "01-06-2019", 
			'project' => "Remove Trees", 
			'review' => "Jean R. in Tualatin, OR", 
			'comment' => "The response was quick and followup quick. The cut down two trees in just under 4 hours. They were extremely professional and well trained. They arrived promptly and worked quickly. I would use them again for any tree removal. Very satisfied with the work and the price.",
			'stars' => 5),

		array('date' => "01-04-2019", 
			'project' => "Trim Trees", 
			'review' => "Tom E. in Beaverton, OR", 
			'comment' => "Their response to our request for assistance came the same day. They came the next day and these guys did a tremendous job trimming our maple tree. The job was very well done. They listened to our recommendations and completed the job to our complete satisfaction. Their cleanup exceeded our expectations--they did more than we asked. I would use these guys again and again...you won't be disappointed. Their price was very reasonable.",
			'stars' => 5),

		array('date' => "12-08-2018", 
			'project' => "Remove Trees", 
			'review' => "Joseph S. in Portland, OR", 
			'comment' => "Fast, friendly & very professional. I would absolutely recommend them to my friends.",
			'stars' => 5),

		array('date' => "12-07-2018", 
			'project' => "Remove Trees", 
			'review' => "Chris T. in Beaverton, OR", 
			'comment' => "My project was small, they swung by to do my quote on their way to another job and had a full crew with them (and their wood chipper in tow), so they essentially did my project on the fly for a great price.",
			'stars' => 5),

		array('date' => "11-19-2018", 
			'project' => "Trim Trees", 
			'review' => "Tom S. in Dundee, OR", 
			'comment' => "They came out one day, provided an estimate via email and then we scheduled the job. They were courteous, skilled and clean, they did a great job.",
			'stars' => 5),

		array('date' => "11-18-2018", 
			'project' => "Trim Trees", 
			'review' => "Karen S. in Tigard, OR", 
			'comment' => "They did the work quickly and performed the job at the same time they came out to provide a quote. Great service.",
			'stars' => 5),

		array('date' => "11-16-2018", 
			'project' => "Remove Trees", 
			'review' => "David R. in Tigard, OR", 
			'comment' => "They called me within minutes of submitting the job. They came the next day to do an estimate and then offered to come later the same day to do the work. They were very skilled, professional, and courteous. This is the way we all wish every such service engagement would go.",
			'stars' => 5),

		array('date' => "10-11-2018", 
			'project' => "Trim Trees", 
			'review' => "Larry C. in Troutdale, OR", 
			'comment' => "The crew was friendly, worked quickly and got the job done as we discussed. They got the job done in one day! After trimming several trees and removing 2 more the crew did a great job cleaning up. Great job guys.",
			'stars' => 5),

		array('date' => "10-03-2018", 
			'project' => "Trim Trees", 
			'review' => "Eder G. in Portland, OR", 
			'comment' => "The crew led by Erik was efficient, safe and did quality work. Took three trees down with ease and cleaned up after each one. They were considerate and professional. Definitely recommend.",
			'stars' => 5)
	);
?>
