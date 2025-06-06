<?php
/**
 * The Header for the theme
 *
 * @package SimpleMag
 * @since 	SimpleMag 1.0
**/
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, minimum-scale=1">
    <meta name="theme-color" content="#000000">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <section class="sl-menu">

	</section>
	
    <section class="no-print top-strip">

        <?php global $ti_option; ?>

        <div class="wrapper">

            <div id="mobile-menu-reveal" class="icon-button mobile-menu-reveal"><i class="hamburger-icon"></i></div>

            <?php
            // Top Strip Logo
            simplemag_top_strip_logo();
            ?>

            <?php
            // Secondary Menu
            simplemag_menu( array(
                'theme_location' => 'secondary_menu',
                'wrapper_class'  => 'secondary-menu',
            ) );
            ?>

            <?php
            // Hide Search and Social Icons if header variation with search is selected
            if ( isset( $ti_option['site_header'] ) && $ti_option['site_header'] != 'header_search' ) { ?>

                <div class="right-side">

                    <?php
                    // Social Profiles
                    if( $ti_option['top_social_profiles'] == true ) {
                        get_template_part ( 'inc/social', 'profiles' );
                    } ?>

                    <?php
                    // Search Form
                    if ( $ti_option['site_search_visibility'] == true ) {
                        simplemag_search_modal_button();
                    } ?>

                    <?php simplemag_top_strip_right_side(); ?>

                </div>

            <?php } ?>

        </div><!-- .wrapper -->

    </section><!-- .top-strip -->



    <?php
    // Main Logo Area
    if ( isset( $ti_option['site_main_area'] ) && $ti_option['site_main_area'] == true ) :
    ?>
    <header id="masthead" class="site-header" role="banner" class="clearfix">
        <div id="branding" class="anmtd">
            <div class="wrapper">
            <?php
                /**
                 * Header Variations
                 * are selected in Theme Options, Header tab.
                **/

                // Logo, Social Icons and Search
                if ( $ti_option['site_header'] == 'header_search' ) {
                    get_template_part( 'template-parts/header/header', 'search' );

                // Logo and Ad unit
                } elseif ( $ti_option['site_header'] == 'header_banner' ) {
                    get_template_part( 'template-parts/header/header', 'banner' );

                // Default - Centered Logo and Tagline
                } else {
                    get_template_part( 'template-parts/header/header', 'default' );
                }
            ?>
            </div><!-- .wrapper -->
        </div><!-- #branding -->
    </header><!-- #masthead -->
    <?php endif; ?>

    <?php
    // Header Fallback
    if( ! class_exists( 'Redux' ) ) :
        get_template_part( 'template-parts/header/header', 'fallback' );
    endif;
    ?>

    <?php
    // Main Menu
    $fixed_menu_class = '';
    if ( isset( $ti_option['site_fixed_menu'] ) ) {
        $fixed_menu = $ti_option['site_fixed_menu'];
        $fixed_menu_class = ( $fixed_menu == '3' ) ? ' is-fixed' : '';
    }

    simplemag_menu( array(
        'theme_location' => 'main_menu',
        'wrapper_class'  => 'no-print anmtd main-menu' . esc_attr( $fixed_menu_class ),
        'mega_menu'      => true,
    ) );
    ?>