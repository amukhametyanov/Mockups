<?php
/**
 * The template for displaying all pages
 *
 * @package SimpleMag
 * @since 	SimpleMag 1.2
**/
get_header();
global $ti_option;
$has_widgets = is_active_sidebar( 'sidebar-2' );
?>

	<section id="content" role="main" class="site-content anmtd">

        <?php
        /**
         * If Featured Image is uploaded set it as a background
         * and change page title color to white
        **/
        if ( has_post_thumbnail() ) {
            $page_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), '' );
            $page_bg_image  = 'style="background-image:url(' . esc_url( $page_image_url[0] ) . ');"';
            $title_with_bg  = 'full-width-image content-over-image-tint page-title-bg';
            $separator      = '';
        } else {
            $title_with_bg  = 'wrapper';
            $separator      = simplemag_title_with_sep();
        } ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <header class="entry-header page-header">
                <div class="<?php echo isset( $title_with_bg ) ? $title_with_bg : ''; ?>" <?php echo isset( $page_bg_image ) ? $page_bg_image : ''; ?>>
                    <div class="page-title <?php echo esc_attr( $separator ); ?>">
                        <h1 class="entry-title"><?php the_title(); ?></h1>
                    </div>
                </div>
            </header>

        	<div class="wrapper">
    			<?php
    			// Enable/Disable sidebar based on the field selection
    			if ( $has_widgets && ( ! get_field( 'page_sidebar' ) || get_field( 'page_sidebar' ) == 'page_sidebar_on' ) ) :
    			?>
                <div class="grids">
                    <div class="grid-8 column-1 content-with-sidebar">
                <?php endif; ?>

                    <?php if ( have_posts()) : while (have_posts() ) : the_post(); ?>

                        <article class="clearfix single-box entry-content">
						    <?php the_content(); ?>
                        </article><!-- .entry-content -->

                        <?php
						// Output pagination if post uses <!--nextpage--> short tag
						$args = array(
							'before' => '<div class="link-pages"><h3 class="title">' . __( 'Continue Reading', 'simplemag' ) . '</h3>',
							'after' => '</div>',
							'link_before' => '<span>',
							'link_after' => '</span>',
							'nextpagelink'     => '&rarr;',
							'previouspagelink' => '&larr;',
							'next_or_number'   => 'next_and_number',
						);
						wp_link_pages( $args );
						?>

                    <?php endwhile; endif; ?>

                    <?php
    				// Enable/Disable comments
    				if ( ! isset( $ti_option['site_page_comments'] ) || isset( $ti_option['site_page_comments'] ) && $ti_option['site_page_comments'] == 1 ) {
    					comments_template();
    				}
    				?>

    				<?php
    				// Enable/Disable sidebar based on the field selection
    				if ( $has_widgets && ( ! get_field( 'page_sidebar' ) || get_field( 'page_sidebar' ) == 'page_sidebar_on' ) ):
    				?>
                    </div><!-- .grid-8 -->

                    <?php get_sidebar(); ?>

                </div><!-- .grids -->
                <?php endif; ?>

            </div>

        </div>
    </section><!-- #content -->

<?php get_footer(); ?>