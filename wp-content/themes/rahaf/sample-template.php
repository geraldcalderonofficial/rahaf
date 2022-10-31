
               
 <?php
 /*
Template name:  Sample Layout
 */
 
 
get_header(ar);	
		
?>

<div id="tm-header-nav" class="tm-menu-style1 tm-sticky-menu">
                                <div class="tm-wrap tm-table">
                                        <nav class="tm-nav tm-column tm8 site-nav" style="padding:0; margin-left: 2.2em;">
                                                <ul>  
                                                        <li> <a href="home_ar/?lang=ar">الرئيسية</a></li>
                                                        <li> <a href="programs_ar/?lang=ar">برامج</a></li>
                                                        <li class="parent nav-active"> <a href="videos_ar/?lang=ar">الفيديو</a></li>
                                                        <li> <a href="weather_ar/?lang=ar">حالة الطقس</a></li>
                                                        <li> <a href="photos_ar/?lang=ar">الصور</a></li>
                                                        <li> <a href="application_ar/?lang=ar">تطبيق</a></li>
                                                        <li> <a href="contact-us_ar/?lang=ar">الاتصال بنا</a></li>
                                                </ul>
                                        </nav><!--tm-nav-->

                                        <div class="tm-column tm3" style=" float: right; margin-top: -1em;">
                                                        <!--<a href="listen-live/"><img src="<?php bloginfo( 'template_url' );?>/assets/img/sample/home/live-img.jpg" /></a>-->
                                          <!--  <iframe width="400" height="180px" src="<?php bloginfo( 'template_url' );?>/flashV1.html" frameborder="0"></iframe>-->
                                               
                                          
                        
                                                        <script type="text/javascript" src="http://184.173.181.2:2000/mediacp/system/misc/swfobject.js"></script>
                                                        <div id="FLVPFlashPlayer">
                                                        <h1>Please Upgrade Your Flash Player</h1>
                                                        <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p></div> 
                                                        <script type="text/javascript"> var so = new SWFObject("http://184.173.181.2:2000/mediacp/system/misc/aacplayer/pulsev1-r.swf?r=9350", "aacplayer", "280", "50", "9", "#000000"); 
                                                        so.addParam("wmode", "opaque"); 
                                                        so.addParam('allowscriptaccess','always'); 
                                                        so.addVariable("uid", "eb0e5ecbe2910c576cfdd46feeb7a091"); 
                                                        so.addVariable("playerpath","http://184.173.181.2:2000/pulsev2/conf-173.193.205.96-8164-Sout+Almadina-ShoutCast/");
                                                        so.addVariable("config","config.xml"); 
                                                        so.write("FLVPFlashPlayer"); 
                                                        </script>


                                                
                                        </div>
                                </div>
                        </div><!--tm-header-nav-->
                        

</header> 


                <div id="tm-page-body">
			<div id="tm-blog" class="tm-container tm-wrap tm-blog-style-list tm-sidebar-right">
				
                                
                              
                                 <!--page-content-->
				
                                <div class="page-content">
					<div class="tm-content page-content-inner" style="min-height: 625px;">

                                            <div style="padding: 20px; ">
                                                    <?php if ( have_posts() ) : ?>
                                            
                                                    <div style="padding: 20px; ">
                                                            <div class="header-double-line-right">
                                                                    <h1 class="tm-title"><?php the_title(); ?></h1>
                                                            </div>
                                                        
                                                            <?php
                                                                            // Start the Loop.
                                                                            while ( have_posts() ) : the_post();

                                                                                    /*
                                                                                     * Include the post format-specific template for the content. If you want to
                                                                                     * use this in a child theme, then include a file called called content-___.php
                                                                                     * (where ___ is the post format) and that will be used instead.
                                                                                     */
                                                                                    get_template_part( 'content_ar', get_post_format() );

                                                                            endwhile;
                                                                            // Previous/next page navigation.
                                                                           echo "<br><br><br>";
                                                                            twentyfourteen_paging_nav();

                                                                    else :
                                                                            // If no content, include the "No posts found" template.
                                                                            get_template_part( 'content', 'none' );

                                                                    endif;
                                                            ?>
                                                          
                                                    </div>
                                                
                                            </div>
					</div>
				</div>
				<!--page-content-->
                                
                                <div class="page-sidebar">
					
					<?php get_sidebar(ar); ?>
					
				</div>
				<!--page-sidebar-->
				
				
			</div>
			<!--tm-container-->
		</div>
		<!--tm-page-body-->
	
	
        
        
<?php
get_footer(ar);	
		
?>

                
                              