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
                
                
                <link href="<?php bloginfo( 'template_url' );?>/assets/img/img-gal/site.css" rel="stylesheet">
                <link href="<?php bloginfo( 'template_url' );?>/assets/img/img-gal/photoswipe.css" rel="stylesheet">
                <link href="<?php bloginfo( 'template_url' );?>/assets/img/img-gal/default-skin.css" rel="stylesheet">
                <script src="<?php bloginfo( 'template_url' );?>/assets/img/img-gal/photoswipe.min.js"></script>
                <script src="<?php bloginfo( 'template_url' );?>/assets/img/img-gal/photoswipe-ui-default.min.js"></script>
                <style type="text/css">.tk-myriad-pro{font-family:"myriad-pro",sans-serif;}</style>
                <link rel="stylesheet" href="http://use.typekit.net/c/bc9a10/1w;myriad-pro,2,bzN:R:n4,bzP:R:n6/d?3bb2a6e53c9684ffdc9a9bfe1b5b2a6216bc43f667eade1f8c67b89197ab54730d0cfdcbd4e42daa227ef8532e82a0c1b43e47ccdce7dadd4b4379ccbef0051fd9e0ab3755a9483876b80b7a21afe0fedda5a0a5d566981cb1b718042edf92a08bb5e4839f2586bb14762bff6b2b6c2992da118846a6f2d0c93ca79b5b578d6b0dd83108de1586e6b6c6811bcbdf57c25aaf6f03150bc6906c79775ff5336903ed56a746787d0dce2a7b13a178a748ac2c01e2d270" media="all"><script>try{Typekit.load();}catch(e){}</script>


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
                                        <h1>Image Gallery</h1>
                                </div>
                            </div>
                            
                            <div class="tm-wrap tm-table">
                                
                               
                                
                                                <div class="section section--head">

	    

	    

                                                            <div class="row">
                                                              <div id="demo-test-gallery" class="demo-gallery" data-pswp-uid="1">

                                                                <a href="<?php bloginfo( 'template_url' );?>/assets/img/img-gal/img-b1.jpg" data-size="1600x1600" data-med="<?php bloginfo( 'template_url' );?>/assets/img/img-gal/img-b2.jpg" data-med-size="1024x1024" data-author="Folkert Gorter" class="demo-gallery__img--main">
                                                                  <img src="<?php bloginfo( 'template_url' );?>/assets/img/img-gal/tn-b1.jpg" alt="">
                                                                  <figure>This is dummy caption.</figure>
                                                                </a>

                                                                <a href="<?php bloginfo( 'template_url' );?>/assets/img/img-gal/img-bb1.jpg" data-size="1600x1068" data-med="<?php bloginfo( 'template_url' );?>/assets/img/img-gal/img-bb2.jpg" data-med-size="1024x683" data-author="Samuel Rohl">
                                                                  <img src="<?php bloginfo( 'template_url' );?>/assets/img/img-gal/tn-b2.jpg" alt="">
                                                                  <figure>This is dummy caption. It has been placed here solely to demonstrate the look and feel of finished, typeset text.</figure>
                                                                </a>


                                                                <a href="<?php bloginfo( 'template_url' );?>/assets/img/img-gal/img-cb1.jpg" data-size="1600x1067" data-med="<?php bloginfo( 'template_url' );?>/assets/img/img-gal/img-cb2.jpg" data-med-size="1024x683" data-author="Ales Krivec">
                                                                  <img src="<?php bloginfo( 'template_url' );?>/assets/img/img-gal/tn-b3.jpg" alt="">
                                                                  <figure>This is dummy caption. It is not meant to be read.</figure>
                                                                </a>


                                                                <a href="<?php bloginfo( 'template_url' );?>/assets/img/img-gal/img-db1.jpg" data-size="1600x1067" data-med="<?php bloginfo( 'template_url' );?>/assets/img/img-gal/img-db2.jpg" data-med-size="1024x683" data-author="Michael Hull">
                                                                  <img src="<?php bloginfo( 'template_url' );?>/assets/img/img-gal/tn-b4.jpg" alt="">
                                                                  <figure>Dummy caption. It's Greek to you. Unless, of course, you're Greek, in which case, it really makes no sense.</figure>
                                                                </a>

                                                                <a href="<?php bloginfo( 'template_url' );?>/assets/img/img-gal/img-eb1.jpg" data-size="1600x1067" data-med="<?php bloginfo( 'template_url' );?>/assets/img/img-gal/img-eb2.jpg" data-med-size="1024x683" data-author="Thomas Lefebvre">
                                                                  <img src="<?php bloginfo( 'template_url' );?>/assets/img/img-gal/tn-b5.jpg" alt="">
                                                                  <figure>It's a dummy caption. He who searches for meaning here will be sorely disappointed.</figure>
                                                                </a>



                                                              </div>
                                                              <!-- <figure class="demo-gallery__title">Demo gallery &middot; 5 photos</figure> -->

                                                            </div>

                                                           
                                                    
                                                            <div class="row">
                                                              <div id="demo-test-gallery" class="demo-gallery" data-pswp-uid="1">

                                                                <a href="<?php bloginfo( 'template_url' );?>/assets/img/img-gal/img-b1.jpg" data-size="1600x1600" data-med="<?php bloginfo( 'template_url' );?>/assets/img/img-gal/img-b2.jpg" data-med-size="1024x1024" data-author="Folkert Gorter" class="demo-gallery__img--main">
                                                                  <img src="<?php bloginfo( 'template_url' );?>/assets/img/img-gal/tn-b1.jpg" alt="">
                                                                  <figure>This is dummy caption.</figure>
                                                                </a>

                                                                <a href="<?php bloginfo( 'template_url' );?>/assets/img/img-gal/img-bb1.jpg" data-size="1600x1068" data-med="<?php bloginfo( 'template_url' );?>/assets/img/img-gal/img-bb2.jpg" data-med-size="1024x683" data-author="Samuel Rohl">
                                                                  <img src="<?php bloginfo( 'template_url' );?>/assets/img/img-gal/tn-b2.jpg" alt="">
                                                                  <figure>This is dummy caption. It has been placed here solely to demonstrate the look and feel of finished, typeset text.</figure>
                                                                </a>


                                                                <a href="<?php bloginfo( 'template_url' );?>/assets/img/img-gal/img-cb1.jpg" data-size="1600x1067" data-med="<?php bloginfo( 'template_url' );?>/assets/img/img-gal/img-cb2.jpg" data-med-size="1024x683" data-author="Ales Krivec">
                                                                  <img src="<?php bloginfo( 'template_url' );?>/assets/img/img-gal/tn-b3.jpg" alt="">
                                                                  <figure>This is dummy caption. It is not meant to be read.</figure>
                                                                </a>


                                                                <a href="<?php bloginfo( 'template_url' );?>/assets/img/img-gal/img-db1.jpg" data-size="1600x1067" data-med="<?php bloginfo( 'template_url' );?>/assets/img/img-gal/img-db2.jpg" data-med-size="1024x683" data-author="Michael Hull">
                                                                  <img src="<?php bloginfo( 'template_url' );?>/assets/img/img-gal/tn-b4.jpg" alt="">
                                                                  <figure>Dummy caption. It's Greek to you. Unless, of course, you're Greek, in which case, it really makes no sense.</figure>
                                                                </a>

                                                                <a href="<?php bloginfo( 'template_url' );?>/assets/img/img-gal/img-eb1.jpg" data-size="1600x1067" data-med="<?php bloginfo( 'template_url' );?>/assets/img/img-gal/img-eb2.jpg" data-med-size="1024x683" data-author="Thomas Lefebvre">
                                                                  <img src="<?php bloginfo( 'template_url' );?>/assets/img/img-gal/tn-b5.jpg" alt="">
                                                                  <figure>It's a dummy caption. He who searches for meaning here will be sorely disappointed.</figure>
                                                                </a>



                                                              </div>
                                                              <!-- <figure class="demo-gallery__title">Demo gallery &middot; 5 photos</figure> -->

                                                            </div>
                                                    
                                                    
                                                    
                                                    
                                                        </div>




                                                    <div id="gallery" class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
                                                        <div class="pswp__bg"></div>

                                                        <div class="pswp__scroll-wrap">

                                                          <div class="pswp__container" style="transform: translate3d(0px, 0px, 0px);">
                                                                        <div class="pswp__item" style="display: block; transform: translate3d(-1511px, 0px, 0px);"><div class="pswp__zoom-wrap" style="transform: translate3d(225px, 0px, 0px) scale(1);"><img class="pswp__img" src="<?php bloginfo( 'template_url' );?>/assets/img/img-gal/14985871946_24f47d4b53_h.jpg" style="opacity: 1; width: 898px; height: 599px;"></div></div>
                                                                        <div class="pswp__item" style="transform: translate3d(0px, 0px, 0px);"><div class="pswp__zoom-wrap" style="transform: translate3d(556.515625px, 365px, 0px) scale(0.190376669449082);"><img class="pswp__img pswp__img--placeholder" src="<?php bloginfo( 'template_url' );?>/assets/img/img-gal/14985868676_4b802b932a_m.jpg" style="width: 898px; height: 599px; display: none;">
                                                                            <img class="pswp__img" src="<?php bloginfo( 'template_url' );?>/assets/img/img-gal/14985868676_b51baa4071_h.jpg" style="display: block; width: 898px; height: 599px;"></div></div>
                                                                        <div class="pswp__item" style="display: block; transform: translate3d(1511px, 0px, 0px);"><div class="pswp__zoom-wrap" style="transform: translate3d(225px, 0px, 0px) scale(1);"><img class="pswp__img" src="<?php bloginfo( 'template_url' );?>/assets/img/img-gal/15008465772_d50c8f0531_h.jpg" style="opacity: 1; width: 898px; height: 599px;"></div></div>
                                                          </div>

                                                          <div class="pswp__ui pswp__ui--fit pswp__ui--hidden">

                                                            <div class="pswp__top-bar">

                                                                                <div class="pswp__counter">4 / 5</div>

                                                                                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                                                                                <button class="pswp__button pswp__button--share pswp__element--disabled" title="Share"></button>

                                                                                <button class="pswp__button pswp__button--fs pswp__element--disabled" title="Toggle fullscreen"></button>

                                                                                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                                                                                <div class="pswp__preloader">
                                                                                        <div class="pswp__preloader__icn">
                                                                                          <div class="pswp__preloader__cut">
                                                                                            <div class="pswp__preloader__donut"></div>
                                                                                          </div>
                                                                                        </div>
                                                                                </div>
                                                            </div>


                                                                        <!-- <div class="pswp__loading-indicator"><div class="pswp__loading-indicator__line"></div></div> -->

                                                            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap pswp__element--disabled">
                                                                    <div class="pswp__share-tooltip">
                                                                                        <!-- <a href="#" class="pswp__share--facebook"></a>
                                                                                        <a href="#" class="pswp__share--twitter"></a>
                                                                                        <a href="#" class="pswp__share--pinterest"></a>
                                                                                        <a href="#" download class="pswp__share--download"></a> -->
                                                                    </div>
                                                                </div>

                                                            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                                                            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                                                            <div class="pswp__caption pswp__element--disabled">
                                                              <div class="pswp__caption__center">It's a dummy caption. He who searches for meaning here will be sorely disappointed.<br><small>Photo: Thomas Lefebvre</small></div>
                                                            </div>
                                                          </div>

                                                        </div>


                                                    </div>
                                
                                
                                
                            </div>
                            
                       
                            
                               
                        </div><!--tm-header-nav-->
                        

</header> 





  <script type="text/javascript">
    (function() {

		var initPhotoSwipeFromDOM = function(gallerySelector) {

			var parseThumbnailElements = function(el) {
			    var thumbElements = el.childNodes,
			        numNodes = thumbElements.length,
			        items = [],
			        el,
			        childElements,
			        thumbnailEl,
			        size,
			        item;

			    for(var i = 0; i < numNodes; i++) {
			        el = thumbElements[i];

			        // include only element nodes 
			        if(el.nodeType !== 1) {
			          continue;
			        }

			        childElements = el.children;

			        size = el.getAttribute('data-size').split('x');

			        // create slide object
			        item = {
						src: el.getAttribute('href'),
						w: parseInt(size[0], 10),
						h: parseInt(size[1], 10),
						author: el.getAttribute('data-author')
			        };

			        item.el = el; // save link to element for getThumbBoundsFn

			        if(childElements.length > 0) {
			          item.msrc = childElements[0].getAttribute('src'); // thumbnail url
			          if(childElements.length > 1) {
			              item.title = childElements[1].innerHTML; // caption (contents of figure)
			          }
			        }


					var mediumSrc = el.getAttribute('data-med');
		          	if(mediumSrc) {
		            	size = el.getAttribute('data-med-size').split('x');
		            	// "medium-sized" image
		            	item.m = {
		              		src: mediumSrc,
		              		w: parseInt(size[0], 10),
		              		h: parseInt(size[1], 10)
		            	};
		          	}
		          	// original image
		          	item.o = {
		          		src: item.src,
		          		w: item.w,
		          		h: item.h
		          	};

			        items.push(item);
			    }

			    return items;
			};

			// find nearest parent element
			var closest = function closest(el, fn) {
			    return el && ( fn(el) ? el : closest(el.parentNode, fn) );
			};

			var onThumbnailsClick = function(e) {
			    e = e || window.event;
			    e.preventDefault ? e.preventDefault() : e.returnValue = false;

			    var eTarget = e.target || e.srcElement;

			    var clickedListItem = closest(eTarget, function(el) {
			        return el.tagName === 'A';
			    });

			    if(!clickedListItem) {
			        return;
			    }

			    var clickedGallery = clickedListItem.parentNode;

			    var childNodes = clickedListItem.parentNode.childNodes,
			        numChildNodes = childNodes.length,
			        nodeIndex = 0,
			        index;

			    for (var i = 0; i < numChildNodes; i++) {
			        if(childNodes[i].nodeType !== 1) { 
			            continue; 
			        }

			        if(childNodes[i] === clickedListItem) {
			            index = nodeIndex;
			            break;
			        }
			        nodeIndex++;
			    }

			    if(index >= 0) {
			        openPhotoSwipe( index, clickedGallery );
			    }
			    return false;
			};

			var photoswipeParseHash = function() {
				var hash = window.location.hash.substring(1),
			    params = {};

			    if(hash.length < 5) { // pid=1
			        return params;
			    }

			    var vars = hash.split('&');
			    for (var i = 0; i < vars.length; i++) {
			        if(!vars[i]) {
			            continue;
			        }
			        var pair = vars[i].split('=');  
			        if(pair.length < 2) {
			            continue;
			        }           
			        params[pair[0]] = pair[1];
			    }

			    if(params.gid) {
			    	params.gid = parseInt(params.gid, 10);
			    }

			    return params;
			};

			var openPhotoSwipe = function(index, galleryElement, disableAnimation, fromURL) {
			    var pswpElement = document.querySelectorAll('.pswp')[0],
			        gallery,
			        options,
			        items;

				items = parseThumbnailElements(galleryElement);

			    // define options (if needed)
			    options = {

			        galleryUID: galleryElement.getAttribute('data-pswp-uid'),

			        getThumbBoundsFn: function(index) {
			            // See Options->getThumbBoundsFn section of docs for more info
			            var thumbnail = items[index].el.children[0],
			                pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
			                rect = thumbnail.getBoundingClientRect(); 

			            return {x:rect.left, y:rect.top + pageYScroll, w:rect.width};
			        },

			        addCaptionHTMLFn: function(item, captionEl, isFake) {
						if(!item.title) {
							captionEl.children[0].innerText = '';
							return false;
						}
						captionEl.children[0].innerHTML = item.title +  '<br/><small>Photo: ' + item.author + '</small>';
						return true;
			        }
					
			    };


			    if(fromURL) {
			    	if(options.galleryPIDs) {
			    		// parse real index when custom PIDs are used 
			    		// http://photoswipe.com/documentation/faq.html#custom-pid-in-url
			    		for(var j = 0; j < items.length; j++) {
			    			if(items[j].pid == index) {
			    				options.index = j;
			    				break;
			    			}
			    		}
				    } else {
				    	options.index = parseInt(index, 10) - 1;
				    }
			    } else {
			    	options.index = parseInt(index, 10);
			    }

			    // exit if index not found
			    if( isNaN(options.index) ) {
			    	return;
			    }



				var radios = document.getElementsByName('gallery-style');
				for (var i = 0, length = radios.length; i < length; i++) {
				    if (radios[i].checked) {
				        if(radios[i].id == 'radio-all-controls') {

				        } else if(radios[i].id == 'radio-minimal-black') {
				        	options.mainClass = 'pswp--minimal--dark';
					        options.barsSize = {top:0,bottom:0};
							options.captionEl = false;
							options.fullscreenEl = false;
							options.shareEl = false;
							options.bgOpacity = 0.85;
							options.tapToClose = true;
							options.tapToToggleControls = false;
				        }
				        break;
				    }
				}

			    if(disableAnimation) {
			        options.showAnimationDuration = 0;
			    }

			    // Pass data to PhotoSwipe and initialize it
			    gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);

			    // see: http://photoswipe.com/documentation/responsive-images.html
				var realViewportWidth,
				    useLargeImages = false,
				    firstResize = true,
				    imageSrcWillChange;

				gallery.listen('beforeResize', function() {

					var dpiRatio = window.devicePixelRatio ? window.devicePixelRatio : 1;
					dpiRatio = Math.min(dpiRatio, 2.5);
				    realViewportWidth = gallery.viewportSize.x * dpiRatio;


				    if(realViewportWidth >= 1200 || (!gallery.likelyTouchDevice && realViewportWidth > 800) || screen.width > 1200 ) {
				    	if(!useLargeImages) {
				    		useLargeImages = true;
				        	imageSrcWillChange = true;
				    	}
				        
				    } else {
				    	if(useLargeImages) {
				    		useLargeImages = false;
				        	imageSrcWillChange = true;
				    	}
				    }

				    if(imageSrcWillChange && !firstResize) {
				        gallery.invalidateCurrItems();
				    }

				    if(firstResize) {
				        firstResize = false;
				    }

				    imageSrcWillChange = false;

				});

				gallery.listen('gettingData', function(index, item) {
				    if( useLargeImages ) {
				        item.src = item.o.src;
				        item.w = item.o.w;
				        item.h = item.o.h;
				    } else {
				        item.src = item.m.src;
				        item.w = item.m.w;
				        item.h = item.m.h;
				    }
				});

			    gallery.init();
			};

			// select all gallery elements
			var galleryElements = document.querySelectorAll( gallerySelector );
			for(var i = 0, l = galleryElements.length; i < l; i++) {
				galleryElements[i].setAttribute('data-pswp-uid', i+1);
				galleryElements[i].onclick = onThumbnailsClick;
			}

			// Parse URL and open gallery if it contains #&pid=3&gid=1
			var hashData = photoswipeParseHash();
			if(hashData.pid && hashData.gid) {
				openPhotoSwipe( hashData.pid,  galleryElements[ hashData.gid - 1 ], true, true );
			}
		};

		initPhotoSwipeFromDOM('.demo-gallery');

	})();

	</script>              
               


                 

                
        
<?php
get_footer();	
		
?>

                
               


