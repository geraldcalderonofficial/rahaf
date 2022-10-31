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
                                        <h1>Corporate</h1>
                                </div>
                            </div>
                            
                            <div class="tm-wrap tm-table" style="margin-top: 20px;">
                                
                                <div class="tm-column tm7" style="background: #f3f3f3; "> 
                                    
                                        
                                    <div style="padding: 10px 30px 10px 30px; font-size: 13px">
                                        <p><strong>Corporate Snapshot</strong><p>
                                        <p>Rahaf Co. is one of the leading brands in the Libya. It has an enviable portfolio of world-class products renowned for their pure natural freshness.
</p>   
                                        
                                        <p><strong>Since when have you been operating?
</strong></p>
                                        <p>Rahaf has been operating since 2015.
</p>
                                        
                                        <p><strong>What is the paid up capital of Rahaf?
</strong></p>
                                        <p>Rahaf was established with a paid-up capital of approximately $5.5 million.
</p>
                                        
                                        <p><strong>Where is your factory located?
</strong></p>
                                        <p>Rahaf operates a 250,000 square-metre state-of-the-art bottling and manufacturing facility located close to the source – several rich underground springs in Rahaf, a mountainous region in Libya.
</p>
                                        
                                        <p><strong>Can you please elaborate on your product portfolio?
</strong></p>
                                        <p>Rahaf has grown from a pure, natural mineral water brand and today boasts of a wide product portfolio which includes tissues, juices, flavoured water, potato chips and basmati rice.
</p>
                                        
                                        <p><strong>What are your working hours?
</strong></p>
                                        <p>Our official working hours are from 8 am to 6 pm, Sunday to Thursday. Our factory timings are from 8 am to 6 pm, Saturday to Thursday.
</p>
                                        
                                        <p><strong>What is Rahaf’s current market share?
</strong></p>
                                        <p>Rahaf’s share in the Libya bottled water market is more that 40 per cent.
</p>
                                        
                                        <p><strong>Where do you export your products to?
</strong></p>
                                        <p>Rahaf exports 30 per cent of its products to different countries. The major importers in volume terms are Oman, Kuwait, Japan, Qatar, Bahrain, Saudi Arabia, Afghanistan, Jordan, Djibouti, Syria, Bahrain, Morocco, Taiwan, Germany, UK, Bangladesh and Pakistan.
</p>
                                        
                                        <p><strong>Is Rahaf eco-friendly? How do you reinforce commitment to environment?
</strong></p>
                                        <p>Rahaf is committed to the environment in which it operates. Rahaf maintains its position at the head of proactive ecological initiatives in all markets it operates in. Rahaf launched its Carbon Action Plan in July 2008 – which saw the unveiling of the corporate recycling service – a unique initiative aimed at reducing the environmental impact of plastic bottles. As part of the initiative, Rahaf requested libya-based companies employing 200-plus people to hand over plastic bottles for recycling purposes.
</p>
                                        <p>The plastic collected is sent for pre-processing in Rahaf’s plant in Ras Al Khaimah and then shipped for recycling to Fujairah where it is re-worked into non-food plastic applications within the Libya. We have also launched numerous other initiatives to further the cause of environment. In short, Rahaf is all about family, about well being and about natural goodness and a sustainable future!
</p>

                                        <p><strong>What is your approach to recycling?
</strong></p>
                                        <p>All Rahaf products are recyclable. The company also takes the responsibility for recycling its products after use.
</p>
                                        
                                        <p><strong>What about your packaging?
</strong></p>
                                        <p>Rahaf adopts revolutionary packaging concepts which are eco-friendly. Our Brown Carton Box and the Biodegradable Shrink Wraps reinforce our commitment to the environment.
</p>
                                        
                                        <p><strong>What are the reasons behind diversifying your product portfolio since your launch?
</strong></p>
                                        <p>Rahaf LLC launched its operations in 2015 with its pure, natural mineral water. We later on diversified into a number of segments, including tissues, juices, flavoured water, potato chips and basmati rice, as part of our long-term strategy towards becoming a total FMCG company.</p>
                                        
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

                
               


