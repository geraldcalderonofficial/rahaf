<?php


get_header(); ?>

        <div id="tm-page-body">
			<div id="tm-blog" class="tm-container tm-wrap tm-blog-style-list tm-sidebar-right">
				
                                
                              
                                <!--page-content-->
				
                                <div class="page-content">
					<div class="tm-content page-content-inner" style="min-height: 625px;">
                                                    <div style="padding: 20px; ">
                                                    <?php if ( have_posts() ) : ?>

                                                                <header class="archive-header">
                                                                        <h1 class="archive-title"><?php printf( __( 'Category Archives: %s', 'twentyfourteen' ), single_cat_title( '', false ) ); ?></h1>

                                                                        <?php
                                                                                // Show an optional term description.
                                                                                $term_description = term_description();
                                                                                if ( ! empty( $term_description ) ) :
                                                                                        printf( '<div class="taxonomy-description">%s</div>', $term_description );
                                                                                endif;
                                                                        ?>
                                                                </header><!-- .archive-header -->

                                                                <?php
                                                                                // Start the Loop.
                                                                                while ( have_posts() ) : the_post();

                                                                                /*
                                                                                 * Include the post format-specific template for the content. If you want to
                                                                                 * use this in a child theme, then include a file called called content-___.php
                                                                                 * (where ___ is the post format) and that will be used instead.
                                                                                 */
                                                                                get_template_part( 'content', get_post_format() );

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
				<!--page-content-->
                                
                                <div class="page-sidebar">
					
					<?php get_sidebar(); ?>
					
				</div>
				<!--page-sidebar-->
				
				
			</div>
			<!--tm-container-->
		</div>
		<!--tm-page-body-->
                
                

	
        
        
        

<?php
get_footer();	
		
?>  





