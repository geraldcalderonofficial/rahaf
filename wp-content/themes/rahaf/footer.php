
<!--tm-page-body-->
		<div id="tm-page-footer" style="padding-top: 10em">
			<div class="tm-sidebar-footer tm-page-footer-pgmenu">
                            
                           
                                <div class="tm-wrap tm-table">
				
                                        <section class="span8">
                                            <ul id="footer_links">
                                                        <?php

                                                        $args = array(
                                                            'theme_location' => 'footer'
                                                        );

                                                        ?> 
                                                        <?php wp_nav_menu(  $args ); ?>
                                            </ul>
                                          </section>
				
                                </div>    
                            
				
			</div>
		</div>
		<!--tm-page-page-footer-->
		<footer     >
                                <div class="tm-wrap">
					<div class="tm-sidebar-footer-inner">
						
					
                                           
						
						<div class="tm12">
                                                            
                                                            
                                                            <div class="copyright">
                                                                <p>
                                                                  <!--  CALL US 800 54 55 [TOLL FREE]<br>-->
                                                                    Tel: 0515201111, &nbsp;0911212126,<br>
                                                                    Email: rahafcompany@gmail.com<br>
                                                                    Copyright &copy; <?php echo date('Y'); ?> <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>. All Rights Reserved
                                                                </p>
                                                            </div>
						</div>
					</div>
				</div>
                            
		</footer>

		

		<!-- Go to top -->
		<a href="#" id="tm-gotop">
			<i class="fa fa-chevron-up"></i>
		</a>

              





<?php wp_footer(); ?>
                
</body>
</html>