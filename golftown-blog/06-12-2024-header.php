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
<!-- <link rel="stylesheet" href="https://www.golftown.com/on/demandware.static/Sites-GolfTown-Site/-/en_CA/v1717513517421/css/style.css"> -->
<link href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://staging-na01-sportinglife.demandware.net/on/demandware.static/-/Library-Sites-SportingLifeSharedLibrary/default/images/pages/golftown/gtblogstyles.css">

<!-- styles for header -->
<style>
    .menu-utility-user__item.menu-nav-links {

    }
    img[alt="Email Icon"] {
        width: 24px;
        height: 24px;
        margin-bottom: 4px;
    }
    img[alt="Shipping Truck Icon"] {
        width:32px;
        height: 32px;
        margin-right: 5px;
    }

    img[alt="Golf Town Limited Icon"] {
        width: 193px;
    }
    img[alt="Search Icon"],
    img[alt="Stores Location Icon"],
    img[alt="Cart Icon"],
    img[alt="Mobile Hamburger Button Icon"],
    img[alt="Mobile Close Button Icon"],
    img[alt="Mobile Email Icon"] {
        min-width: 24px;
        max-width: 24px;
        height: 24px;
    }

    
     
     /* hides language buttons from wordpress theme */
     aside#polylang-2 {
        display: none;
     }
</style>

<!-- header banner -->
<div class="header-banner">
   <div class="header-banner-container">
      <div class="header-banner__util">
         <!-- <a class="en-nav" href="https://www.golftown.com/on/demandware.store/Sites-GolfTown-Site/en_CA/MCSubscription-SubscribeFooter" class="menu-utility-user__item mcsubscribe-footer menu-nav-links">
         <img class="img-fluid" src="https://www.golftown.com/on/demandware.static/-/Library-Sites-GolfTownSharedLibrary/default/images/blog-icons/logo-gtblog-email-signup.svg" alt="Email Icon" title="Email Icon" width="23" height="">
            <span>Email Signup</span>
         </a>

         <a class="fr-nav" href="https://www.golftown.com/on/demandware.store/Sites-GolfTown-Site/fr_CA/MCSubscription-SubscribeFooter" class="menu-utility-user__item mcsubscribe-footer menu-nav-links">
         <img class="img-fluid" src="https://www.golftown.com/on/demandware.static/-/Library-Sites-GolfTownSharedLibrary/default/images/blog-icons/logo-gtblog-email-signup.svg" alt="Email Icon" title="Email Icon" width="23" height="">
            <span>Inscription</span>
         </a> -->
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
            <p class="en-nav">
            <img class="img-fluid" src="https://www.golftown.com/on/demandware.static/-/Library-Sites-GolfTownSharedLibrary/default/images/blog-icons/logo-gtblog-shipping-truck.svg" alt="Shipping Truck Icon" title="Shipping Truck Icon" width="" height="">
               FREE SHIPPING ON ORDERS OVER $99
            </p>
            <p class="fr-nav">
            <img class="img-fluid" src="https://www.golftown.com/on/demandware.static/-/Library-Sites-GolfTownSharedLibrary/default/images/blog-icons/logo-gtblog-shipping-truck.svg" alt="Shipping Truck Icon" title="Shipping Truck Icon" width="" height="">
            LIVRAISON GRATUITE SUR LES COMMANDES DE + DE 99$
            </p>

            <div class="row additional-msgs-top-bar">
               <div class="col-4"></div>
               <div class="col-4">
                  <a href="" class="additional-msgs-top-bar-link"></a>
               </div>
               <div class="col-4"></div>
            </div>
            
            
         </div>
      </div>
      <div class="header-banner__util header-banner__util--right">
         <div class="menu-utility-user">
            <!-- <div class="user-info">
               <a class="menu-utility-user__item" href="https://www.golftown.com/en-CA/account" title="Go to: Log In">Log In</a>
            </div> -->

            <a class="menu-utility-user__item en-nav" href="https://www.golftown.com/en-CA/account" title="Go to: Log In">Log In</a>
            <a class="menu-utility-user__item fr-nav" href="https://www.golftown.com/fr-CA/account" title="Go to: Log In">Ouvrir une session</a>

            <a class="menu-utility-user__item en-nav" href="https://www.golftown.com/en-CA/events">
            Events
            </a>
            <a class="menu-utility-user__item fr-nav" href="https://www.golftown.com/fr-CA/events">
            Événements
            </a>

            <a class="menu-utility-user__item en-nav" href="https://golftown.cashstar.com/" target="_blank">
            Gift Cards
            </a>
            <a class="menu-utility-user__item fr-nav" href="https://golftown.cashstar.com/store/recipient?locale=fr-ca" target="_blank">
            Cartes-cadeaux
            </a>

            <span class="locale-select menu-utility-user__item">
            <a class=" is-active" href="https://gtstg.wpengine.com/en/">EN</a>
            <a class="" href="https://gtstg.wpengine.com/fr/">FR</a>
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
            <img class="img-fluid" src="https://www.golftown.com/on/demandware.static/-/Library-Sites-GolfTownSharedLibrary/default/images/blog-icons/logo-gtblog-search.svg" alt="Search Icon" title="Search Icon" width="" height="">
         </button>
      </form>
      <div id="search-suggestions"></div>
   </div>
   <div class="header-container">
      <div class="header-container__left d-flex">
         <a href="#0" class="nav-mobile-menu-toggle js-a-toggle" onclick="toggleMobileMenu()">
            <img class="img-fluid" src="https://www.golftown.com/on/demandware.static/-/Library-Sites-GolfTownSharedLibrary/default/images/blog-icons/logo-gtblog-menu-hamburger.svg" alt="Mobile Hamburger Button Icon" title="Mobile Hamburger Button Icon" width="" height="">
            <img class="img-fluid" src="https://www.golftown.com/on/demandware.static/-/Library-Sites-GolfTownSharedLibrary/default/images/blog-icons/logo-gtblog-x-close.svg" alt="Mobile Close Button Icon" title="Mobile Close Button Icon" width="" height="" style="display:none;">
            <span class="sr-only">Menu</span>
         </a>
         <!-- <a href="/on/demandware.store/Sites-GolfTown-Site/en_CA/MCSubscription-SubscribeFooter" class="menu-utility-user-mobile__item mcsubscribe-footer email-signup-header-mobile">
         <img class="img-fluid" src="https://www.golftown.com/on/demandware.static/-/Library-Sites-GolfTownSharedLibrary/default/images/blog-icons/logo-gtblog-email-signup.svg" alt="Mobile Email Icon" title="Mobile Email Icon" width="" height="">
         </a> -->
      </div>
      <h1 class="primary-logo">
         <a class="en-nav" href="https://www.golftown.com/" title="Golf Town Limited Home">
            <img class="img-fluid" src="https://www.golftown.com/on/demandware.static/Sites-GolfTown-Site/-/default/dw92d505ff/images/logo.svg" alt="Golf Town Limited Icon" title="Golf Town Limited Icon" width="" height="">
         </a>
         <a class="fr-nav" href="https://www.golftown.com/fr-CA/homepage" title="Golf Town Limited Home">
            <img class="img-fluid" src="https://www.golftown.com/on/demandware.static/Sites-GolfTown-Site/-/default/dw92d505ff/images/logo.svg" alt="Golf Town Limited Icon" title="Golf Town Limited Icon" width="" height="">
         </a>
      </h1>
      <div id="search" class="header-search desktop-only">
      <form class="header-search__container" role="search" action="https://www.golftown.com/en-CA/search" method="get" name="simpleSearch" novalidate="novalidate">
        <label class="sr-only" for="search-input-en">Search Catalog</label>
        <input class="header-search__input input-text no-validate" type="search" id="search-input-en" name="q" value="" placeholder="Search everything golf..." autocomplete="off">
        <input type="hidden" name="lang" value="en_CA">
        <button class="header-search__submit" type="submit">
            <span class="sr-only">Search</span>
            <img class="img-fluid" src="https://www.golftown.com/on/demandware.static/-/Library-Sites-GolfTownSharedLibrary/default/images/blog-icons/logo-gtblog-search.svg" alt="Search Icon" title="Search Icon">
        </button>
    </form>
         <div id="search-suggestions"></div>
      </div>
      <div class="header-container__right d-flex justify-content-end">
         <a href="https://stores.golftown.com/" class="stores-link en-nav-flex" title="Set Preferred Store">
            <span class="stores-link__label">
            Stores
            </span>
            <img class="img-fluid" src="https://www.golftown.com/on/demandware.static/-/Library-Sites-GolfTownSharedLibrary/default/images/blog-icons/logo-gtblog-location-marker.svg" alt="Stores Location Icon" title="Stores Location Icon" width="" height="">
         </a>
         <a href="https://stores.golftown.com/fr" class="stores-link fr-nav-flex" title="Set Preferred Store">
            
            <span class="stores-link__label">
            Magasins
            </span>
            <img class="img-fluid" src="https://www.golftown.com/on/demandware.static/-/Library-Sites-GolfTownSharedLibrary/default/images/blog-icons/logo-gtblog-location-marker.svg" alt="Stores Location Icon" title="Stores Location Icon" width="" height="">
         </a>
         <div id="mini-cart" class="">
            <div class="mini-cart-total">
               <a class="mini-cart-link mini-cart-empty en-nav-flex" href="https://www.golftown.com/en-CA/cart?fromMiniCart=true" title="View Cart">
                  <span class="mini-cart-link__label"></span>
                  <img class="img-fluid" src="https://www.golftown.com/on/demandware.static/-/Library-Sites-GolfTownSharedLibrary/default/images/blog-icons/logo-gtblog-cart.svg" alt="Cart Icon" title="Cart Icon" width="" height="">
               </a>
               <a class="mini-cart-link mini-cart-empty fr-nav-flex" href="https://www.golftown.com/fr-CA/cart?fromMiniCart=true" title="View Cart">
                  <span class="mini-cart-link__label"></span>
                  <img class="img-fluid" src="https://www.golftown.com/on/demandware.static/-/Library-Sites-GolfTownSharedLibrary/default/images/blog-icons/logo-gtblog-cart.svg" alt="Cart Icon" title="Cart Icon" width="" height="">
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
            <a class="en-nav" href="https://www.golftown.com/en-CA/new/">
            NEW
            </a>
            <a class="fr-nav" href="https://www.golftown.com/fr-CA/nouveautes/">
            NOUVEAUTÉS
            </a>
            <div class="level-2 is-vertical"></div>
         </li>
         <li class="has-sub-menu">
            <a class="en-nav" href="https://www.golftown.com/en-CA/clubs/">
            CLUBS
            </a>
            <a class="fr-nav" href="https://www.golftown.com/fr-CA/b%C3%A2tons/">
            BÂTONS
            </a>
            <div class="level-2 is-vertical"></div>
         </li>
         <li class="has-sub-menu">
            <a class="en-nav" href="https://www.golftown.com/en-CA/balls/">
            BALLS
            </a>
            <a class="fr-nav" href="https://www.golftown.com/fr-CA/balles/">
            BALLES
            </a>
            <div class="level-2 is-vertical"></div>
         </li>
         <li class="has-sub-menu">
            <a class="en-nav" href="https://www.golftown.com/en-CA/shoes/">
            SHOES
            </a>
            <a class="fr-nav" href="https://www.golftown.com/fr-CA/chaussures/">
            CHAUSSURES
            </a>
            <div class="level-2 is-vertical"></div>
         </li>
         <li class="has-sub-menu">
            <a class="en-nav" href="https://www.golftown.com/en-CA/clothing/">
            CLOTHING
            </a>
            <a class="fr-nav" href="https://www.golftown.com/fr-CA/v%C3%AAtements/">
            VÊTEMENTS
            </a>
            <div class="level-2 is-vertical"></div>
         </li>
         <li class="has-sub-menu">
            <a class="en-nav" href="https://www.golftown.com/en-CA/bags-and-carts/">
            BAGS &amp; CARTS
            </a>
            <a class="fr-nav" href="https://www.golftown.com/fr-CA/sacs-et-chariots/">
            SACS ET CHARIOTS
            </a>
            <div class="level-2 is-vertical"></div>
         </li>
         <li class="has-sub-menu">
            <a class="en-nav" href="https://www.golftown.com/en-CA/golf-tech/">
            GOLF TECH
            </a>
            <a class="fr-nav" href="https://www.golftown.com/fr-CA/appareils/">
            APPAREILS
            </a>
            <div class="level-2 is-vertical"></div>
         </li>
         <li class="has-sub-menu">
            <a class="en-nav" href="https://www.golftown.com/en-CA/accessories/">
            ACCESSORIES
            </a>
            <a class="fr-nav" href="https://www.golftown.com/fr-CA/accessoires/">
            ACCESSOIRES
            </a>
            <div class="level-2 is-vertical"></div>
         </li>
         <li class="has-sub-menu">
            <a class="en-nav" href="https://www.golftown.com/en-CA/brands">
            BRANDS
            </a>
            <a class="fr-nav" href="https://www.golftown.com/fr-CA/brands/">
            MARQUES
            </a>
            <div class="level-2 is-vertical"></div>
         </li>
        
         <li class="has-sub-menu">
            <a class="en-nav" href="https://www.golftown.com/en-CA/sale/" style="color: #B50000">
            SALE
            </a>
            <a class="fr-nav" href="https://www.golftown.com/fr-CA/aubaines/" style="color: #B50000">
            AUBAINES
            </a>
            <div class="level-2 is-vertical"></div>
         </li>
         <li class="has-sub-menu">
            <a class="en-nav" href="javascript:void(0);" onclick="extendExpertServicesSubmenu(this)">
            EXPERT SERVICES
            </a>
            <a class="fr-nav" href="javascript:void(0);" onclick="extendExpertServicesSubmenu(this)">
            SERVICES D'EXPERTS
            </a>
            <div class="level-2 is-horizontal">
               <ul>
                  <!-- <li class="d-lg-none">
                     <a class="en-nav" href="javascript:void(0);">
                           Shop All
                     </a>
                     <a class="fr-nav" href="javascript:void(0);">
                           Magasiner Tout
                     </a>
                  </li> -->
                  <li class="has-sub-menu level-2__alt-menu">
                     <ul>
                           <li>
                              <a class="en-nav" href="https://www.golftown.com/en-CA/custom-fit/">Custom Fitting</a>
                              <a class="fr-nav" href="https://www.golftown.com/fr-CA/ajustements-personnalises/">Ajustements personnalisés</a>
                           </li>
                           <li></li>
                           <li>
                              <a class="en-nav" href="https://www.golftown.com/en-CA/studiox/">StudioX Custom Fitting</a>
                              <a class="fr-nav" href="https://www.golftown.com/fr-CA/studiox/">StudioX</a>
                           </li>
                           <li></li>
                           <li>
                              <a class="en-nav" href="https://www.golftown.com/en-CA/vendor-fitting-days/">Vendor Fit Days</a>
                              <a class="fr-nav" href="https://www.golftown.com/fr-CA/journes-dajustement-des-fournisseurs/">Journées d'ajustement</a>
                           </li>
                           <li></li>
                           <li>
                              <a class="en-nav" href="https://www.golftown.com/en-CA/gt-promotions/">Golf Town Promotions</a>
                              <a class="fr-nav" href="https://www.golftown.com/fr-CA/promotion-gt/">Promotions Golf Town</a>
                           </li>
                           <li></li>
                           <li>
                              <a class="en-nav" href="https://www.golftown.com/en-CA/wetaketrades.html">Club Trade-In</a>
                              <a class="fr-nav" href="https://www.golftown.com/fr-CA/wetaketrades.html">Échangez vos bâtons</a>
                           </li>
                           <li></li>
                           <li>
                              <a class="en-nav" href="https://www.golftown.com/en-CA/proshop.html">Pro Shop Services</a>
                              <a class="fr-nav" href="https://www.golftown.com/fr-CA/proshop.html">Atelier du Pro - Services</a>
                           </li>
                           <li>
                              <a class="en-nav" href="https://www.golftown.com/en-CA/tournaments/">Tournament Planning</a>
                              <a class="fr-nav" href="https://www.golftown.com/fr-CA/tournois/">Tournois</a>
                           </li>
                           <li>
                              <a class="en-nav" href="https://blog.golftown.com/en/">The Clubhouse Blog</a>
                              <a class="fr-nav" href="https://blog.golftown.com/fr/">Le blogue du pavillon</a>
                           </li>
                     </ul>
                  </li>
               </ul>
            </div>

         </li>
      </ul>
      <div class="menu-utility-user-mobile">
         <ul>
            <li>
               <div class="user-info">
                  <a class="menu-utility-user__item en-nav" href="https://www.golftown.com/en-CA/account" title="Go to: Log In">Log In</a>
                  <a class="menu-utility-user__item fr-nav" href="https://www.golftown.com/fr-CA/account" title="Aller à: Ouvrir une session">Ouvrir une session</a>
               </div>
            </li>
            <li>
               <a class="menu-utility-user-mobile__item en-nav" href="https://golftown.cashstar.com/" target="_blank">Gift Cards</a>
               <a class="menu-utility-user-mobile__item fr-nav" href="https://golftown.cashstar.com/" target="_blank">Cartes-cadeaux</a>
            </li>
         </ul>
         <div class="locale-select">
         <a class=" is-active" href="https://gtstg.wpengine.com/en/">EN</a>
         <a class="" href="https://gtstg.wpengine.com/fr/">FR</a>
         </div>
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
            <img class="img-fluid" src="https://www.golftown.com/on/demandware.static/-/Library-Sites-GolfTownSharedLibrary/default/images/blog-icons/logo-gtblog-shipping-truck.svg" alt="Shipping Truck Icon" title="Shipping Truck Icon" width="" height="">
            FREE SHIPPING ON ORDERS OVER $99
         </p>
         <div class="row additional-msgs-top-bar">
            <div class="col-4"></div>
            <div class="col-4">
               <a href="" class="additional-msgs-top-bar-link"></a>
            </div>
            <div class="col-4"></div>
         </div>
         
      </div>
   </div>
</header>


<!-- script for header code -->
<script>
// document.addEventListener('DOMContentLoaded', function() {
   function changeLang() {
      // Get the current URL
      var currentURL = window.location.href;
     
      // Create a style element
      var style = document.createElement('style');
      // Add CSS rules based on the URL
      if (currentURL.includes("/fr/")) {
         style.innerHTML = `
         .en-nav {
            display: none !important;
         }
         .en-nav-flex {
            display: none !important;
         }
         .fr-nav {
            display: block !important;
         }
         .fr-nav-flex {
            display: flex !important;
         }
         .level-2.is-horizontal .fr-nav {
            display: inline-block !important;
         }
         `;


         // Select all form elements with the class 'header-search__container'
        var searchForms = document.querySelectorAll('form.header-search__container');

        // Iterate over each form element and update the action attribute
        searchForms.forEach(function(form) {

            form.setAttribute('action', 'https://www.golftown.com/fr-CA/search');

                // Update the placeholder for the search input element
            var searchInput = form.querySelector('.header-search__input.input-text[type="search"]');
            if (searchInput) {
                searchInput.setAttribute('placeholder', 'Recherchez nos produits...');
            }

            // Update the value for the hidden input element
            var hiddenInput = form.querySelector('input[type="hidden"][name="lang"]');
            if (hiddenInput) {
                hiddenInput.setAttribute('value', 'fr-CA');
            }
        });


        // toggle language underline
        const localeSelects = document.querySelectorAll('.locale-select');

        localeSelects.forEach(localeSelect => {
            const enLink = localeSelect.querySelector('a[href*="en"]');
            const frLink = localeSelect.querySelector('a[href*="fr"]');

            enLink.classList.remove('is-active');
            frLink.classList.add('is-active');
        });

      } else {
         style.innerHTML = `
         .en-nav {
            display: block !important;
         }
         .en-nav-flex {
            display: flex !important;
         }
         .level-2.is-horizontal .en-nav {
            display: inline-block !important;
         }
         .fr-nav {
            display: none !important;
         }
         .fr-nav-flex {
            display: none !important;
         }
         `;
      }

      
      // Append the style element to the head
      document.head.appendChild(style);
   }
   changeLang();
// });
   
function toggleMobileMenu() {
    const nav = document.getElementById('navigation');
    const overlay = document.getElementById('overlay');
    const html = document.documentElement;
    const menuToggle = document.querySelector('img[alt="Mobile Hamburger Button Icon"]');
    const closeToggle = document.querySelector('img[alt="Mobile Close Button Icon"]');

    if (nav.style.overflow === 'auto' && nav.style.transform === 'translate(330px)') {
        nav.style.removeProperty('overflow');
        nav.style.removeProperty('transform');
        overlay.style.display = 'none';
        html.style.overflow = ''; // Re-enable scrolling
        
        // Show hamburger icon, hide close icon
        menuToggle.style.display = 'block';
        closeToggle.style.display = 'none';
    } else {
        nav.style.overflow = 'auto';
        nav.style.transform = 'translate(330px)';
        overlay.style.display = 'block';
        html.style.overflow = 'hidden'; // Prevent scrolling
        
        // Show close icon, hide hamburger icon
        menuToggle.style.display = 'none';
        closeToggle.style.display = 'block';
    }
}


// extend expert services submenu 
function extendExpertServicesSubmenu(link) {
    const parent = link.parentElement;
    parent.classList.toggle('is-active');
}



</script>

<!-- end of header code -->



	
<!-- Start of New Blog Menu -->
    <style>
      body {
        font-family: "Hind", sans-serif;
        font-weight: 400;
        font-style: normal;
        margin: 0;
      }

      .gt-blog-header {
        display: flex;
        align-items: center;
        justify-content: center;
        color: #f2f2f2;
        padding: 35px 0 25px 0;
        flex-direction: column;
      }

      .gt-blog-logo-section {
        display: flex;
        align-items: center;
        flex-direction: row;
      }

      .gt-blog-logo-section img {
        height: 48px; /* Adjust as needed */
        width: 100% \9; /* Needed for IE SVG handling */
      }

      .gt-blog-navbar {
        display: flex;
        align-items: center;
        justify-items: center;
        align-content: center;
        justify-content: center;
        justify-content: space-between;
        max-width: 1440px;
        margin: 0 auto;
        padding: 0 40px;
      }

      .gt-blog-navbar a {
        display: block;
        color: #000;
        font-weight: 600;
        text-align: center;
        padding: 10px 25px;
        text-decoration: none;
        font-family: "Hind", sans-serif;
        font-weight: 500;
        font-style: normal;
        border-radius: 6px;
        font-size: 18px;
        letter-spacing: -0.5px;
      }

      .gt-blog-navbar a:hover {
        background-color: #f2f2f2;
        color: black;
      }

      .gt-blog-tagline {
        color: #4b5563;
        font-size: 28px;
        font-weight: 400;
        margin: 0;
      }

      /* .search-box-wrapper {
        background-color: #f2f2f2;
        position: relative;
        z-index: 10001;
        top: 0;
      }

      .search-box {
		  background-color: #f2f2f2;
        display: flex;
        align-items: center;
        justify-content: center;
        max-width: 1440px;
        margin: 0 auto;
        padding: 15px 40px;
      } */
      .search-box {
            background-color: #fff;
            display: flex;
            align-items: center;
            justify-content: end;
            max-width: 1440px;
            margin: 0 auto;
            padding: 0 26px;
        }

        .search-box-wrapper {
        background-color: #fff;
        position: relative;
        z-index: 10001;
        top: 0;
        }

      .search-box .search-form label {
        margin-bottom: 0;
      }

      #search-container .search-box .search-form {
        height: 40px;
      }

      .search-box .search-field {
        font-size: 16px;
        padding: 5px 10px;
        /* filter: drop-shadow(2px 2px 3px rgba(0, 0, 0, 0.15)); */
		border: 1px solid #ccc;
        border-radius: 3px;
      }

      .search-field {
        height: 40px;
      }

      /* .secondary-navigation li:last-child > a:focus {
        border-bottom-right-radius: 0 !important;
        border-bottom-left-radius: 0 !important;
      }
      .secondary-navigation li:last-child > a {
        background: transparent !important;
      }
       */
     
      a[href="#blog-search"].active,
      a[href="#search-blog"].active {
            background-color: #f2f2f2 !important;
        }

        /* Hover effect */
        a[href="#blog-search"]:hover,
        a[href="#search-blog"]:hover {
            background-color: #f2f2f2 !important;
        }

        /* Active state hover effect */
        a[href="#blog-search"].active:hover,
        a[href="#search-blog"].active:hover {
            background-color: #f2f2f2 !important;
        }

      @media screen and (min-width: 1080px) {
        .search-box .search-field {
          width: 530px;
        }
      }
    </style>
	
   <!-- <div class="gt-blog-header">
      <div class="gt-blog-logo-section">
        <a href="https://blog.golftown.com/en/"
          ><img
            class="img-fluid"
            src="https://sportinglifeblog.ca/wp-content/uploads/2024/05/logo-golftown-blogs.svg"
            alt="Golf Town Blog Logo"
            title="Golf Town"
        /></a>
      </div>
      <p class="gt-blog-tagline">Explore the World of Golf with Us!</p>
    </div>

    <div class="gt-blog-navbar">
      <a href="https://blog.golftown.com/">Blog Home</a>
      <a href="https://blog.golftown.com/en/category/community/"
        >Community News</a
      >
      <a href="https://blog.golftown.com/en/category/tour-news/">Tour News</a>
      <a href="https://blog.golftown.com/en/category/golf-tips/">Golf Tips</a>
      <a href="https://blog.golftown.com/en/category/golf-equipment/"
        >Equipment</a
      >
      <a href="https://blog.golftown.com/en/category/guides/">Guides</a>
      <a href="https://www.golftown.com/en-CA/clothing/">Apparel</a>
      <a href="#Search"
        ><i style="margin-right: 7px" class="fa fa-search"></i>Search Blog</a
      >
    </div>
	  
	<div id="search-container" class="search-box-wrapper hide">
		<div class="search-box">
		<?php get_search_form(); ?>
		</div>
	</div>-->
	  

   
	
<!-- End of New Blog Menu -->

<!-- Disable Old blog menu -->
<style>
  .gt-blogs-main-logo {
    max-width: 525px;
	max-height: 65px;
	margin-bottom: 10px;
  }
</style>

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
			<!-- <h1 class="site-title"> -->
         <h1 class="gt-blogs-main-logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
               <img class="en-nav" src="https://www.golftown.com/on/demandware.static/-/Library-Sites-GolfTownSharedLibrary/default/images/blog-icons/logo-golftown-blogs.svg" width="525" height="65" alt="Golftown Blog Logo"/>

               <img class="fr-nav" src="https://www.golftown.com/on/demandware.static/-/Library-Sites-GolfTownSharedLibrary/default/images/blog-icons/logo-golftown-blogs-fr.svg" width="525" height="65" alt="Golftown Blogues"/>
            </a>
         </h1>
			<p class="gt-blog-tagline"><?php bloginfo( 'name' ); ?>


			
			<div class="search-toggle">
				<a href="#search-container" class="screen-reader-text" aria-expanded="false" aria-controls="search-container"><?php _e( 'Search', 'gt-blog' ); ?></a>
			</div>
		</div>


		<?php if ( has_nav_menu( 'secondary' ) ) : ?>
		<nav role="navigation" class="navigation site-navigation secondary-navigation">
			<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'gt-blog' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
		
			<div id="search-container" class="search-box-wrapper hide">
			<div class="search-box">
				<?php get_search_form(); ?>
			</div>
		</div>
		</nav>


		<?php endif; ?>
	</header> <!-- Disable old blog menu end --> <!-- #masthead -->


<!-- modal popup for blog's search -->
<style>
            /* Modal Styles */
            .search-modal-overlay {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.5);
                z-index: 1000;
                /* for smooth transition */
                opacity: 0;
                transition: opacity 0.3s linear;
            }

            .search-modal {
                display: none;
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background: white;
                z-index: 1001;
                padding: 40px;
                max-width: 800px;
                width: 100%;

                /* for smooth transition */
                opacity: 0;
                transition: opacity 0.3s linear, transform 0.3s linear;
                transform: translate(-50%, -60%);
            }

            .search-modal-content {
                background-color: white;
                padding: 20px;
                border-radius: 5px;
                position: relative;
            }

            .search-modal-header {
                display: flex;
                align-items: center;
                gap: 10px;
                border: 1px solid #E5E7EB; 
                background: #F9FAFB;
                border-radius: 5px;
            }

            .search-modal-header .search-form {
                align-items: center;
                width: 100%;
            }
            .search-modal-header .search-form img {
                margin: 0 10px;
            }
            .search-modal-header input {
                flex-grow: 1;
                padding: 5px;
                border: none;
                outline: none;
                font-size: 20px;
                font-weight: 600;
                background: #F9FAFB;
                color: #4B5563;
                height: 50px;
            }
            .search-modal-header input::placeholder {
                color: #4B5563;
                font-size: 20px;
                font-weight: 600;
            }

            .search-modal-list {
                list-style: none;
                padding: 0;
                margin: 40px 0 0 0;
            }

            .search-modal-list li {
                margin: 10px 0;
            }
            .search-modal-ql-title {
                color: #4B5563;
                font-size: 14px;
                font-weight: 600;
            }
            .search-modal-list li a {
                color: inherit;
                font-size: 16px;
                letter-spacing: 0;
                font-weight: 500;
                line-height: 1.4;
            }
            .search-modal-list li a:hover,
            .search-modal-list li a:focus {
                text-decoration: none !important;
            }
            .search-modal-list li a:hover span {
                text-decoration: underline;
            }

            /* Active States */
            .search-modal-overlay.active {
                opacity: 1;
            }
            
            .search-modal.active {
                opacity: 1;
                transform: translate(-50%, -50%);
            }

            /* Close Button Styling */
            .close-button {
                position: absolute;
                top: -25px;
                right: -20px;
                background: none;
                border: none;
                cursor: pointer;
                padding: 5px;
            }

            .close-button svg {
                width: 24px;
                height: 24px;
                stroke: #333;
            }
            .close-button:hover,
            .close-button:focus,
            .close-button:active {
                background: transparent;
                outline: none !important;
            }

            .close-button:hover svg {
                stroke: #007bff;
            }

            /* hide desktop search container below 767px */
            .hide {
                display: none !important;
            }
            
            img[alt="Arrow Icon"] {
                width: 9px;
                margin-right: 3px;
                margin-bottom: 2px;
            }

            @media (max-width: 576px) {
                .search-modal {
                    padding: 40px 20px;
                }
                .close-button {
                    right: -15px;
                }
            }
            </style>
        <div class="search-modal-overlay" id="search-modal-overlay"></div>
        <div class="search-modal" id="blog-search">
            <div class="search-modal-content">
            <button class="close-button">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 6L6 18" stroke="#333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M6 6L18 18" stroke="#333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
                <div class="search-modal-header">
                    <!-- English Version -->
                    <form role="search" method="get" class="search-form en-nav-flex" action="https://gtstg.wpengine.com/en/">
                        <img src="https://www.golftown.com/on/demandware.static/-/Library-Sites-GolfTownSharedLibrary/default/images/blog-icons/logo-gtblog-blog-search.svg" alt="Search Icon">
                        <input type="search" class="search-field" placeholder="Search Blog..." value="" name="s">
                        
                    </form>
                    <!-- French Version -->
                    <form role="search" method="get" class="search-form fr-nav-flex" action="https://gtstg.wpengine.com/fr/">
                        <img src="https://www.golftown.com/on/demandware.static/-/Library-Sites-GolfTownSharedLibrary/default/images/blog-icons/logo-gtblog-blog-search.svg" alt="Search Icon">
                        <input type="search" class="search-field" placeholder="Rechercher dans le blog..." value="" name="s">
                        
                    </form>
                </div>
                <ul class="search-modal-list">
                    <li>
                        <p class="search-modal-ql-title en-nav">Quick Links</p>
                        <p class="search-modal-ql-title fr-nav">Liens rapides</p>
                    </li>
                    <li>
                        <a class="en-nav" href="https://blog.golftown.com/">
                            <img src="https://www.golftown.com/on/demandware.static/-/Library-Sites-GolfTownSharedLibrary/default/images/blog-icons/icon-angle-right-light.svg" alt="Arrow Icon">
                            <span>Blog Home</span>
                        </a>
                        <a class="fr-nav" href="https://blog.golftown.com/fr/">
                            <img src="https://www.golftown.com/on/demandware.static/-/Library-Sites-GolfTownSharedLibrary/default/images/blog-icons/icon-angle-right-light.svg" alt="Arrow Icon">
                            <span>Blogues</span>
                        </a>
                    </li>
                    <li>
                        <a class="en-nav" href="https://blog.golftown.com/en/category/community/">
                            <img src="https://www.golftown.com/on/demandware.static/-/Library-Sites-GolfTownSharedLibrary/default/images/blog-icons/icon-angle-right-light.svg" alt="Arrow Icon">
                            <span>Community News</span>
                        </a>
                        <a class="fr-nav" href="https://blog.golftown.com/fr/category/nouvelles-de-la-communaute/">
                            <img src="https://www.golftown.com/on/demandware.static/-/Library-Sites-GolfTownSharedLibrary/default/images/blog-icons/icon-angle-right-light.svg" alt="Arrow Icon">
                            <span>Nouvelles de la communauté</span>
                        </a>
                    </li>
                    <li>
                        <a class="en-nav" href="https://blog.golftown.com/en/category/tour-news/">
                            <img src="https://www.golftown.com/on/demandware.static/-/Library-Sites-GolfTownSharedLibrary/default/images/blog-icons/icon-angle-right-light.svg" alt="Arrow Icon">
                            <span>Tour News</span>
                        </a>
                        <a class="fr-nav" href="https://blog.golftown.com/fr/category/nouvelles-du-circuit/">
                            <img src="https://www.golftown.com/on/demandware.static/-/Library-Sites-GolfTownSharedLibrary/default/images/blog-icons/icon-angle-right-light.svg" alt="Arrow Icon">
                            <span>Nouvelles du Circuit</span>
                        </a>
                    </li>
                    <li>
                        <a class="en-nav" href="https://blog.golftown.com/en/category/golf-tips/">
                            <img src="https://www.golftown.com/on/demandware.static/-/Library-Sites-GolfTownSharedLibrary/default/images/blog-icons/icon-angle-right-light.svg" alt="Arrow Icon">
                            <span>Golf Tips</span>
                        </a>
                        <a class="fr-nav" href="https://blog.golftown.com/fr/category/conseils-golf/">
                            <img src="https://www.golftown.com/on/demandware.static/-/Library-Sites-GolfTownSharedLibrary/default/images/blog-icons/icon-angle-right-light.svg" alt="Arrow Icon">
                            <span>Conseils de golf</span>
                        </a>
                    </li>
                    <li>
                        <a class="en-nav" href="https://blog.golftown.com/en/category/golf-equipment/">
                            <img src="https://www.golftown.com/on/demandware.static/-/Library-Sites-GolfTownSharedLibrary/default/images/blog-icons/icon-angle-right-light.svg" alt="Arrow Icon">
                            <span>Equipment</span>
                        </a>
                        <a class="fr-nav" href="https://blog.golftown.com/fr/category/equipement-de-golf/">
                            <img src="https://www.golftown.com/on/demandware.static/-/Library-Sites-GolfTownSharedLibrary/default/images/blog-icons/icon-angle-right-light.svg" alt="Arrow Icon">
                            <span>Équipement</span>
                        </a>
                    </li>
                    <li>
                        <a class="en-nav" href="https://blog.golftown.com/en/category/guides/">
                            <img src="https://www.golftown.com/on/demandware.static/-/Library-Sites-GolfTownSharedLibrary/default/images/blog-icons/icon-angle-right-light.svg" alt="Arrow Icon">
                            <span>Guides</span>
                        </a>
                        <a class="fr-nav" href="https://blog.golftown.com/fr/category/guides-fr/">
                            <img src="https://www.golftown.com/on/demandware.static/-/Library-Sites-GolfTownSharedLibrary/default/images/blog-icons/icon-angle-right-light.svg" alt="Arrow Icon">
                            <span>Guides</span>
                        </a>
                    </li>
                    <li>
                        <a class="en-nav" href="https://blog.golftown.com/en/category/golf-apparel/">
                            <img src="https://www.golftown.com/on/demandware.static/-/Library-Sites-GolfTownSharedLibrary/default/images/blog-icons/icon-angle-right-light.svg" alt="Arrow Icon">
                            <span>Apparel</span>
                        </a>
                        <a class="fr-nav" href="https://blog.golftown.com/fr/category/vetements-de-golf/">
                            <img src="https://www.golftown.com/on/demandware.static/-/Library-Sites-GolfTownSharedLibrary/default/images/blog-icons/icon-angle-right-light.svg" alt="Arrow Icon">
                            <span>Vêtements</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <script>

        document.addEventListener('DOMContentLoaded', function () {
            var trigger = document.querySelector('a[href="#blog-search"]');
            // if it's french page acnhor is changing
            if (!trigger) {
                trigger = document.querySelector('a[href="#search-blog"]');
            }

            var modalOverlay = document.getElementById('search-modal-overlay');
            var modal = document.getElementById('blog-search');
            var closeButton = document.querySelector('.close-button');

            trigger.addEventListener('click', function (e) {
                e.preventDefault();
                
                modalOverlay.style.display = 'block';
                modal.style.display = 'block';
                
                setTimeout(function() {
                    modalOverlay.classList.add('active');
                    modal.classList.add('active');
                }, 10); // Short delay to allow the display changes to take effect
                
            });

            modalOverlay.addEventListener('click', function () {
                modalOverlay.classList.remove('active');
                modal.classList.remove('active');

                setTimeout(function() {
                    modalOverlay.style.display = 'none';
                    modal.style.display = 'none';
                }, 300); // duration of the transition in milliseconds
            });

            closeButton.addEventListener('click', function () {
                modalOverlay.classList.remove('active');
                modal.classList.remove('active');

                setTimeout(function() {
                    modalOverlay.style.display = 'none';
                    modal.style.display = 'none';
                }, 300); // duration of the transition in milliseconds
            });
        });

        </script>

        <!-- end of modal popup for blog's search -->
    
    
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
