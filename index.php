<?php //CONSTANTS
	// "Server details"
	define ('NAME',$_SERVER['SERVER_NAME']  );
	define ('ADDR',$_SERVER['SERVER_ADDR']  );
	define ('PORT',$_SERVER['SERVER_PORT']  );
	define ('RQ_URL',$_SERVER['REQUEST_URI']);

	define('SYS_URL','http://'.NAME.'/template-pageV2/');

	// "IMG"
	define('IMG',SYS_URL.'images/');

	// "CSS"
	define ('CSS',SYS_URL.'style/');
		// define('GOOGLE_FONT','http://fonts.googleapis.com/css?family=');

	// "JavaScripts"
	define ('JS',SYS_URL.'js/libs/');
	define ('JQ',JS.'jq/'); 
		define ('JQCDN','//code.jquery.com/jquery-1.8.1.min.js');
		// Development (Full) version
		// http://code.jquery.com/jquery-1.8.1.js 	

		
	// SOCIAl & SEO DATA
	define ('DESC',"AKQA’s e-commerce solutions are inspired by the innovative application of technology. We integrate with CRM systems and databases to provide a seamless customer experience. AKQA manages technology projects using structured development processes and our QA team ensures that the final implementation is delivered to the highest quality standards. We also provide clients with a high-quality, ISO 9000-certified, managed hosting service.");
	define ('SITE_NAME','AKQA'); 
	define ('TITLE','About AKQA'); 
	define ('TYPE','article'); 
	
	// <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
	// <html xmlns="http://www.w3.org/1999/xhtml" itemscope itemtype="http://schema.org/Review" dir="ltr" lang="en-US">

	//<!-- rel='permalink'  rel="alternate"  rel="canonical" -->
?>

<!DOCTYPE html>
<html lang="en" manifest="offline/akqa.manifest">
<head> 
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?=TITLE?></title>
  
  <!-- SOCIAl & SEO DATA -->
  <meta itemprop="name" 		content="<?=TITLE?>">
  <meta itemprop="description"  content="<?=DESC?>" >
  <meta itemprop="image" 		content="<?=IMG?>logo.png">	
  
  <meta property="og:title" 		content="<?=TITLE?>"/>
  <meta property="og:description" 	content="<?=DESC?>"/>
  <meta property="og:image" 		content="<?=IMG?>logo.png"/>
  <meta property="og:type"   		content="<?=TYPE?>"> 
  <meta property="og:url" 			content="<?=SYS_URL?>"/>
  <meta property="og:site_name"   	content="<?=SITE_NAME?>"/>
  
  <!-- DEVICE CONFIG -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.9, user-scalable=yes" />
  <meta name="apple-mobile-web-app-capable" 			content="yes" /> <!-- full screen -->
  <meta name="apple-mobile-web-app-status-bar-style" 	content="black-translucent"> <!-- clock bar color -->
  <!--meta name="format-detection" content="telephone=no"--> 
  
  <!-- ICONS <base href="http://images/" target="_blank" /> --> 
  <link href='favicon.ico' rel='icon' type='image/x-icon'/>
  <link rel="apple-touch-startup-image" href="load_screen.png" /> 
  <link rel="apple-touch-icon" sizes="72x72" href="touch-icon-ipad.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="touch-icon-iphone4.png" />
  
  <!-- CSS reset -->
  <!-- YUI3 CSS reset --> <!--link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.6.0/build/cssreset-context/cssreset-context-min.css"-->
  <!-- my light reset & base CSS -->
  <link  href="<?=CSS?>base_style.css" 	rel="stylesheet" type="text/css">
  
  <!-- main & mobile CSS -->
  <link  href="<?=CSS?>akqa.css" 		rel="stylesheet" type="text/css" media="screen">
	<!--link  href="mobile_transitions" 	rel="stylesheet" type="text/css" media="screen" -->
	
  <!-- CSS for printing page-->
  <link  href="<?=CSS?>print.css" 		rel="stylesheet" type="text/css" media="print"> 
 		
  <!-- modernizr 2.6.2 custom build --> 
  <script src="<?=JS?>modernizr.js"></script>
</head>

<body class="fc"> <!--  onload="init()" -->
  <section id="page" class="w540 block f ma ffarial bg-size pb155">
	<header class="mb17 mt17 f">
		<div id="logo" class="f block w100pc h55 mb35"> </div>
		<nav id="main_nav">
		  <a href="/menu1/">Menu 1</a> 
		  <a href="/menu2/">Menu 2</a> 
		  <a href="/menu3/">Menu 3</a> 
		</nav> 
	</header>
  
	<section class="wwbr cl f">
		<header class="mb17 fc_h1 fs24"> About AKQA </header>
		
		<section>
			<header class="mb17 fs18"> What We Do </header>
			<p class="mb17 w375 fs12"> <strong>AKQA’s</strong> e-commerce solutions are inspired by the innovative application of technology. We integrate with CRM systems and databases to provide a seamless customer experience. <strong>AKQA</strong> manages technology projects using structured development processes and our QA team ensures that the final implementation is delivered to the highest quality standards. We also provide clients with a high-quality, ISO 9000-certified, managed hosting service. </p>
			<h3 class="mb10 fs14 fc_h3 fwb"> Our focus </h3>
			<ul class="ml12 mb22 dotList fs12"> 
				<li> Interactive</li>
				<li> Mobile 	</li>
				<li> Technology </li>
			</ul>
			<a href="#" class="fs12"> Click here to download a PDF of our recent work </a> 
			
			<h1 class="mt22 mb15 fs18"> News </h1>
			<div class="ml5 mb15 fc_h1 fs12 fwb dotArrow cp">  Show / Hide news item </div>
			<p class="mb15 w375 fs12"> <strong> AKQA’s </strong> site for NBA superstar Lebron Spaß <a href="www.lebron23-23.com" target="_blank"> www.lebron23-23.com </a>was featured in USA today on January 5, 2007. James and Coca-Cola’s Sprite plan to announce a national contect Friday inviting consumers to create theme songs for new Sprite TV commercials airing during NBA All-Star Weekend next month.  </p>
			<blockquote class="w320 mb27 fs12"> “I wanted to do something new and different. Sprite came to me with the idea. I thought it was cool. Without the fans, there’s no players.” </blockquote>
		</section>
		
		<footer>
			<h1 class="mb12 fs18"> More Information </h1>
			<p class="mb12 w375 fs12"> For more information about the services AKQA offer and how we can work with you? please provide us with following items of information.</p>
			
			<!-- Additional possible fields
							Date
								<label class="" for="date">Date of birth</label>
								<input pattern="(0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])[- /.](19|20)\d\d" required="required" placeholder="Required (DD.MM.YYYY)" id="date" class="" title="Required (DD.MM.YYYY)" name="date" type="date"/> 
							Comments
								<label class="" title="English only" for="comments">Comments</label> 
								<textarea placeholder="English only" name="comment" title="English only"  id="comment" class=""></textarea>				
							Subscribe
								<label class="fw120-450" for="weekly" title="Subscribe for updates">Send updates on </label> 
								<input checked value="2" title="Subscribe for monthly updates" id="monthly" class="fi mr5" name="senddate" type="radio" /> 
								<input title="Subscribe for weekly updates" value="1" id="weekly" class="f mr5" name="senddate" type="radio" /> 
					-->
			
			<form method="post" id="main_form" action="index.php" accept-charset="utf-8">
			  <fieldset id="personal_information">
				<legend class="fs11 mb17">Items marked * are required fields </legend>
				<ul class="main_form mt3 fs12">                                                                                             
					<li class="">	 
						<label class="f cl" for="name">Contact name*:</label> 
						<!-- check border style from source input psd -->
						<input id="name" class="f cl" required="required" autofocus="true" placeholder="Required" title="Required" name="name" type="text"/>
					</li>
					<li class="">
						<label class="f cl" for="email">Contact email address*:</label> 
						<input id="email" class="f cl w235" required="required" placeholder="Required" title="Required" type="email" name="email"/>      
					</li>
					<li class="">
						<label class="f cl" title="+55 (555) 555-55-55" for="phone">Contact phone number:</label> 
						<input id="phone" class="f cl w235" placeholder="+55 (555) 555-55-55" name="phone" title="+55 (555) 555-55-55"  type="text" />      
					</li>
					<li class="f cl">
						<div class="">
							<input id="contact-submit" name="submit_form" class="cp send_button" value="Submit" type="submit"/> 
						</div>
					</li>
				</ul>	
			  </fieldset>
			</form>
		</footer>
	</section>
  </section>

  <!-- JavaScript -->
  <!-- jQuery 1.8.1 --> 
   <script src="<?=JQCDN?>"></script> 
   <script>window.jQuery || document.write('<script src="<?=JQ?>jq.js"><\/script>')</script>
   
   <script src="js/script.js"></script>
   
  <!-- Support IE 7 (Print page)-->
   <!--[if lte IE 7]>
		 <script type="text/javascript" src="print.js"></script>
	  <![endif]--> 
</body>
</html>