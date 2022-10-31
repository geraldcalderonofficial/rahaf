




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
				<h1 class="archive-title">
					<?php
						/*
						 * Queue the first post, that way we know what author
						 * we're dealing with (if that is the case).
						 *
						 * We reset this later so we can run the loop properly
						 * with a call to rewind_posts().
						 */
						the_post();

						printf( __( 'All posts by %s', 'twentyfourteen' ), get_the_author() );
					?>
				</h1>
				<?php if ( get_the_author_meta( 'description' ) ) : ?>
				<div class="author-description"><?php the_author_meta( 'description' ); ?></div>
				<?php endif; ?>
			</header><!-- .archive-header -->

			<?php
					/*
					 * Since we called the_post() above, we need to rewind
					 * the loop back to the beginning that way we can run
					 * the loop properly, in full.
					 */
					rewind_posts();

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
