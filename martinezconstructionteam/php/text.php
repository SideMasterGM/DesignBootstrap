<?php
$full_name = $_SERVER['PHP_SELF'];$name_array = explode('/',$full_name);$count = count($name_array);$page_name = $name_array[$count-1];
if($page_name=='index.php'){$page_name2="Home";}
elseif ($page_name=='about.php') {$page_name2="About Us";}
elseif ($page_name=='services.php') {$page_name2="Services";}
elseif ($page_name=='landing.php') {$page_name2="Landing Pages";}
elseif ($page_name=='portfolio.php') {$page_name2="Portfolio";}
elseif ($page_name=='construction-services.php') {$page_name2="Construction Services";}
elseif ($page_name=='cleaning-services.php') {$page_name2="Cleaning Services";}
elseif ($page_name=='landscaping.php') {$page_name2="Landscaping";}
elseif ($page_name=='thank-you.php') {$page_name2="Thank You";}
elseif ($page_name=='testimonials.php') {$page_name2="Testimonials";}
elseif ($page_name=='404.php') {$page_name2="Not Found";}
elseif ($page_name=='contact.php') {$page_name2="Contact Us";}
elseif ($page_name=='blog.php') {$page_name2="Blog";}
elseif ($page_name=='blog-page.php') {$page_name2="Blog Page";}
//Info
	$EOMLink="http://www.eliteonlinemedia.com/";
	$Company="Martinez’s Finest Construction Team LLC.";
	$Domain='www.martinezconstructionteam.com';//No dejar pleca al final del dominio
	$Address='Lynchburg, VA.';
	//Para SEO
		//$Locality='Locality';
		//$Region='Region';
		//$StreetAddress='StreetAddress';
	$Phone='(434) 616-6464';
	$PhoneConvert = str_replace(str_split('(-)/:*?"<>|\t\n\r'), '', $Phone);
	$PhoneRef = "tel:".str_replace(str_split(' '), '', $PhoneConvert);


	$Phone2='';
	$Phone2Convert = str_replace(str_split('(-)/:*?"<>|\t\n\r'), '', $Phone2);
	$Phone2Ref = "tel:".str_replace(str_split(' '), '', $Phone2Convert);

	$SEOConvert= str_replace(str_split(' '), '-', $PhoneConvert);
	$SEOPhone='+1'.$SEOConvert;

	$Mail='contact@martinezconstructionteam.com';$MailRef="mailto:".$Mail;
	$Mail2='mayra@martinezconstructionteam.com';$Mail2Ref="mailto:".$Mail2;
	$Mail3='gumadi68@gmail.com';$Mail3Ref="mailto:".$Mail3;

	$Services='Residential and Commercial Services';
	
	$Payment='We Accept Cash, Checks, and Credit Cards';
	$Paymentmobile='We Accept Cash, Checks, and CC';
	$Experience='Seven Years of Experience';
	
	$Schedule='Monday to Friday from 6 a.m. to 6 p.m.<br> Available on Sundays for Emergency Calls';
	$Schedule1='Mon - Fri 6am to 6pm<br> Available on Sundays for Emergency Calls';
	$ScheduleFooter='Mon - Fri 6am to 6pm<br> Available on Sundays for Emergency Calls';
	$Bilingual='';

	$Estimates='Free Estimates Are Available';
	$Satisfaction='';

	$Cover='We Cover<br class="d-sm-none"> More than 150 Miles Around Lynchburg';
	$License='We Are Licensed';
	$Lic='';
	
	$facebook='#';
	$twitter='#';
	$linkedin='#';
	$googleplus='#';

	$homeadvisor="#";
	$yelp="#";
	$buzzfile="#";
	$businessfinder="#";
	$manta="#";
	$yellowbot="#";
	$houzz="#";
	$dexknow="#";


	$GoogleMap='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d858009.9361690368!2d-79.88778608666377!3d37.54350919465647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b2d97890320401%3A0xc3b6f35ec820e261!2sLynchburg%2C+Virginia%2C+EE.+UU.!5e0!3m2!1ses!2sni!4v1552402098260" class="googlemap" allowfullscreen></iframe>';


//Phrases
	//$Description="#";
 	$Phrase = array(
		"We Take Your Space to the Next Level",
		"Quality Behind Every Project",
		"Where Quality Is Always at the Forefront of Every Project",
		"Enhancing the Beauty and Comfort of Your Home",
		"Improve Your Space with the Best!",
	);

//Home - Mission, etc.
	$Home = array(
		"When you’re starting a new construction or remodeling project you want to hire someone with meticulous craftsmanship and outstanding customer service. Martinez’s Finest Construction Team LLC is the company that can help you take all of your visions from concept to creation with the highest level of quality. We ensure the best solutions for your construction needs, no matter the type or size of the project. ",
		"After your construction project is over, it is important that your space is always clean and neat which is by Martinez’s Finest Construction Team LLC also offers quality cleaning services. We pride ourselves in our ability to leave spaces sparkling and fresh environments. Your guests and clients will get a great first impression on how your space is always clean and tidy.",
		"Our entire team at Martinez’s Finest Construction Team LLC works hard to ensure that quality is always at the forefront of every project. We are a full-service company and you can turn to us whether you need construction or cleaning services. It will be our pleasure to bring all of your construction visions to life and leave your space clean and fresh! Just call now and ask for a free estimate!",
		);

	$About = array(
		"Martinez’s Finest Construction Team LLC has been proudly serving residential and commercial customers in Lynchburg, Virginia for several years now. Since the establishment of our company, we have been dedicated to providing superior construction services by enhancing the beauty and value of living and workspaces. We show our commitment to our customers by delivering unparalleled customer service.",
		"From the first moment you get in contact with us through the successful completion of your project, our team will work with you so that we understand exactly what your specific needs are. Specializing in both construction and cleaning, we want to make your living and work environment a pleasant one. It is our pleasure to work with you and deliver the solutions you need to have the space you have always dreamed of.",
		"At Martinez’s Finest Construction Team LLC we are dedicated to your satisfaction with every aspect of your project. Our team makes sure that through every step of the project you are completely satisfied. We guarantee you that our prices are according to the quality we deliver in every project. ",
		);

	$Why=    "";
	$Mission="";
 	$Vision= "";

//Services
	$SN[1]="Kitchen and Bathroom Remodeling";
	$SD[1]="From kitchen cabinets to sinks and toilets, you can expect the best remodeling service when working with Martinez’s Finest Construction Team LLC! Our team can help you create the kitchen or bathroom you want to come home to. We will work with you to understand the specific designs that you want for both of these rooms. ";
	$SN[2]="Ceramic Tile Installation";
	$SD[2]="If you’re looking for the best choice in flooring for your porch, kitchen, bathroom, or even dining room, you need to choose ceramic tile. This is a great flooring option as it resists moisture, stains, and bacteria. Our company offers a variety of styles and colors for you to choose from for your next ceramic tile installation. You can trust us to install it properly and promptly. ";
	$SN[3]="Backsplash Installation";
	$SD[3]="Your kitchen is said to be the heart of the home and because of this, you should take care of it the right way. Installing backsplash in your kitchen will add that touch of sparkle and style that it needs to stand out. Trust in our professionals to properly install backsplash in your kitchen so that it comes to life! ";
	$SN[4]="Carpentry Services";
	$SD[4]="Add that touch of style and beauty that your home needs to stand out from the rest! With our carpentry services, your home’s beauty and value will increase. Whether you want exterior trim, crown molding, or much more, you can count on our experts to perform the highest quality work. You can contact us today and schedule a free estimate!";
	$SN[5]="Interior Additions";
	$SD[5]="If your family is growing or you need extra space for your office, then we recommend you expand your home with an interior addition! Our team will try to make the remodeling experience a pleasant one so that your new space is ready for you to use. We will help you achieve the design you want for your space!";
	$SN[6]="Plumbing ";
	$SD[6]="From repairing your water heaters to cleaning your drains, you need an expert to take care of your different plumbing needs. At Martinez’s Finest Construction Team LLC we have the proper skills and equipment to make sure that your building’s entire plumbing system is working correctly. Contact us now and schedule an appointment!";
	$SN[7]="Interior and Exterior Painting";
	$SD[7]="Do you want to add value and beauty to your home? Then what you need is a fresh coat of paint! Our team can help you make the right choice on what colors will look best with your space. We will inject life into your interior and exterior walls with a proper paint job. Let our team beautify your space today!";
	$SN[8]="Drywall Repair";
	$SD[8]="Trust all your drywall needs to the experts at Martinez’s Finest Construction Team LLC! Whether it is a small crack on your wall or major damage because of water leakage, you can expect our experts to repair your drywall. We will make all your walls look as new as good once again.";
	$SN[9]="Pressure Washing";
	$SD[9]="If you’ve noticed that your sidewalk, driveway, or your exterior walls are looking dirty, then it is important that you properly clean them! With our professional pressure washing services, we will help you transform your outside space. Your home’s appearance will dramatically increase after we get rid of all dirt and mold. ";
	$SN[10]="Other Services:";
	$SD[10]="• Concrete Services<br> • Shingle Roofing<br> • Roofing Replacement<br> • Hardwood Floor Installation<br> • Masonry<br> • Patios<br> • Deck Construction and Renovation<br> • Stone Fireplaces Installation<br>";

	$SN[11]="House Cleaning";
	$SD[11]="Make sure that you come home after work to a clean and tidy place! Don’t spend your weekends cleaning your house when Martinez’s Finest Construction Team LLC can do it for you. We will make sure that every room and every corner is sparkling so that you can enjoy a fresh and neat environment";
	$SN[12]="After Party Cleaning";
	$SD[12]="The moment or the day after your party is over the last thing you want to do is clean your house. Our team of experts at Martinez’s Finest Construction Team LLC can help you relax after your part while we clean! We guarantee you we will leave your space as if nothing ever happened!";
	$SN[13]="Office Cleaning";
	$SD[13]="Improve employee efficiency and provide a professional space for your clients by cleaning your office with the experts! We provide weekly, biweekly, or monthly cleaning to meet your busy schedule. You can count on our team to make your office shine so that you can give a good first impression. ";
	$SN[14]="Kitchen and Bathroom Cleaning";
	$SD[14]="Both your kitchen and your bathroom are high-traffic areas in your home and require special cleaning attention. You can rest assured that we will thoroughly disinfect and clean all areas in your kitchen and bathroom. Our team will take your personal cleaning preferences into account so that you are satisfied with our work.";
	$SN[15]="Condominium Cleaning";
	$SD[15]="Keep your condominium clean all the time with professional help from Martinez’s Finest Construction Team LLC! We will clean all indoor and outdoor common areas, pool areas, remove garbage and debris, and much more to make sure that your condominium stays in top condition. Contact our experts today to schedule an appointment!";
	$SN[16]="Post Construction Cleaning";
	$SD[16]="Let our crew take care of the mess that a construction project can leave behind! Whether it was new construction or a small remodeling project, debris and dust are left behind. We will help you step into a clean and fresh space after the construction project is over. You can count on our team to have your space shining in no time. ";

//Excerpt
	if (strlen($Home[1]) > 10){$ExDescription=substr($Home[0], 0,152).'...';};
	if (strlen($About[0]) > 10){$ExAbout=substr($About[0], 0,200).'...'.'</p>';};
	if (strlen($About[0]) > 10){$Ex2About=substr($About[0], 0,109).'...'.'<a href="about.php"><em>read more</em></a>'.'</p>';};

	if (strlen($SD[1]) > 10){$ExSD[1]=substr($SD[1], 0,125).'...';};
	if (strlen($SD[2]) > 10){$ExSD[2]=substr($SD[2], 0,127).'...';};
	if (strlen($SD[3]) > 10){$ExSD[3]=substr($SD[3], 0,134).'...';};

	if (strlen($SD[11]) > 10){$ExSD[11]=substr($SD[11], 0,131).'...';};
	if (strlen($SD[12]) > 10){$ExSD[12]=substr($SD[12], 0,134).'...';};
	if (strlen($SD[13]) > 10){$ExSD[13]=substr($SD[13], 0,131).'...';};
	// if (strlen($SD[4]) > 10){$ExSD[4]=substr($SD[4], 0,144).'...';};
	// if (strlen($SD[5]) > 10){$ExSD[5]=substr($SD[5], 0,145).'...';};
	// if (strlen($SD[6]) > 10){$ExSD[6]=substr($SD[6], 0,109).'...';};
	//if (strlen($SD[7]) > 10){$ExSD[7]=substr($SD[7], 0,100).'...';};
	//if (strlen($SD[8]) > 10){$ExSD[8]=substr($SD[8], 0,100).'...';};
//Testimonials
	$Date='<i class="fa fa-calendar t-Color1"></i>&nbsp;<strong>Date:</strong>&nbsp;';
	$Review='<i class="fa fa-user t-Color1"></i>&nbsp;<strong>Review By:</strong>&nbsp;';
	$Project='<i class="fa fa-wrench t-Color1"></i>&nbsp;<strong>Project:</strong>&nbsp;';
	$Comment='<i class="fa fa-comment t-Color1"></i>&nbsp;';
	$City='<i class="fa fa-home t-Color1"></i>&nbsp;<strong>Location:</strong>&nbsp;';
	$Stars='<i class="fa fa-star t-Color3"></i><i class="fa fa-star t-Color3"></i><i class="fa fa-star t-Color3"></i><i class="fa fa-star t-Color3"></i><i class="fa fa-star t-Color3"></i>';

	//$Testimonial[1]= array("date", "review", "project","comment");
	//$Testimonial[]=array("date","name","comment","user","stars");
	$Testimonial[1]=array("TX","Rick R.","Paint or Stain Exterior Surfaces","Fernando is a great professional painter.","10-12-2018");
	$Testimonial[2]=array("TX","Jeff G.","Paint or Stain Exterior Surfaces","I've known him since he was 17. He's very good and has done a ton of work for me.","10-11-2018");
	$Testimonial[3]=array("Frisco, TX.","Tammy G.","Paint, Varnish or Stain Interior Surfaces","Very thorough, knowledgeable and professional. They were in and out in 2 days with no clean up necessary. They did it all at a good price. Thank you Fernando!","09-25-2015");
	$Testimonial[4]=array("Frisco, TX.","Homeowner","Paint or Stain Single Items","Excellent Job.","09-12-2015");
	$Testimonial[5]=array("TX.","Jeff C.","Refinish Already Installed Cabinets","Outstanding!","08-27-2015");
	
//Landing Pages
	$LN1 ="Flagstone Patios and Entryways";
	$LN1link ="flagstone-patios-and-entryways.php";
	$LD1 = array(
	"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, nisi, adipisci. Provident at dolorum similique! Provident accusantium, aliquam cumque, quod, praesentium at soluta cupiditate molestias dicta omnis porro totam ea.",
	"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore porro repudiandae ducimus rem expedita sapiente, quae, atque iste quis beatae animi libero voluptatum sint doloribus voluptates maiores eligendi amet reprehenderit.",
	"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi laboriosam expedita error tempora, iure mollitia doloremque, ut repellat consequuntur quam fuga optio earum ratione autem! Velit in doloribus beatae ex!",
	);

	$LN2 ="Retaining Walls Installation";
	$LN2link ="retaining-walls-installation.php";
	$LD2 = array(
	"Retaining walls serve many purposes, such as holding back soil to prevent erosion, establishing planter areas for landscaping, encasing steps and much more! Aztec Masonry builds retaining walls from natural stone in any size and shape to meet your job requirements. ",
	"Our professionals use the best materials to create beautiful and functional retaining walls that fit your style and budget. A retaining wall will add beauty and value to your home. We can help you add decorative stone and creative landscaping elements that will give your yard a distinctive look. ",
	"If your next project requires a natural stone retaining wall, then be sure and give Aztec Masonry in Santa Rosa a call for a free, no-obligation quote. Aztec Masonry serves all of Sonoma County, Marin County, Napa County and beyond!",
	);

	$LN3 ="Stone Fountains";
	$LN3link ="stone-fountains.php";
	$LD3 = array(
	"A stone fountain or water feature always lends an element of beauty and serenity to any environment in which it is installed, whether it is your garden or as a focal point in a courtyard. The professionals at Aztec Masonry in Santa Rosa have created numerous natural stone fountains and water features in and around Sonoma, Napa, and Marin for both private residences and commercial applications. ",
	"Perhaps you would like to have a stone fountain terminating at the edge of a swimming pool, or maybe a rock fountain at the edge of a koi pond. No matter what your requirements are for a water feature, Aztec Masonry can assist you every step of the way - from concept to reality - in the creation of your stone fountain. ",
	"Transform your patio into a wonderful space with beautiful stone fountains. Please take a look at the photos below in order to obtain an idea of what we can do for you. Then, feel free to give us a call for a free no-obligation estimate!",
	);
	
	$LN4 ="Stone Columns";
	$LN4link ="stone-columns.php";
	$LD4 = array(
	"Stone columns can be a beautiful and functional element that you can add to your home. With a variety of designs, these stone columns can be used as a load-bearing element or just for decorative purposes. Increase your home’s curb appeal with a beautifully-designed stone column by Aztec Masonry. ",
	"We count with many types of stone elements that can be used to design and create your custom column. A stone column will add to the architectural elements of the exterior of your home. Our professionals will work together with you to understand your specifications and deliver exactly what you envisioned. ",
	"A homeowner gathered rocks indigenous to the area and Aztec Masonry created two beautiful stone columns to support an automated entry gate at this Sonoma County residence. For many more examples of stone columns and pillars built by Aztec Masonry please see Stone Pillars for Sonoma County and Marin County homeowners! ",
	);	

	$LN5 ="Stone and Brick Pillars";
	$LN5link ="stone-and-brick-pillars.php";
	$LD5 = array(
	"A pair of stone columns or pillars can lend a stately effect and beautify your driveway, entryway or front porch. Aztec Masonry has built many stone columns in Sonoma and Napa County to support automated gates at the entryways to wineries and private residences alike. ",
	"A stone or brick pillar will add character to your home and increase its value. Your home will have a distinctive look from the rest of the neighborhood. Stone or brick pillars are not only pleasing to the eye - they provide structural integrity when used to support roof overhangs on a porch for example. ",
	"The photos of stone pillars - columns created for various customers around Santa Rosa, Napa, Sonoma, Calistoga, Marin, and the greater bay area, will give you a good idea of what Aztec Masonry can do for your next project requiring expert stone masonry work. Give us a call to discuss your ideas!",
	);

	$LN6 ="Stone Benches";
	$LN6link ="stone-benches.php";
	$LD6 = array(
	"Santa Rosa’s leading masonry contractor, Aztec Masonry, creates striking benches and planters from natural stone! Natural stone benches or planters make a nice addition to any landscaped area. You might refer to a stone bench as 'functional art' and the masons at Aztec Masonry are true artists! ",
	"Drawing upon decades of experience gained from working in the family business, Aztec Masonry will create a stone bench or planter for your project that will become a family heirloom; an object of beauty, form, and function which will endure the elements of nature and withstand the test of time. ",
	"Our professionals will work together with you to understand your specific styles and designs that you want for your stone benches. Take a load off your feet and sit upon a stone bench built by Aztec Masonry, located in Sonoma County, CA. contact us today and schedule a free estimate. ",
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
