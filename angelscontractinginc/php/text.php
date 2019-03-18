<?php
//Get Sercer URL
$full_name = $_SERVER['PHP_SELF'];$name_array = explode('/',$full_name);$count = count($name_array);$page_name = $name_array[$count-1];
//Info
	$Company="Angel’s Contracting Inc.";
	$Domain='www.angelscontractinginc.com';//No dejar pleca al final del dominio
	$Address='517 Smith St. Peekskill, NY 10566';
	//Para SEO $Locality='Locality';$Region='Region';$StreetAddress='Address'; $SEOPhone='+1'.'425-876-8043';//Formato Obligatorio
	$Phone='(914) 227-4753';$PhoneRef='tel:9142274753';
	$Mail='info@angelscontractinginc.com';$MailRef='mailto:info@angelscontractinginc.com';
	$Services='Residential and Commercial Services!';
	$Payment='We accept Cash and Checks!';
	$Experience='We Have More than 30 Years of Experience';
	$Schedule='Monday to Friday from 8:00 AM to 5:00 PM || Saturday from 8:00 AM to 12:00 PM';
	$Bilingual='We Are Bilingual !';
	$Estimates='Free Estimates are Available!';
	$Satisfaction='Your Satisfaction is Guaranteed';
	//$Cover='We Cover 60 Miles Around The Area';
	//$Cover2='We Cover Washington, Maryland & Virginia ';
	//$License='Insured in Roofing // State Licensed';
	$facebook='#';$twitter='#';$googleplus='#';$homeadvisor="#";$manta="#";$yelp="#";$bbb="#";$buildzoom="#";$houzz="#";
	$GoogleMap='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2998.272457069921!2d-73.927295!3d41.2811744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2c8c902e8ced7%3A0x6f60736d83e35487!2s517+Smith+St%2C+Peekskill%2C+NY+10566!5e0!3m2!1ses-419!2s!4v1508339665022" class="googlemap" allowfullscreen></iframe>';
	$LinkGoogleMap="https://www.google.com/maps/place/517+Smith+St,+Peekskill,+NY+10566/@41.2811744,-73.927295,17z/data=!4m5!3m4!1s0x89c2c8c902e8ced7:0x6f60736d83e35487!8m2!3d41.2811744!4d-73.927295?hl=es-419";

//Phrases
	$Phrase1="Everything We Do is Driven by Professionals";
	$Phrase2="We Bring Your Dreams to Life";
	$Phrase3="Unsurpassed Services for More than 30 Years";
	$Phrase4="Angel’s Contracting Inc. – Your Most Reliable Partner";
	$Phrase5="Always Heading the Construction Industry";
//Home - Mission, etc.
	$Description="Our core values of integrity, know-how, diligence, honesty, and skill are at the center of everything that we do, and in what we offer. These principles are fundamental part of our business culture and guide our steps towards offering a greater service. Angel’s Contracting Inc. strives to deliver ethical work from start to finish. ";
	$Home=
	"
	<p>If you’re looking for the best company for your residential and commercial remodeling needs, you’re in the right place. Welcome to Angel’s Contracting Inc; we are a family owned and operated company that offers everything you need for your construction and remodeling projects. We always work according to your vision.</p>
	<p>At Angel’s Contracting Inc. we have more than 30 years of experience in the industry! With more than 3 decades to back our quality workmanship, you can rest assured that every construction and remodeling project entrusted to us will meet your demands and exceed your expectations.</p>
	<p>From concrete, and masonry to drywall, cabinetry, and painting, we can do it all! Our professionals know how to transform your property from a simple and dull look to a dreamlike environment. Angel’s Contracting Inc. always makes sure to never leave a site until your specifications are met. Call our experts today!</p>
	";
	$About=
	"
	<p>Angel’s Contracting Inc. is a family owned and operated business founded in Peekskill, NY. For three decades, we have helped countless customers to build solid and durable structures for their indoors or outdoor spaces. Our expertise, unmatched quality, and timely solutions is what set us apart from the competition. </p>
	<p>Our core values of integrity, know-how, diligence, honesty, and skill are at the center of everything that we do, and in what we offer. These principles are fundamental part of our business culture and guide our steps towards offering a greater service. Angel’s Contracting Inc. strives to deliver ethical work from start to finish. </p>
	<p>As we are committed to your satisfaction, we aim to design solid structures that are energy efficient, modern, and functional. We aim to make your property a better place to live. We not only improve the aesthetics of your estate, but also boost its value. Angel’s Contracting Inc. is by far your best choice in home improvement. </p>
	";
	$Why="Angel’s Contracting Inc. is the leading company for all types of residential and commercial constructions. Through the years, we have been serving the community while earning a reputation of being responsible and committed to surpass all our clients’ needs.";
	$Mission="Our business purpose at Angel's Contracting Inc. is to improve your standard of living, while adding value to your residential and commercial property. ";
	$Vision="Angel's Contracting Inc. aims to become the most reliable and cost-efficient construction and remodeling company in the area we serve. We will achieve that with our business philosophy of everyday learning and improvement.";
//Services
	$SN1="Home improvement";
	$SD1="At Angel's Contracting Inc. we provide the best solutions for your home improvement needs. From small painting jobs to larger exterior and interior remodeling projects, we know how to transform your house beyond recognition! We treat every house as it were our own, so don’t hesitate to work with our experts today!";
	$SN2="Masonry";
	$SD2="Our top-quality masonry projects are what you need to add a bold and strong look to your home and business. Our professionals at Angel's Contracting Inc. always make sure to deliver every masonry project with high standards of quality, in order to guarantee lasting results. Get in touch with us today! ";
	$SN3="Concrete";
	$SD3="Concrete is a very popular material, which has benefited our society with its application in construction. Concrete is often used to build schools, hospitals, bridges, pavements and more. Our experts utilize the best concrete material in the market to build sturdy, solid, and safe structures for your satisfaction. Call us today! ";
	//$SN4="Excavation";
	//$SD4="To start any construction project with the right foot, you need a professional like Angel's Contracting Inc. to handle the excavation and grading process. Our experts count with the necessary tools and machinery to prepare any construction site with the highest security standards. Ensure a safe and lasting structure in your property from the very beginning. Call us now!";
	//$SN5="Paving";
	//$SD5="Paving is one of the most versatile building techniques. Our experts at Angel's Contracting Inc. can build driveways, walkways, sidewalks, steps, and many other structures. Also, what is great about paving is that your options are almost unlimited when it comes to designs and colors. The paving solutions that we offer don’t only look classy, but they are also sturdy and durable. Give us a call today. ";
	$SN4="Asphalt";
	$SD4="Asphalt is an extremely strong and reliable building material. It can be used for both parking lots and driveways in your residential and commercial properties. Our experts have access to the right equipment and materials to deliver the most durable and cost-effective asphalt results. Give us a call today to let our experts surpass your expectations. ";
	$SN5="Kitchen and Bathroom Remodeling ";
	$SD5="What are the most important rooms in your house? Of course, your presentation card to all your visitors is the cleanliness and amazing look of your bathroom and kitchen. Furthermore, if you’re thinking about starting a remodeling project in your house, Angel’s Contracting Inc. is the best solution for you. Get in contact with our specialized team today and enjoy outstanding results and incredible prices. ";
	$SN6="Cabinets Installation";
	$SD6="Cabinets play an important role in your bathroom and kitchen projects. Furthermore, the correct installation of standard and customized cabinets will be the key to save space and have a more elegant appearance for your house. Don’t lose the opportunity to obtain incredible cabinets installation services in New York. Get in contact with the masters in the field today.";
	$SN7="Bathroom Construction";
	$SD7="Adding a new bathroom at your house? The good news is that you don’t have to search for high-quality bathroom constructions. Here at Angel’s Contracting Inc. we have the tools and experience to provide you outstanding bathroom constructions. Request a free estimate for your project and start enjoying the quality of our work.";
	$SN8="Drywall & Sheetrock ";
	$SD8="Drywall & Sheetrock are keys for the right performance of your internal walls. Furthermore, the correct installation of such materials will give you several benefits such as A/C units’ costs reduction or humidity prevention inside your house. Don’t miss the opportunity to find an instant solution for your installations and repair in your residential and commercial projects. Call us today and get your free estimates.";
	$SN9="Other Services";
	$SD9="• Exterior and Interior Painting<br> • Texture<br> • Ceramic Tile";
//Excerpt
	if (strlen($Description) > 10){$ExDescription=substr($Description, 0,152).'...';};
	if (strlen($About) > 10){$ExAbout=substr($About, 0,898).'...'.'</p>';};
	if (strlen($About) > 10){$Ex2About=substr($About, 0,204).'...'.'</p>';};
	if (strlen($SD1) > 10){$ExSD1=substr($SD1, 0,165).'...';};
	if (strlen($SD2) > 10){$ExSD2=substr($SD2, 0,165).'...';};
	if (strlen($SD3) > 10){$ExSD3=substr($SD3, 0,165).'...';};
	if (strlen($SD4) > 10){$ExSD4=substr($SD4, 0,165).'...';};
	if (strlen($SD5) > 10){$ExSD5=substr($SD5, 0,135).'...';};
	if (strlen($SD6) > 10){$ExSD6=substr($SD6, 0,165).'...';};
	if (strlen($SD7) > 10){$ExSD7=substr($SD7, 0,165).'...';};
	if (strlen($SD8) > 10){$ExSD8=substr($SD8, 0,165).'...';};
	if (strlen($SD9) > 10){$ExSD9=substr($SD9, 0,205).'...';};
	//if (strlen($SD10) > 10){$ExSD10=substr($SD10, 0,165).'...';};
//Testimonials
	$Date='<i class="fa fa-calendar"></i>&nbsp;<strong>Date:</strong>&nbsp;';
	$Review='<i class="fa fa-user"></i>&nbsp;<strong>Review By:</strong>&nbsp;';
	$Project='<i class="fa fa-wrench"></i>&nbsp;<strong>Project:</strong>&nbsp;';
	$Comment='<i class="fa fa-comment"></i>&nbsp;';
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
