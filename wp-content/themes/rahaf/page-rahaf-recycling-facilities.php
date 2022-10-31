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

                                                                     <?php

                                                                           $args = array(
                                                                               'theme_location' => 'primary'
                                                                           );

                                                                           ?>


                                                                           <?php wp_nav_menu(  $args ); ?>



                                                               </ul>
                                                       </nav><!--tm-nav-->


                                            


                                               </div><!--tm-wrap-->
                                            
                                        
                                    </div>
                                
                            <div class="tm-wrap tm-table">
                                <div  id="headerpage">
                                        <h1><?php the_title(); ?></h1>
                                </div>
                            </div>
                                
                               
                                
                                
                           
                            
                            
                                
                        
                        
                            
                               
                        </div><!--tm-header-nav-->
                        

                        
                        
                        
</header>    
    

    <style>
        #headerpage{
    
    /*margin: 0 auto;*/
    width: 335px;
    
    background: #4ca8ff;
    
    margin-top: 4em;
    
    color: #ffffff;
    
}

#headerpage h1 {

    padding: 7px 3em 7px 15px;
    color: #ffffff;
    font-family: "Open+Sans Light", helvetica, arial, sans-serif;
    font-weight: normal;
    font-size: 22px;
        
}
    </style>              
                
    









                 

                <div id="tm-page-body">
			<div id="tm-blog" class="tm-container tm-wrap tm-blog-style-list tm-sidebar-right">
                                <div class="page-content">
					<div class="tm-content page-content-inner">
                                                    <div style="padding: 20px; ">
                                                            <div class="header-double-line-right">
                                                                    <p>
                                                                        We have created the handy location finder below to help you pinpoint the Rahaf recycling facility nearest to you. Each Rahaf recycling facility is located in Misurata – and all are open to the public. 
                                                                    </p>
                                                            </div>
                                                        <br />
                                                        <br />
                                                            <div class="tm-row" style="">
                                                                    <div id="map-canvas" style="height: 330px; margin-bottom: 20px"></div>
                                                            </div>
                                                            
                                                            
                                                            
                                                            
                                                            <!-- -->
                                                            <div class="tm-row" style="padding:0;">
							<div class="tm-wrap">
								
								
							</div>
						</div>
                                                            
                                                    </div>
					</div>
				</div>
				<!--page-content-->
                                
                                 

			</div>
			<!--tm-container-->
		</div>
		<!--tm-page-body-->
                
                <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
		<script>
			var map;
			function initialize() {
				var map_canvas = document.getElementById('map-canvas');

				if (map_canvas) {
					var mapOptions = {
						zoom: 16,
						center: new google.maps.LatLng(32.327657, 15.133484)
					};

					map = new google.maps.Map(map_canvas, mapOptions);
				}
			}

			google.maps.event.addDomListener(window, 'load', initialize);
		</script>


                 

                
        
<?php
get_footer();	
		
?>

                
               