<?php

get_header(); ?>


                <div id="tm-page-body">
			<div id="tm-blog" class="tm-container tm-wrap tm-blog-style-list tm-sidebar-right">
				
                                
                              
                                <!--page-content-->
				
                                <div class="page-content">
					<div class="tm-content page-content-inner" style="min-height: 350px; text-align: justify;">
 
                                                    
                                                    
                                                    <div>
                                                            <?php
                                                           if (have_posts()) :
                                                                while (have_posts()) : the_post(); ?>

                                                               
                                                                       
                                                                        <?php the_content(); ?>
                                                                

                                                                <?php endwhile;

                                                                else :
                                                                                echo '<p>No content found</p>';
                                                                endif;
                                                                ?>
                                                    </div>
                                                    
					</div>
				</div>
				<!--page-content-->
                                
                               
				
				
			</div>
			<!--tm-container-->
		</div>
		<!--tm-page-body-->
	
	
        
        
<?php
get_footer();	
		
?>

                
               