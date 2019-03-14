<?php
//Get Sercer URL
$full_name = $_SERVER['PHP_SELF'];$name_array = explode('/',$full_name);$count = count($name_array);$page_name = $name_array[$count-1];
//Info
	$Company='The Lord of Floors';
	$Domain='www.thelordoffloors.com';//No dejar pleca al final del dominio
	$Address='2344 Spring Oaks Lane Sarasota, FL 34234 ';
	//Para SEO
	//	$Locality='Locality';
	//	$Region='Region';
	//	$StreetAddress='Address';
	$Phone='(941) 706-5072';$PhoneRef='tel:9417065072';
	$Phone2='';$PhoneRef2='tel:';
	$Phone3='';$PhoneRef3='tel:';
	//	$SEOPhone='+1'.'425-876-8043';//Formato Obligatorio
	$Mail='info@thelordoffloors.com';$MailRef='mailto:info@thelordoffloors.com';
	$Mail2 = 'alessandra@thelordoffloors.com'; $Mail2Ref='mailto:alessandra@thelordoffloors.com';
	$Services='Residential and commercial Services!';
	$Payment='We accept Cash, Checks, Visa, MasterCard, & American Express!';
	$Experience='15 Years of experience';
	$Schedule='Monday To Saturday from 8:00AM to 5:00PM';
	$Bilingual='We are bilingual';
	$Estimates='Free Estimates Available';
	$Satisfaction='Your Satisfaction is Guaranteed';
	$Cover='We cover 50 miles around the area';
	$License='We are Licensed, Insured, and Bonded';
	//$License2='';
	$facebook='https://www.facebook.com/The-Lord-of-Floors-400381520336134/';
	$twitter='https://twitter.com/thelordoffloors';
	$googleplus='https://plus.google.com/u/0/107206862537000048532';
	$homeadvisor="#";$manta="#";$yelp="#";$bbb="#";$buildzoom="#";$houzz="#";

	$GoogleMap='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3543.0609132312634!2d-82.52339099999999!3d27.373813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88c33fa1f1c12f05%3A0x15dec441c798ae2c!2s2344+Spring+Oaks+Ln%2C+Sarasota%2C+FL+34234%2C+EE.+UU.!5e0!3m2!1ses-419!2sni!4v1491398529891" width="100%" height="415"  allowfullscreen></iframe>';
	$LinkGoogleMap="https://www.google.com.ni/maps/place/2344+Spring+Oaks+Ln,+Sarasota,+FL+34234,+EE.+UU./@27.373813,-82.523391,17z/data=!3m1!4b1!4m5!3m4!1s0x88c33fa1f1c12f05:0x15dec441c798ae2c!8m2!3d27.373813!4d-82.523391?hl=es-419";
//Phrases
	$Phrase1="Quality Flooring Begins With Us";
	$Phrase2="Incredible Flooring Selection and Assortment";
	$Phrase3="Personalized & Friendly Services";
	$Phrase4="Good Price. Great Service";
	$Phrase5="Flooring That Meets Your Needs";
	$Phrase6="";
	//$Phrase7="";
	//$Phrase8="";
//Home - Mission, etc.
	$Home=
	"
	<p>Receive a prime flooring service and enjoy from a stress free experience. Welcome to The Lord of Floors; we are known for being a leader in the flooring industry. Our crew has serviced Sarasota, Florida and surrounding areas for over 15 years, and still counting. </p>
	<p>The Lord of Floors uses only top of the line quality flooring products, and we install them to perfection. Not only do we offer the finest of flooring solutions, but we ensure that it is installed right by one of our experts. We stand behind our work as we know we always bring forth the best of performances.</p>
	<p>We are a well-recognized flooring company who has a reputation of dependability and professionalism. We bend over backwards for every client as we value them all. Our company is what you need as your supplier for your upcoming flooring project. Get in touch with us today!</p>
	";
	$About=
	"
	<p>The Lord of Floors is a well-known flooring contractor who founded in Sarasota, Florida. Our company was established more than 15 years ago, but until this day, we have upheld the reputation of precision and excellence. We offer more than just flooring installation solutions- we offer experience. </p>
	<p>The success that we have experienced at The Lord of Floors is based on the core values under which we founded this company; values of honesty, integrity, and dedication. From these values, we have embraced principles that we believe in as a team, and that we take into every task we are hired for. </p>
	<p>The Lord of Floors has the mission of becoming the number one supplier and partner for residential and commercial flooring projects throughout the area. We are driven by customer satisfaction thus we always prioritize your needs and demands. With a sense of commitment and growth, The Lord of Floors is the best choice for you!</p>
	";
	$AbF="The Lord of Floors is a well-known flooring contractor who founded in Sarasota, Florida. Our company was established more than 15 years ago, but until this day, we have upheld the reputation of precision and excellence. We offer more than just flooring installation solutions- we offer experience. ";

	$Why="The Lord of Floors can assist you in finding the right flooring solutions for your commercial or residential property, lifestyle, and your budget.";
	$Mission="Our mission at The Lord of Floors is to exceed client’s expectations and to meet their demands through excellence, value, and services.";
	$Vision="Our vision at The Lord of Floors is to have our clients define us as a leader and first class company in this particular industry.";
//Services
	$SN1="Porcelain";
	$SD1="Porcelain, though similar to ceramic, is actually made of much finer and denser clay. This option is ideal for flooring as it is tough, resistant to scratches and stains, which in the long run promises durability. This tile is most known for its sturdiness and many other features. ";
	$SN2="Marble ";
	$SD2="Get a rich look for your flooring through marble installation. This natural stoe is known for adding incredible aesthetic appeal, value, and an elegant feel to any space. Far more than just beauty however, this flooring option also presents allergen resistant properties and long lasting factors. ";
	$SN3="Glass Tile installation";
	$SD3="Glass tile is a material that possess great and unique beauty that you will not come across elsewhere. This material can be used on a backsplash among other areas, and it offers a diverse range of color assortments. Get this shiny and clear material installed to your surface of choice, today!";
	$SN4="Tile Step Construction";
	$SD4="The professionals at The Lord of Floors specialize in high class tile step construction services. Our crew utilizes prime tile for the creation of these steps. The materials that we use promote beauty but also durability and great resistance. Learn more by Calling us today. ";
	$SN5="Backsplash Installation";
	$SD5="Add vigor to your kitchen through a new, timeless, and modern backsplashes. Our team works with vast and custom styles that will go perfectly with the rest of the kitchen’s design and feel. Find the best options for your backsplash, here at The Lord of Floors. Schedule an appointment today. ";
	$SN6="Ceramic Tile";
	$SD6="Ceramic tile offers versatility like no other material. For that stainless effect, go for ceramic, which we offer at The Lord of Floors. Our team prides in installing ceramic to floors, countertops, backsplashes, and more. Contact us today to schedule an appointment with our crew.";
	$SN7="Kitchen & Bath Remodeling";
	$SD7="Take your property appeal and value to new levels through kitchen and bathroom remodeling. Other than offering the latest materials for vanities, flooring, and even countertops, our team presents you with optimum designs. For an optimum kitchen and bathroom, call us now. ";
	$SN8="Travertine Tile Restoration";
	$SD8="If your travertine tile is damaged in any way or form, then you came to the right place. Don’t worry about how your travertine tile currently looks, and instead, depend on The Lord of Floors for a full tile restoration that will make your travertine look as good as new and twice as better than before. ";
//Excerpt
	if (strlen($About) > 10){$ExAbout=substr($About, 0,500).'...'.'</p>';};
	if (strlen($About) > 10){$Ex2About=substr($About, 0,204).'...'.'</p>';};
	if (strlen($SD1) > 10){$ExSD1=substr($SD1, 0,188).'...';};
	if (strlen($SD2) > 10){$ExSD2=substr($SD2, 0,188).'...';};
	if (strlen($SD3) > 10){$ExSD3=substr($SD3, 0,158).'...';};
	if (strlen($SD4) > 10){$ExSD4=substr($SD4, 0,188).'...';};
	if (strlen($SD5) > 10){$ExSD5=substr($SD5, 0,188).'...';};
	if (strlen($SD6) > 10){$ExSD6=substr($SD6, 0,188).'...';};
//Testimonials
	$Date='<i class="fa fa-calendar"></i>&nbsp;<strong>Date:</strong>&nbsp;';
	$Review='<i class="fa fa-user"></i>&nbsp;<strong>Review By:</strong>&nbsp;';
	$Project='<i class="fa fa-wrench"></i>&nbsp;<strong>Project:</strong>&nbsp;';
	$Comment='<i class="fa fa-comment"></i>&nbsp;';
	$FiveStars='<i class="fa fa-star t_yellow-3"></i>&nbsp;<i class="fa fa-star t_yellow-3"></i>&nbsp;<i class="fa fa-star t_yellow-3"></i>&nbsp;<i class="fa fa-star t_yellow-3"></i>&nbsp;<i class="fa fa-star t_yellow-3"></i>';

	$Testimonial[2] = array("July 19 2017 ", "Ursula Mendoza Herrera","Beautiful, excellent and high standard jobs (floors, backsplash, walls, bathrooms, etc). Great service!, nothing but great company!");
	$Testimonial[1] = array("July 18 2017", "Michele Rayner-Altenbernd","Beautiful! Very talented! Nice to see some picture perfect flooring. Should be considered works of art!");

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
