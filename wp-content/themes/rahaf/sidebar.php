<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<!--<aside class="widget widget_text box-white" style="padding: 10px 20px 5px 20px">
    
           
    
    
            <h2 class="tm-title" style="margin: 0 0 5px 0;">On Air Now!</h2>
            <div class="textwidget">
                   

                    
                    <div style="margin-top: 5px;"><iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FRadioSwtAlmdynaMisurata&amp;width&amp;layout=button_count&amp;action=like&amp;show_faces=true&amp;share=false&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:21px;" allowTransparency="true"></iframe></div>
                    
                     
                     
            </div>
    </aside>-->


<style>
    h1 {
        font-size: 16px;
    }
</style>



   <aside class="widget widget_text box-white" style="padding: 10px 20px 5px 20px">
        
         <?php
		$description = get_bloginfo( 'description', 'display' );
		if ( ! empty ( $description ) ) :
	?>
	<?php endif; ?>

	<?php if ( has_nav_menu( 'secondary' ) ) : ?>
	<nav role="navigation" class="navigation site-navigation secondary-navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
	</nav>
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div><!-- #primary-sidebar -->
	<!--<?php endif; ?>
        
    </aside>

   
      
    




