    <?php
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<!--<title><?php wp_title( '|', true, 'right' ); ?></title>-->
        <title><?php bloginfo('name'); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
        <!--all links-->
                <link rel="shortcut icon" href="<?php bloginfo( 'template_url' );?>/assets/img/favicon.ico">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo( 'template_url' );?>/assets/img/apple-icon-114x114px.png" />
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo( 'template_url' );?>/assets/img/apple-icon-144x144px.png" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' );?>/assets/css/shortcode.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' );?>/assets/css/responsive.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' );?>/assets/3rd/font-awesome/font-awesome.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' );?>/assets/3rd/pretty-photo/pretty-photo.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' );?>/assets/3rd/layerslider/css/layerslider.css" />
                <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' );?>/style.css" />
                <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
              <!--<link href='http://fonts.googleapis.com/css?family=Open+Sans|Baumans' rel='stylesheet' type='text/css'>-->
                <script type="text/javascript" src="<?php bloginfo( 'template_url' );?>/assets/3rd/jquery/jquery-core.js"></script>
		<script type="text/javascript" src="<?php bloginfo( 'template_url' );?>/assets/3rd/jquery/jquery-ui.js"></script>
		<script type="text/javascript" src="<?php bloginfo( 'template_url' );?>/assets/3rd/jquery/jquery-tinynav.js"></script>
		<script type="text/javascript" src="<?php bloginfo( 'template_url' );?>/assets/3rd/jquery/jquery-isotope.js"></script>
		<script type="text/javascript" src="<?php bloginfo( 'template_url' );?>/assets/3rd/jquery/jquery-flexslider.js"></script>
		<script type="text/javascript" src="<?php bloginfo( 'template_url' );?>/assets/3rd/jquery/jquery-countdown.js"></script>
		<script type="text/javascript" src="<?php bloginfo( 'template_url' );?>/assets/3rd/jquery/jquery-masonry.js"></script>
		<script type="text/javascript" src="<?php bloginfo( 'template_url' );?>/assets/3rd/jquery/jquery-leanModal.js"></script>
		<script type="text/javascript" src="<?php bloginfo( 'template_url' );?>/assets/3rd/jquery/jquery-validate.js"></script>
		<script type="text/javascript" src="<?php bloginfo( 'template_url' );?>/assets/3rd/pretty-photo/pretty-photo.js"></script>
		<script type="text/javascript" src="<?php bloginfo( 'template_url' );?>/assets/3rd/layerslider/js/greensock.js"></script>
		<script type="text/javascript" src="<?php bloginfo( 'template_url' );?>/assets/3rd/layerslider/js/layerslider.kreaturamedia.jquery.js"></script>
		<script type="text/javascript" src="<?php bloginfo( 'template_url' );?>/assets/3rd/layerslider/js/layerslider.transitions.js"></script>
		<script type="text/javascript" src="<?php bloginfo( 'template_url' );?>/assets/js/theme.js"></script>
                <!--[if IE]>
		<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
		<![endif]--> 

	<?php wp_head(); ?>
</head>




<!--<body <?php body_class(); ?>>-->

<body <?php if($_GET["lang"] == "ar") echo "dir='rtl'";?> <?php body_class(); ?>>
  
    
<header  class="hinner mbtm">
                        
                        
                        
                        <div id="tm-header-top" class=" mbtm6" >
                            
                            
                                
                            <div id="tm-header-top-inner" class=" mbtm6">
                                <div class="tm-wrap tm-table top-line" >
                                
                               <!--     <div class="tm-column tm4">
                                            
                                           asdasdad 
                                        
                                     </div>-->
                            
                                    <div style="text-align: right;" >
                                        
                                                <div id="nav_info">
                                                                        <ul>
                                                                          <li> <a href="en/index-prod/" class="lan-link"><span>Home</span></a></li>
                                                                          <li> <a href="en/home/" class="lan-link"><span>Consumer</span></a></li>
                                                                          <li> <a href="en/corporate/contact-us/" class="lan-link"><span>Contact Us</span></a></li>
                                                                          <li>
                                                                                <ul class="social-networks-header1" style="padding: 0;">


                                                                                                <li>
                                                                                                    <div class="tm-social-icons">
                                                                                                        <a class="tm-icon-facebook" title="Facebook" href="https://www.facebook.com/rahafcompany?fref=nf" target="blank">
                                                                                                                    <i class="fa fa-facebook"></i>
                                                                                                            </a>
                                                                                                        <a class="tm-icon-twitter" title="Twitter" href="https://twitter.com/rahafcompany" target="blank">
                                                                                                                    <i class="fa fa-twitter"></i>
                                                                                                            </a>
                                                                                                    </div>
                                                                                                </li>

                                                                                </ul>   
                                                                          </li>
                                                         
                                                                        <li>
                                                                            
                                                                                <form name="input" action="search.php" method="get" style="margin: 3px; padding: 0;">
                                                                                    <div style="color: #333">
                                                                                            <label>Search</label>
                                                                                            <input type="text" value="" name="search" class="tm-input required" placeholder="" />
                                                                                          <!--  <span><a>عربي</a></span> -->
                                                                                    </div>
                                                                                </form>

                                                                            </li>
                                                                            <li><a href="ar/home">عربي</a></li>                    

                                                            </div><!--tm-social-icons-->
                                                               
                                                      
                                       
                                    </div>
                                     
                            </div> 
                            
                            </div>
                            
                            
                           
                                
                                    <div class="tm-wrap tm-table">
                                            <div class="tm-column tm3" style="padding:0;">
                                                <div class="tm-logo">
                                                        <a href="en/index-prod" class="tm-logo-simple"><img alt="Logo" src="<?php bloginfo( 'template_url' );?>/assets/img/logo.png" style=""></a>
                                                </div>
                                            </div>
                                        
                                            
                                             <div id="tm-header-nav" class="tm-menu-style tm-sticky-menu tm-column tm9">
                            
                                                   
                                                       <nav  style="margin: 0; padding: 0;">
                                                   <ul class="tm-menu tm-menu-simple">

                                                         <li class="parent">
                                                                            <a href="en/corporate/about-us/">About Us</a>
                                                                            <ul class="sub-menu">
                                                                                    <li><a href="en/corporate/about-us/chairman-message/">Chairman's Message</a></li>
                                                                                    <li><a href="en/corporate/about-us/ceos-message/">CEO's Message</a></li>
                                                                                    <li><a href="en/corporate/about-us/rahaf-the-place/">Rahaf: The Place</a></li>
                                                                                    <li><a href="en/corporate/about-us/production-facilities/">Production Facilities</a></li>
                                                                                    <li><a href="en/corporate/about-us/quality/">Quality</a></li>
                                                                                    <li><a href="en/corporate/about-us/privacy-policy/">Privacy Policy</a></li>
                                                                                    <li><a href="en/corporate/about-us/terms-and-conditions/">Terms & Conditions</a></li>
                                                                                    <li><a href="en/corporate/about-us/disclaimers/">Disclaimers</a></li>
                                                                                    <li><a href="en/corporate/about-us/delivery-policy/">Delivery Policy</a></li>
                                                                                    <li><a href="en/corporate/about-us/rahaf-delivery-areas/">Rahaf Delivery Areas</a></li>
                                                                            </ul>
                                                                    </li>
                                                                    
                                                                    <li class="parent">
                                                                            <a href="en/corporate/media-centre/">Media Centre</a>
                                                                            <ul class="sub-menu">
                                                                                    <li><a href="en/corporate/media-centre/image-gallery/">Image Gallery</a></li>
                                                                            </ul>
                                                                    </li>
                                                                    
                                                                    <li class="parent">
                                                                            <a href="en/corporate/careers/">Careers</a>
                                                                            <ul class="sub-menu">
                                                                                    <li><a href="en/corporate/careers/vacancies/">Vacancies</a></li>
                                                                            </ul>
                                                                    </li>
                                                                    
                                                                    <li class="parent">
                                                                            <a href="en/corporate/better-world/">Better World</a>
                                                                            <ul class="sub-menu">
                                                                                    <li><a href="en/corporate/better-world/rahaf-recycling-facilities/">Rahaf Recycling Facilities</a></li>    
                                                                            </ul>
                                                                    </li>
                                                                    
                                                                    <li class="parent">
                                                                            <a href="en/corporate/faqs/">FAQ</a>
                                                                            <ul class="sub-menu">
                                                                                    <li><a href="en/corporate/faqs/corporate/">Corporate</a></li>
                                                                                    <li><a href="en/corporate/faqs/products/">Products</a></li>
                                                                                    <li><a href="en/corporate/faqs/business-with-rahaf/">Business with Rahaf</a></li>
                                                                            </ul>
                                                                    </li>



                                                   </ul>
                                           </nav><!--tm-nav-->


                                            


                                               </div><!--tm-wrap-->
                                            
                                        
                                    </div>
                                
                            <div class="tm-wrap tm-table">
                                <div  id="headerpage">
                                        <h1>Products</h1>
                                </div>
                            </div>
                            
                            <div class="tm-wrap tm-table" style="margin-top: 20px;">
                                
                                <div class="tm-column tm7" style="background: #f3f3f3; "> 
                                    
                                        
                                    <div style="padding: 10px 30px 10px 30px; font-size: 13px">
                                        <p><strong>I would like to apply for a job at Rahaf. Who should I contact?

</strong><p>
                                        <p>Please submit your resume online. Alternatively, fax a copy of your resume to 0515201111,  0911212126. We will get back to you as and when opportunities come up. We also recommend you visit our website on a regular basis to know about the available vacancies.

</p>   
                                        
                                        <p><strong>I am calling from on behalf of a distributor. May I know who should I get in touch with?


</strong></p>
                                        <p>Yes, you are welcome to speak to our marketing staff (rahafcompany@gmail.com). Alternatively, you can give us your contact details and we will get in touch with you .


</p>
                                        
                                        <p><strong>I am a journalist and would like to interview the Rahaf official spokesperson. Who should I contact?


</strong></p>
                                        <p>Thanks for your interest in Rahaf. You can send an email to Mr. Ahmad(rahafcompany@gmail.com) from our compnay and we will get in touch with you.

</p>
                                        
                                       
                                        
                                        
                                        <p><strong></strong></p>
                                        <p></p>
                                        
                                    </div>
                                    
                                    
                                    
                                </div>
                                
                                <div class="tm-column tm5" >
                                         <?php get_sidebar(); ?>
                                </div>
                                
                                
                                
                            </div>
                            
                       
                            
                               
                        </div><!--tm-header-nav-->
                        

</header> 





                
               


                 

                
        
<?php
get_footer();	
		
?>

                
               


