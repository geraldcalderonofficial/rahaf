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
  
    
<header  class="hinner mbtm" id="index-bg3">
                        
                        
                        
                        <div id="tm-header-top1" class=" mbtm6">
                            
                            
                                
                            <div id="tm-header-top-inner" class=" mbtm6">
                                <div class="tm-wrap tm-table top-line">
                                
                               <!--     <div class="tm-column tm4">
                                            
                                           asdasdad 
                                        
                                     </div>-->
                            
                                    <div style="text-align: right;">
                                        
                                                <div id="nav_info">
                                                                        <ul>
                                                                          <li> <a href="en/home/" class="lan-link"><span>Home</span></a></li>
                                                                          <li> <a href="en/index-prod/" class="lan-link"><span>Corporate</span></a></li>
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
                                            <a href="<?php echo home_url(); ?>" class="tm-logo-simple"><img alt="Logo" src="<?php bloginfo( 'template_url' );?>/assets/img/logo.png" style=""></a>
                                    </div>
                                </div>


                                 <div id="tm-header-nav" class="tm-menu-style tm-sticky-menu tm-column tm9">


                                           <nav  style="margin-left: 9em; padding: 0; float: left">
                                                                <ul class="tm-menu tm-menu-simple">

                                                                                 <li class="parent"><a href="en/water/">Water</a></li>

                                                                                 <li class="parent"><a href="en/delivery/">Home Delivery</a></li>

                                                                                 <li class="parent"><a href="en/promotions/">Promotions</a></li>

                                                                                 <li class="parent">
                                                                                         <a href="en/corporate/careers/">Careers</a>
                                                                                         <ul class="sub-menu">
                                                                                                 <li><a href="en/corporate/careers/vacancies/">Vacancies</a></li>
                                                                                         </ul>
                                                                                 </li>



                                                                </ul>
                                                        </nav><!--tm-nav-->





                                   </div><!--tm-wrap-->


                        </div>
                                
                        <!--home slider-->
                        <div class="tm-wrap tm-table" style="margin: 30px auto;">
                            <div style="background: #4ca8ff; height: 500px" class="tm-column tm4">
                                    
                            </div>
                            
                            <div style="" class="tm-column tm4">
                                
                                
                                <img alt="img" src="<?php bloginfo( 'template_url' );?>/assets/img/aboutus/prod2.png" style="margin-left: 50px; margin-top: 20px;">
                            </div>
                            
                            <div style="" class="tm-column tm4">
                                                <div>
                                                    <!--<img alt="img" src="<?php bloginfo( 'template_url' );?>/assets/img/aboutus/prod1.png" style="width: 140px">-->
                                                   <span id="title-home" style="color: white; font-size: 50px; line-height: 40px;">Premium <br />Drinking Water <br />4 Gallon</span>
                                                     
                                                        <p id="title-content" style="color: white; font-size: 15px;">With the Rahaf 4 gallon, a one-time, one-way, bottle, you are guaranteed 100% purity in a 100% fresh bottle. It’s a more hygienic and safer option to refillable bottles that risk containing impurities or chemical residue as a result of the cleaning process. And now, you don’t have to stock any extra empty bottles anymore. While being convenient, our one-time, one-way bottles are also recyclable as material for non-food applications.</p>
                                                              <!--  <a href="en/water/" class="tm-btn lblue small">Click here</a>-->
						</div>
                            </div>
                         <!--      <div class="tm-column tm5" style="margin-left: 28em; margin-top: 20px; ">
                                                <div>
                                                    <!--<img alt="img" src="<?php bloginfo( 'template_url' );?>/assets/img/aboutus/prod1.png" style="width: 140px">-->
                         <!--                           <span id="title-home" style="color: white; font-size: 50px; line-height: 40px;">Premium <br />Drinking Water <br />4 Gallon</span>
                                                     
                                                        <p id="title-content" style="color: white; font-size: 15px;">With the Rahaf 4 gallon, a one-time, one-way, bottle, you are guaranteed 100% purity in a 100% fresh bottle. It’s a more hygienic and safer option to refillable bottles that risk containing impurities or chemical residue as a result of the cleaning process. And now, you don’t have to stock any extra empty bottles anymore. While being convenient, our one-time, one-way bottles are also recyclable as material for non-food applications.</p>
                                                              <!--  <a href="en/water/" class="tm-btn lblue small">Click here</a>-->
			<!--			</div>
                                </div> 
                         -->       
                            </div>    
                            
                            
                            
                            
                               
                        </div><!--tm-header-nav-->
        
</header>  	
	

     <!--page-content-->
				
                                
				<!--page-content-->
    
    
                                
    
    
        <div id="tm-page-body" style="z-index: 1; margin: -9em auto;
             height: 300px; background: white; padding: 30px 10px 20px 5px; ">
		
            
            
            <div class="tm-wrap tm-table">
                                    <div class="tm-column tm12">
                                        <div class="page-content">
                                 
                                                        <div style="float: right;">
                                                        <!--    <div class="home-textdesc">
                                                                <a href="https://www.facebook.com/rahafcompany?fref=nf" target="blank"><img alt="img" src="<?php bloginfo( 'template_url' );?>/assets/img/home/img1.jpg"></a>
                                                                <h2>--- Join the Community</h2>
                                                                    <p>We're not the only ones who care about a world of good. Join others on our community pages.<br />
                                                                        Like us on <a href="https://www.facebook.com/rahafcompany?fref=nf" target="blank">Facebook.</a> <br />
                                                                        Follow us on <a href="https://twitter.com/rahafcompany" target="blank">Twitter.</a>
                                                                    </p>
                                                            </div>
                                                            <div class="home-textdesc">
                                                                <a href=""><img alt="img" src="<?php bloginfo( 'template_url' );?>/assets/img/home/img7.jpg"></a>
                                                                <h2>--- TV Commercial</h2>
                                                                    <p>From Clouds To Mountains To You</p>
                                                            </div>
                                                      -->      <div class="home-textdesc">
                                                                <a href="en/corporate/media-centre/"><img alt="img" src="<?php bloginfo( 'template_url' );?>/assets/img/home/img6.jpg"></a>
                                                                <h2>--- What's New!</h2>
                                                                    <p>Check the Media Centre to read <br />about our latest news and events.
                                                                    </p>
                                                            </div>
                                                            <div class="home-textdesc">
                                                                <a href="en/delivery/"><img alt="img" src="<?php bloginfo( 'template_url' );?>/assets/img/home/img8.jpg"></a>
                                                                <h2>--- iCash</h2>
                                                                    <p>No Cash, No Coupons, No Worries</p>
                                                            </div>
                                                        </div>
                                    
                                            </div>
                                            <!--page-content-->
                                    </div>
                                </div>
            
            
	</div>
    
                 <div style="clear: both; margin-bottom: 10em"></div>
                                
 
    
	

<?php
get_footer();	
		
?>
