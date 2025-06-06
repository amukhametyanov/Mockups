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
	<link rel="stylesheet" href="https://staging-na01-sportinglife.demandware.net/on/demandware.static/-/Library-Sites-SportingLifeSharedLibrary/default/images/corporate/cssjs/style-blog.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900%7CCormorant+Garamond:600,700" media="all">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <section class="sl-menu">
        <!-- overrides -->
    <style>
        .sl-menu {
            font-family: "Nunito Sans", sans-serif;
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
        navText : ['<img src="/on/demandware.static/-/Library-Sites-SportingLifeSharedLibrary/default/dwb62df893/images/homepage/angle-left-thin-white.svg" width="10" height="20" alt="Left Arrow" >','<img src="/on/demandware.static/-/Library-Sites-SportingLifeSharedLibrary/default/dwb62df893/images/homepage/angle-right-thin-white.svg" width="10" height="20" alt="Right Arrow" >']
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
        z-index: 1000;
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
}

.header-promotion:hover {
text-decoration: none !important;
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
            top: -141px !important;
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
<a href="https://stores.sportinglife.ca/en" "="">EN</a>
<a href="https://stores.sportinglife.ca/fr" "="">FR</a>
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
<button class="header-search__submit" type="submit"><img src="https://www.sportinglife.ca/on/demandware.static/-/Library-Sites-SportingLifeSharedLibrary/default/images/site-icons/svg-search.svg" class="header-search__submit__icon svg-symbol sls-custom">

<svg class="header-search__submit__icon svg-symbol" aria-hidden="true">
<use href="https://www.sportinglife.ca/on/demandware.static/-/Library-Sites-SportingLifeSharedLibrary/default/images/site-icons/svg-search.svg"></use>
</svg>
</button>
<label class="sr-only" for="q">Search Catalog</label>
<input class="header-search__input input-text no-validate" type="search" id="q" name="q" value="" placeholder="Search" autocomplete="off">
<input type="hidden" name="lang" value="en_CA">
</form>
</div>
<div class="header-container__right d-flex justify-content-end">
<div class="user-info">
<a class="menu-utility-user__item" href="https://www.sportinglife.ca/en-CA/account" title="Go to: Sign In"><img src="https://www.sportinglife.ca/on/demandware.static/-/Library-Sites-SportingLifeSharedLibrary/default/images/site-icons/svg-user.svg" class="user-toggle__icon svg-symbol sls-custom">

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
<a class="mini-cart-link mini-cart-empty" href="https://www.sportinglife.ca/en-CA/cart" title="View Cart"><img src="https://www.sportinglife.ca/on/demandware.static/-/Library-Sites-SportingLifeSharedLibrary/default/images/site-icons/svg-cart.svg" class="mini-cart-link__icon svg-symbol sls-custom">

<span class="mini-cart-link__label d-none d-lg-inline">Cart</span>
</a>
</div>
</div>
</div>
</div>
<div class="header-container padding-navigation">
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
<div class="level-2 level-2--alt is-horizontal">
<style>
    .banner-item-list {
        flex: 1 !important;
        max-width: inherit !important;
    }

    .bg-women-coat-shop {
        background-image: linear-gradient(
            rgba(0, 0, 0, 0.1),
            rgba(0, 0, 0, 0.1),
            rgba(0, 0, 0, 0.1)
        ),
        url(/on/demandware.static/-/Library-Sites-SportingLifeSharedLibrary/default/images/flyout-tiles/new-flyout-tissees-serres.jpg);  
        background-repeat: no-repeat;
        background-size: cover;
        background-position: top center;
        min-height: 250px;
    }
    .bg-sneaker-shop {
        background-image: linear-gradient(
            rgba(0, 0, 0, 0.1),
            rgba(0, 0, 0, 0.1),
            rgba(0, 0, 0, 0.1)
        ),
        url(/on/demandware.static/-/Library-Sites-SportingLifeSharedLibrary/default/images/flyout-tiles/new-flyout-brunette-the-label.jpg);  
        background-repeat: no-repeat;
        background-size: cover;
        background-position: bottom center;
        min-height: 250px;
    }

    .brand-page-layout-btn-white {
        padding: 12px 20px;
        min-width: 130px;
        max-width: 120px;
        font-size: 12px !important;
        font-weight: 600;
        color: #000;
        background: #fff;
        text-align: center;
        text-decoration: none;
        display: flex;
        justify-content: center;
        align-items: center;
        text-transform: uppercase !important;
        letter-spacing: 0.3px;
        border: 1px solid #fff;
        margin: 5px 10px;
        line-height: 1;
        z-index: 3;
    }
    .brand-page-layout-btn-white:hover {
        background: transparent;
        border: 1px solid #fff;
        color: #fff !important;
        text-decoration: none !important;
        transition: 0.5s !important;
    }

    .flyout-tile-nav {
        padding-left: 15px;
        padding-right: 15px;
    }
    .flyout-tile-nav {
            flex-basis: 50%;
        }
    .details-txt {
        position: absolute;
        width: 100%;
        height: 100%;
        background: linear-gradient(rgba(0, 0, 0, 0.0), rgba(0, 0, 0, 0.4));
    }
    .menu-tile-title {
        font-size: 14px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 2px;
        padding-right: 5px;
        padding-left: 5px;
        line-height: 1.4;
        color: #fff;
    }
         

   

    @media (max-width: 1023px) {
        .flyout-tile-nav {
            padding: 0;
        }
        .flyout-tile-nav {
            flex-basis: 100%;
            margin-top: 15px;
        }
    }
</style>
<ul>
<li class="has-sub-menu d-none d-lg-block"><a href="https://www.sportinglife.ca/en-CA/new/">Shop all New Arrivals</a>
<ul class="level-3">
<li><a href="https://www.sportinglife.ca/en-CA/new/womens-clothing/">Women's Clothing</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/new/mens-clothing/">Men's Clothing</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/new/kids-clothing/">Kids' Clothing</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/new/footwear/">Footwear</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/new/equipment/">Equipment</a></li>
</ul>
</li>
<li class="level-2__alt-menu d-lg-none">
<ul>
<li><a href="https://www.sportinglife.ca/en-CA/new/womens-clothing/">Women's Clothing</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/new/mens-clothing/">Men's Clothing</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/new/kids-clothing/">Kids' Clothing</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/new/footwear/">Footwear</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/new/equipment/">Equipment</a></li>
</ul>
</li>
<li class="has-sub-menu"><a class="inactive-menu-link" href="javascript:void(0);">Trending</a>
<ul class="level-3">
<li><a href="https://www.sportinglife.ca/en-CA/nike-tech-fleece/">Nike Tech Fleece</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/shoes/?prefn1=shoeStyle&amp;prefv1=Slipper#shop-all-shoes-shop">Slippers</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/winter-accessories/">Winter Accessories</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/women/home-accessories-gifts/pet-accessories/">Pet Accessories</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/boot-shop/puffer-boots/">Puffer Boots</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/new-balance-327/">New Balance 327</a></li>
</ul>
</li>
<li class="px-0 px-lg-4 flex-column justify-content-start has-sub-menu level-2__banner level-2__banner--span-3"><a class="inactive-menu-link" style="line-height: 2.31;" href="javascript:void(0);">Featured Brands &amp; Collections</a>
<ul class="level-3" style="font-size: 13px;">
<li><a href="https://www.sportinglife.ca/en-CA/tissees-serrees">Tissées Serrées</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/pow">POW: Protect Our Winters</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/stemargscot">SteMargScot</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/boot-shop/ugg-extreme-collection/">UGG Extreme Collection</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/stanley">Stanley</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/columbia-x-star-wars/">Columbia x Star Wars</a></li>
</ul>
</li>
<li class="px-4 pt-3 pt-lg-0 pb-5 pb-lg-0 px-lg-0 has-sub-menu level-2__banner level-2__banner--span-4 banner-item-list">
<div class="d-flex flex-wrap">
<div class="flyout-tile-nav">
<div class="position-relative bg-women-coat-shop">
<div class="details-txt d-flex justify-content-end flex-column">
<p class="menu-tile-title text-center my-2">Tissées Serrées</p>
<div class="d-flex justify-content-center flex-wrap" style="margin-bottom: 15px;">
<a class="brand-page-layout-btn-white" href="https://www.sportinglife.ca/en-CA/tissees-serrees">
Shop Now
</a>
</div>
</div>

</div>
</div>
<div class="flyout-tile-nav">
<div class="position-relative bg-sneaker-shop">
<div class="details-txt d-flex justify-content-end flex-column">
<p class="menu-tile-title text-center my-2"><span>Brunette The Label</span></p>
<div class="d-flex justify-content-center flex-wrap" style="margin-bottom: 15px;">
<a class="brand-page-layout-btn-white" href="https://www.sportinglife.ca/en-CA/brunette-the-label">
Shop Now
</a>
</div>
</div>

</div>
</div>
</div>
</li>
</ul>
</div>
</li>
<li class="menu-nav">
<a href="https://www.sportinglife.ca/en-CA/brands">
Our Brands
</a>
<div class="level-2 level-2--alt is-horizontal">
<style>
  .our-brands-nav-menu-imgs {
      display: block;
      width: auto;
      height: auto;
      max-width:100%;
      margin: auto;
  }
</style>
<ul>
<li class="d-lg-none">
<a href="https://www.sportinglife.ca/en-CA/brands">
Shop All Brands
</a>
</li>
<li class="has-sub-menu"><a tabindex="0">Top Brands</a>
<ul>
<li><a href="https://www.sportinglife.ca/en-CA/arcteryx">Arc'teryx</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/patagonia">Patagonia</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/mackage">Mackage</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/moose-knuckles">Moose Knuckles</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/nike">Nike</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/the-north-face">The North Face</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/rossignol">Rossignol</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/sorel">Sorel</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/nobis">Nobis</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/salomon">Salomon</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/on">On</a></li>
</ul>
</li>
<li class="has-sub-menu"><a tabindex="0">Clothing</a>
<ul>
<li><a href="https://www.sportinglife.ca/en-CA/arcteryx">Arc'teryx</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/nike">Nike</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/polo-ralph-lauren">Ralph Lauren</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/adidas">adidas</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/patagonia">Patagonia</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/spyder">Spyder</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/fjallraven">Fjallraven</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/under-armour">Under Armour</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/volcom">Volcom</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/columbia">Columbia</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/helly-hansen">Helly Hansen</a></li>
</ul>
</li>
<li class="has-sub-menu"><a tabindex="0">Footwear</a>
<ul>
<li><a href="https://www.sportinglife.ca/en-CA/on/shoes/">On</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/asics/shoes/">Asics</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/ugg/shoes/">UGG</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/blundstone/shoes/">Blundstone</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/adidas%7Cadidas-by-stella-mccartney%7Cadidas-originals/shoes/">adidas</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/nike/shoes/">Nike</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/hoka/shoes/">HOKA</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/new-balance/shoes/">New Balance</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/salomon/shoes/">Salomon</a></li>
</ul>
</li>
<li class="has-sub-menu"><a tabindex="0">Equipment</a>
<ul>
<li><a href="https://www.sportinglife.ca/en-CA/rossignol/equipment/">Rossignol</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/salomon/equipment/">Salomon</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/burton/equipment/">Burton</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/k2">K2</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/oakley">Oakley</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/smith">Smith</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/volkl/equipment/">Volkl</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/giro">Giro</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/yeti">Yeti</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/atomic/equipment/">Atomic</a></li>
</ul>
</li>
<li class="d-none d-lg-inline-block"><a href="https://www.sportinglife.ca/en-CA/brands">Shop All Brands</a></li>
<li class="has-sub-menu text-center">
<ul style="max-height: initial;">
<li>
<a href="https://www.sportinglife.ca/en-CA/parajumpers">
<img class="men-nav-menu-imgs" alt="Parajumpers" title="Parajumpers" src="https://www.sportinglife.ca/on/demandware.static/-/Library-Sites-SportingLifeSharedLibrary/default/images/flyout-tiles/flyout-w40-brands-1.jpg" height="275" width="275">
<h6 style="font-size: 12px; letter-spacing: 0.8px; text-transform: uppercase; padding-top: 15px; padding-bottom: 0;"><strong>Parajumpers</strong></h6>
<p style="font-weight: 600;"></p>
</a>
</li>
</ul>
</li>
</ul>
</div></li>
<li class="menu-nav">
<a href="https://www.sportinglife.ca/en-CA/women/">
Women
</a>
<div class="level-2 is-horizontal">
<ul>
<li class="d-lg-none">
<a href="https://www.sportinglife.ca/en-CA/women/">
Shop All Women's
</a>
</li>
<li class="has-sub-menu">
<a href="https://www.sportinglife.ca/en-CA/women/trending/">
Trending
</a>
<div class="level-3 level-3--alt">
<style>
    /* trending */
    @media (min-width:1024px) {
        a[href$='/en-CA/women/trending/'] {
            display: inline-block;
            pointer-events: none;
        }
    }
    

    .new-tag {
        background-color: #007ac3;
        padding: 2px 4px;
        color: #ffffff;
        font-size: 9px;
        border-radius: 2px;
        margin-left: 5px;
        letter-spacing: 1px;
text-transform: uppercase;
    }
    
    .online-exclusive-link:hover {
        text-decoration: none !important;
    }
    .online-exclusive-link:hover > .exclusive {
        text-decoration: underline;
    }
    </style>
<ul>
<li><a href="https://www.sportinglife.ca/en-CA/tissees-serrees">New Brand: Tissées Serrées</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/coat-shop/premium-outerwear/?prefn1=gender&amp;prefv1=Women%27s">Premium Outerwear</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/ugg/women/">UGG Apparel &amp; Accessories</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/women/accessories/winter-accessories/">Winter Accessories</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/sustainability-shop/?prefn1=gender&amp;prefv1=Women%27s%7CUnisex">Sustainability Shop</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/yoga-apparel/?prefn1=gender&amp;prefv1=Women%27s">Yoga Apparel</a></li>
<li class="d-none d-lg-block"><a class="mt-0 mt-lg-4" style="color: #007ac3; font-size: 14px; font-weight: 700;" href="https://www.sportinglife.ca/en-CA/new/womens-clothing/">New Arrivals</a></li>
<li class="d-none d-lg-block"><a class="d-flex align-items-center mt-0 mt-lg-4 online-exclusive-link" href="https://www.sportinglife.ca/en-CA/women?prefn1=exclusive&amp;prefv1=Online%20Exclusive&amp;custom_search_banner=online-exclusives"><span class="exclusive">Online Exclusive</span> <span class="new-tag">NEW</span></a></li>
</ul>
</div>
</li>
<li class="has-sub-menu">
<a href="https://www.sportinglife.ca/en-CA/women/clothing/">
Clothing
</a>
<ul class="level-3">
<li class="d-lg-none">
<a href="https://www.sportinglife.ca/en-CA/women/clothing/">
Shop All Clothing
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/women/clothing/coats-jackets/">
Coats &amp; Jackets
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/women/clothing/vests/">
Vests
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/women/clothing/sweatshirts-hoodies/">
Sweatshirts &amp; Hoodies
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/women/clothing/base-mid-layering/">
Base &amp; Mid Layering
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/women/clothing/sweaters/">
Sweaters
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/women/clothing/tops/">
Tops
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/women/clothing/sports-bras/">
Sports Bras
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/women/clothing/pants/">
Pants
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/women/clothing/denim/">
Denim
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/women/clothing/tights-leggings/">
Tights &amp; Leggings
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/women/clothing/dresses-jumpsuits/">
Dresses &amp; Jumpsuits
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/women/clothing/shorts/">
Shorts
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/women/clothing/skirts/">
Skirts
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/women/clothing/swimwear/">
Swimwear
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/women/clothing/sleep-underwear/">
Sleep &amp; Underwear
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/women/clothing/plus-size/">
Plus Size
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/women/clothing/fleece/">
Fleece
</a>
</li>
</ul>
</li>
<li class="has-sub-menu">
<a href="https://www.sportinglife.ca/en-CA/women/lifestyles/">
Lifestyles
</a>
<ul class="level-3">
<li class="d-lg-none">
<a href="https://www.sportinglife.ca/en-CA/women/lifestyles/">
Shop All Lifestyles
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/women/lifestyles/outdoor/">
Outdoor
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/women/lifestyles/athletic/">
Athletic
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/women/lifestyles/ski/">
Ski
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/women/lifestyles/snowboard/">
Snowboard
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/women/lifestyles/running/">
Running
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/women/lifestyles/fashion/">
Fashion
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/women/lifestyles/cycle/">
Cycle
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/women/lifestyles/swim/">
Swim
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/women/lifestyles/tennis/">
Tennis
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/women/lifestyles/golf/">
Golf
</a>
</li>
</ul>
</li>
<li class="has-sub-menu">
<a href="https://www.sportinglife.ca/en-CA/women/accessories/">
Accessories
</a>
<ul class="level-3">
<li class="d-lg-none">
<a href="https://www.sportinglife.ca/en-CA/women/accessories/">
Shop All Accessories
</a>
</li>
</ul>
<div class="level-3 level-3--alt">
<ul>
<li><a href="https://www.sportinglife.ca/en-CA/women/accessories/fitness-accessories/">Fitness Accessories</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/equipment/more-gear/all-bags/backpacks/">Backpacks</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/equipment/more-gear/all-bags/">Bags &amp; Wallets</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/women/accessories/hats/">Hats</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/women/accessories/eyewear/">Eyewear</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/women/accessories/socks/">Socks</a></li>

<li><a href="https://www.sportinglife.ca/en-CA/women/accessories/belts/">Belts</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/women/accessories/winter-accessories/">Winter Accessories</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/women/accessories/more-accessories/">More Accessories</a></li>
</ul>
</div>
</li>
<li class="has-sub-menu level-2__alt-menu">
<style>
    .new-tag {
        background-color: #007ac3;
        padding: 2px 4px;
        color: #ffffff;
        font-size: 9px;
        border-radius: 2px;
        margin-left: 5px;
        letter-spacing: 1px;
text-transform: uppercase;
    }
    
    .online-exclusive-link:hover {
        text-decoration: none !important;
    }
    .online-exclusive-link:hover > .exclusive {
        text-decoration: underline;
    }
    
    </style>
<ul>
<li><a href="https://www.sportinglife.ca/en-CA/sale/womens-sale/">Shop Sale</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/shoes/women/">Women’s Shoes</a></li>
<li class="d-lg-none"><a class="mt-0 mt-lg-4" style="color: #007ac3; font-size: 14px; font-weight: 700;" href="https://www.sportinglife.ca/en-CA/new/womens-clothing/">New Arrivals</a></li>
<li class="d-none"><a class="d-flex align-items-center mt-0 mt-lg-4 online-exclusive-link" href="https://www.sportinglife.ca/en-CA/women?prefn1=exclusive&amp;prefv1=Online%20Exclusive&amp;custom_search_banner=online-exclusives"><span class="exclusive">Online Exclusive</span> <span class="new-tag">NEW</span></a></li>
</ul>
</li>
<li class="level-2__banner level-2__banner--span-2">
<style>
  .women-nav-menu-imgs {
      display: block;
      width: auto;
      height: auto;
      max-width:100%;
  }
  #navigation .level-3 a.online-exclusive-link {
    display: none !important;
  }
</style>
<a href="https://www.sportinglife.ca/en-CA/women/clothing/coats-jackets/">
<div class="text-center">
<img class="women-nav-menu-imgs" alt="Coat Shop" src="https://www.sportinglife.ca/on/demandware.static/-/Library-Sites-SportingLifeSharedLibrary/default/images/flyout-tiles/flyout-w41-w.jpg" width="290" height="337">
<h6 style="font-size: 12px; letter-spacing: 0.8px; text-transform: uppercase; padding-top: 15px; padding-bottom: 0;"><strong>Coat Shop</strong></h6>
<p>Shop Now</p>
</div>
</a>
</li>
</ul>
</div>
</li>
<li class="menu-nav">
<a href="https://www.sportinglife.ca/en-CA/men/">
Men
</a>
<div class="level-2 is-horizontal">
<ul>
<li class="d-lg-none">
<a href="https://www.sportinglife.ca/en-CA/men/">
Shop All Men's
</a>
</li>
<li class="has-sub-menu">
<a href="https://www.sportinglife.ca/en-CA/men/trending/">
Trending
</a>
<div class="level-3 level-3--alt">
<style>
    @media (min-width:1024px) {
          a[href$='/en-CA/men/trending/'] {
              display: inline-block;
              pointer-events: none;
          }
      }
  
      .new-tag {
          background-color: #007ac3;
          padding: 2px 4px;
          color: #ffffff;
          font-size: 9px;
          border-radius: 2px;
          margin-left: 5px;
          letter-spacing: 1px;
  text-transform: uppercase;
      }
      
      .online-exclusive-link:hover {
          text-decoration: none !important;
      }
      .online-exclusive-link:hover > .exclusive {
          text-decoration: underline;
      }
  </style>

<ul>
<li><a href="https://www.sportinglife.ca/en-CA/columbia-x-star-wars/">Columbia x Star Wars</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/the-north-face-nuptse/?prefn1=gender&amp;prefv1=Men%27s%7CUnisex">The North Face Nuptse</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/men/accessories/winter-accessories/">Winter Accessories</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/arcteryx/men/clothing/coats-jackets/">Arc'teryx Outerwear</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/men/clothing/coats-jackets/puffers/">Puffers</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/nike-tech-fleece/?prefn1=gender&amp;prefv1=Men%27s">Nike Tech Fleece</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/sustainability-shop/?prefn1=gender&amp;prefv1=Men%27s%7CUnisex">Sustainability Shop</a></li>
<li class="d-none d-lg-block"><a class="mt-0 mt-lg-4" style="color: #007ac3; font-size: 14px; font-weight: 700;" href="https://www.sportinglife.ca/en-CA/new/mens-clothing/">New Arrivals</a></li>
<li class="d-none d-lg-block"><a class="d-flex align-items-center mt-0 mt-lg-4 online-exclusive-link" href="https://www.sportinglife.ca/en-CA/men?prefn1=exclusive&amp;prefv1=Online%20Exclusive&amp;custom_search_banner=online-exclusives"><span class="exclusive">Online Exclusive</span> <span class="new-tag">NEW</span></a></li>
</ul>
</div>
</li>
<li class="has-sub-menu">
<a href="https://www.sportinglife.ca/en-CA/men/clothing/">
Clothing
</a>
<ul class="level-3">
<li class="d-lg-none">
<a href="https://www.sportinglife.ca/en-CA/men/clothing/">
Shop All Clothing
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/men/clothing/coats-jackets/">
Coats &amp; Jackets
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/men/clothing/vests/">
Vests
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/men/clothing/sweatshirts-hoodies/">
Sweatshirts &amp; Hoodies
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/men/clothing/base-mid-layering/">
Base &amp; Mid Layering
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/men/clothing/sweaters/">
Sweaters
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/men/clothing/tops/">
Tops
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/men/clothing/pants/">
Pants
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/men/clothing/denim/">
Denim
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/men/clothing/tights-leggings/">
Tights &amp; Leggings
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/men/clothing/shorts/">
Shorts
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/men/clothing/swimwear/">
Swimwear
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/men/clothing/sleepwear-underwear/">
Sleepwear &amp; Underwear
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/men/clothing/fleece/">
Fleece
</a>
</li>
</ul>
</li>
<li class="has-sub-menu">
<a href="https://www.sportinglife.ca/en-CA/men/lifestyles/">
Lifestyles
</a>
<ul class="level-3">
<li class="d-lg-none">
<a href="https://www.sportinglife.ca/en-CA/men/lifestyles/">
Shop All Lifestyles
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/men/lifestyles/outdoor/">
Outdoor
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/men/lifestyles/athletic/">
Athletic
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/men/lifestyles/ski/">
Ski
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/men/lifestyles/snowboard/">
Snowboard
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/men/lifestyles/running/">
Running
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/men/lifestyles/fashion/">
Fashion
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/men/lifestyles/cycle/">
Cycle
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/men/lifestyles/swim/">
Swim
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/men/lifestyles/tennis/">
Tennis
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/men/lifestyles/golf/">
Golf
</a>
</li>
</ul>
</li>
<li class="has-sub-menu">
<a href="https://www.sportinglife.ca/en-CA/men/accessories/">
Accessories
</a>
<ul class="level-3">
<li class="d-lg-none">
<a href="https://www.sportinglife.ca/en-CA/men/accessories/">
Shop All Accessories
</a>
</li>
</ul>
<div class="level-3 level-3--alt">
<ul>
<li><a href="https://www.sportinglife.ca/en-CA/men/accessories/fitness-accessories/">Fitness Accessories</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/equipment/more-gear/all-bags/backpacks/">Backpacks</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/equipment/more-gear/all-bags/">Bags &amp; Wallets</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/men/accessories/hats/">Hats</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/men/accessories/eyewear/">Eyewear</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/men/accessories/socks/">Socks</a></li>

<li><a href="https://www.sportinglife.ca/en-CA/men/accessories/belts/">Belts</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/men/accessories/winter-accessories/">Winter Accessories</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/men/accessories/more-accessories/">More Accessories</a></li>
</ul>
</div>
</li>
<li class="has-sub-menu level-2__alt-menu">
<style>
    .new-tag {
        background-color: #007ac3;
        padding: 2px 4px;
        color: #ffffff;
        font-size: 9px;
        border-radius: 2px;
        margin-left: 5px;
        letter-spacing: 1px;
text-transform: uppercase;
    }
    
    .online-exclusive-link:hover {
        text-decoration: none !important;
    }
    .online-exclusive-link:hover > .exclusive {
        text-decoration: underline;
    }
</style>
<ul>
<li class="d-none d-lg-inline-block"><a href="https://www.sportinglife.ca/en-CA/sale/mens-sale/">Shop Sale</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/shoes/men/">Men’s Shoes</a></li>
<li><a class="d-lg-none mt-0 mt-lg-4" style="color: #007ac3; font-size: 14px; font-weight: 700;" href="https://www.sportinglife.ca/en-CA/new/mens-clothing/">New Arrivals</a></li>
<li class="d-none"><a class="d-flex align-items-center d-none mt-0 mt-lg-4 online-exclusive-link" href="https://www.sportinglife.ca/en-CA/men?prefn1=exclusive&amp;prefv1=Online%20Exclusive&amp;custom_search_banner=online-exclusives"><span class="exclusive">Online Exclusive</span> <span class="new-tag">NEW</span></a></li>
</ul>
</li>
<li class="level-2__banner level-2__banner--span-2">
<style>
    .men-nav-menu-imgs {
        display: block;
        width: auto;
        height: auto;
        max-width:100%;
    }
</style>
<a href="https://www.sportinglife.ca/en-CA/men/clothing/coats-jackets/">
<div class="text-center">
<img class="men-nav-menu-imgs" alt="Coat Shop" title="Coat Shop" src="https://www.sportinglife.ca/on/demandware.static/-/Library-Sites-SportingLifeSharedLibrary/default/images/flyout-tiles/flyout-w40-m.jpg" width="290" height="337">
<h6 style="font-size: 12px; letter-spacing: 0.8px; text-transform: uppercase; padding-top: 15px; padding-bottom: 0;"><strong>Coat Shop</strong></h6>
<p>Shop Now</p>
</div>
</a>
</li>
</ul>
</div>
</li>
<li class="menu-nav">
<a href="https://www.sportinglife.ca/en-CA/kids/">
Kids
</a>
<div class="level-2 is-horizontal">
<ul>
<li class="d-lg-none">
<a href="https://www.sportinglife.ca/en-CA/kids/">
Shop All Kid's
</a>
</li>
<li class="has-sub-menu">
<a href="https://www.sportinglife.ca/en-CA/kids/trending/">
Trending
</a>
<div class="level-3 level-3--alt">
<style>
    @media (min-width:1024px) {
            a[href$='/en-CA/kids/trending/'] {
                display: inline-block;
                pointer-events: none;
            }
        }
    
        .new-tag {
            background-color: #007ac3;
            padding: 2px 4px;
            color: #ffffff;
            font-size: 9px;
            border-radius: 2px;
            margin-left: 5px;
            letter-spacing: 1px;
    text-transform: uppercase;
        }
        
        .online-exclusive-link:hover {
            text-decoration: none !important;
        }
        .online-exclusive-link:hover > .exclusive {
            text-decoration: underline;
        }
    </style>
<ul>
<li><a href="https://www.sportinglife.ca/en-CA/the-north-face-nuptse/?prefn1=gender&amp;prefv1=Boys%27%7CGirls%27%7CJuniors%20Unisex">The North Face Nuptse</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/kids/accessories/gloves-mitts/">Gloves &amp; Mitts</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/kids/?prefn1=coatStyle&amp;prefv1=Puffer#shop-all-kids-shop">Puffer Jackets</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/ralph-lauren-childrenswear/kids/">Ralph Lauren Childrenswear</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/everything-fleece/?prefn1=gender&amp;prefv1=Boys%27%7CGirls%27%7CJuniors%20Unisex">Cozy Fleece</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/sustainability-shop/?prefn1=gender&amp;prefv1=Boys%27%7CGirls%27%7CJuniors%20Unisex">Sustainability Shop</a></li>
<li class="d-none d-lg-block"><a class=" mt-0 mt-lg-4" style="color: #007ac3; font-size: 14px; font-weight: 700;" href="https://www.sportinglife.ca/en-CA/new/kids-clothing/">New Arrivals</a></li>
<li class="d-none d-lg-block"><a class="d-flex align-items-center mt-0 mt-lg-4 online-exclusive-link" href="https://www.sportinglife.ca/en-CA/kids?prefn1=exclusive&amp;prefv1=Online%20Exclusive&amp;custom_search_banner=online-exclusives">
<span class="exclusive">Online Exclusive</span> <span class="new-tag">NEW</span></a></li>
</ul>
</div>
</li>
<li class="has-sub-menu">
<a href="https://www.sportinglife.ca/en-CA/kids/girls/">
Girls
</a>
<ul class="level-3">
<li class="d-lg-none">
<a href="https://www.sportinglife.ca/en-CA/kids/girls/">
Shop All Girls
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/kids/girls/junior-8-20/">
Junior (8-20)
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/kids/girls/toddler-2-6x/">
Toddler (2-6x)
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/kids/girls/infant-0-24-months/">
Infant (0-24 Months)
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/kids/girls/coats-jackets/">
Coats &amp; Jackets
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/kids/girls/vests/">
Vests
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/kids/girls/1-piece-2-piece-sets/">
1 Piece &amp; 2 Piece Sets
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/kids/girls/hoodies-sweaters/">
Hoodies &amp; Sweaters
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/kids/girls/base-mid-layering/">
Base &amp; Mid Layering
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/kids/girls/tops/">
Tops
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/kids/girls/pants/">
Pants
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/kids/girls/denim/">
Denim
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/kids/girls/dresses/">
Dresses
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/kids/girls/skirts/">
Skirts
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/kids/girls/shorts/">
Shorts
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/kids/girls/swimwear/">
Swimwear
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/kids/girls/sleepwear/">
Sleepwear
</a>
</li>
</ul>
</li>
<li class="has-sub-menu">
<a href="https://www.sportinglife.ca/en-CA/kids/boys/">
Boys
</a>
<ul class="level-3">
<li class="d-lg-none">
<a href="https://www.sportinglife.ca/en-CA/kids/boys/">
Shop All Boys
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/kids/boys/junior-8-20/">
Junior (8-20)
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/kids/boys/toddler-2-6x/">
Toddler (2-6x)
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/kids/boys/infant-0-24-months/">
Infant (0-24 Months)
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/kids/boys/coats-jackets/">
Coats &amp; Jackets
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/kids/boys/vests/">
Vests
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/kids/boys/1-piece-2-piece-sets/">
1 Piece &amp; 2 Piece Sets
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/kids/boys/hoodies-sweaters/">
Hoodies &amp; Sweaters
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/kids/boys/base-mid-layering/">
Base &amp; Mid Layering
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/kids/boys/tops/">
Tops
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/kids/boys/pants/">
Pants
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/kids/boys/denim/">
Denim
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/kids/boys/shorts/">
Shorts
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/kids/boys/swimwear/">
Swimwear
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/kids/boys/sleepwear/">
Sleepwear
</a>
</li>
</ul>
</li>
<li class="has-sub-menu">
<a href="https://www.sportinglife.ca/en-CA/kids/lifestyles/">
Lifestyles
</a>
<ul class="level-3">
<li class="d-lg-none">
<a href="https://www.sportinglife.ca/en-CA/kids/lifestyles/">
Shop All Lifestyles
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/kids/lifestyles/outdoor/">
Outdoor
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/kids/lifestyles/athletic/">
Athletic
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/kids/lifestyles/ski-snowboard/">
Ski &amp; Snowboard
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/kids/lifestyles/fashion/">
Fashion
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/kids/lifestyles/swim/">
Swim
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/kids/lifestyles/golf-tennis/">
Golf &amp; Tennis
</a>
</li>
</ul>
</li>
<li class="has-sub-menu">
<a href="https://www.sportinglife.ca/en-CA/kids/accessories/">
Accessories
</a>
<ul class="level-3">
<li class="d-lg-none">
<a href="https://www.sportinglife.ca/en-CA/kids/accessories/">
Shop All Accessories
</a>
</li>
</ul>
<div class="level-3 level-3--alt">
<ul>
<li><a href="https://www.sportinglife.ca/en-CA/search?cgid=all-bags-backpacks-kids">Backpacks</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/kids/accessories/hats/">Hats</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/kids/accessories/socks/">Socks</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/kids/accessories/eyewear/">Eyewear</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/kids/accessories/gloves-mitts/">Gloves &amp; Mitts</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/kids/accessories/scarfs-balaclavas/">Scarfs &amp; Balaclavas</a></li>

<li><a href="https://www.sportinglife.ca/en-CA/kids/accessories/more-accessories/">More Accessories</a></li>

</ul>
</div>
</li>
<li class="level-2__banner level-2__banner--span-2">
<style>
    .women-nav-menu-imgs {
        display: block;
        width: auto;
        height: auto;
        max-width:100%;
    }
  
    .new-tag {
        background-color: #007ac3;
        padding: 2px 4px;
        color: #ffffff;
        font-size: 9px;
        border-radius: 2px;
        margin-left: 5px;
        letter-spacing: 1px;
  text-transform: uppercase;
    }
    
    .online-exclusive-link:hover {
        text-decoration: none !important;
    }
    .online-exclusive-link:hover > .exclusive {
        text-decoration: underline;
    }
  
  </style>
<ul>
<li class="d-lg-none"><a class="mt-0 mt-lg-4" style="color: #007ac3; font-size: 14px; font-weight: 700;" href="https://www.sportinglife.ca/en-CA/new/kids-clothing/">New Arrivals</a></li>
<li class="d-none"><a class="d-flex align-items-center mt-0 mt-lg-4 online-exclusive-link" href="https://www.sportinglife.ca/en-CA/kids?prefn1=exclusive&amp;prefv1=Online%20Exclusive&amp;custom_search_banner=online-exclusives"><span class="exclusive">Online Exclusive</span> <span class="new-tag">NEW</span></a></li>
</ul>
<a href="https://www.sportinglife.ca/en-CA/kids/?prefn1=productType&amp;prefv1=Coats%20%26%20Jackets%7CVests#shop-all-kids-shop">
<div class="text-center">
<img class="women-nav-menu-imgs" alt="Coat Shop" src="https://www.sportinglife.ca/on/demandware.static/-/Library-Sites-SportingLifeSharedLibrary/default/images/flyout-tiles/category-banner-kids-oct23-m.jpg" width="290" height="337">
<h6 style="font-size: 12px; letter-spacing: 0.8px; text-transform: uppercase; padding-top: 15px; padding-bottom: 0;"><strong>Coat Shop</strong></h6>
<p>Shop Now</p>
</div>
</a>
</li>
</ul>
</div>
</li>
<li class="menu-nav">
<a href="https://www.sportinglife.ca/en-CA/shoes/">
Shoes
</a>
<div class="level-2 is-horizontal">
<ul>
<li class="d-lg-none">
<a href="https://www.sportinglife.ca/en-CA/shoes/">
Shop All Shoes
</a>
</li>
<li class="has-sub-menu">
<a href="https://www.sportinglife.ca/en-CA/shoes/trending/">
Trending
</a>
<div class="level-3 level-3--alt">
<style>
    @media (min-width:1024px) {
         a[href$='/en-CA/shoes/trending/'] {
             display: inline-block;
             pointer-events: none;
         }
     }
 
     .new-tag {
         background-color: #007ac3;
         padding: 2px 4px;
         color: #ffffff;
         font-size: 9px;
         border-radius: 2px;
         margin-left: 5px;
         letter-spacing: 1px;
 text-transform: uppercase;
     }
     
     .online-exclusive-link:hover {
         text-decoration: none !important;
     }
     .online-exclusive-link:hover > .exclusive {
         text-decoration: underline;
     }
 </style>
<ul>
<li><a href="https://www.sportinglife.ca/en-CA/boot-shop/">Boot Shop</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/limited-edition-sneakers/">Sneaker Shop</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/running/">Run Shop</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/blundstone/shoes/">Blundstone</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/nike-air-force-1/">Nike Air Force 1</a></li>
<li class="d-none d-lg-block"><a class="mt-0 mt-lg-4" style="color: #007ac3; font-size: 14px; font-weight: 700;" href="https://www.sportinglife.ca/en-CA/new/footwear/">New Arrivals</a></li>
<li class="d-none d-lg-block"><a class="d-flex align-items-center mt-0 mt-lg-4 online-exclusive-link" href="https://www.sportinglife.ca/en-CA/shoes?prefn1=exclusive&amp;prefv1=Online%20Exclusive&amp;custom_search_banner=online-exclusives"><span class="exclusive">Online Exclusive</span> <span class="new-tag">NEW</span></a></li>
</ul>

</div>
</li>
<li class="has-sub-menu">
<a href="https://www.sportinglife.ca/en-CA/shoes/women/">
Women
</a>
<ul class="level-3">
<li class="d-lg-none">
<a href="https://www.sportinglife.ca/en-CA/shoes/women/">
Shop All Women
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/shoes/women/running-shoes/">
Running Shoes
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/shoes/women/casual-sneakers/">
Casual Sneakers
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/shoes/women/casual-boots/">
Casual Boots
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/shoes/women/winter-boots/">
Winter Boots
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/shoes/women/hiking-shoes/">
Hiking Shoes
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/shoes/women/rain-boots/">
Rain Boots
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/shoes/women/casual-shoes/">
Casual Shoes
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/shoes/women/tennis-shoes/">
Tennis Shoes
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/shoes/women/fitness-shoes/">
Fitness Shoes
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/shoes/women/slippers/">
Slippers
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/shoes/women/sandals/">
Sandals
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/shoes/women/cycle-shoes/">
Cycle Shoes
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/shoes/women/pickleball-shoes/">
Pickleball Shoes
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/shoes/women/indoor-court-shoes/">
Indoor Court Shoes
</a>
</li>
</ul>
</li>
<li class="has-sub-menu">
<a href="https://www.sportinglife.ca/en-CA/shoes/men/">
Men
</a>
<ul class="level-3">
<li class="d-lg-none">
<a href="https://www.sportinglife.ca/en-CA/shoes/men/">
Shop All Men
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/shoes/men/running-shoes/">
Running Shoes
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/shoes/men/casual-sneakers/">
Casual Sneakers
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/shoes/men/casual-boots/">
Casual Boots
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/shoes/men/winter-boots/">
Winter Boots
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/shoes/men/hiking-shoes/">
Hiking Shoes
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/shoes/men/rain-boots/">
Rain Boots
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/shoes/men/casual-shoes/">
Casual Shoes
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/shoes/men/tennis-shoes/">
Tennis Shoes
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/shoes/men/fitness-shoes/">
Fitness Shoes
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/shoes/men/slippers/">
Slippers
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/shoes/men/sandals/">
Sandals
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/shoes/men/cycle-shoes/">
Cycle Shoes
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/shoes/men/pickleball-shoes/">
Pickleball Shoes
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/shoes/men/indoor-court-shoes/">
Indoor Court Shoes
</a>
</li>
</ul>
</li>
<li class="has-sub-menu">
<a href="https://www.sportinglife.ca/en-CA/shoes/kids/">
Kids
</a>
<ul class="level-3">
<li class="d-lg-none">
<a href="https://www.sportinglife.ca/en-CA/shoes/kids/">
Shop All Kids
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/shoes/kids/junior-shoes/">
Junior Shoes
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/shoes/kids/preschool-shoes/">
Preschool Shoes
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/shoes/kids/infant-shoes/">
Infant Shoes
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/shoes/kids/winter-boots/">
Winter Boots
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/shoes/kids/rain-boots/">
Rain Boots
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/shoes/kids/sandals/">
Sandals
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/shoes/kids/slippers/">
Slippers
</a>
</li>
</ul>
</li>
<li class="has-sub-menu">
<a href="https://www.sportinglife.ca/en-CA/shoes/accessories/">
Accessories
</a>
<ul class="level-3">
<li class="d-lg-none">
<a href="https://www.sportinglife.ca/en-CA/shoes/accessories/">
Shop All Accessories
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/shoes/accessories/shoe-care/">
Shoe Care
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/shoes/accessories/shoe-insoles-liners/">
Shoe Insoles &amp; Liners
</a>
</li>
</ul>
</li>
<li class="level-2__banner level-2__banner--span-2">
<style>
  .shoes-nav-menu-imgs {
      display: block;
      width: auto;
      height: auto;
      max-width:100%;
  }
  .new-tag {
      background-color: #007ac3;
      padding: 2px 4px;
      color: #ffffff;
      font-size: 9px;
      border-radius: 2px;
      margin-left: 5px;
      letter-spacing: 1px;
text-transform: uppercase;
  }
  
  .online-exclusive-link:hover {
      text-decoration: none !important;
  }
  .online-exclusive-link:hover > .exclusive {
      text-decoration: underline;
  }
</style>
<ul>
<li><a class="d-lg-none mt-0 mt-lg-4" style="color: #007ac3; font-size: 14px; font-weight: 700;" href="https://www.sportinglife.ca/en-CA/new/footwear/">New Arrivals</a></li>
<li class="d-none"><a class="d-flex align-items-center d-none mt-0 mt-lg-4 online-exclusive-link" href="https://www.sportinglife.ca/en-CA/shoes?prefn1=exclusive&amp;prefv1=Online%20Exclusive&amp;custom_search_banner=online-exclusives"><span class="exclusive">Online Exclusive</span> <span class="new-tag">NEW</span></a></li>
</ul>
<a href="https://www.sportinglife.ca/en-CA/boot-shop/">
<div class="text-center">
<img class="shoes-nav-menu-imgs" alt="Boot Shop" title="Boot Shop" src="https://www.sportinglife.ca/on/demandware.static/-/Library-Sites-SportingLifeSharedLibrary/default/images/flyout-tiles/week-50-flyout-update.jpg" width="290" height="337">
<h6 style="font-size: 12px; letter-spacing: 0.8px; text-transform: uppercase; padding-top: 15px; padding-bottom: 0;"><strong>Boot Shop</strong></h6>
<p>Shop Now</p>
</div>
</a>
</li>
</ul>
</div>
</li>
<li class="menu-nav">
<a href="https://www.sportinglife.ca/en-CA/equipment/">
Equipment
</a>
<div class="level-2 is-horizontal">
<ul>
<li class="d-lg-none">
<a href="https://www.sportinglife.ca/en-CA/equipment/">
Shop All Equipment
</a>
</li>
<li class="has-sub-menu">
<a href="https://www.sportinglife.ca/en-CA/equipment/cycle/">
Cycle
</a>
<ul class="level-3">
<li class="d-lg-none">
<a href="https://www.sportinglife.ca/en-CA/equipment/cycle/">
Shop All Cycle
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/equipment/cycle/active-bikes/">
Active Bikes
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/equipment/cycle/road-bikes/">
Road Bikes
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/equipment/cycle/mountain-bikes/">
Mountain Bikes
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/equipment/cycle/e-bikes/">
E-Bikes
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/equipment/cycle/kids-bikes/">
Kids' Bikes
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/equipment/cycle/cycle-helmets/">
Cycle Helmets
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/equipment/cycle/cycle-apparel/">
Cycle Apparel
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/equipment/cycle/cycle-accessories/">
Cycle Accessories
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/equipment/cycle/cycle-components/">
Cycle Components
</a>
</li>
</ul>
<div class="level-3 level-3--alt">

</div>
</li>
<li class="has-sub-menu">
<a href="https://www.sportinglife.ca/en-CA/equipment/racquets/">
Racquets
</a>
<ul class="level-3">
<li class="d-lg-none">
<a href="https://www.sportinglife.ca/en-CA/equipment/racquets/">
Shop All Racquets
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/equipment/racquets/tennis-racquets/">
Tennis Racquets
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/equipment/racquets/tennis-balls/">
Tennis Balls
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/equipment/racquets/strings-accessories/">
Strings &amp; Accessories
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/equipment/racquets/racquet-bags/">
Racquet Bags
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/equipment/racquets/squash/">
Squash
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/equipment/racquets/badminton/">
Badminton
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/equipment/racquets/pickleball/">
Pickleball
</a>
</li>
</ul>
</li>
<li class="has-sub-menu">
<a href="https://www.sportinglife.ca/en-CA/equipment/more-gear/">
More Gear
</a>
<ul class="level-3">
<li class="d-lg-none">
<a href="https://www.sportinglife.ca/en-CA/equipment/more-gear/">
Shop All More Gear
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/equipment/more-gear/all-bags/">
All Bags
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/equipment/more-gear/camping/">
Camping
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/equipment/more-gear/water-recreation/">
Water Recreation
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/equipment/more-gear/hydration/">
Hydration
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/equipment/more-gear/scooters/">
Scooters
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/equipment/more-gear/rollerblades-skateboards/">
Rollerblades &amp; Skateboards
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/equipment/more-gear/fitness-monitors/">
Fitness Monitors
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/equipment/more-gear/fitness-equipment/">
Fitness Equipment
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/equipment/more-gear/recreational-goods/">
Recreational Goods
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/equipment/more-gear/yoga-gear/">
Yoga Gear
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/equipment/more-gear/running-accessories/">
Running Accessories
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/equipment/more-gear/electronics/">
Electronics
</a>
</li>
</ul>
</li>
<li class="has-sub-menu">
<a href="https://www.sportinglife.ca/en-CA/equipment/ski/">
Ski
</a>
<ul class="level-3">
<li class="d-lg-none">
<a href="https://www.sportinglife.ca/en-CA/equipment/ski/">
Shop All Ski
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/equipment/ski/alpine-skis/">
Alpine Skis
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/equipment/ski/ski-racing/">
Ski Racing
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/equipment/ski/ski-bindings/">
Ski Bindings
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/equipment/ski/ski-boots/">
Ski Boots
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/equipment/ski/alpine-ski-poles/">
Alpine Ski Poles
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/equipment/ski/ski-helmets/">
Ski Helmets
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/equipment/ski/ski-goggles/">
Ski Goggles
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/equipment/ski/ski-bags/">
Ski Bags
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/equipment/ski/ski-accessories/">
Ski Accessories
</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/equipment/ski/cross-country-skis/">
Cross-Country Skis
</a>
</li>
</ul>
<div class="level-3 level-3--alt">

</div>
</li>
<li class="has-sub-menu level-2__alt-menu">
<a href="https://www.sportinglife.ca/en-CA/equipment/snowboard/">Snowboard</a>
<ul class="level-3">
<li><a href="https://www.sportinglife.ca/en-CA/equipment/snowboard/snowboards/">Snowboards</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/equipment/snowboard/snowboard-bindings/">Snowboard Bindings</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/equipment/snowboard/snowboard-boots/">Snowboard Boots</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/equipment/snowboard/snowboard-helmets/">Helmets</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/equipment/snowboard/snowboard-goggles/">Goggles</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/equipment/snowboard/snowboard-bags/">Snowboard Bags</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/equipment/snowboard/snowboard-accessories/">Snowboard Accessories</a></li>
</ul>
<a class="inactive-menu-link mt-5 d-none d-lg-block" href="javascript:void(0);">Winter Recreation</a>
<ul class="level-3 d-none d-lg-block">
<li><a href="https://www.sportinglife.ca/en-CA/equipment/ski/winter-recreation/">Skates &amp; Sleds</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/equipment/ski/snowshoes/">Snowshoes</a></li>
</ul>
</li>
<li class="level-2__banner level-2__banner--span-2">
<style>
    .equipment-nav-menu-imgs {
        display: block;
        width: auto;
        height: auto;
        max-width: 100%;
    }

   .menu-shop-title {
    font-size: 14px;
    font-weight: 600;
   }

   @media (max-width: 1023px) {
    .menu-shop-title {
    font-size: 14px;
   }
   }
</style>
<ul class="d-lg-none">


<li class="has-sub-menu">
<a href="https://www.sportinglife.ca/en-CA/equipment/more-gear/camping/">Winter Recreation</a>
<ul class="level-3">
<li><a href="https://www.sportinglife.ca/en-CA/equipment/ski/winter-recreation/">Skates &amp; Sleds</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/equipment/ski/snowshoes/">Snowshoes</a></li>
</ul>
</li>
</ul>



<div class="d-flex flex-column mt-0">
<div class="order-lg-3 order-3 text-center mb-2">
<a class="px-4 px-lg-0 pb-3 pt-2 pb-lg-0 pt-lg-0" href="https://www.sportinglife.ca/en-CA/equipment/ski/?prefn1=productType&amp;prefv1=Alpine%20Skis%7CSki%20Boots&amp;prefn2=isOnSale&amp;prefv2=Sale#shop-all-snowboard-shop">
<img class="equipment-nav-menu-imgs" src="https://www.sportinglife.ca/on/demandware.static/-/Library-Sites-SportingLifeSharedLibrary/default/images/flyout-tiles/flyout-equipment-sale-ski.jpg" title="Up to 40% Off Skis &amp; Boots" alt="Up to 40% Off Skis &amp; Boots" width="275" height="275">
<h6 class="menu-shop-title pt-2 pb-0 mb-0"><strong>UP TO 40% OFF</strong></h6>
<p>Skis &amp; Boots</p>
</a>
</div>
<div class="order-lg-3 order-3 text-center">
<a class="px-4 px-lg-0 pb-3 pt-2 pb-lg-0 pt-lg-0" href="https://www.sportinglife.ca/en-CA/sale/equipment-sale/?prefn1=lifestyle&amp;prefv1=Snowboard">
<img class="equipment-nav-menu-imgs" src="https://www.sportinglife.ca/on/demandware.static/-/Library-Sites-SportingLifeSharedLibrary/default/images/flyout-tiles/flyout-equipment-sale-snowboard.jpg" title="Up to 40% Off Snowboard Equipment" alt="Up to 40% Off Snowboard Equipment" width="275" height="275">
<h6 class="menu-shop-title pt-2 pb-0 mb-0"><strong>UP TO 40% OFF</strong></h6>
<p>Snowboard Equipment</p>
</a>
</div>
</div>
</li>
</ul>
</div>
</li>
<li class="menu-nav">
<a href="https://www.sportinglife.ca/en-CA/sale/" style="color:#007ac3;font-weight:700;">
Sale
</a>
<div class="level-2 level-2--alt is-horizontal">
<style>
    .new-tag {
        background-color: #007ac3;
        padding: 2px 4px;
        color: #ffffff;
        font-size: 9px;
        border-radius: 2px;
        margin-left: 5px;
        letter-spacing: 1px;
        text-transform: uppercase;
        text-decoration: none;
    }
    
    .bg-sale-tile {
    width: 100%;
    margin: 0 auto;
    background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)), url("/on/demandware.static/-/Library-Sites-SportingLifeSharedLibrary/default/images/flyout-tiles/SL23_WK50_Thursday_WINTERSTYLES_Web_FLYOUT_550x315.jpg"); 
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    min-height: 300px;
    position: relative;
    }
    .menu-sale-tile-copy {
        font-size: 12px;
    }
    .menu-sale-tile-main-title {
        font-size: 2rem;
        color: #fff !important;
        line-height: 1;
        font-weight: 900;
        max-width: 400px;
        text-transform: uppercase;
    }
    /* .menu-sale-tile-main-title > span {
        color: #007ac3 !important;
    } */
  
    .inactive-menu-link {
        text-decoration: none !important;
        color: #000000 !important;
    }
  
    .new-tag-link:hover > .clearance-tag {
    text-decoration: underline;
    }
  
    .new-tag-link:hover {
    text-decoration: none !important;
    }
  
    .flyout-banner-logo-svg {
        max-width:250px !important;
        width: 80% !important;
        margin-bottom: 10px;
    }
  
    .menu-sale-tile-title {
        font-size: 50px;
        color: #ffffff;
        line-height: 1;
        font-weight: 900;
    }
  
    .menu-sale-tile-title > span {
        
        display: block;
        font-size: 18px;
        font-weight: 900;
        text-transform: uppercase;
        margin-bottom: 5px;
    }
    
    
    .menu-sale-tile-cop {
        font-size: 14px;
        color: #ffffff;
        line-height: 1;
        font-weight: 800;
    }
  
    .banner-item-list {
        flex: 1 !important;
        max-width: inherit !important;
    }
  
    .flyout-btn {
        padding: 12px 20px;
        min-width: auto;
        max-width: 130px;
        font-size: 12px !important;
        font-weight: 500;
        color: #000 !important;
        background: #fff;
        text-align: center;
        text-decoration: none;
        display: flex;
        justify-content: center;
        align-items: center;
        text-transform: uppercase !important;
        letter-spacing: 0.3px;
        border: 1px solid #fff;
        margin: 5px 10px;
        line-height: 1;
        z-index: 3;
    }
    .flyout-btn:hover {
        background: transparent !important;
        color: #fff !important;
        text-decoration: none !important;
        transition: 0.5s !important;
    }
  
    .clickable-tile {
        position: absolute;
        height: 100%;
        width: 100%;
        z-index: 2;
    }
  
    /* .clickable-tile:hover ~ div > flyout-btn {
        background: transparent;
        border: 1px solid #fff;
        color: #fff !important;
        text-decoration: none !important;
        transition: 0.5s !important;
    } */
  
    @media (min-width: 1024px) {
        .inactive-menu-link {
        cursor: default;
        }
        /*.banner-item-list > div {
            margin-left: 20px;
            margin-right: 20px;
        }*/
        /* prevents Sale from clicking */
        .has-sub-menu {
            cursor: pointer;
        }
        /* #navigation .level-1>li>a[href$='/en-CA/sale/'] {
            display: inline-block;
            pointer-events: none;
        } */
    }
  
    @media (max-width: 1023px) {
        .inactive-menu-link {
            cursor: pointer;
        }
        .new-tag-link:hover > .clearance-tag {
    text-decoration: none;
    }
    /*.banner-item-list > div {
            margin-left: 20px;
            margin-right: 20px;
        }*/
    }
    @media (max-width: 576px) {
        .menu-sale-tile-main-title {
            font-size: 14px;
        }
    }
  </style>
<ul>
<li class="order-1 has-sub-menu d-none d-lg-block"><a href="https://www.sportinglife.ca/en-CA/sale/">Shop All Sale</a>
<ul class="level-3">
<li><a href="https://www.sportinglife.ca/en-CA/sale/womens-sale/">Women's Clothing</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/sale/mens-sale/">Men's Clothing</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/sale/girls-sale/">Girls' Clothing</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/sale/boys-sale/">Boys' Clothing</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/sale/shoe-sale/">Shoes</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/sale/equipment-sale/">Equipment</a></li>

</ul>
</li>
<li class="order-1 level-2__alt-menu d-lg-none">
<ul>
<li><a href="https://www.sportinglife.ca/en-CA/sale/">Shop All Sale</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/sale/womens-sale/">Women's Clothing</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/sale/mens-sale/">Men's Clothing</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/sale/girls-sale/">Girls' Clothing</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/sale/boys-sale/">Boys' Clothing</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/sale/shoe-sale/">Shoes</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/sale/equipment-sale/">Equipment</a></li>

</ul>
</li>
<li class="order-2 has-sub-menu"><a class="inactive-menu-link" href="javascript:void(0);">Deals By Brand</a>
<ul class="level-3">
<li><a href="https://www.sportinglife.ca/en-CA/nike/sale/">Nike</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/moose-knuckles/sale/">Moose Knuckles</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/the-north-face/sale/">The North Face</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/rossignol/sale/">Rossignol</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/columbia/sale/">Columbia</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/salomon/sale/">Salomon</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/adidas%7Cadidas-by-stella-mccartney%7Cadidas-originals/sale/">adidas</a>
</li><li><a href="https://www.sportinglife.ca/en-CA/spyder/sale/">Spyder</a>

</li>
</ul>
</li>
<li class="order-3 px-0 px-lg-4 flex-column justify-content-start has-sub-menu level-2__banner level-2__banner--span-3"><a class="inactive-menu-link" style="line-height: 2.31;" href="javascript:void(0);">Top Deals</a>
<ul class="level-3" style="font-size: 13px;">
<li><a href="https://www.sportinglife.ca/en-CA/deal-of-the-day---gant-womens-mens-jackets/">Deal of the Day - Over 50% Off Gant Women's &amp; Men's Jackets</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/50--off-winter-coats-jackets-boots-more/apparel-accessories/outerwear-skiwear/">50% Off Outerwear &amp; Skiwear</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/50--off-winter-coats-jackets-boots-more/casual-winter-boots/">50% Off Casual &amp; Winter Boots</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/50--off-winter-coats-jackets-boots-more/apparel-accessories/winter-accessories/">50% Off Winter Accessories</a></li>
<li><a href="https://www.sportinglife.ca/en-CA/prior-season-winter-clearance/">Prior Season Winter Clearance</a></li>
</ul>
<ul class="level-3 mt-lg-1 mb-lg-5">
<li>
<a href="https://www.sportinglife.ca/en-CA/sale/" class="shop-all-link-nav-menu"><span>Shop All Top Deals</span><i class="ml-1 fa-light fa-angle-right" aria-hidden="true"></i></a>
</li>
</ul>
</li>
<li class="order-4 px-4 pt-3 pt-lg-0 pb-5 pb-lg-0 px-lg-0 has-sub-menu level-2__banner level-2__banner--span-4 banner-item-list">
<div class="mx-0 mx-lg-4 p-3 bg-sale-tile d-flex flex-column justify-content-end align-items-center">
<a class="clickable-tile" href="https://www.sportinglife.ca/en-CA/50--off-winter-coats-jackets-boots-more/?cid=homepage_wk50_flyout"></a>
<img class="img-fluid flyout-banner-logo-svg" alt="Top Deals" title="Top Deals" src="https://www.sportinglife.ca/on/demandware.static/-/Library-Sites-SportingLifeSharedLibrary/default/images/flyout-tiles/week50flyout.png" width="289" height="20">

<p class="menu-sale-tile-title text-center mb-1 my-2">
<span>SAVE ON OVER</span>
1000 <br><span>WINTER STYLES</span> <span></span></p>

<p style="font-size: 14px;color: #ffffff;font-weight: 500;margin-bottom: 0;z-index: 1;line-height: 1;margin-top: 10px;"> ENDS JAN. 31 </p>



<div class="d-flex justify-content-center flex-wrap mb-4 mb-md-0">
<a class="flyout-btn" href="https://www.sportinglife.ca/en-CA/50--off-winter-coats-jackets-boots-more/?cid=homepage_wk50_flyout">
Shop Now
</a>
</div>

</div>
</li>
</ul>
</div>
</li>
<li class="menu-nav">
<a href="https://www.sportinglife.ca/en-CA/expert-services/">
Expert Services
</a>
<div class="level-2 is-horizontal">
<ul>
<li class="d-lg-none">
<a href="https://www.sportinglife.ca/en-CA/expert-services/">
Shop All Expert Services
</a>
</li>
<li class="has-sub-menu level-2__alt-menu">
<style>
    @media (min-width: 1024px) {
      /* category specific */
      a[href*="expert-services"] ~ .level-2 > ul > .level-2__alt-menu {
        flex: 1 !important;
        max-width: 100% !important;
      }
      .expert-services-ul > li {
        width: 25%;
      }
    }
  
    .flyout-tile.ski-bg {
      background-image: linear-gradient(
          rgba(0, 0, 0, 0),
          rgba(0, 0, 0, 0),
          rgba(0, 0, 0, 0),
          rgba(0, 0, 0, 0.4),
          rgba(0, 0, 0, 0.7),
          rgba(0, 0, 0, 0.8)
        ),
        url("/on/demandware.static/-/Library-Sites-SportingLifeSharedLibrary/default/images/flyout-tiles/expert-services-menu-ski-10-05-2023.jpg");
      background-position: center center;
     background-repeat: no-repeat;
    }
    .flyout-tile.snowboard-bg {
      background-image: linear-gradient(
          rgba(0, 0, 0, 0),
          rgba(0, 0, 0, 0),
          rgba(0, 0, 0, 0),
          rgba(0, 0, 0, 0.4),
          rgba(0, 0, 0, 0.7),
          rgba(0, 0, 0, 0.8)
        ),
        url("/on/demandware.static/-/Library-Sites-SportingLifeSharedLibrary/default/images/flyout-tiles/expert-services-menu-snowboard-10-05-2023.jpg");
      background-position: center center;
      background-repeat: no-repeat;
    }
    .flyout-tile.sl-bg {
      background-image: linear-gradient(
          rgba(0, 0, 0, 0),
          rgba(0, 0, 0, 0),
          rgba(0, 0, 0, 0),
          rgba(0, 0, 0, 0.2),
          rgba(0, 0, 0, 0.3)
        ),
        url("/on/demandware.static/-/Library-Sites-SportingLifeSharedLibrary/default/images/flyout-tiles/expert-services-menu-rewards.jpg");
      background-position: center center;
      background-repeat: no-repeat;
    }
    .expert-services-ul > li > .flyout-tile {
      color: #fff !important;
      display: flex !important;
      width: 100%;
      height: 100%;
      justify-content: center;
      align-items: flex-end;
      text-decoration: none !important;
      position: relative;
      background-size: cover;
    }
    .expert-services-ul > li > .flyout-tile:hover {
      color: #fff !important;
      text-decoration: none !important;
    }
  
    .expert-services-ul > li > .flyout-tile .flyout-tile-title {
      font-size: 18px;
      font-weight: 700;
      line-height: 1.2;
      letter-spacing: 0 !important;
      color:#fff !important;
    }
    .expert-services-ul > li > .flyout-tile .card-subcopy {
      font-size: 14px;
      line-height: 1.5;
      font-weight: 500;
      letter-spacing: 0 !important;
      color:#fff !important;
    }
    .expert-services-ul > li > .flyout-tile .learn-more {
      font-size: 14px;
      line-height: 1;
      letter-spacing: 0 !important;
      color:#fff !important;
    }
    .expert-services-ul > li > .flyout-tile .learn-more > span {
      text-decoration: underline;
    }
    .expert-services-ul > li > .flyout-tile .learn-more > i.fa-angle-right {
      font-size: 10px;
    }
  
    .expert-services-ul > li > .flyout-tile .clickable-tile {
      top: 0;
      left: 0;
    }
  
    .menu-expert-services-link {
      font-size: 14px !important;
      font-weight: 600 !important;
      line-height: 1.4 !important;
    }
    .menu-expert-services-link:hover > span {
      text-decoration: underline;
    }
  
    .menu-learn-more-link {
      font-size: 14px !important;
      font-weight: 600 !important;
      line-height: 1.4 !important;
      cursor: default !important;
    }
  
    @media (max-width: 1023px) {
        .level-2.is-horizontal > ul > li > a[href*="expert-services"] {
            display: none !important;
        }
      .expert-services-ul > li > .flyout-tile {
        justify-content: flex-start;
        min-height: 250px;
      }
      .expert-services-ul > li > .flyout-tile .flyout-tile-title {
        font-size: 18px;
        letter-spacing: 0;
      }
      .expert-services-ul > li > .flyout-tile .card-subcopy {
        font-size: 14px;
        letter-spacing: 0;
        font-weight: 600;
      }
      .expert-services-ul > li > .flyout-tile .learn-more {
        font-size: 14px;
        letter-spacing: 0;
        font-weight: 600;
      }
      .expert-services-ul > li > .flyout-tile .learn-more > i.fa-angle-right {
        font-size: 11px;
        letter-spacing: 0;
        font-weight: 600;
      }
    }
  </style>
<ul class="d-lg-flex expert-services-ul">
<li class="has-sub-menu">
<a class="menu-expert-services-link d-none d-lg-block mb-2" href="https://www.sportinglife.ca/en-CA/services.html">Expert Services</a>
<ul class="level-3">
<li>
<a href="https://www.sportinglife.ca/en-CA/services.html#ski-services">Ski, Race &amp; Cross-Country</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/services.html#snowboard-services">Snowboard</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/services.html#cycle-services">Cycle</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/services.html#tennis-racquets-services">Tennis, Badminton &amp; Squash</a>
</li>

<li>
<a href="https://www.sportinglife.ca/en-CA/services.html">View All Expert Services</a>
</li>
</ul>
<p class="menu-learn-more-link mt-2 mt-lg-4 mb-2 d-none d-lg-block" href="">
Learn More
</p>
<ul class="level-3 d-none d-lg-block">
<li>
<a href="https://www.sportinglife.ca/en-CA/ski-snowboard-size-guide.html">Ski &amp; Snowboard Sizing Guide</a>
</li>
<li>
<a target="_blank" href="https://sportinglifeblog.ca/ski-tune-services-sporting-life/">Winterstaiger Ski Tuning<i style="text-decoration: none; font-size: 10px; color: #454545" class="ml-2 fa-regular fa-arrow-up-right-from-square" aria-hidden="true"></i></a>
</li>
<li>
<a target="_blank" href="https://sportinglifeblog.ca/specialized-and-sporting-lifes-personal-bike-fitting-system/">RETUL Personalized Bike Fitting<i style="text-decoration: none; font-size: 10px; color: #454545" class="ml-2 fa-regular fa-arrow-up-right-from-square" aria-hidden="true"></i></a>
</li>
</ul>
</li>
<li class="has-sub-menu d-lg-none">
<ul>
<li><a class="menu-expert-services-link" href="https://www.sportinglife.ca/en-CA/services.html"><span>View All Expert Services</span> <i class="fa-light fa-angle-right" aria-hidden="true"></i></a></li>
<li>
<a href="https://www.sportinglife.ca/en-CA/services.html#ski-services">Ski, Race &amp; Cross-Country</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/services.html#snowboard-services">Snowboard</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/services.html#cycle-services">Cycle</a>
</li>
<li>
<a href="https://www.sportinglife.ca/en-CA/services.html#tennis-racquets-services">Tennis, Badminton &amp; Squash</a>
</li>


<li><a class="mt-3 menu-mothers-day-nav-link" href="">Learn More</a></li>
<li>
<a href="https://www.sportinglife.ca/en-CA/ski-snowboard-size-guide.html">Ski &amp; Snowboard Sizing Guide</a>
</li>
<li>
<a target="_blank" href="https://sportinglifeblog.ca/ski-tune-services-sporting-life/">Winterstaiger Ski Tuning<i style="text-decoration: none; font-size: 10px; color: #454545" class="ml-2 fa-regular fa-arrow-up-right-from-square" aria-hidden="true"></i></a>
</li>
<li>
<a target="_blank" href="https://sportinglifeblog.ca/specialized-and-sporting-lifes-personal-bike-fitting-system/">RETUL Personalized Bike Fitting<i style="text-decoration: none; font-size: 10px; color: #454545" class="ml-2 fa-regular fa-arrow-up-right-from-square" aria-hidden="true"></i></a>
</li>
</ul>
</li>
<li class="px-4 py-2 py-lg-0 px-lg-0 has-sub-menu level-2__banner banner-item-list">
<div class="flyout-tile ski-bg px-3 pt-6 pb-lg-4 pb-4 mx-lg-4">
<a href="https://www.sportinglife.ca/en-CA/services.html#ski-services" class="clickable-tile"></a>
<div>
<p class="flyout-tile-title mb-1">Ski Services</p>
<p class="mb-4 card-subcopy">Tune-ups, boot fitting, repairs &amp; more</p>
<p class="mb-0 learn-more">
<span>Learn More</span>
<i class="fa-regular fa-angle-right" aria-hidden="true"></i>
</p>
</div>
</div>
</li>
<li class="px-4 py-2 py-lg-0 px-lg-0 has-sub-menu level-2__banner banner-item-list">
<div class="flyout-tile snowboard-bg px-3 pt-6 pb-lg-4 pb-4 mx-lg-4">
<a href="https://www.sportinglife.ca/en-CA/services.html#snowboard-services" class="clickable-tile"></a>
<div>
<p class="flyout-tile-title mb-1">Snowboard Services</p>
<p class="mb-4 card-subcopy">Binding installation, tune-ups, waxing &amp; more</p>
<p class="mb-0 learn-more">
<span>Learn More</span>
<i class="fa-regular fa-angle-right" aria-hidden="true"></i>
</p>
</div>
</div>
</li>
<li class="px-4 pt-2 pb-5 py-lg-0 px-lg-0 has-sub-menu level-2__banner banner-item-list">
<div class="flyout-tile sl-bg px-3 pt-6 pb-lg-4 pb-4 mx-lg-4">
<a href="https://www.sportinglife.ca/en-CA/rewards.html" class="clickable-tile"></a>
<div>
<p class="flyout-tile-title mb-1">Sporting Life Rewards</p>
<p class="mb-4 card-subcopy">Service &amp; Earn - Membership Perks</p>
<p class="mb-0 learn-more">
<span>Learn More</span>
<i class="fa-regular fa-angle-right" aria-hidden="true"></i>
</p>
</div>
</div>
</li>
</ul>
</li>
</ul>
</div>
</li>
</ul>
<div class="menu-utility-user-mobile">
<ul>
<li><a class="menu-utility-user-mobile__item" href="https://www.sportinglife.ca/en-CA/help.html">Help</a></li>
<li><a class="menu-utility-user-mobile__item" href="https://www.sportinglife.ca/en-CA/rewards">Rewards</a></li>
<li><a class="menu-utility-user-mobile__item" target="_blank" href="http://sportinglifeblog.ca/">Blog</a></li>
</ul>
<div class="locale-select">
<a href="https://stores.sportinglife.ca/fr" "="" data-locale="fr_CA" class="locale-select-link">
Français
</a>
<div class="locale-select__options">
<a href="https://stores.sportinglife.ca/fr" "="" data-locale="fr_CA" class="locale-select-link">Français</a>
</div>
</div>
</div>
</nav>
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