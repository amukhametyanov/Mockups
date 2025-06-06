<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage GT_Blog
 * @since GT Blog 1.0
 */

$date = date("Y");

?>

		</div><!-- #main -->
        
        </div><!-- #page -->

		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php get_sidebar( 'footer' ); ?>

			<div class="site-info">
				<?php do_action( 'twentyfourteen_credits' ); ?>
				<a href="http://www.golftown.com"><i class="fa fa-copyright"></i><?php printf(__('%s Golf Town, Inc. All rights reserved.', 'gt-blog'), $date) ?></a> | <a href="http://www.golftown.com/CustomerSupport.aspx?section=privacysecurity"><?php _e('Privacy Policy', 'gt-blog')?></a>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
    
	  
	<?php wp_footer(); ?>
   


    
</body>
</html>
 

</body>
</html>