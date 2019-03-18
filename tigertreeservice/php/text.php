<?php
//Get Sercer URL
$full_name = $_SERVER['PHP_SELF'];$name_array = explode('/',$full_name);$count = count($name_array);$page_name = $name_array[$count-1];
//Info
	$Company="Tiger Tree Service";
	$Domain='www.tigertreeservice.com';//No dejar pleca al final del dominio
	$Address='CA, 91731';
	//Para SEO
		//$Locality='Locality';
		//$Region='Region';
		//$StreetAddress='Address';
	$Phone='Enrique  (626) 235-5407';$PhoneRef='tel:6262355407';
	$Phone2='Henry sandoval  (626) 361-8691';$PhoneRef='tel:6263618691';
		$SEOPhone='+1'.'626-235-5407';//Formato Obligatorio
	$Mail='enrique@tigertreeservice.com';$MailRef='mailto:enrique@tigertreeservice.com';
	$Services='Residential & Commercial  Services!';//
	$Payment='We accept Cash & Checks';
	$Experience='20 Years Of Experience';//
	$Schedule='24 hours a day, 7 days a week';
	$Bilingual='We Are Bilingual';//
	$Estimates='Free Estimates Available';//
	$Satisfaction='company_satisfaction';
	$Cover='Areas Of Coverage: We All CA, Wyoming & Utah';//
	$License="We are Licensed, Bonded & Insured | License# 1030077 ";
	$License2="License# 1030077";

	$facebook='#';	
	$twitter='#';	
	$googleplus='#';

	$bbb="";$homeadvisor="#"; $manta="#";$yelp="#";$buildzoom="#";$houzz="#";$yelp="#"; $yellowpages="#";

	$GoogleMap='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26439.926173802367!2d-118.03709248574837!3d34.069750820572544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2d0a463f6d0ef%3A0x6b0f018ea5b0374d!2sEl+Monte%2C+California%2C+EE.+UU.!5e0!3m2!1ses-419!2sni!4v1515789202982" class="googlemap" allowfullscreen></iframe>';
	$YouTube='No hay';
//Phrases
	$Phrase1="The Best Tree Services At Great Prices ";
	$Phrase2="We Do The Best Trim In The Area ";
	$Phrase3="Climbing To The Top So You Don’t Have To";
	$Phrase4="No Tree Is too Tall For Us To Trim";
	$Phrase5="Work With Our Talented Arborists ";
//Home - Mission, etc.
	$Description="Tiger Tree Service is a locally owned and operated business established in El Monte, CA. Throughout the course of two decades, we have shaped many trees from unsightly to beautiful. Since day one, we've serve the States of California, Wyoming, and Utah with top of the line tree trimming, removal, planting, and more.";
	$Home=
	"
	<p>Welcome to Tiger Tree Service, a company dedicated to the maintenance and care of trees. With our vast knowledge and expertise in the planting and growth of individual trees and plants, we’ve made countless landscapes blossom with beautiful flora. We provide proper care to all natural elements so that you will fall in love with your garden. </p>
	<p>We are ready to demonstrate to you what we can do after 20 years of experience. Our professionals are fully equipped and very well skilled in the field, and we put hard work into promoting the healthy growth and vigor of your trees. Tiger Tree Service will provide first class tree trimming for your satisfaction. </p>
	<p>Our professionals never settle for less than what the client deserves and always go the extra length to complete each task with the highest quality. Our passion is to take good care of your trees while offering attentive, affordable, and friendly customer service. Indeed, Tiger Tree Service is your ideal arborist. Call us now! </p>
	";
	$About=
	"
	<p>Tiger Tree Service is a locally owned and operated business established in El Monte, CA. Throughout the course of two decades, we have shaped many trees from unsightly to beautiful. Since day one, we've serve the States of California, Wyoming, and Utah with top of the line tree trimming, removal, planting, and more. </p>
	<p>Our constant aim towards excellence is what has made us become respectable arborists in the entire area. Although, we have reached success in the business, we never forget our humble beginnings. As such, the core values in which our company was founded on always remain the same. </p>
	<p>We utilize the latest tools, equipment, and techniques to leave your trees in great shape. Tiger Tree Service is always on top of the latest tree shaping trends to make your trees stand out from the rest of the neighborhood. We put a lot of work into providing you, exclusive and tailored solutions for your overall tree demands. Call us now! </p>
	";
	$Why="When you choose Tiger Tree Service you opt for experienced arborists, beautiful trees, and friendly customer service at accessible prices. ";
	$Mission="Our mission is to enhance the beauty of your landscape by taking proper care of its natural elements with innovative gardening techniques for your satisfaction. ";
	$Vision="Our vision at Tiger Tree Service is to expand our business throughout the whole states by always delivering excellence, professionalism, and affordability. ";
//Services
	$SN1="Arborists Services";
	$SD1="If you don’t have time to take good care of your garden, we can do it for you. No matter how tall the tree is, we can climb all the way up to provide the maintenance that it requires. Our specialists have vast expertise in the cultivation, care, and development of individual trees and plants, so your trees will be in the best hands! ";
	$SN2="Tree Trimming";
	$SD2="Take care of your trees and conserve their beauty and vigor with our tree trimming services from Tiger Tree Service. Through tree trimming our skilled arborists eliminate dead branches that can collapse over your property and furthermore, affect your trees' health. Call us now!";
	$SN3="Roofing";
	$SD3="A dead tree can be a liability, if messes with the aesthetic of your landscape, it impacts the health of surrounding trees, and much more. Don’t wait any longer to get your trees removed. Work with the professionals at Tiger Tree Service today for a fast and high class removal. Get your free estimates! ";
	$SN4="Siding";
	$SD4="Our professional and skilled arborists will shape your trees to guarantee the proper growth of the shrub or hedge, in order to recover your trees' vigor and health. Our tree pruning services from Tiger Tree Service will help you remove loose, dead, or infected branches so that the shrub can bloom. Call our team today! ";
	$SN5="Stump Grinding";
	$SD5="Remove that stump left in your yard now! More than unsightly, a stump can be hazardous for your children and pets. Thus, rely in Tiger Tree Services to grind it for you safely and effectively! Our professionals count with the tools and equipment to properly address your stump grinding demands. After the process is completed, we can use the leftover stump particles as mulch to nurture your plants. ";
	$SN6="Tree planting";
	$SD6="Not all plants have the same behavior when they are moved from one place to another. Ensure that your plants survive and flourish as they naturally do by acquiring our professional planting services. The most beautiful results are waiting for your call. Don’t hesitate and contact us now!";
	$SN7="Palm Tree Removal";
	$SD7="If you suspect a palm tree in your landscape is in the process of dying, you can always hire our skilled arborists on site to see if there is anything you can do to conserve the palm tree. If after the inspection we have determined that there is no saving the tree, then without a doubt, we’ll remove it. Call us now!";
	$SN8="Tree Thinning ";
	$SD8="Call our arborists now to obtain the best tree thinning services in town! With our thinning solutions we will remove branches from mature trees, in order to reduce crown density and improve the health and growth of your trees. Work with our team today and take advantage of our amazing tree thinning skills. ";
	$SN9="Tree Shaping";
	$SD9="Give your trees a nice and creative shape with the help of our crew! Our professionals are trained in the latest tree shaping trends to give a beautiful form to your trees and bushes. With our amazing shaping services we can give life to your trees and we can enhance the visual appeal of your gardens. Get your free estimates! ";
//Excerpt
	if (strlen($Description) > 10){$ExDescription=substr($Description, 0,152).'...';};
	if (strlen($About) > 10){$ExAbout=substr($About, 0,546).'...'.'</p>';};
	if (strlen($About) > 10){$Ex2About=substr($About, 0,263).'...'.'</p>';};//Si es Footer2 dejarlo en 350
	if (strlen($SD1) > 10){$ExSD1=substr($SD1, 0,180).'...';};
	if (strlen($SD2) > 10){$ExSD2=substr($SD2, 0,180).'...';};
	if (strlen($SD3) > 10){$ExSD3=substr($SD3, 0,180).'...';};
	if (strlen($SD4) > 10){$ExSD4=substr($SD4, 0,180).'...';};
	if (strlen($SD5) > 10){$ExSD5=substr($SD5, 0,180).'...';};
	if (strlen($SD6) > 10){$ExSD6=substr($SD6, 0,180).'...';};
	if (strlen($SD7) > 10){$ExSD7=substr($SD7, 0,180).'...';};
	if (strlen($SD8) > 10){$ExSD8=substr($SD8, 0,180).'...';};
	if (strlen($SD9) > 10){$ExSD9=substr($SD9, 0,180).'...';};
//Testimonials
	$Date='<i class="fa fa-calendar t_red-3"></i>&nbsp;<strong>Date:</strong>&nbsp;';
	$Review='<i class="fa fa-user t_green-3"></i>&nbsp;<strong>Review By:</strong>&nbsp;';
	$Project='<i class="fa fa-wrench t_red-3"></i>&nbsp;<strong>Project:</strong>&nbsp;';
	$Comment='<i class="fa fa-comment t_green-3"></i>&nbsp;';
	//$Testimonial = array("date", "review", "project","comment");
//Landing Pages	
	$LN1="landing page name";
	$LD1=
	"
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>
	";
//Services Landing Page List
	$ListServices1= array("landing service", "landing service", "landing service","landing service");
	$ListServices2= array("landing service", "landing service", "landing service","landing service");
	$ListServices3= array("landing service", "landing service", "landing service","landing service");

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