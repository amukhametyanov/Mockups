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

		

    <!--
        <footer id="colophon" class="site-footer" role="contentinfo">

        <?php // get_sidebar( 'footer' ); ?>

        <div class="site-info">
            <?php // do_action( 'twentyfourteen_credits' ); ?>
            <a href="http://www.golftown.com"><i class="fa fa-copyright"></i><?php // printf(__('%s Golf Town, Inc. All rights reserved.', 'gt-blog'), $date) ?></a> | <a href="http://www.golftown.com/CustomerSupport.aspx?section=privacysecurity"><?php // _e('Privacy Policy', 'gt-blog')?></a>
        </div> 
        </footer>  -->

        <?php wp_footer(); ?>
       

        <style>
            footer {
                display: block;
            }
.st-footer{
    background-color:#f4f2f1;
    color:#000;
    font-family:hind,sans-serif;
    position:relative;
    min-height:700px;
    background-size:cover;
    background-position:center center;
    background-repeat:no-repeat
}
.pt_categorylanding .category-refinement .c-accordion__header{
    background:0 0!important;
    cursor:auto;
    padding-bottom:0
}
.c-accordion__header{
    cursor:pointer;
    background-image:url(data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPScxLjEnIHhtbG5zPSdodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZycgeG1sbnM6eGxpbms9J2h0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsnIHg9JzAnIHk9JzAnIHdpZHRoPScyNCcgaGVpZ2h0PScyNCcgdmlld0JveD0nMCwgMCwgMjQsIDI0Jz48ZyBpZD0nTGF5ZXJfMScgZmlsbD0nIzM0ODcxYic+PHBhdGggZD0nTTEyLjE2NSwxMi4xNjUgTDEyLjE2NSwxNi41IEwxMC44MzUsMTYuNSBMMTAuODM1LDEyLjE2NSBMNi41LDEyLjE2NSBMNi41LDEwLjgzNSBMMTAuODM1LDEwLjgzNSBMMTAuODM1LDYuNSBMMTIuMTY1LDYuNSBMMTIuMTY1LDEwLjgzNSBMMTYuNSwxMC44MzUgTDE2LjUsMTIuMTY1IHonIGZpbGw9JyMzNDg3MWInIC8+PC9nPjwvc3ZnPg==);
    background-position:right center;
    background-repeat:no-repeat;
    display:flex;
    justify-content:space-between;
    font-family:hind,sans-serif;
    font-size:12px;
    font-weight:inherit;
    letter-spacing:1.5px;
    line-height:1;
    padding:21px 1px 21px 3px;
    padding-left:2px;
    text-transform:uppercase;
    width:100%
}
.c-accordion__item.is-expanded>.c-accordion__header{
    background-image:url(data:image/svg+xml;
    base64,PHN2ZyB2ZXJzaW9uPScxLjEnIHhtbG5zPSdodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZycgeG1sbnM6eGxpbms9J2h0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsnIHg9JzAnIHk9JzAnIHdpZHRoPScyNCcgaGVpZ2h0PScyNCcgdmlld0JveD0nMCwgMCwgMjQsIDI0Jz48ZyBpZD0nTGF5ZXJfMSc+PHBhdGggZD0nTTYuNSwxMi4xNjUgTDYuNSwxMC44MzUgTDE2LjUsMTAuODM1IEwxNi41LDEyLjE2NSB6JyBmaWxsPScjMzQ4NzFiJy8+PC9nPjwvc3ZnPg==)
}
/* columns */
.col-12{
    flex:0 0 100%;
    max-width:100%
}
@media (max-width: 1023.98px) {
    .col-0 {
        display: none;
    }
}
@media(min-width:1024px){
    .col-lg-1{
        flex:0 0 8.33333%;
        max-width:8.33333%
    }
    .col-lg-3{
        flex:0 0 25%;
        max-width:25%
    }
    .col-lg-8{
        flex:0 0 66.66667%;
        max-width:66.66667%
    }
}
@media(min-width:1024px){
    .c-accordion__header{
        font-size:inherit;
        font-weight:600
    }
}
@media(min-width:1024px){
    .st-footer{
        z-index:991
    }
}
.st-footer__menu__ul.c-accordion__body {
    padding: 0 1.5em;
}
@media(min-width:1024px){
    footer .c-accordion__item {
        border-top: none;
    }
    .c-accordion.c-accordion--desktop-disable>.c-accordion__item.is-expanded>.c-accordion__body{
        padding-bottom:0;
        padding-top:0
    }
}
@media (max-width: 1023.98px) {
    footer .c-accordion__item {
        border-top: solid 1px #ddd9d7;
    }
}
.c-accordion__item{
}
.c-accordion__item.is-expanded>.c-accordion__body{
    /* max-height:1500px; */
    /* padding-bottom:40px;
    padding-top:19px; */
}

.c-accordion__item.is-expanded>.c-accordion__header{
    background-image:url(data:image/svg+xml;
    base64,PHN2ZyB2ZXJzaW9uPScxLjEnIHhtbG5zPSdodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZycgeG1sbnM6eGxpbms9J2h0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsnIHg9JzAnIHk9JzAnIHdpZHRoPScyNCcgaGVpZ2h0PScyNCcgdmlld0JveD0nMCwgMCwgMjQsIDI0Jz48ZyBpZD0nTGF5ZXJfMSc+PHBhdGggZD0nTTYuNSwxMi4xNjUgTDYuNSwxMC44MzUgTDE2LjUsMTAuODM1IEwxNi41LDEyLjE2NSB6JyBmaWxsPScjMzQ4NzFiJy8+PC9nPjwvc3ZnPg==)
}
.st-footer__wrapper{
    width:100%;
    margin-right:auto;
    margin-left:auto;
    padding-right:20px;
    padding-left:20px;
    padding-left:20px;
    padding-top:40px;
    position:relative
}
@media(min-width:1024px){
    .st-footer__wrapper{
        padding-right:40px;
        padding-left:40px
    }
}
@media(min-width:1440px){
    .st-footer__wrapper{
        max-width:1440px
    }
}
@media(min-width:1024px){
    .st-footer__wrapper{
        padding-top:50px;
        position:initial
    }
}
@media(min-width:1024px){
    .st-footer__col-last{
        padding-left:0
    }
}
.st-footer__border{
    display:none
}
@media(min-width:1024px){
    .st-footer__border{
        display:block
    }
}
.st-footer__border-line{
    background-color:rgba(0,0,0,.1);
    height:100%;
    margin:0 auto;
    width:1px
}
.st-footer__leaderboard{
    margin-bottom:30px
}
@media(min-width:1024px){
    .st-footer__leaderboard{
        margin-bottom:40px
    }
}
.st-footer__leaderboard-text{
    font-size:16px;
    line-height:1.38;
    margin-bottom:20px
}
@media(min-width:1024px){
    .st-footer__leaderboard .content-asset{
        max-width:280px
    }
}
.st-footer__leaderboard-heading{
    font-size:24px;
    font-weight:600;
    margin-bottom:15px;
    line-height:normal;
    letter-spacing:-.2px;
    text-transform: none !important;
    margin-top: 0;
}
.st-footer__social{
    margin-bottom:30px
}
.st-footer__social-heading{
    font-size:16px;
    font-weight:500;
    line-height:2.06;
    letter-spacing:normal;
    margin-top:0;
    text-transform: none;
}
.st-footer__social-links{
    display:flex;
    list-style:none;
    margin:0!important;
    padding:0!important
}
.st-footer__social-link{
    margin-right:18px
}
@media(min-width:1024px){
    .st-footer__social-link{
        margin-right:15px
    }
}
.st-footer__social-svg{
    color:#34871b;
    fill:#34871b;
    height:42px;
    width:42px
}
@media(min-width:1024px){
    .st-footer__social-svg{
        height:36px;
        width:36px
    }
}
.st-footer__social-svg:hover{
    color:#286715;
    fill:#286715
}
.st-footer__menu .content-asset-title{
    display:none
}
/* .st-footer__menu .st-footer__menu__item:first-of-type{
    border-top:none
} */
.st-footer__menu .st-footer__menu__header{
    background-image:none!important;
    font-size:13px;
    font-weight:500;
    line-height:2.54;
    letter-spacing:1px;
    padding-top:10px;
    padding-bottom:10px;
    position:relative;
    text-transform:uppercase!important
}
.st-footer__menu .st-footer__menu__header::before,.st-footer__menu .st-footer__menu__header::after{
    content:'';
    background-color:#34871b;
    height:12px;
    position:absolute;
    right:0;
    top:50%;
    width:12px
}
.st-footer__menu .st-footer__menu__header::before{
    top:calc(50% - 5px);
    right:5px;
    width:2px
}
.st-footer__menu .st-footer__menu__header::after{
    height:2px
}
@media(min-width:1024px){
    .st-footer__menu .st-footer__menu__header{
        margin-bottom:15px;
        padding-top:0
    }
    .st-footer__menu .st-footer__menu__header::before,.st-footer__menu .st-footer__menu__header::after{
        display:none
    }
}
.is-expanded .st-footer__menu__header::before{
    display:none
}
.st-footer__menu__ul{
    list-style:none;
    margin:0!important
}
@media(min-width:1024px){
    .st-footer__menu__ul{
        padding:0!important
    }
}
.st-footer__menu__ul-li{
    font-size:14px;
    font-weight:300;
    line-height:1.54;
    line-height:1.43
}
.st-footer__menu__ul-li+.st-footer__menu__ul-li{
    margin-top:10px
}
@media(min-width:1024px){
    .st-footer__menu__ul-li+.st-footer__menu__ul-li{
        margin-top:20px
    }
}
.st-footer__menu__ul-li a{
    color:#000
}
.st-footer__payments{
    padding-top:20px;
    max-width:230px
}
@media(min-width:1024px){
    .st-footer__payments{
        border-top:1px solid rgba(0,0,0,.1);
        margin-top:30px
    }
}
.st-footer__payments-ul{
    display:flex;
    flex-wrap:wrap;
    list-style:none;
    margin:0!important;
    padding:0!important
}
.st-footer__payments-svg{
    color:#757067;
    cursor:pointer;
    fill:#757067;
    height:28px;
    margin-right:10px;
    margin-bottom:15px;
    width:46px
}
.st-footer__payments-svg.visa-checkout{
    height:25px;
    width:86px
}
.st-footer__payments-svg:hover{
    color:#34871b;
    fill:#34871b
}
.st-footer__payments .content-asset-title{
    display:block;
    font-size:16px;
    font-weight:500
}
.st-footer__copy{
    color:#000;
    font-family:hind,sans-serif;
    font-size:12px;
    font-weight:400;
    line-height:1.67;
    letter-spacing:.2px;
    margin-top:20px;
    width:200px
}
.gt-footer-button {
    color: #fff;
    background-color: #34871b;
    border-color: #34871b;
}
.gt-footer-button:hover {
    color: #fff;
    background-color: #356b26;
    border-color: #356b26;
}
.button-full{
    border:0;
    display:block;
    font-size:13px;
    font-weight:500;
    letter-spacing:1.6px;
    padding:15px;
    text-transform:uppercase;
    text-align:center;
    width:100%
}
.button-full:hover{
    text-decoration:none
}
@media(min-width:1024px){
    .st-footer__copy{
        position:absolute;
        bottom:30px;
        left:0;
        text-align:center;
        width:100%
    }
}
.st-footer__copy .content-asset-title{
    display:none
}
.st-footer__img{
    margin-top:-185px;
    width:100%
}
@media(min-width:1024px){
    .st-footer__img{
        display:block;
        margin-top:-160px
    }
}

@media (max-width: 1023.98px) {
    .st-footer__menu__ul {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease, padding-top 0.3s ease, padding-bottom 0.3s ease;
    }

    .is-expanded .st-footer__menu__ul {
        max-height: 500px; 
        padding-bottom:40px;
        padding-top:19px;
    }
}
.st-footer__social-svg {
    height: 42px;
    width: 42px;
    color: #34871b;
    fill: #34871b;
    filter: invert(44%) sepia(20%) saturate(1781%) hue-rotate(61deg) brightness(92%) contrast(90%);
}
.st-footer__social-svg:hover {
    color: #286715;
    fill: #286715;
    filter: invert(25%) sepia(99%) saturate(4214%) hue-rotate(81deg) brightness(81%) contrast(84%);
}
@media (min-width: 1024px) {
    .st-footer__social-svg {
        height: 36px;
        width: 36px;
    }
}

        </style>

<footer class="st-footer">
    <div class="st-footer__wrapper">
        <div class="row">
            <div class="st-footer__col col-12 col-lg-3">
                <div class="st-footer__leaderboard">
                    <div class="content-asset">
                        <h2 class="st-footer__leaderboard-heading">Join the Leaderboard</h2>
                        <p class="st-footer__leaderboard-text">Receive exclusive offers, deals, and promotions by email.</p>
                        <a href="https://www.golftown.com/on/demandware.store/Sites-GolfTown-Site/en_CA/MCSubscription-SubscribeFooter" class="gt-footer-button button-full mcsubscribe-footer">Join the Leaderboard</a>
                    </div>
                </div>
                <div class="st-footer__social">
                    <div class="content-asset">
                        <h2 class="st-footer__social-heading">Connect with Us</h2>
                        <ul class="st-footer__social-links">
                            <li>
                                <a class="st-footer__social-link facebook" href="http://www.facebook.com/GolfTown" target="_blank" title="Go to Facebook">
                                    <img class="img-fluid st-footer__social-svg" src="https://www.golftown.com/on/demandware.static/-/Library-Sites-GolfTownSharedLibrary/default/images/blog-icons/logo-gtblog-facebook.svg" alt="Facebook Icon" title="Facebook Icon" width="" height="">
                                    <!-- <span class="visually-hidden">Facebook</span> -->
                                </a>
                            </li>
                            <li>
                                <a class="st-footer__social-link twitter" href="http://twitter.com/golftown" target="_blank" title="Go to X">
                                    <img class="img-fluid st-footer__social-svg" src="https://www.golftown.com/on/demandware.static/-/Library-Sites-GolfTownSharedLibrary/default/images/blog-icons/logo-gtblog-x-twitter.svg" alt="Facebook Icon" title="Facebook Icon" width="" height="">
                                    <!-- <span class="visually-hidden">X</span> -->
                                </a>
                            </li>
                            <li>
                                <a class="st-footer__social-link instagram" href="https://www.instagram.com/golftown" target="_blank" title="Go to Instagram">
                                    <img class="img-fluid st-footer__social-svg" src="https://www.golftown.com/on/demandware.static/-/Library-Sites-GolfTownSharedLibrary/default/images/blog-icons/logo-gtblog-instagram.svg" alt="Facebook Icon" title="Facebook Icon" width="" height="">
                                    <!-- <span class="visually-hidden">Instagram</span> -->
                                </a>
                            </li>
                            <li>
                                <a class="st-footer__social-link youtube" href="https://www.youtube.com/user/golftownchannel" target="_blank" title="Go to Youtube">
                                    <img class="img-fluid st-footer__social-svg" src="https://www.golftown.com/on/demandware.static/-/Library-Sites-GolfTownSharedLibrary/default/images/blog-icons/logo-gtblog-youtube.svg" alt="Facebook Icon" title="Facebook Icon" width="" height="">
                                    <!-- <span class="visually-hidden">Youtube</span> -->
                                </a>
                            </li>
                            <li>
                                <a class="st-footer__social-link wechat" href="http://blog.golftown.com/wp-content/uploads/2024/02/Scan-to-follow-Golf-Town-on-WeChat.pdf" target="_blank" title="We Chat">
                                    <img class="img-fluid st-footer__social-svg" src="https://www.golftown.com/on/demandware.static/-/Library-Sites-GolfTownSharedLibrary/default/images/blog-icons/logo-gtblog-wechat.svg" alt="Facebook Icon" title="Facebook Icon" width="" height="">
                                    <!-- <span class="visually-hidden">We Chat</span> -->
                                </a>
                            </li>
                        </ul>
                        <style>
                            #navigation .phone {
                                display: none !important;
                            }
                        </style>
                    </div>
                </div>
            </div>
            <div class="st-footer__border col-0 col-lg-1">
                <div class="st-footer__border-line"></div>
            </div>
            <div class="st-footer__menu menu-footer row col-12 col-lg-8">
                <div class="col-12 col-lg-3">
                    <div class="content-asset">
                        <div class="c-accordion c-accordion--desktop-disable">
                            <div class="c-accordion__item js-accordion__item st-footer__menu__item">
                                <strong class="js-accordion__target c-accordion__header st-footer__menu__header">Customer Care</strong>
                                <ul class="st-footer__menu__ul c-accordion__body">
                                    <li class="st-footer__menu__ul-li"><a href="https://www.golftown.com/en-CA/help-faq.html" title="Go to Help &amp; FAQs">FAQs</a></li>
                                    <li class="st-footer__menu__ul-li"><a href="https://www.golftown.com/en-CA/contactus" title="Go to Contact Us">Contact Us</a></li>
                                    <li class="st-footer__menu__ul-li"><a href="https://www.golftown.com/en-CA/returns.html" title="Go to Returns &amp; Refunds">Returns &amp; Refunds</a></li>
                                    <li class="st-footer__menu__ul-li"><a href="https://www.golftown.com/en-CA/shipping.html" title="Go to Shipping Policies">Shipping Policies</a></li>
                                    <li class="st-footer__menu__ul-li"><a href="https://golftown.cashstar.com" title="Go to Gift Cards">Gift Cards</a></li>

                                    <li class="st-footer__menu__ul-li"><a href="https://www.golftown.com/en-CA/donations" title="Go to Donations">Donations</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="content-asset">
                        <div class="c-accordion c-accordion--desktop-disable">
                            <div class="c-accordion__item js-accordion__item  st-footer__menu__item"><strong class="js-accordion__target c-accordion__header st-footer__menu__header">Services</strong>
                                <ul class="st-footer__menu__ul pipe c-accordion__body">
                                    <li class="st-footer__menu__ul-li"><a href="https://stores.golftown.com/" title="Go to Store Locator">Store Locator</a></li>
                                    <li class="st-footer__menu__ul-li"><a href="https://www.golftown.com/en-CA/gt-promotions/" title="Go to Golf Town Promotions">Golf Town Promotions</a></li>
                                    <li class="st-footer__menu__ul-li"><a href="https://www.golftown.com/en-CA/proshop.html" title="Go to Pro Shop Services">Pro Shop Services</a></li>
                                    <li class="st-footer__menu__ul-li"><a href="https://www.golftown.com/en-CA/custom-fit/" title="Go to Custom Fitting">Custom Fitting</a></li>
                                    <li class="st-footer__menu__ul-li"><a href="https://www.golftown.com/en-CA/tournaments/" title="Tournaments">Tournaments</a></li>

                                    <li class="st-footer__menu__ul-li"><a href="https://www.golftown.com/en-CA/wetaketrades.html" title="Go to Trade Ins">Trade Ins</a></li>
                                    <li class="st-footer__menu__ul-li"><a href="https://www.golftown.com/en-CA/pre-owned-clubs.html" title="Go to Pre-Owned Clubs">Pre-Owned Clubs</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="content-asset">
                        <div class="c-accordion c-accordion--desktop-disable">
                            <div class="c-accordion__item js-accordion__item  st-footer__menu__item">
                                <strong class="js-accordion__target c-accordion__header st-footer__menu__header">About Us</strong>
                                <ul class="st-footer__menu__ul pipe c-accordion__body">
                                    <li class="st-footer__menu__ul-li"><a href="https://www.golftown.com/en-CA/about-us.html" title="Go to About Us">About Us</a></li>
                                    <li class="st-footer__menu__ul-li"><a href="https://www.joingolftown.com/" title="Go to Careers">Careers</a></li>
                                    <li class="st-footer__menu__ul-li"><a href="https://www.golftown.com/en-CA/privacy-policy.html" title="Go to Privacy Policy">Privacy Policy</a></li>
                                    <li class="st-footer__menu__ul-li"><a href="https://www.golftown.com/en-CA/accessibility.html" title="Go to Accessibility">Accessibility</a></li>
                                    <li class="st-footer__menu__ul-li"><a href="https://www.golftown.com/en-CA/terms-and-conditions.html" title="Go to Terms &amp; Conditions">Terms &amp; Conditions</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-lg-3 st-footer__col-last">
                    <div class="content-asset">
                        <div class="c-accordion c-accordion--desktop-disable">
                            <div class="c-accordion__item js-accordion__item  st-footer__menu__item">
                                <strong class="js-accordion__target c-accordion__header st-footer__menu__header">Follow us</strong>
                                <ul class="st-footer__menu__ul pipe c-accordion__body">
                                    <li class="st-footer__menu__ul-li"><a href="https://blog.golftown.com/" title="Go to Blog">Blog</a></li>
                                    <li class="st-footer__menu__ul-li"><a href="https://www.golftown.com/en-CA/events" title="Go to Events">Events</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="st-footer__payments">
                        <div class="content-asset">
                            <ul class="st-footer__payments-ul">
                                <li>
                                    <img class="img-fluid st-footer__payments-svg svg-symbol" src="https://www.golftown.com/on/demandware.static/-/Library-Sites-GolfTownSharedLibrary/default/images/blog-icons/logo-gtblog-visa.svg" alt="Visa Icon" title="Visa Icon" width="" height="">
                                    <!-- <svg class="" aria-hidden="true">
                                        <use xlink:href="/on/demandware.static/Sites-GolfTown-Site/-/default/dw0a15b5d2/svg/symbols.svg#svg-visa-dark"></use>
                                    </svg> -->
                                    <!-- <span class="visually-hidden">Visa</span> -->
                                </li>
                                <li>
                                    <img class="img-fluid st-footer__payments-svg svg-symbol" src="https://www.golftown.com/on/demandware.static/-/Library-Sites-GolfTownSharedLibrary/default/images/blog-icons/logo-gtblog-mastercard.svg" alt="Visa Icon" title="Visa Icon" width="" height="">
                                    <!-- <span class="visually-hidden">Master Card</span> -->
                                </li>
                                <li>
                                    <img class="img-fluid st-footer__payments-svg svg-symbol" src="https://www.golftown.com/on/demandware.static/-/Library-Sites-GolfTownSharedLibrary/default/images/blog-icons/logo-gtblog-amex.svg" alt="Visa Icon" title="Visa Icon" width="" height="">
                                    <!-- <span class="visually-hidden">American Express</span> -->
                                </li>
                                <li>
                                    <img class="img-fluid st-footer__payments-svg svg-symbol" src="https://www.golftown.com/on/demandware.static/-/Library-Sites-GolfTownSharedLibrary/default/images/blog-icons/logo-gtblog-paypal.svg" alt="Visa Icon" title="Visa Icon" width="" height="">    
                                <!-- <svg class="st-footer__payments-svg svg-symbol" aria-hidden="true">
                                        <use xlink:href="/on/demandware.static/Sites-GolfTown-Site/-/default/dw0a15b5d2/svg/symbols.svg#svg-paypal-dark"></use>
                                    </svg>
                                    <span class="visually-hidden">PayPal</span> -->
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="st-footer__copy">
            <div class="content-asset">
                <p>© 2024 Golf Town Limited Canada <span class="st-footer__copy-rights">All Rights Reserved</span></p>
            </div>
        </div>
    </div>
   
    <style>
        .st-footer {
            background-image: linear-gradient(180deg, rgb(244 242 241), rgb(244 242 241), rgb(244 242 241 / 80%), rgb(244 242 241 / 50%), transparent), url(https://www.golftown.com/dw/image/v2/BCLZ_PRD/on/demandware.static/-/Library-Sites-GolfTownSharedLibrary/default/dw1446f365/footer-desktop_updater1.jpg?sw=1080);
        }
    </style>
    <input type="hidden" id="TournamenetCaddiesUrl" name="TournamenetCaddiesInput" value="https://www.golftown.com/on/demandware.store/Sites-GolfTown-Site/en_CA/TournamentCaddie-subscribe">
</footer>

<script>
document.querySelectorAll('.st-footer__menu__item').forEach(item => {
    item.addEventListener('click', function() {
        this.classList.toggle('is-expanded');
    });
});

</script>

    <!-- end of footer -->

    
</body>
</html>
 

</body>
</html>