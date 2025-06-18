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
	<!-- <link rel="stylesheet" href="https://www.sportinglife.ca/on/demandware.static/-/Library-Sites-SportingLifeSharedLibrary/default/images/corporate/cssjs/style-blog.css"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900%7CCormorant+Garamond:600,700" media="all">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <section class="sl-menu">
        <!-- overrides -->
    <style>
        .sl-menu {
            font-family: "Nunito Sans", sans-serif;
            z-index: 100000;
            position: relative;
        }
        #navigation a, #navigation a:hover, #navigation a:active, #navigation a:visited {
            font-size: 13px;
        }
        @media (min-width: 1024px) {
            .header-container__right a {
                white-space: nowrap;
            }
            .locale-select.menu-utility-user__item {
                line-height: 1.5;
            }
        }
        @media (max-width: 1023px) {
            #wrapper {
                overflow: visible !important;
            }
           
        }
    </style>
	<!-- Sporting Life Menu -->
    <div id="wrapper" class="pt_storefront s-landing">

    <div class="html-slot-container">
<!-- blue bar -->
<link rel="stylesheet prefetch" href="https://sportinglife.ca/on/demandware.static/-/Library-Sites-SportingLifeSharedLibrary/default/images/corporate/cssjs/homepage-template-cssoverride.css">
<link rel="stylesheet prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<style>


.blue-bar-header {
    max-width: 1360px;
    margin: 0 auto;
    z-index: 992;
    position: relative;
    font-family: "Nunito Sans", sans-serif;
}

.flex-notice {
display: -ms-flexbox;
display: -webkit-flex;
display: flex;
-webkit-flex-direction: column;
-ms-flex-direction: column;
flex-direction: column;
-webkit-flex-wrap: nowrap;
-ms-flex-wrap: nowrap;
flex-wrap: nowrap;
-webkit-justify-content: center;
-ms-flex-pack: center;
justify-content: center;
-webkit-align-content: center;
-ms-flex-line-pack: center;
align-content: center;
-webkit-align-items: center;
-ms-flex-align: center;
align-items: center;
}


.flex-notice-item {
-webkit-order: 0;
-ms-flex-order: 0;
order: 0;
-webkit-flex: 1 1 100%;
-ms-flex: 1 1 100%;
flex: 1 1 100%;
-webkit-align-self: center;
-ms-flex-item-align: center;
align-self: center;
}

.flex-notice > a:hover {
text-decoration: none !important;
}

.flex-notice-item a {
    font-weight: 500;
color: #fff;
text-decoration: none;
margin-left: 5px;
/* text-decoration: underline; */
line-height: 1;
}

.flex-notice-item a:hover {
text-decoration: none;
color: #ffffff;
}
.special-notice-item {
    color: #ffffff !important;
/* font-family: 'Montserrat', sans-serif !important; */
text-align: center;
}
.special-notice-item a {
    font-weight: 500;
    color: #fff;
    text-decoration: none;
    margin-left: 5px;
    border-bottom: 1.2px solid #f2f2f2;
}
.flex-notice-item p {
color: #ffffff !important;
display: flex;
align-items: center;
}

.flex-notice-item span {
font-size: 14px;

/* margin-right: 3px;
margin-left: 4px; */
line-height: 1;
}
.flex-notice-item span.noticeh {
    font-weight: 700;
}

.flex-notice-item {
align-items: center;
display: flex;
flex-direction: row;
justify-content: center;
margin-bottom: 0;
}

.noticeh {
font-size: 14px;
font-weight: 600;
margin-bottom: 0;
}

.noticec {
font-weight: 400 !important;
font-size: 14px;
margin-bottom: 0 !important;
margin-top: 0 !important;
}

.learnmore {
font-size: 14px;
}


.blue-bar-header-carousel {
    padding: 10px 0 !important;
}

.blue-bar-header-carousel .owl-prev {
    left: 0;
}
.blue-bar-header-carousel .owl-next {
    right: 0;
}
.owl-prev img,
.owl-next img {
    width: 10px;
}
.owl-prev img {
    margin-left: 0.15rem;
}
.owl-next img {
    margin-right: 0.15rem;
}

@media (max-width: 1023px) {
/* .c-top-promo-banner { */
.blue-bar-header-carousel {
    margin-top: -1px !important;
    border-radius: 0 !important;
}
.flex-notice-item p {
text-align: center;
    align-items: center;
    flex-flow: wrap;
    justify-content: center;
}

.owl-carousel {
margin-bottom: 0 !important
}
}

/* .c-top-promo-banner { */
.blue-bar-header-carousel {
background-color: #22325e !important;
}

.owl-theme .owl-dots .owl-dot.active span,
.owl-theme .owl-dots .owl-dot:hover span {
    background: #fff !important;
}

.owl-theme .owl-dots .owl-dot span {
    background: transparent !important;
    border: 1px solid white !important;
    position: relative;
    z-index: 10;
}

.owl-theme .owl-dots .owl-dot:focus {
    outline: none !important;
}

.owl-theme .owl-dots .owl-dot span {
width: 7px;
height: 7px;
margin: 5px 7px;
display: block;
-webkit-backface-visibility: visible;
transition: opacity .2s ease;
border-radius: 50px;
}

.owl-theme .owl-nav.disabled+.owl-dots {
margin-top: 5px;
height: 15px !important;
}

.owl-carousel {
/*box-shadow: 0 7px 12px -4px rgba(0, 0, 0, 0.4);*/
margin: 0 0 20px 0;

}

.owl-carousel .owl-stage {
display: flex;
align-items: center;
}

/* nav arrows */
.blue-bar-header-carousel .owl-nav {
margin: 0 !important;
}
.blue-bar-header-carousel .owl-prev {
position: absolute;
left: 0;
top: 0;
color: #fff !important;
outline: none !important;
height: 100%;
margin: 0 !important;
background: #22325e !important;
}
.blue-bar-header-carousel .owl-next {
position: absolute;
right: 0;
top: 0;
color: #fff !important;
outline: none !important;
height: 100%;
margin: 0 !important;
background: #22325e !important;
}
.blue-bar-header-carousel .owl-prev i,
.blue-bar-header-carousel .owl-next i {
margin: 0 15px;
}
.blue-bar-header-carousel .owl-prev:hover,
.blue-bar-header-carousel .owl-next:hover {
background: #22325e !important;
}

@media only screen and (max-width: 600px) {
.noticeh {
    font-size: 12px !important;
}

.noticec {
font-size: 12px !important;
}


.learnmore {
font-size: 12px !important;
}

.flex-notice-item span {
font-size: 12px !important;
}

.blue-bar-header-carousel {
    padding: 12px 0 !important;
}
}
@media (max-width: 576px) {
.blue-bar-header-carousel .owl-prev i,
.blue-bar-header-carousel .owl-next i {
    margin: 0 7px;
}
.blue-bar-header-carousel .owl-prev > i.fa-angle-left,
.blue-bar-header-carousel .owl-next > i.fa-angle-right {
    margin-left: 5px;
    margin-right: 5px;
}
}
@media (max-width: 447px) {
.gift-cards-span-bb {
    flex-basis: 100%;
justify-content: center;
}
}
@media (max-width: 425px) {
.blue-bar-header-carousel .item {
    padding: 0 22px !important;
}
}




@media only screen and (max-width: 375px) {
.noticeh {
    font-size: 0.7rem !important;
    
}
.flex-notice-item span {
    margin-top:2px;
}
.noticec {
font-size: 0.7rem !important;
}

.flex-notice-item span {
font-size: 0.7rem !important;
}

.learnmore {
font-size: 0.7rem !important;
}
}

.truck-logo {
margin-right: 0.5rem;
}

.blue-bar-bg {
width: 100vw;
/* max-width: 1920px; */
margin: 0 auto;
position: absolute;
left: 50%;
-webkit-transform: translateX(-50%);
transform: translateX(-50%);
background: #22325e;
background-repeat: no-repeat;
background-size: cover;
background-position: 68% center;
height: 100%;
z-index: 1;
}
</style>

<div class="blue-bar-header position-relative">
<div class="blue-bar-bg"></div>
<div class="owl-carousel owl-theme blue-bar-header-carousel">

<div class="item">
        <div class="flex-notice">

            <div class="flex-notice-item">
              <a taret="_blank" href="https://www.sportinglife.ca/en-CA/help.html#do-you-offer-free-shipping">
                <p class="noticec">
                    <img class="truck-logo" style="width:18px;" src="https://sportinglife.ca/on/demandware.static/-/Library-Sites-SportingLifeSharedLibrary/default/images/homepage/icon-truck-solid-white.svg" alt="delivery truck" width="18" height="14">
                    <span class="noticeh">                       
                    Free shipping</span> &nbsp; <span>on all orders over $99</span> </p>
                  </a>
            </div>
        </div>
    </div>



</div>
</div>
<!-- end of blue bar -->

<script>

    $('.owl-carousel.blue-bar-header-carousel').owlCarousel({
        items: 1,
        // margin:10, 
        loop: true,
        nav: true,
        dots: false,
        autoplay: true,
        autoplayTimeout: 7500,
        smartSpeed: 1000,
        autoplayHoverPause: true,
        navText : ['<img src="https://www.sportinglife.ca/on/demandware.static/-/Library-Sites-SportingLifeSharedLibrary/default/dwb62df893/images/homepage/angle-left-thin-white.svg" width="10" height="20" alt="Left Arrow" >','<img src="https://www.sportinglife.ca/on/demandware.static/-/Library-Sites-SportingLifeSharedLibrary/default/dwb62df893/images/homepage/angle-right-thin-white.svg" width="10" height="20" alt="Right Arrow" >']
    });
// this solves the conflict between different version of jquery    
var $x = jQuery.noConflict();
</script>
<!-- blue bar -->
</div>
<div class="header-banner">
<div class="header-banner-container">
<div class="header-banner__banner">

<style>
  .product-tile__badge--custom {
      background-color: #007ac3 !important;
  }
   
  .product-tile__badge--exclusive {
      display: none !important;
  }
  </style>


<script>
// document.addEventListener('DOMContentLoaded', function() {
setTimeout(function() {
    var menuItems = document.querySelectorAll('.has-sub-menu.menu-nav a');
    for (var i = 0; i < menuItems.length; i++) {
        if (menuItems[i].textContent.trim() === 'Gift Guide') {
            // Create an img element for the SVG icon
            var icon = document.createElement('img');
            icon.src = '/on/demandware.static/-/Library-Sites-SportingLifeSharedLibrary/default/images/pages/gift-guide/icon-gift-light.svg';
            icon.style.width = '16px';
            icon.style.height = '16px';
            icon.style.verticalAlign = 'top';
            icon.style.marginRight = '5px'; // Add some space between the icon and the text

            // Insert the icon before the text in the menu item
            menuItems[i].insertBefore(icon, menuItems[i].firstChild);

            menuItems[i].parentNode.onmouseover = function(e) {
                var subMenu;
                if (window.innerWidth > 1023) {
                    subMenu = e.currentTarget.querySelector('.level-2');
                } else {
                    subMenu = e.currentTarget.querySelector('.level-2 > ul');
                }
                if (subMenu) {
                    subMenu.style.display = 'none';
                }
            };
            menuItems[i].addEventListener('click', function(e) {
                if (window.innerWidth <= 1023) {
                    e.stopPropagation();
                }
            });
        }
    }
}, 100);
// });
</script>


<style>
.product-tile__badges {
    top: unset !important;
    bottom: 0 !important;
}

@media (min-width: 1024px) {
.product-tile__badges {
    top: unset !important;
    bottom: 10px !important;
}
}
</style>



<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">






<style>
  .reviews-compare-wrap {
    display: none !important;
  }

  .c-product-tile-carousel .product-tile .product-price {
    margin-bottom: 0 !important;
}
.active-promo-names {
    margin-bottom: 0 !important;
}

@media (min-width: 768px) {
.c-product-tile-carousel .product-tile {
    margin-bottom: 0 !important;
}
}
</style>


<style>
   
@media (min-width: 1200px) {
#navigation .level-1>li>a {
    padding-right: 1.58vw !important;
    padding-left: 1.58vw !important;
}
}
@media (min-width: 1921px) {
    #navigation .level-1>li>a {
        padding-right: 30px !important;
        padding-left: 30px !important;
    }
}
</style>


<style>
    @media (max-width: 1023.98px) {
        #navigation .menu-utility-user-mobile {
            padding-bottom: 150px;
        }
    }
</style>





<style>
    .c-top-promo-banner {
        background: #fff !important;
    }
</style>

<style>
    /* makes images to go full width in hp tiles for mobile screens */
    /* @media (max-width: 768px) {
        div.s-graphical-asset-1up > a.c-graphical-asset > .c-graphical-asset__image,
        div.c-graphical-asset-group--2up > div.c-graphical-asset > .c-graphical-asset__image {
            margin: 0 -20px;
        }
    } */
    
    /* makes images to go full width in hp tiles for mobile screens */
</style>

<style>
    #add-to-cart {
        background-color: #007AC3 !important;
        border-color: #007AC3 !important;
    }
    #add-to-cart:hover {
        background-color: #005290 !important;
        border-color: #005290 !important;
    }
</style>


<style>
.product-variations .attribute .size-chart-link a, .product-options .attribute .size-chart-link a {
   text-decoration: underline;
}
.product-variations .attribute .size-chart-link a:hover, .product-options .attribute .size-chart-link a:hover {
  text-decoration: none;
}
</style>


<style>
  .pdp-swimwear-returns {
    width: 100%;
    max-width: 375px;
    background-color: #f6f6f6;
    /*background-color: #eaf7ff;*/
    border-radius: 3px;
    padding: 5px 15px;
    display: flex;
    flex-direction: row;
    align-items: center;
    place-content: space-between;
    margin-top: 5px;
    margin-bottom: 10px;
    min-height: 28px;
  }

  .pdp-swimwear-returns-title {
    font-size: 12px;
    font-weight: 600;
    display: flex;
    align-items: center;
    min-height: 28px;
  }

  .pdp-swimwear-returns-more {
    font-size: 10px;
    font-weight: 400;
    text-decoration: underline;
    display: flex;
    align-items: center;
    cursor: pointer;
    min-height: 28px;
    white-space: nowrap;
    margin-left: 8px;
  }

  .pdp-swimwear-returns-legal-title {
    font-size: 14px;
    font-weight: 600;
    letter-spacing: 0;
  }

  .pdp-swimwear-returns-legal-subtitle {
    font-size: 12px;
    font-weight: 600;
    letter-spacing: 0;
    margin-bottom: 5px;
  }

  .pdp-swimwear-returns-legal-details {
    font-size: 12px;
    font-weight: 400;
    margin-bottom: 10px;
    padding-bottom: 0;
    margin-left: -15px !important;
  }

  @media only screen and (max-width: 767px) {
    .pdp-swimwear-returns {
      width: 100%;
      max-width: 100%;
    }
  }
</style>


<style>
.refinements__inner.is-sticky {
        max-height: calc(100vh - 151px);
           padding-bottom: 50px;
}
</style>


<style>
    img[src*="insight.adsrvr.org"] {
    display: none;
}
</style>


<style>
  .product-info-container 
  .c-accordion__item.is-expanded>.c-accordion__body--tall {
    max-height: 20000px;
  }
</style>


<style>
    #return-to-top {
        z-index: 10000000;
    }
</style>


<style>
  
    .content-slot.slot-grid-header > .html-slot-container h1:not(.hero-top-page-shop-title):not(.h1-header-title),
    h1.category-header,
    .cat-header-slots > .html-slot-container h1:not(.hero-top-page-shop-title):not(.h1-header-title)
     {
        font-family: 'Nunito Sans', sans-serif;
        font-weight: 600;
        font-size: 28px !important;
        letter-spacing: 0;
        margin-bottom: 20px !important;
    }
    
    .brands-landing-header {
        letter-spacing: 0;
        font-family: 'Nunito Sans', sans-serif;
        font-weight: 600;
        font-size: 30px !important;
    }
    @media (max-width: 576px) {
     
        .content-slot.slot-grid-header > .html-slot-container h1:not(.hero-top-page-shop-title):not(.h1-header-title),
        h1.category-header,
        .cat-header-slots > .html-slot-container h1:not(.hero-top-page-shop-title):not(.h1-header-title) {
            font-size: 24px !important;
        }
    }
</style>


<style>
    body {
      overflow-x: hidden;
    }
   #wrapper {
      overflow: hidden;
    }
  </style>


<style>
    .searchBrand {
    font-size: 16px !important;
    }
</style>


<style>
    @media (max-width: 1023px) {
        .slick-dotted {
            margin-bottom: 60px;
        }
    }
</style>


<style>
        .c-graphical-asset__body > .c-graphical-asset__buttons {
            max-width: inherit;
            flex-wrap: nowrap !important;
        }
    </style>
<script>
        document.addEventListener('DOMContentLoaded', function(event) {

            const graphicalAssetButtons = document.querySelectorAll('.c-graphical-asset__buttons');

            graphicalAssetButtons.forEach((buttons) => {
                const buttonElements = buttons.querySelectorAll('.c-graphical-asset__button');
                const numButtons = buttonElements.length;
                let width;

                if (numButtons === 2) {
                    width = 'calc(50% - 10px)';
                } else if (numButtons === 3) {
                    width = 'calc(33.3% - 10px)';
                } else if (numButtons === 4) {
                    width = 'calc(50% - 10px)';
                }

                if (width) {
                    buttonElements.forEach((button) => {
                    button.style.width = width;
                    button.style.maxWidth = '177px';
                    });
                }
            });

        });
    </script>


<style>
.c-graphical-asset__wrapper > .c-graphical-asset__image {
    margin-bottom: 30px !important;
}
</style>
<style>
/* Search bar text size reset for mobile */
@media (max-width: 767.98px) {
.header-search .header-search__input, .header-search .header-search__input::placeholder {
    font-size: 16px!important;
}
}

/* Hide country availability pdp */
.pdp-main .country-availability {
    display: none !important;
}

/* PDP size name spacing*/
.product-variations .attribute .label, .product-options .attribute .label {
    margin-bottom: 10px !important;
}

.product-variations .attribute .size-chart-link, .product-options .attribute .size-chart-link {
    margin: 0 0 10px 0 !important;
}



/* Hide phone number from gray bar start - DO NOT REMOVE */
 .menu-utility-user__item.phone {
    display: none !important;
} 
/* Hide phone number from gray bar end - DO NOT REMOVE */

/* remove this to display available for in stock and "Availability for Shipping" pickup on PDP */
    .availability-instore.product-availability > .availability-instore__label,
.availability-storepickup.product-availability {
        display: none !important;
    }
    /* remove this to display available for in stock pickup on PDP */


/* greyed out (not available) can you make the slash through line go to the top and bottom edges on PDP */
.product-variations .swatches li.unselectable a::after, .product-variations .swatches li.selectable-partial a::after, .product-options .swatches li.unselectable a::after, .product-options .swatches li.selectable-partial a::after {
    height: 205%;
    top: -20px;
    transform: translateX(-50%) rotateZ(62deg);
}
/* .product-variations .swatches li.unselectable a::after, .product-variations .swatches li.selectable-partial a::after, .product-options .swatches li.unselectable a::after, .product-options .swatches li.selectable-partial a::after {
    display: none;
}
.selectable-partial > a.swatchanchor {
    background: linear-gradient(to left top, transparent 49%, currentColor 50%, currentColor 51%, transparent 52%);
}  */

@media (max-width: 768px) {
div.mobile-only {
    min-height: 42px;
}
}

/* controls switch toggle for clearance - DO NOT REMOVE */
.switch {
        -webkit-appearance: none !important;
        -moz-appearance: none !important;
        appearance: none !important;
        border: 0 !important;
        }
        @media (max-width: 576px) {
            .switch:focus {
                outline: none !important;
            }
            .switch {
                outline-width: 0;
            }
        }
/* controls switch toggle for clearance - DO NOT REMOVE */

footer {
/* background-image: url('/on/demandware.static/-/Library-Sites-SportingLifeSharedLibrary/default/images/homepage/footer/bg2.jpg') !important;
    background-size: cover; */
    /* height: 800px; */
    /* background-position: center center; */
}

@media screen and (max-width: 1023px) {
footer {
background-image: none !important;
height: unset !important;
background-size: unset !important;
}
.header-banner {
   display: none;
}
}

@media screen and (min-width: 1024px) {
footer {
    border-bottom: none !important;
}
}
/* footer background image CSS end - DO NOT REMOVE */


/* Shop all sale menu link hide default on mobile start */
 .level-2__row ul:first-child li:first-child {
  display: none !important;
} 
/* Shop all sale menu link hide default on mobile end */

.header-promotion {
display: flex;
}

.header-promotion a {
color: #000 !important;
text-decoration: none;
}

.header-promotion a:hover {
text-decoration: underline !important;
}

.header-banner__util a {
    text-decoration: none;
}
.header-banner__util a:hover {
    text-decoration: underline;
}
.header-container__right a  {
    text-decoration: none;
}
.header-container__right a:hover {
    text-decoration: underline;
}

/* remove this to display available for in stock pickup on PDP */
.availability-instore__label {
display: none !important;
}
/* remove this to display available for in stock pickup on PDP */


/* Overflow fix from blue bar on PDP - DO NOT REMOVE */
/* #wrapper {
 overflow-x: hidden !important;
} */
/* Overflow fix from blue bar on PDP - DO NOT REMOVE */


/* DO NOT REMOVE - Add pill to highlight selected facet */
#category-level-1 .refinement-link.active.font-weight-bold {
    background: #f3f2f2 !important;
    padding: 2px 10px !important;
    border-radius: 50px !important;
    font-weight: 600 !important;
}
/* DO NOT REMOVE - Add pill to highlight selected facet */

/* moves options a bit closer to each other */
    @media (min-width: 1024px) {
        .menu-utility-user__item {
            margin-left: 20px !important;
        }
    }

</style>



















<script>
document.addEventListener('DOMContentLoaded', function(event) {

    // code added 04/29/2020 --start
    var screenSizeForExpand = window.matchMedia("(max-width: 1023px)");
    function expandCategory(x) {
        var footerItem = document.getElementsByClassName("footer-item")[2].getElementsByClassName("c-accordion__item js-accordion__item")[0];
        var details = document.getElementById("product-description-tab");

        //check whether customer support exists
        if(typeof(footerItem) != 'undefined' && footerItem != null){
            if (x.matches) { // If media query matches
                footerItem.classList.add("is-expanded");
            } else {
                footerItem.classList.remove("is-expanded");
            }
        }

        //check whether details exists
        if(typeof(details) != 'undefined' && details != null){
            if (x.matches) { // If media query matches
                details.classList.add("is-expanded");
            } else {
                details.classList.remove("is-expanded");
            }
        }
    }
    expandCategory(screenSizeForExpand) // Call listener function at run time
    screenSizeForExpand.addListener(expandCategory) // Attach listener function on state changes
    // code added 04/29/2020 --end

  var yesRadioButton = document.querySelector("input[id='dwfrm_optin_newsletterOptIn_true']");
  var noRadioButton = document.querySelector("input[id='dwfrm_optin_newsletterOptIn_false']");
// if it's on the right page
if (typeof(yesRadioButton) != 'undefined' && yesRadioButton != null)
        {
            yesRadioButton.checked = true;
        }

        // if it's on the right page
  if (typeof(noRadioButton) != 'undefined' && noRadioButton != null)
        {
            noRadioButton.removeAttribute("checked");
        }

 var yesRadioButton1 = document.querySelector("input[id='dwfrm_optin_thirdPartyOptIn_true']");
 var noRadioButton1 = document.querySelector("input[id='dwfrm_optin_thirdPartyOptIn_false']");
 // if it's on the right page
 if (typeof(yesRadioButton1) != 'undefined' && yesRadioButton1 != null)
        {
            yesRadioButton1.checked = true;
        }

        // if it's on the right page
  if (typeof(noRadioButton1) != 'undefined' && noRadioButton1 != null)
        {
            noRadioButton1.removeAttribute("checked");
        }


});
</script>



<style>
.header-promotion a {
/* line-height: 1.5; */
line-height: 1.6;
}
@media (min-width: 1024px) {
            .menu-utility-user__item {
                margin-left: 20px !important;
            }
        }
</style>
<div class="header-promotion">
<a href="https://www.sportinglife.ca/en-CA/rewards.html">
<span>SL REWARDS</span>

</a>
<a href="https://cws.givex.com/cws4.0/sportinglife/" target="_blank" class="menu-utility-user__item" style="text-transform: none;">
<span>GIFT CARDS</span>
</a>
<a href="https://www.sportinglife.ca/en-CA/help.html" class="menu-utility-user__item" style="text-transform: none;">
<span>HELP</span>
</a>
</div>


<script>
    // Create a meta tag
    var metaTag = document.createElement('meta');
    
    // Set the attributes for the meta tag
    metaTag.setAttribute('name', 'theme-color');
    metaTag.setAttribute('content', '#ffffff');

    // Append the meta tag to the head section
    document.head.appendChild(metaTag);
  </script>

<style>
    .top-banner {
        z-index: 1001 !important;
        transition: top 0.2s ease-in-out;
    }

    @media (min-width: 1024px) {
        .has-sticky-header .top-banner {
            padding-top: 15px;
        }
        .nav-up {
            top: -145px !important;
        }
    }

    @media (max-width: 1024px) {
        .nav-down {
            /* top: 0 !important; */
            padding-top: 0;
        }
        .nav-up {
            top: -85px !important;
        }
    }

    @media (max-width: 767px) {
        .nav-up {
            top: -75px !important;
        }
    }
</style>

<style id="filter-height-adjust">
</style>
<script>
    document.addEventListener('DOMContentLoaded', function (event) {

        

        var observer;

        // menu's behaviour on clicking refining filter
        var mobileRefinementDiv = document.querySelector('.mobile-refinement-filter__c-accordion__item');
        // check if you in the right page
        if (mobileRefinementDiv) {
            // let bannerSpace = document.querySelector(".top-banner");
            // check if blue bar is presented on screen
            var bannerHeader = document.querySelector("#header");

            observer = new MutationObserver(function (mutations) {
                mutations.forEach(function (mutation) {
                    if (mutation.attributeName === 'class') {
                        if (mobileRefinementDiv.classList.contains('is-expanded')) {
                            bannerHeader.classList.remove("nav-down");
                            bannerHeader.classList.remove("nav-up");

                            // adjust the position for fixed refinement menu popup
                            var combinedHeightforTop = void 0,
                                combineHeightforInner = void 0,
                                blueBarHeight = void 0,
                                stickyHeight = void 0;

                            // lets calculate how much blue bar is currently visible on the screen first
                            var blueBar = void 0,
                                rect = void 0,
                                scrollTop = void 0,
                                scrollBottom = void 0,
                                blueBarTop = void 0,
                                blueBarBottom = void 0,
                                visibleHeight = void 0;
                            blueBar = document.querySelector('.blue-bar-header.position-relative');
                            rect = blueBar.getBoundingClientRect();
                            scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                            scrollBottom = scrollTop + window.innerHeight;
                            blueBarTop = rect.top + scrollTop;
                            blueBarBottom = blueBarTop + rect.height;
                            visibleHeight = Math.max(0, Math.min(blueBarBottom, scrollBottom) - Math.max(blueBarTop, scrollTop));

                            // check if blue bar is on the screen
                            if (document.querySelector('.has-sticky-header .blue-bar-header.position-relative')) {
                                blueBarHeight = 0;
                            } else {
                                blueBarHeight = visibleHeight;
                            }

                            // update the top gaps using CSS rule insertion with javascript
                            var styleTag = document.querySelector('style#filter-height-adjust');
                            var styleSheet = styleTag.sheet;

                            combinedHeightforTop = blueBarHeight + bannerHeader.offsetHeight;
                            styleSheet.insertRule('#mobile-refinements .refinements-top-nav-bar { top: ' + combinedHeightforTop + 'px; }', styleSheet.cssRules.length);

                            combineHeightforInner = blueBarHeight + bannerHeader.offsetHeight + 33;
                            stickyHeight = combineHeightforInner - 92 + 103;
                            styleSheet.insertRule('#mobile-refinements .refinements__inner { margin-top: ' + combineHeightforInner + 'px; height: calc(100% - ' + stickyHeight + 'px); }', styleSheet.cssRules.length);

                            combineHeightforInner = combineHeightforInner + 13;
                            styleSheet.insertRule('#mobile-refinements .refinement .c-accordion__item.is-expanded .c-accordion__body { top: ' + combineHeightforInner + 'px; }', styleSheet.cssRules.length);
                        }
                    }
                });
            });

            observer.observe(mobileRefinementDiv, { attributes: true });

            // when user selects any option from filter, it renders mutationObserver as well other function useless, so we have check for URL changes in order to catch that event

            // Store the current URL
            var currentUrl = window.location.href;

            // Check for URL changes every second
            setInterval(function () {
                if (window.location.href !== currentUrl) {
                    // The URL has changed, mutationObserver doesn't work, so assign click event to filter button

                    var accordionHeader = document.querySelector('.c-accordion__header.js-accordion__target.mobile-refinement-filter__c-accordion__header.d-lg-none');

                    accordionHeader.addEventListener('click', function (event) {
                        bannerHeader.classList.remove("nav-down");
                        bannerHeader.classList.remove("nav-up");

                        // adjust the position for fixed refinement menu popup
                        var combinedHeightforTop = void 0,
                            combineHeightforInner = void 0,
                            blueBarHeight = void 0,
                            stickyHeight = void 0;

                        // lets calculate how much blue bar is currently visible on the screen first
                        var blueBar = void 0,
                            rect = void 0,
                            scrollTop = void 0,
                            scrollBottom = void 0,
                            blueBarTop = void 0,
                            blueBarBottom = void 0,
                            visibleHeight = void 0;
                        blueBar = document.querySelector('.blue-bar-header.position-relative');
                        rect = blueBar.getBoundingClientRect();
                        scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                        scrollBottom = scrollTop + window.innerHeight;
                        blueBarTop = rect.top + scrollTop;
                        blueBarBottom = blueBarTop + rect.height;
                        visibleHeight = Math.max(0, Math.min(blueBarBottom, scrollBottom) - Math.max(blueBarTop, scrollTop));

                        // check if blue bar is on the screen
                        if (document.querySelector('.has-sticky-header .blue-bar-header.position-relative')) {
                            blueBarHeight = 0;
                        } else {
                            blueBarHeight = visibleHeight;
                        }

                        // update the top gaps using CSS rule insertion with javascript
                        var styleTag = document.querySelector('style#filter-height-adjust');

                        var styleSheet = styleTag.sheet;

                        combinedHeightforTop = blueBarHeight + bannerHeader.offsetHeight;
                        styleSheet.insertRule('#mobile-refinements .refinements-top-nav-bar { top: ' + combinedHeightforTop + 'px; }', styleSheet.cssRules.length);

                        combineHeightforInner = blueBarHeight + bannerHeader.offsetHeight + 33;
                        stickyHeight = combineHeightforInner - 92 + 103;
                        styleSheet.insertRule('#mobile-refinements .refinements__inner { margin-top: ' + combineHeightforInner + 'px; height: calc(100% - ' + stickyHeight + 'px); }', styleSheet.cssRules.length);

                        combineHeightforInner = combineHeightforInner + 13;
                        styleSheet.insertRule('#mobile-refinements .refinement .c-accordion__item.is-expanded .c-accordion__body { top: ' + combineHeightforInner + 'px; }', styleSheet.cssRules.length);
                    });

                    // Update the current URL to the new URL
                    currentUrl = window.location.href;
                }
            }, 1000);
        }

        //end of the code for menu's behaviour on clicking refining filter

        // end on click event for all options

        // hide menu on scroll part

       


        var didScroll;
        var lastScrollTop = 0;
        var delta = 5;
        var banner = document.querySelector(".top-banner");

        function throttle(func, wait) {
            let timeout;
            return function() {
                const context = this, args = arguments;
                if (!timeout) {
                timeout = setTimeout(function() {
                    timeout = null;
                    func.apply(context, args);
                }, wait);
                }
            };
        }

        // wait until all assets will be loaded, so late loading image assets on page load doesn't fire "scroll" event
        window.addEventListener("load", function (event) {
            console.log("all content has been loaded");
            setTimeout(function () {
                document.addEventListener("scroll", function (event) {
                    didScroll = true;
                });
            }, 500);
        });

      

        function hasScrolled() {
            const st = window.scrollY;
            const threshold = 150;  // Set the threshold to any value you find suitable.

            if (Math.abs(lastScrollTop - st) <= delta) return;

            // Only hide the menu if the user has scrolled down more than the threshold
            if (st > threshold) {
                if (st > lastScrollTop) {
                banner.classList.remove("nav-down");
                banner.classList.add("nav-up");
                } else {
                banner.classList.remove("nav-up");
                banner.classList.add("nav-down");
                }
            } else {
                // Always show the menu if the user has scrolled up above the threshold
                banner.classList.remove("nav-up");
                banner.classList.add("nav-down");
            }
            lastScrollTop = st;
            }


        window.addEventListener("scroll", throttle(hasScrolled, 100));


    });
</script>
</div>
<div class="header-banner__util">

<div class="menu-utility-user">
<a class="menu-utility-user__item phone" href="tel:+18779255585">+1-877-925-5585</a>
<span class="locale-select menu-utility-user__item">
<!-- <a href="https://stores.sportinglife.ca/en" "="">EN</a> -->
<a href="https://www.sportinglife.ca/fr-CA/homepage" "="">FR</a>
</span>
</div>
</div>
</div>
</div>
<header id="header" class="top-banner">
<div class="header-container">
<div class="header-container__left d-flex d-lg-none">
<a href="#navigation" class="menu-toggle js-a-toggle"><img src="https://www.sportinglife.ca/on/demandware.static/-/Library-Sites-SportingLifeSharedLibrary/default/images/site-icons/svg-burger.svg" class="menu-toggle__icon--burger menu-toggle__icon svg-symbol sls-custom"><img src="https://www.sportinglife.ca/on/demandware.static/-/Library-Sites-SportingLifeSharedLibrary/default/images/site-icons/svg-close-x.svg" class="menu-toggle__icon menu-toggle__icon--close svg-symbol sls-custom">


<span class="sr-only">Menu</span>
</a>
</div>
<h1 class="primary-logo">
<a href="https://www.sportinglife.ca/" title="Sporting Life Online Home">
<picture>
<source srcset="https://sportinglife.ca/on/demandware.static/Sites-SportingLife-Site/-/default/dw19129031/images/logo.svg" media="(min-width: 768px)" width="295px" height="51px">
<source srcset="https://sportinglife.ca/on/demandware.static/Sites-SportingLife-Site/-/default/dw88c2ec15/images/logo-mobile.svg" media="(max-width: 767px)" width="80px" height="35px">
<img src="https://www.sportinglife.ca/on/demandware.static/Sites-SportingLife-Site/-/default/dw19129031/images/logo.svg" alt="Sporting Life Online">
</picture>
</a>
</h1>
<div id="search" class="header-search">


<form class="header-search__container" role="search" action="https://www.sportinglife.ca/en-CA/search" method="get" name="simpleSearch" novalidate="novalidate">
<button class="header-search__submit" type="submit">
<span class="sr-only">Search</span>
<!-- dwMarker="linclude" dwTemplateTitle="/default/components/svg.isml (app_storefront_core)" dwTemplateURL="http://localhost:60606/target=/app_storefront_core/cartridge/templates/default/components/svg.isml" -->
<img src="https://www.sportinglife.ca/on/demandware.static/-/Library-Sites-SportingLifeSharedLibrary/default/images/site-icons/svg-search.svg" class="header-search__submit__icon svg-symbol sls-custom" style="width:28px;height:28px;margin-right:5px;margin-bottom:4px;">
<!-- <svg class="header-search__submit__icon svg-symbol" aria-hidden="true">
<use xlink:href="https://www.sportinglife.ca/on/demandware.static/-/Library-Sites-SportingLifeSharedLibrary/default/images/site-icons/svg-search.svg"></use>
</svg> -->

</button>
<label class="sr-only" for="q">Search Catalog</label>
<input class="header-search__input input-text no-validate" type="search" id="q" name="q" value="" placeholder="Search" autocomplete="off">
<input type="hidden" name="lang" value="en_CA">
</form>
</div>
<div class="header-container__right d-flex justify-content-end">
<div class="user-info">
<a class="menu-utility-user__item" href="https://www.sportinglife.ca/en-CA/account" title="Go to: Sign In"><img src="https://www.sportinglife.ca/on/demandware.static/-/Library-Sites-SportingLifeSharedLibrary/default/images/site-icons/svg-user.svg" class="user-toggle__icon svg-symbol sls-custom" style="width: 26px;">

<span class="d-none d-lg-block">Account</span>
</a>
</div>
<span class="store-locator stores">
<a class="menu-utility-user__item" href="https://www.sportinglife.ca/en-CA/stores"><img src="https://www.sportinglife.ca/on/demandware.static/-/Library-Sites-SportingLifeSharedLibrary/default/images/site-icons/svg-icon-location-dot-light.svg" class="location__icon svg-symbol sls-custom">

Stores
</a>
</span>
<a href="#search" class="search-toggle search-toggle--desktop js-a-toggle" data-js-a-toggle-focus="q">
<span class="search-toggle__label">Search</span>
<svg class="search-toggle__icon svg-symbol" aria-hidden="true">
<use href="https://www.sportinglife.ca/on/demandware.static/-/Library-Sites-SportingLifeSharedLibrary/default/images/site-icons/svg-search.svg"></use>
</svg>
</a>
<div id="mini-cart">


<div class="mini-cart-total">
<a class="mini-cart-link mini-cart-empty" href="https://www.sportinglife.ca/en-CA/cart" title="View Cart"><img src="https://www.sportinglife.ca/on/demandware.static/-/Library-Sites-SportingLifeSharedLibrary/default/images/site-icons/svg-cart.svg" class="mini-cart-link__icon svg-symbol sls-custom" style="width:30px;height:30px;">

<span class="mini-cart-link__label d-none d-lg-inline">Cart</span>
</a>
</div>
</div>
</div>
</div>
<div class="header-container padding-navigation">

<!-- nav -->
<nav id="navigation" role="navigation">
    <ul class="menu-category level-1">
    <li class="pseudo-has-sub-menu mobile-user-utility d-flex d-lg-none">
    <a href="https://www.sportinglife.ca/en-CA/stores"><img src="https://www.sportinglife.ca/on/demandware.static/-/Library-Sites-SportingLifeSharedLibrary/default/images/site-icons/svg-icon-location-dot-light.svg" class="gift-location__icon svg-symbol sls-custom">
    
    Stores
    </a>
    <a href="https://cws.givex.com/cws4.0/sportinglife/" target="_blank"><img src="https://www.sportinglife.ca/on/demandware.static/-/Library-Sites-SportingLifeSharedLibrary/default/images/site-icons/svg-gift-card.svg" class="gift-card__icon svg-symbol sls-custom">
    
    Gift Cards
    </a>
    </li>
    <li class="menu-nav">
    <a href="https://www.sportinglife.ca/en-CA/new/">
    New
    </a>
    
    </li>
    <li class="menu-nav">
    <a href="https://www.sportinglife.ca/en-CA/brands">
    Our Brands
    </a>
    </li>
    <li class="menu-nav">
    <a href="https://www.sportinglife.ca/en-CA/women/">
    Women
    </a>
   
    </li>
    <li class="menu-nav">
    <a href="https://www.sportinglife.ca/en-CA/men/">
    Men
    </a>
    
    </li>
    <li class="menu-nav">
    <a href="https://www.sportinglife.ca/en-CA/kids/">
    Kids
    </a>
    
    </li>
    <li class="menu-nav">
    <a href="https://www.sportinglife.ca/en-CA/shoes/">
    Shoes
    </a>
   
    </li>
    <li class="menu-nav">
    <a href="https://www.sportinglife.ca/en-CA/equipment/">
    Equipment
    </a>
    
    </li>
    <li class="menu-nav">
    <a href="https://www.sportinglife.ca/en-CA/sale/" style="color:#007ac3;font-weight:700;">
    Sale
    </a>
  
    </li>
    <li class="menu-nav">
    <a href="https://www.sportinglife.ca/en-CA/expert-services/">
    Expert Services
    </a>
   
    </li>
    </ul>
    <div class="menu-utility-user-mobile">
    <ul>
    <li><a class="menu-utility-user-mobile__item" href="https://www.sportinglife.ca/en-CA/help.html">Help</a></li>
    <li><a class="menu-utility-user-mobile__item" href="https://www.sportinglife.ca/en-CA/rewards">Rewards</a></li>
    <li><a class="menu-utility-user-mobile__item" target="_blank" href="https://www.sportinglife.ca/blog/">Blog</a></li>
    </ul>
    <div class="locale-select">
    <a href="https://www.sportinglife.ca/fr-CA/homepage" "="" data-locale="fr_CA" class="locale-select-link">
    Français
    </a>
    <div class="locale-select__options">
    <a href="https://www.sportinglife.ca/fr-CA/homepage" "="" data-locale="fr_CA" class="locale-select-link">Français</a>
    </div>
    </div>
    </div>
    </nav>
<!-- nav -->
</div>
</header>



<script type="text/javascript">

(function(){
window.Constants = {"AVAIL_STATUS_IN_STOCK":"IN_STOCK","AVAIL_STATUS_PREORDER":"PREORDER","AVAIL_STATUS_BACKORDER":"BACKORDER","AVAIL_STATUS_NOT_AVAILABLE":"NOT_AVAILABLE"};
window.Resources = {"I_AGREE":"I Agree","TRACKING_CONSENT":"Yes","TRACKING_NO_CONSENT":"No","CLOSE":"Close","NO_THANKS":"No, thanks","OK":"OK","ARE_YOU_HUMAN":"Are you a Human Being?","SHIP_QualifiesFor":"This shipment qualifies for","CC_LOAD_ERROR":"Couldn't load credit card!","COULD_NOT_SAVE_ADDRESS":"Could not save address. Please check your entries and try again.","REG_ADDR_ERROR":"Could Not Load Address","BONUS_PRODUCT":"Bonus Product","BONUS_PRODUCTS":"Bonus Products","SELECT_BONUS_PRODUCTS":"Select Bonus Products","SELECT_BONUS_PRODUCT":"product.selectbonusproduct","BONUS_PRODUCT_MAX":"The maximum number of bonus products has been selected. Please remove one in order to add additional bonus products.","BONUS_PRODUCT_TOOMANY":"You have selected too many bonus products. Please change the quantity.","SIMPLE_SEARCH":"Search","SUBSCRIBE_EMAIL_DEFAULT":"Email Address","CURRENCY_SYMBOL":"C$","MISSINGVAL":"Please enter {0}","SERVER_ERROR":"Server connection failed!","MISSING_LIB":"jQuery is undefined.","BAD_RESPONSE":"Bad response - parser error!","INVALID_PHONE":"Please specify a valid phone number.","INVALID_POSTAL":"Please enter postal code in this format - \"A1A 1A1\"","REMOVE":"Remove","QTY":"Qty","EMPTY_IMG_ALT":"Remove","COMPARE_BUTTON_LABEL":"Compare Items","COMPARE_CONFIRMATION":"This will remove the first product added for comparison. Is that OK?","COMPARE_REMOVE_FAIL":"Unable to remove item from list","COMPARE_ADD_FAIL":"Unable to add item to list","ADD_TO_CART_FAIL":"Unable to add item '{0}' to cart","REGISTRY_SEARCH_ADVANCED_CLOSE":"Close Advanced Search","GIFT_CERT_INVALID":"Unable to retrieve gift card balance.","GIFT_CERT_INVALID_NUMBER":"Invalid Gift Card Number or PIN","GIFT_CERT_BALANCE":"Your current gift certificate balance is","GIFT_CERT_AMOUNT_INVALID":"Gift Certificate can only be purchased with a minimum of 5 and maximum of 5000","GIFT_CERT_MISSING":"Please enter a gift certificate code.","GIFT_PIN_MISSING":"Please enter a gift certificate pin.","GIFT_CERT_NO_AMOUNT":"Gift certificate has no amount.","INVALID_OWNER":"This appears to be a credit card number. Please enter the name of the card holder.","COUPON_CODE_MISSING":"Please enter a coupon code.","COOKIES_DISABLED":"Your browser is currently not set to accept cookies. Please turn this functionality on or check if you have another program set to block cookies.","BML_AGREE_TO_TERMS":"You must agree to the terms and conditions","CHAR_LIMIT_MSG":"You have {0} characters left out of {1}","CONFIRM_DELETE":"Do you want to remove this {0}?","TITLE_GIFTREGISTRY":"gift registry","TITLE_ADDRESS":"address","TITLE_CREDITCARD":"credit card","SERVER_CONNECTION_ERROR":"Server connection failed!","IN_STOCK_DATE":"The expected in-stock date is {0}.","IN_STOCK":"In Stock","ITEM_STATUS_NOTAVAILABLE":"This item is currently not available.","INIFINITESCROLL":"Show All","STORE_NEAR_YOU":"What's available at a store near you","SELECT_STORE":"Select Store","USE_LOCATION":"Use Current Location?","SELECTED_STORE":"Selected Store","PREFERRED_STORE":"Preferred Store","SET_PREFERRED_STORE":"Show Preferred Store","SHOW_PREFERRED_STORE":"Set Preferred Store","CHANGE_PREFERRED_STORE":"Change Your Preferred Store","ENTER_ZIP":"Please a Enter Postal Code","INVALID_FNAME":"Please enter a valid first name. Special characters not permitted","INVALID_LNAME":"Please enter a valid last name. Special characters not permitted","INVALID_NAME":"Please enter a valid value. Special characters not permitted","INVALID_ZIP":"Please enter postal code in this format - \"A1A 1A1\"","NOSTOREFOUND":"Sorry, there are no stores within {0} {1} from Postal Code ({2}).","SEARCH":"Search","CHANGE_LOCATION":"Change Location","CONTINUE_WITH_STORE":"Continue with preferred store","CONTINUE":"Continue","SEE_MORE":"See More Stores","SEE_LESS":"See Fewer Stores","QUICK_VIEW":"Quick View","QUICK_VIEW_POPUP":"Product Quick View","TLS_WARNING":"We value your security!<br/>We detected that you are using an outdated browser.<br/>Update you browser to continue a secure shopping experience.","CSRF_TOKEN_MISMATCH":"CSRF Token mismatch","REQUEST_GENERAL_ERROR":"There was a problem sending your request. Please try again. If the problem persists please contact {0} for further assistance.","REQUEST_GENERAL_SUCCESS":"We have received your request and will be processed. Please contact {0} for further assistance.","CUSTOMER_SERVICE":"Customer Service","MONERIS_MIN":"MIN","MONERIS_SEC":"SEC REMAINING","MONERIS_FR_TIME":"global.fr.time","VALIDATE_REQUIRED":"This field is required.","VALIDATE_REMOTE":"Please fix this field.","VALIDATE_EMAIL":"Please enter a valid email address.","VALIDATE_DOB":"Please enter a valid date of birth MM/DD/YYYY.","VALIDATE_URL":"Please enter a valid URL.","VALIDATE_DATE":"Please enter a valid date.","VALIDATE_DATEISO":"Please enter a valid date ( ISO ).","VALIDATE_NUMBER":"Please enter a valid number.","VALIDATE_DIGITS":"Please enter only digits.","VALIDATE_CREDITCARD":"Please enter a valid credit card number.","VALIDATE_EQUALTO":"Please enter the same value again.","VALIDATE_MAXLENGTH":"Please enter no more than {0} characters.","VALIDATE_MINLENGTH":"Please enter at least {0} characters.","VALIDATE_RANGELENGTH":"Please enter a value between {0} and {1} characters long.","VALIDATE_RANGE":"Please enter a value between {0} and {1}.","VALIDATE_MAX":"Please enter a value less than or equal to {0}.","VALIDATE_MIN":"Please enter a value greater than or equal to {0}.","VALIDATE_FIELD_INVALID":"Please enter a valid value.","VALIDATE_PASSWORD_MISMATCH":"Please re-enter a matching password.","VALIDATE_EMAIL_MISMATCH":"Please re-enter a matching email address.","VALIDATE_POSTAL_FORMAT_DEFAULT":"\"A1A 1A1\"","VALIDATE_POSTAL_FORMAT_US":"\"12345\" or \"12345-1234\"","VALIDATE_FIRSTNAME_INVALID":"Please enter a valid first name. Special characters not permitted","VALIDATE_LASTNAME_INVALID":"Please enter a valid last name. Special characters not permitted","VALIDATE_ADDRESSNOPO_INVALID":"Sporting Life does not ship to PO Boxes.","QTY_IN_STOCK":"{0} Item(s) in Stock","PREORDER":"Pre-Order","QTY_PREORDER":"{0} item(s) are available for pre-order.","REMAIN_PREORDER":"The remaining items are available for pre-order.","BACKORDER":"Back Order","QTY_BACKORDER":"Back order {0} item(s)","REMAIN_BACKORDER":"The remaining items are available on back order.","NOT_AVAILABLE":"This item is currently not available.","REMAIN_NOT_AVAILABLE":"The remaining items are currently not available. Please adjust the quantity."};
window.Urls = {"appResources":"/on/demandware.store/Sites-SportingLife-Site/en_CA/Resources-Load","pageInclude":"/on/demandware.store/Sites-SportingLife-Site/en_CA/Page-Include","continueUrl":"https://stores.sportinglife.ca","staticPath":"/on/demandware.static/Sites-SportingLife-Site/-/en_CA/v1705057791435/","addGiftCert":"/en-CA/giftcertpurchase","minicartGC":"/on/demandware.store/Sites-SportingLife-Site/en_CA/GiftCert-ShowMiniCart","addProduct":"/on/demandware.store/Sites-SportingLife-Site/en_CA/Cart-AddProduct","minicart":"/on/demandware.store/Sites-SportingLife-Site/en_CA/Cart-MiniAddProduct","cartShow":"/en-CA/cart","giftRegAdd":"https://www.sportinglife.ca/on/demandware.store/Sites-SportingLife-Site/en_CA/Address-GetAddressDetails?addressID=","paymentsList":"https://www.sportinglife.ca/en-CA/wallet","addressesList":"https://www.sportinglife.ca/en-CA/addressbook","wishlistAddress":"https://www.sportinglife.ca/on/demandware.store/Sites-SportingLife-Site/en_CA/Wishlist-SetShippingAddress","deleteAddress":"/on/demandware.store/Sites-SportingLife-Site/en_CA/Address-Delete","getProductUrl":"/on/demandware.store/Sites-SportingLife-Site/en_CA/Product-Show","getBonusProducts":"/on/demandware.store/Sites-SportingLife-Site/en_CA/Product-GetBonusProducts","addBonusProduct":"/on/demandware.store/Sites-SportingLife-Site/en_CA/Cart-AddBonusProduct","getSetItem":"/on/demandware.store/Sites-SportingLife-Site/en_CA/Product-GetSetItem","productDetail":"/on/demandware.store/Sites-SportingLife-Site/en_CA/Product-Detail","getAvailability":"/on/demandware.store/Sites-SportingLife-Site/en_CA/Product-GetAvailability","removeImg":"/on/demandware.static/Sites-SportingLife-Site/-/default/dwe624c39f/images/icon_remove.gif","searchsuggest":"/on/demandware.store/Sites-SportingLife-Site/en_CA/Search-GetSuggestions","productNav":"/on/demandware.store/Sites-SportingLife-Site/en_CA/Product-Productnav","summaryRefreshURL":"/on/demandware.store/Sites-SportingLife-Site/en_CA/COBilling-UpdateSummary","billingSelectCC":"https://www.sportinglife.ca/on/demandware.store/Sites-SportingLife-Site/en_CA/COBilling-SelectCreditCard","updateAddressDetails":"https://www.sportinglife.ca/on/demandware.store/Sites-SportingLife-Site/en_CA/COShipping-UpdateAddressDetails","updateAddressDetailsBilling":"https://www.sportinglife.ca/on/demandware.store/Sites-SportingLife-Site/en_CA/COBilling-UpdateAddressDetails","shippingMethodsJSON":"https://www.sportinglife.ca/on/demandware.store/Sites-SportingLife-Site/en_CA/COShipping-GetApplicableShippingMethodsJSON","shippingMethodsList":"https://www.sportinglife.ca/on/demandware.store/Sites-SportingLife-Site/en_CA/COShipping-UpdateShippingMethodList","selectShippingMethodsList":"https://www.sportinglife.ca/on/demandware.store/Sites-SportingLife-Site/en_CA/COShipping-SelectShippingMethod","resetPaymentForms":"/on/demandware.store/Sites-SportingLife-Site/en_CA/COBilling-ResetPaymentForms","compareShow":"/en-CA/compare","compareAdd":"/on/demandware.store/Sites-SportingLife-Site/en_CA/Compare-AddProduct","compareRemove":"/on/demandware.store/Sites-SportingLife-Site/en_CA/Compare-RemoveProduct","compareEmptyImage":"/on/demandware.static/Sites-SportingLife-Site/-/default/dw5c8f95b6/images/comparewidgetempty.png","giftCardCheckBalance":"https://www.sportinglife.ca/on/demandware.store/Sites-SportingLife-Site/en_CA/GiftCard-CheckBalance","redeemGiftCert":"https://www.sportinglife.ca/on/demandware.store/Sites-SportingLife-Site/en_CA/GiftCard-CheckBalance","addCoupon":"https://www.sportinglife.ca/on/demandware.store/Sites-SportingLife-Site/en_CA/Cart-AddCouponJson","storesInventory":"/on/demandware.store/Sites-SportingLife-Site/en_CA/StoreInventory-Inventory","setPreferredStore":"/on/demandware.store/Sites-SportingLife-Site/en_CA/StoreInventory-SetPreferredStore","showStoreAvailability":"/on/demandware.store/Sites-SportingLife-Site/en_CA/StoreInventory-ShowStoreAvailability","getPreferredStore":"/on/demandware.store/Sites-SportingLife-Site/en_CA/StoreInventory-GetPreferredStore","setStorePickup":"/on/demandware.store/Sites-SportingLife-Site/en_CA/StoreInventory-SetStore","setZipCode":"/on/demandware.store/Sites-SportingLife-Site/en_CA/StoreInventory-SetZipCode","getZipCode":"/on/demandware.store/Sites-SportingLife-Site/en_CA/StoreInventory-GetZipCode","billing":"/en-CA/billing","setSessionCurrency":"/on/demandware.store/Sites-SportingLife-Site/en_CA/Currency-SetSessionCurrency","addEditAddress":"/on/demandware.store/Sites-SportingLife-Site/en_CA/COShippingMultiple-AddEditAddressJSON","cookieHint":"/en-CA/cookie_hint.html","hardgoodsTermsAndConditions":"/on/demandware.store/Sites-SportingLife-Site/en_CA/Page-Show?cid=hardgoods-terms-and-conditions","consentTracking":"/en-CA/consent_tracking_hint.html","consentTrackingSetSession":"/on/demandware.store/Sites-SportingLife-Site/en_CA/Account-ConsentTracking","rateLimiterReset":"/on/demandware.store/Sites-SportingLife-Site/en_CA/RateLimiter-HideCaptcha","csrffailed":"/on/demandware.store/Sites-SportingLife-Site/en_CA/CSRF-Failed","shippingEligibiliy":"/on/demandware.store/Sites-SportingLife-Site/en_CA/COShipping-ShippingEligibilty","ineligibleShipping":"/on/demandware.store/Sites-SportingLife-Site/en_CA/COShipping-IneligibleShipping","contactUs":"/en-CA/contactus","truefitSizeSampler":"/en-CA/truefit-size-sampler.html"};
window.SitePreferences = {"LISTING_INFINITE_SCROLL":true,"LISTING_REFINE_SORT":true,"STORE_PICKUP":true,"COOKIE_HINT":false,"CONSENT_TRACKING_HINT":false,"CHECK_TLS":false,"MONERIS_HT_URL":"https://www3.moneris.com/HPPtoken/index.php","MONERIS_HT_PROFILE":"htJVQCKSS1V2T8Y","MONERIS_HT_TIMEOUT":12,"STORE_LOOKUP_UNIT":"km","STORE_LOOKUP_DISTANCE":100,"TARGETED_COOKIE_EXPIRY":30};
}());
</script>
<script type="text/javascript">

(function(){
window.SessionAttributes = {"SHOW_CAPTCHA":null,"PREFERRED_STORE":null};
window.User = {"zip":null,"storeId":null};
}());
</script>
<script>var consent = null;</script>
<script src="https://www.sportinglife.ca/on/demandware.static/Sites-SportingLife-Site/-/en_CA/v1705057791435/js/app.js"></script>
<script>pageContext = {"title":"Storefront","type":"storefront","ns":"storefront"};</script>
<script>
var meta = "Shop Canada's premier lifestyle retailer for fashion sportswear, casual wear, athletic apparel and equipment, and footwear for men, women, and kids. Get the family outfitted from head-to-toe for your favorite seasonal sports.";
var keywords = "";
</script>





</div>
    <!-- Sporting Life Menu -->

<section>

</section>
    <style>

        /* hides previous site header */
        .site-header {
            display: none;
        }
        .blog-hero-section {
            max-width: 2560px;
            background: linear-gradient(rgba(0, 0, 0, 0.0), rgba(0, 0, 0, 0.2)), url(https://cdn.media.amplience.net/i/sportinglife/slblog-header-bg2-6-18-2025?fmt=auto);
            background-size: cover;
            background-position: center center;
            min-height: 350px;
            margin: 0 auto;

            padding: 25px;
        }
        .blog-hero-section > div.row {
            border: 2px solid white;
            margin: 0 auto;
            min-height: 300px;
        }
        .blog-hero-section > div.row > div.col-12 {
            display: flex;
            align-items: center;
			justify-content: flex-start;
            max-width: 1200px;
            margin: 0 auto;
            width: 100%;
        }
        .blog-hero-section > div.row > div.col-12 > div {
            padding-right: 15px;
            padding-left: 15px;
			text-align: left;
        }
        .blog-logo-hero {
            width: 180px;
        }
        .hero-subcopy {
            margin-bottom: 0 !important;
        }
        @media (max-width: 576px) {
            .blog-hero-section {
                background-position: 54% center;
                min-height: 210px;
                padding: 20px;
            }
            .blog-hero-section > div.row {
                min-height: 210px;
            }
            .blog-hero-section > div.row > div.col-12 {
                justify-content: flex-start;
            }
            .blog-hero-section > div.row > div.col-12 > div {
                text-align: left;
            }
            .blog-logo-hero {
                width: 140px;
            }
            .hero-subcopy {
                font-size: 14px;
            }
        }
    </style>
    <div class="blog-hero-section">
        <div class="row">
            <div class="col-12">
                <div class="">
                    <img class="blog-logo-hero" src="https://sportinglifeblog.ca/wp-content/uploads/2024/08/sl-blog-logo-white.svg"/>
                    <!-- <p class="hero-subcopy">Discover Brands, Trends & Articles</p> -->
                </div>
            </div>
        </div>
    </div>
</section>
	
    <section class="no-print top-strip" style="display:none;">

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


<style>
    .main-menu > ul > li > a > span {
        text-decoration: underline;
    }
    .main-menu > ul > li > a:hover > span {
        text-decoration: none;
    }
    @media (max-width: 1023px) {
        .main-menu {
            display: block !important;
        }
        .main-menu > ul.menu {
            display: flex;
            flex-wrap: wrap;
        }
    }
    @media (max-width: 576px) {
        .section-header .section-title .title {
            font-size: 32px;
        }
        .section-header .sub-title {
            font-size: 16px;
        }
    }
    @media (max-width: 576px) {
        .offcanvas-search .modal--search-form {
            width: 95%;
        }
    }
    </style>

<style>
#return-to-top .fa-chevron-up {
width: 14px;
  position: absolute;
  top: 17px;
  left: 17px;
}
</style>
<!-- return to top button -->
<a href="javascript:void(0)" id="return-to-top" style="display: inline;"><!-- dwMarker="linclude" dwTemplateTitle="/default/components/svg.isml (app_storefront_core)" dwTemplateURL="http://localhost:60606/target=/app_storefront_core/cartridge/templates/default/components/svg.isml" -->
<!-- <svg class=" svg-symbol" aria-hidden="true">
<use xlink:href="https://www.sportinglife.ca/on/demandware.static/Sites-SportingLife-Site/-/default/dwec9b6c5a/svg/symbols.svg#svg-chevron-right"></use>
</svg> -->
<!--<i class="fa-solid fa-chevron-up"></i>-->
<img class="fa-chevron-up" width="14" height="14" src="https://www.sportinglife.ca/on/demandware.static/-/Library-Sites-SportingLifeSharedLibrary/default/images/fontawesome-svgs/chevron-up-light.svg">
</a>