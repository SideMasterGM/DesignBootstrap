<?php
$full_name = $_SERVER['PHP_SELF'];$name_array = explode('/',$full_name);$count = count($name_array);$page_name = $name_array[$count-1];
if($page_name=='index.php'){$page_name2="Home";}
elseif ($page_name=='about.php') {$page_name2="About Us";}
elseif ($page_name=='services.php') {$page_name2="Our Services";}
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
	$Company="Contra Costa Pavers Stone and Landscape Inc.";
	$Domain='www.contracostapavers.com';//No dejar pleca al final del dominio
	$Address='2185 Solano Way, Concord, CA 94520';
	//Para SEO
		//$Locality='Locality';
		//$Region='Region';
		//$StreetAddress='StreetAddress';
	$Phone='(925) 408-9094';
	$PhoneConvert = str_replace(str_split('(-)/:*?"<>|\t\n\r'), '', $Phone);
	$PhoneRef = "tel:".str_replace(str_split(' '), '', $PhoneConvert);

	$Phone2='(925) 584-6863';
	$Phone2Convert = str_replace(str_split('(-)/:*?"<>|\t\n\r'), '', $Phone2);
	$Phone2Ref = "tel:".str_replace(str_split(' '), '', $Phone2Convert);

	$SEOConvert= str_replace(str_split(' '), '-', $PhoneConvert);
	$SEOPhone='+1'.$SEOConvert;

	$Mail='contact@contracostapavers.com';$MailRef="mailto:".$Mail;
	$Mail2='raymundo2207@sbcglobal.com';$Mail2Ref="mailto:".$Mail2;
	
	$Services='We Do Commercial and Residential Services';

	$Payment='We Accept Checks and Cash';
	$Paymentmobile='We Accept Checks and Cash';
	
	$Experience='We Have 20 Years of Experience';

	$Schedule='Monday to Friday from 9:00 AM to 5:00 PM<br>Saturday 10AM to 3PM';
	$ScheduleMobile='Mon - Fri 9AM to 5PM<br>Saturday 10AM to 3PM';
		
	$Bilingual='For Your Comfort, We are Bilingual';
	$Estimates='We Offer Free Estimates';
	$Satisfaction='';
	
	$Cover='We Cover a 30 Miles Radius';
	$CoverHeader='We Cover<br><span class="info-datos t-Color1">a 30 Miles Radius</span>';
	$Area='';
	$License='We are Licensed and Insured';
	$Lic='';

	$facebook='https://www.facebook.com/contracostapavers/';
	$twitter='#';
	$googleplus='#';
	$instagram='#';

	$yelp="https://www.yelp.com/biz/contra-costa-pavers-stone-and-landscape-concord";
	$homeadvisor="https://www.homeadvisor.com/rated.ContraCostaPaversStone.81991637.html";
	
	$GoogleMap='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3144.445831583867!2d-122.04441068477067!3d37.99006020751698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808566e30bfbbf31%3A0x8f270f76e7ea5c8b!2s2185+Solano+Way%2C+Concord%2C+CA+94520%2C+EE.+UU.!5e0!3m2!1ses-419!2sni!4v1525377487799" class="googlemap" allowfullscreen></iframe>';

//Phrases
	
 	$Phrase = array(
		"We construct the lifestyle you deserve!",
		"Outdoor landscape and hardscape done right",
		"We pave the way towards quality",
		"High quality and quick solutions!",
		"Skilled workers for high quality results!",
		"Outdoor Landscape and Hardscape",
		"Distinctive landscape at its finest",
		"A different kind of landscape contractor",
		"Landscaping Excellence • Creative Solutions • Quality Craftmanship",
	);


//Home - Mission, etc.
	$Home = array(
		"Welcome to our website. Contra Costa Pavers Stone and Landscape Inc. proudly counts with more than 20 years of collective experience.  Through adversity and tenacity we have completed each project with awe-inspiring results exceeding the expectations of all our clients.",
		"We offer the highest standards in driveway, patio, walkway and pool deck paving, retaining walls, complex and simple landscape installations, lighting, irrigation, outdoor kitchens, fire pits and waterfalls.  Fence and deck work are offered as part of some hardscape projects. ",
		"Our goal is to provide the utmost in quality and customer service and warranty our work proving the confidence in our commitment.  Contra Costa Pavers is a small company with big company experience looking to fulfill the needs of our local communities.",
		);

	$About = array(
		"Established in 2016. Two principle owners of Contra Costa Paver Stones and Landscape, Alex Orellana and Gerardo Martinez, worked under landscaping, construction and paver companies for several years - offering decades of combined experience. Their amazing high standards and multi-faceted knowledge continued to bring them referrals and requests which lead them to the task of starting their own masonry and landscaping business.",
		"Joining with the proven business experience of Ray Ramirez, who has owned the successful General Plumbing and Rotor Service in Antioch for over 14 years, rounded out the team for a successful launch. His company's expertise allows the Contra Costa team to offer plumbing for gas and water issues that exceed typical standards of most landscape and hardscape companies. Ray has purchased a property in Concord, CA with plans of developing a comprehensive show room and sample yard. Much lies ahead for the future of this company.",
		"",
		);

	$Mission=  "Our mission is to ensure that people from The Bay Area get the highest quality services.";
	$Vision=	"Our vision is to be considered as the number one provider of landscaping, concrete, and stone work in the area of The Bay Area.";
	$Why= 		"Choosing Contra Costa Pavers Stone and Landscape Inc. is choosing the best option. Through our highly skilled workers and our strong work ethic we guarantee our results will blow your mind!";

//Services
	$SN[1]="Paver, Stone and Hardscape";
	$SD[1]="Our stone work services include the construction of driveways, walkways, steps, landings, patios, pool decks and more.  We have experience installing a vast arena of products including pavers, concrete, porcelain tile and pavers, travertine and slate.  Many of the installation processes and material choices allow a twenty five year warranty against installation failure.  Some materials have lifetime warranties directly from the manufacturers.  Call us now and enjoy the benefits of working with a team of experts that go the extra mile every time, every project.";
	$SN[2]="Retaining Walls";
	$SD[2]="We have experience in segmented walls retaining and non-retaining, planter box walls and seating walls. Walls and columns serve a number of purposes. Materials and drainage choices are made with specific desired results. Our expertise can guide you to the correct choices to provide outstanding results in appearance and function. Warranties are available from 5 to 10 years.";
	$SN[3]="Turf (Artificial)";
	$SD[3]="Artificial turf is available in a number of color and styles. Choices are available for putting greens, pet needs, play grounds and general purpose needs. Our expert team will prepare the area professionally to assure years of beauty and function eliminating any need for regular maintenance and water use. Warranties are up to fifteen years depending on manufacture choice."; 
	$SN[4]="Landscaping";
	$SD[4]="Contra Costa Pavers Stone and Landscape offer landscaping design and installation services. Our experience incorporates design of large projects with complex installation and irrigation requirements as well as smaller landscape needs that enhance existing hardscape scenes. We uniquely combine client wishes, environment and budget to satisfy the needs and wishes of our customers.";
	$SN[5]="Fire Pits & Outdoor Kitchens";
	$SD[5]="This popular trend turns the outdoors into extended indoor beauty and uses. From custom kitchen units made from scratch in size and style to installation and finalization of pre-formed styles, our experience completes the process to meet each customer’s specific needs. Stucco finishes, stone clad finishes, granite, tile or marble counter tops and an array of appliance choices can complete designs for any outdoor BBQ’er and party planner. Fire pits range from store bought we install to custom shapes and sizes with beautiful stone or tile finishing. ";
	$SN[6]="Water Features";
	$SD[6]="Romantic and peaceful can easily be added into your landscape ideas through the use of water movement and sound. A unique and impressive skill lies within the Contra Costa set of specialties with this amazing feature. We often install the necessary water basins for pre-manufactured units, but it is the plush finish of custom falls that have awed us at their finish. Call on our team to make your unique idea a reality.";
	
	$SN[7]="Design ";
	$SD[7]="Our skilled, experienced designers will meet with you to review the site, listen to your desires and dreams and provide a comprehensive evaluation with design ideas. We offer FREE basic drawings and formal proposals to all clients. Complete Landscape Architecture drawings are also available.";
	$SN[8]="Demo ";
	$SD[8]="All demo and hauling services needed to complete all our landscape and hardscape projects are performed by our skilled equipment operators. All are licensed and insured as required by our contractor license.";
	$SN[9]="Lighting ";
	$SD[9]="Lighting makes the look complete. Whether path lights, spot lights, step lights or any of the multiple choices available in today’s markets we’re there to assist in making the right choice. Transformers are installed to handle the timing and operation throughout the area leaving it a fully automatic system.";
	$SN[10]="Irrigation ";
	$SD[10]="Drip systems and sprinkler systems are designed and installed according to the needs of the landscape choices on each project. Our expert landscapers have years of experience in the proper choices and operation of the irrigation timers and controllers including new styles with remote and phone operation.";
	$SN[11]="Fence and Deck Services ";
	$SD[11]="Coupled with landscape and hardscape projects, Contra Costa often adds the replacement or repair of existing fences and decks. Each circumstance is closely evaluated to determine the potential of this services.";
	// $SD1[11]="Our expert owners have vast experience in construction and landscape allowing Contra Costa to be a more comprehensive provider of outdoor services. The best part about concrete paving is you get all of the durability and versatility that makes concrete such a sought after construction material. We can recreate looks, such as slate, terracotta or bluestone without you having to pay the exorbitant prices that these materials fetch. Your pavers can be stamped, painted or you can have pavers constructed out of exposed aggregate. Concrete pavers really are the best option for your next outdoor paving requirement and there’s no one better at concreting than Everlast Services.";


//Excerpt
	if (strlen($Home[0]) > 10){$ExDescription=substr($Home[0], 0,152).'...';};
	if (strlen($About[0]) > 10){$ExAbout=substr($About[0], 0,200).'...'.'</p>';};
	if (strlen($About[0]) > 10){$Ex2About=substr($About[0], 0,87).'...'.'<a href="about.php" class="t-white"><em>read more</em></a>'.'</p>';};

	if (strlen($SD[1]) > 10){$ExSD[1]=substr($SD[1], 0,119).'...';};
	if (strlen($SD[2]) > 10){$ExSD[2]=substr($SD[2], 0,152).'...';};
	if (strlen($SD[3]) > 10){$ExSD[3]=substr($SD[3], 0,128).'...';};
	if (strlen($SD[4]) > 10){$ExSD[4]=substr($SD[4], 0,146).'...';};
	if (strlen($SD[5]) > 10){$ExSD[5]=substr($SD[5], 0,107).'...';};
	if (strlen($SD[6]) > 10){$ExSD[6]=substr($SD[6], 0,113).'...';};
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
?>
