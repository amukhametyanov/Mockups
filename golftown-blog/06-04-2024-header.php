<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage GT_Blog
 * @since GT Blog 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
	<!-- Google Tracking Code -->
 <script>
   (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
   (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
   m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
   })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
 
   ga('create', 'UA-2383481-8', 'auto');
   ga('send', 'pageview');
 
 </script>

	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- beginning of header code -->
<!-- reference to style file -->
<link rel="stylesheet" href="https://www.golftown.com/on/demandware.static/Sites-GolfTown-Site/-/en_CA/v1717513517421/css/style.css">

<!-- header banner -->
<div class="header-banner">
   <div class="header-banner-container">
      <div class="header-banner__util">
         <a href="/on/demandware.store/Sites-GolfTown-Site/en_CA/MCSubscription-SubscribeFooter" class="menu-utility-user__item mcsubscribe-footer">
            <svg class="menu-utility-user__item__icon svg-symbol" aria-hidden="true">
               <use xlink:href="/on/demandware.static/Sites-GolfTown-Site/-/default/dw0a15b5d2/svg/symbols.svg#svg-email-outline"></use>
            </svg>
            Email Signup
         </a>
      </div>
      <div class="header-banner__banner desktop-only">
         <div class="html-slot-container">
            <style>
               @media (max-width: 1023px) {
               .header-search.desktop-only {
               visibility: hidden;
               }
               }
            </style>
            <p>
               <svg class="icon-svg icon-svg--shipping-truck svg-symbol" aria-hidden="true">
                  <use xlink:href="/on/demandware.static/Sites-GolfTown-Site/-/default/dw0a15b5d2/svg/symbols.svg#svg-shipping-truck"></use>
               </svg>
               FREE SHIPPING ON ORDERS OVER $99
            </p>
            <div class="row additional-msgs-top-bar">
               <div class="col-4"></div>
               <div class="col-4">
                  <a href="" class="additional-msgs-top-bar-link"></a>
               </div>
               <div class="col-4"></div>
            </div>
            <link rel="stylesheet prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
            <link rel="stylesheet prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
            <script>
               var hasOriginalJQuery = typeof $ !== "undefined";
            </script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha512-kBFfSXuTKZcABVouRYGnUo35KKa1FBrYgwG4PAx7Z2Heroknm0ca2Fm2TosdrrI356EDHMW383S3ISrwKcVPUw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <script>
               var $jq_3_5_1 = hasOriginalJQuery
                 ? jQuery.noConflict(true)
                 : jQuery.noConflict();
            </script>
         </div>
      </div>
      <div class="header-banner__util header-banner__util--right">
         <div class="menu-utility-user">
            <div class="user-info">
               <a class="menu-utility-user__item" href="https://www.golftown.com/en-CA/account" title="Go to: Log In">Log In</a>
            </div>
            <a class="menu-utility-user__item" href="/en-CA/events">
            Events
            </a>
            <a class="menu-utility-user__item" href="https://golftown.cashstar.com/" target="_blank">
            Gift Cards
            </a>
            <span class="locale-select menu-utility-user__item">
            <a class=" is-active" href="https://www.golftown.com/en-CA/homepage">EN</a>
            <a class="" href="https://www.golftown.com/fr-CA/homepage">FR</a>
            </span>
         </div>
      </div>
   </div>
</div>


<!-- actual header -->
<header id="header" class="top-banner header--en">
   <div id="search" class="header-search mobile-only">
      <form class="header-search__container" role="search" action="/en-CA/search" method="get" name="simpleSearch" novalidate="novalidate">
         <label class="sr-only" for="q">Search Catalog</label>
         <input class="header-search__input input-text no-validate valid" type="search" id="q" name="q" value="" placeholder="Search everything golf..." autocomplete="off" aria-invalid="false">
         <input type="hidden" name="lang" value="en_CA">
         <button class="header-search__submit" type="submit" disabled="disabled">
            <span class="sr-only">Search</span>
            <svg class="header-search__submit__icon svg-symbol" aria-hidden="true">
               <use xlink:href="/on/demandware.static/Sites-GolfTown-Site/-/default/dw0a15b5d2/svg/symbols.svg#svg-search"></use>
            </svg>
         </button>
      </form>
      <div id="search-suggestions"></div>
   </div>
   <div class="header-container">
      <div class="header-container__left d-flex">
         <a href="#0" class="menu-toggle js-a-toggle" onclick="toggleMobileMenu()">
            <svg class="menu-toggle__icon menu-toggle__icon--burger header-container__icon svg-symbol" aria-hidden="true">
               <use xlink:href="/on/demandware.static/Sites-GolfTown-Site/-/default/dw0a15b5d2/svg/symbols.svg#svg-burger"></use>
            </svg>
            <svg class="menu-toggle__icon menu-toggle__icon--close header-container__icon svg-symbol" aria-hidden="true">
               <use xlink:href="/on/demandware.static/Sites-GolfTown-Site/-/default/dw0a15b5d2/svg/symbols.svg#svg-burger-close"></use>
            </svg>
            <span class="sr-only">Menu</span>
         </a>
         <a href="/on/demandware.store/Sites-GolfTown-Site/en_CA/MCSubscription-SubscribeFooter" class="menu-utility-user-mobile__item mcsubscribe-footer email-signup-header-mobile">
            <svg class="menu-utility-user__item__icon svg-symbol" aria-hidden="true">
               <use xlink:href="/on/demandware.static/Sites-GolfTown-Site/-/default/dw0a15b5d2/svg/symbols.svg#svg-email-outline-header"></use>
            </svg>
         </a>
      </div>
      <h1 class="primary-logo">
         <a href="/" title="Golf Town Limited Home">
         <img src="/on/demandware.static/Sites-GolfTown-Site/-/default/dw92d505ff/images/logo.svg" alt="Golf Town Limited">
         </a>
      </h1>
      <div id="search" class="header-search desktop-only">
         <form class="header-search__container" role="search" action="/en-CA/search" method="get" name="simpleSearch" novalidate="novalidate">
            <label class="sr-only" for="q">Search Catalog</label>
            <input class="header-search__input input-text no-validate" type="search" id="q" name="q" value="" placeholder="Search everything golf..." autocomplete="off">
            <input type="hidden" name="lang" value="en_CA">
            <button class="header-search__submit" type="submit" disabled="disabled">
               <span class="sr-only">Search</span>
               <svg class="header-search__submit__icon svg-symbol" aria-hidden="true">
                  <use xlink:href="/on/demandware.static/Sites-GolfTown-Site/-/default/dw0a15b5d2/svg/symbols.svg#svg-search"></use>
               </svg>
            </button>
         </form>
         <div id="search-suggestions"></div>
      </div>
      <div class="header-container__right d-flex justify-content-end">
         <a href="https://stores.golftown.com/" class="stores-link" title="Set Preferred Store" }="">
            <span class="stores-link__label">
            Stores
            </span>
            <svg class="stores-link__icon header-container__icon svg-symbol" aria-hidden="true">
               <use xlink:href="/on/demandware.static/Sites-GolfTown-Site/-/default/dw0a15b5d2/svg/symbols.svg#svg-store"></use>
            </svg>
         </a>
         <div id="mini-cart" class="">
            <div class="mini-cart-total">
               <a class="mini-cart-link mini-cart-empty" href="https://www.golftown.com/en-CA/cart?fromMiniCart=true" title="View Cart">
                  <span class="mini-cart-link__label"></span>
                  <svg class="mini-cart-link__icon header-container__icon svg-symbol" aria-hidden="true">
                     <use xlink:href="/on/demandware.static/Sites-GolfTown-Site/-/default/dw0a15b5d2/svg/symbols.svg#svg-cart"></use>
                  </svg>
               </a>
            </div>
         </div>
      </div>
   </div>

   <style>
        #overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 100;
            display: none;
        }
    </style>
   <div id="overlay" onclick="toggleMobileMenu()"></div>

   <nav id="navigation" role="navigation">
      <ul class="menu-category level-1">
         <li class="has-sub-menu">
            <a href="https://www.golftown.com/en-CA/fathers-day-gift-guide/" style="color: green">
            GIFT GUIDE
            </a>
            <div class="level-2 is-horizontal">
               <ul>
                  <li class="d-lg-none">
                     <a href="https://www.golftown.com/en-CA/fathers-day-gift-guide/">
                     Shop All
                     </a>
                  </li>
                  <li class="has-sub-menu level-2__alt-menu">
                     <ul>
                        <li><a href="https://www.golftown.com/en-CA/fathers-day-gift-guide/shop-gifts-for-dad/unique-gifts/">Unique Gifts</a></li>
                        <li><a href="https://www.golftown.com/en-CA/fathers-day-gift-guide/shop-gifts-for-dad/apparel/">Apparel</a></li>
                        <li><a href="https://www.golftown.com/en-CA/fathers-day-gift-guide/shop-gifts-for-dad/footwear/">Footwear</a></li>
                        <li><a href="https://www.golftown.com/en-CA/fathers-day-gift-guide/shop-gifts-for-dad/top-clubs/">Top Clubs</a></li>
                        <li><a href="https://www.golftown.com/en-CA/fathers-day-gift-guide/shop-gifts-for-dad/dadgets/">Top Tech</a></li>
                        <li><a href="https://golftown.cashstar.com/store/recipient?locale=en-ca">Gift Cards</a></li>
                     </ul>
                  </li>
               </ul>
            </div>
         </li>
         <li class="has-sub-menu">
            <a href="https://www.golftown.com/en-CA/new/">
            NEW
            </a>
            <div class="level-2 is-vertical">
               <div class="level-2__row">
                  
               </div>
            </div>
         </li>
         <li class="has-sub-menu">
            <a href="https://www.golftown.com/en-CA/clubs-1/">
            CLUBS
            </a>
            <div class="level-2 is-vertical">
               <div class="level-2__row">
                  
               </div>
            </div>
         </li>
         <li class="has-sub-menu">
            <a href="https://www.golftown.com/en-CA/balls-1/">
            BALLS
            </a>
            <div class="level-2 is-vertical">
               <div class="level-2__row">
                  
               </div>
            </div>
         </li>
         <li class="has-sub-menu">
            <a href="https://www.golftown.com/en-CA/shoes/">
            SHOES
            </a>
            <div class="level-2 is-vertical">
               <div class="level-2__row">
                  
               </div>
            </div>
         </li>
         <li class="has-sub-menu">
            <a href="https://www.golftown.com/en-CA/clothing/">
            CLOTHING
            </a>
            <div class="level-2 is-horizontal">
               
            </div>
         </li>
         <li class="has-sub-menu">
            <a href="https://www.golftown.com/en-CA/bags-and-carts-1/">
            BAGS &amp; CARTS
            </a>
            <div class="level-2 is-horizontal">
              
            </div>
         </li>
         <li class="has-sub-menu">
            <a href="https://www.golftown.com/en-CA/golf-tech-1/">
            GOLF TECH
            </a>
            <div class="level-2 is-vertical">
               <div class="level-2__row">
                 
               </div>
            </div>
         </li>
         <li class="has-sub-menu">
            <a href="https://www.golftown.com/en-CA/accessories-3/">
            ACCESSORIES
            </a>
            <div class="level-2 is-horizontal">
               
            </div>
         </li>
         <li class="has-sub-menu">
            <a href="https://www.golftown.com/en-CA/brands">
            BRANDS
            </a>
            <div class="level-2 is-vertical">
               <div class="level-2__row">
                 
               </div>
            </div>
         </li>
         <li class="has-sub-menu">
            <a href="https://www.golftown.com/en-CA/demo-clubs/" style="color: #B50000">
            DEMO CLUBS
            </a>
            <div class="level-2 is-vertical">
               <div class="level-2__row">
                  
               </div>
            </div>
         </li>
         <li class="has-sub-menu">
            <a href="https://www.golftown.com/en-CA/sale/" style="color: #B50000">
            SALE
            </a>
            <div class="level-2 is-horizontal">
              
            </div>
         </li>
         <li class="has-sub-menu">
            <a href="javascript:void(0);">
            EXPERT SERVICES
            </a>
            <div class="level-2 is-horizontal">
               
            </div>
         </li>
      </ul>
      <div class="menu-utility-user-mobile">
         <ul>
            <li>
               <div class="user-info">
                  <a class="menu-utility-user__item" href="https://www.golftown.com/en-CA/account" title="Go to: Log In">Log In</a>
               </div>
            </li>
            <li><a class="menu-utility-user-mobile__item" href="https://golftown.cashstar.com/" target="_blank">Gift Cards</a></li>
         </ul>
         <div class="locale-select">
            <a href="https://www.golftown.com/en-CA/homepage" class="is-active">
            EN
            </a>
            <a href="https://www.golftown.com/fr-CA/homepage" class="">
            FR
            </a>
         </div>
         <a class="phone" href="tel:+18443609969">+1-844-360-9969</a>
      </div>
   </nav>
   <div class="header-banner__banner mobile-only">
      <div class="html-slot-container">
         <style>
            @media (max-width: 1023px) {
            .header-search.desktop-only {
            visibility: hidden;
            }
            }
         </style>
         <p>
            <svg class="icon-svg icon-svg--shipping-truck svg-symbol" aria-hidden="true">
               <use xlink:href="/on/demandware.static/Sites-GolfTown-Site/-/default/dw0a15b5d2/svg/symbols.svg#svg-shipping-truck"></use>
            </svg>
            FREE SHIPPING ON ORDERS OVER $99
         </p>
         <div class="row additional-msgs-top-bar">
            <div class="col-4"></div>
            <div class="col-4">
               <a href="" class="additional-msgs-top-bar-link"></a>
            </div>
            <div class="col-4"></div>
         </div>
         <link rel="stylesheet prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
         <link rel="stylesheet prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
         <script>
            var hasOriginalJQuery = typeof $ !== "undefined";
         </script>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
         <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> -->
         <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha512-kBFfSXuTKZcABVouRYGnUo35KKa1FBrYgwG4PAx7Z2Heroknm0ca2Fm2TosdrrI356EDHMW383S3ISrwKcVPUw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
         <script>
            var $jq_3_5_1 = hasOriginalJQuery
              ? jQuery.noConflict(true)
              : jQuery.noConflict();
         </script>
      </div>
   </div>
</header>


<!-- script for header code -->
<script>
 function toggleMobileMenu() {
    const nav = document.getElementById('navigation');
    const overlay = document.getElementById('overlay');
    const html = document.documentElement;

    if (nav.style.overflow === 'auto' && nav.style.transform === 'translate(330px)') {
        nav.style.removeProperty('overflow');
        nav.style.removeProperty('transform');
        overlay.style.display = 'none';
        html.style.overflow = ''; // Re-enable scrolling
    } else {
        nav.style.overflow = 'auto';
        nav.style.transform = 'translate(330px)';
        overlay.style.display = 'block';
        html.style.overflow = 'hidden'; // Prevent scrolling
    }
}
</script>

<!-- end of header code -->
	
	<?php if ( get_header_image() ) : ?>
	<div id="site-header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
		</a>
	</div>
	<?php endif; ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-main">
			<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				<button class="shiftnav-toggle menu-toggle" data-shiftnav-target="shiftnav-main"><?php _e( 'Primary Menu', 'gt-blog' ); ?></button>
				<a class="screen-reader-text skip-link" id="nav-toggle" href="#content"><?php _e( 'Skip to content', 'gt-blog' ); ?></a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
			</nav>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/images/GolfTown-Logo_Horiz_KO.svg" width="559" height="101" alt="<?php bloginfo( 'name' ); ?>"/></a></h1>


			
			<div class="search-toggle">
				<a href="#search-container" class="screen-reader-text" aria-expanded="false" aria-controls="search-container"><?php _e( 'Search', 'gt-blog' ); ?></a>
			</div>
		</div>

		<div id="search-container" class="search-box-wrapper hide">
			<div class="search-box">
				<?php get_search_form(); ?>
			</div>
		</div>
		<?php if ( has_nav_menu( 'secondary' ) ) : ?>
		<nav role="navigation" class="navigation site-navigation secondary-navigation">
			<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'gt-blog' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
		</nav>
		<?php endif; ?>
	</header><!-- #masthead -->
    
    
    <div id="page" class="hfeed site">
<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
	<?php 
	
	if(function_exists('bcn_display')){
		$term = get_queried_object();
		if( 0 === $term->parent){
		    return;
		} else {
		    bcn_display();
		}
	}
	
	?>
       
</div>
</div>
	<div id="main" class="site-main">
