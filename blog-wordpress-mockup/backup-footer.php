<?php
/**
 * The template for displaying the footer.
 *
 * @package SimpleMag
 * @since 	SimpleMag 1.1
**/
global $ti_option;

if ( isset( $ti_option['copyright_text'] ) ) {
    $copyright_text = $ti_option['copyright_text'];
} else {
    $copyright_text = 'Powered by WordPress. <a href="https://www.themesindep.com">Created by ThemesIndep</a>';
}
?>



    <footer id="footer" class="no-print anmtd" role="contentinfo">

        <?php
        /**
         * Footer Ad
        **/
        do_action( 'footer_ad' );
        ?>

        <?php
        /**
         * Footer Sidebars:
         * 1. Widegtized footer. Outputs three Footer sidebars
         * 2. Full width sidebar
        **/
        get_sidebar( 'footer' );
        ?>

        <div class="copyright">
            <div class="wrapper">
                <div class="grid">
                    <div class="col-sm-12 col-md-10">
                        <?php echo wp_kses_post( $copyright_text ); ?>
                    </div>
                    <div class="col-sm-12 col-md-2 text-right">
                        <a href="#" class="icon-n-txt back-top"><?php _e( 'Back to top', 'simplemag' ); ?><i class="sm-chevron-up"></i></a>
                    </div>
                </div>
            </div>
        </div>

    </footer><!-- #footer -->

<?php
/**
 * Offcanvas Template
 */
get_template_part( 'template-parts/offcanvas' ); ?>

<?php wp_footer(); ?>
</body>
</html>