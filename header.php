<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package M_Lab_Studio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="56x56" href="<?php bloginfo( 'stylesheet_directory' ); ?>/wp-content/uploads/2019/08/favicon.png">

	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/responsive.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/custom-animation.css">

	<?php wp_head(); ?>
	<!-- Fix Internet Explorer ______________________________________-->
    <!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<script src="vendor/html5shiv.js"></script>
		<script src="vendor/respond.js"></script>
	<![endif]-->

    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="https://www.google.com/recaptcha/api.js?render=6LcTf8UUAAAAAJ1R7bOMDlc4WKBn9DZ7fgG-Kn75"></script>
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('6LcTf8UUAAAAAJ1R7bOMDlc4WKBn9DZ7fgG-Kn75', {action: 'homepage'});
        });
    </script>

    <script>
        // Alert for old browser
        var $buoop = {required:{e:-4,f:-3,o:-3,s:-1,c:-3},insecure:true,api:2020.02 };
        function $buo_f(){
            var e = document.createElement("script");
            e.src = "//browser-update.org/update.min.js";
            document.body.appendChild(e);
        };
        try {document.addEventListener("DOMContentLoaded", $buo_f,false)}
        catch(e){window.attachEvent("onload", $buo_f)}
    </script>
</head>

<body>
<div class="cursor"></div>
<?php
/**
 * Declaring all variables for ACF
 * 
 * @author M Lab Studio <upss070288@gmail.com>
 * @package M Lab Studio
 * 
 */
// Header
$home_call_us                       = get_field ('home_call_us');
$call_us_color                      = get_field ('call_us_color');
$home_mobile_link                   = get_field ('home_mobile_link');
$home_mobile_text                   = get_field ('home_mobile_text');
$mobile_color                       = get_field ('mobile_color');
$button_text_color                  = get_field ('button_text_color');
$home_header_button                 = get_field ('home_header_button');
$home_header_button_link            = get_field ('home_header_button_link');

// Preloader
$preloader_name                     = get_field ('preloader_name');
$preloader_letter                   = get_sub_field ('preloader_letter');

// Language
$language                           = get_field ('language');
$language_name                      = get_sub_field ('language_name');
$language_link                      = get_sub_field ('language_link');

?>
<div class="main-page-wrapper">

<!-- ===================================================
    Loading Transition
==================================================== -->
<!-- Preloader -->
<section>
    <?php
    if (!strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0')) { ?>
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <?php

                    // If repeators has rows and data
                    if( have_rows('preloader_name') ) {

                        // Loop through the rows of data
                        while ( have_rows('preloader_name') ) {
                            the_row();

                            // Display sub field data
                            echo "<span data-text-preloader='{$preloader_letter}' class='letters-loading'>";
                            the_sub_field('preloader_letter');
                            echo "</span>";
                        }
                    } else { ?>
                        <span data-text-preloader="M" class="letters-loading">M</span>
                        <span data-text-preloader="  " class="letters-loading">  </span>
                        <span data-text-preloader="  " class="letters-loading">  </span>
                        <span data-text-preloader="L" class="letters-loading">L</span>
                        <span data-text-preloader="a" class="letters-loading">a</span>
                        <span data-text-preloader="b" class="letters-loading">b</span>
                        <span data-text-preloader="S" class="letters-loading">S</span>
                        <span data-text-preloader="t" class="letters-loading">t</span>
                        <span data-text-preloader="u" class="letters-loading">u</span>
                        <span data-text-preloader="d" class="letters-loading">d</span>
                        <span data-text-preloader="i" class="letters-loading">i</span>
                        <span data-text-preloader="o" class="letters-loading">o</span>

                    <?php }
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
</section>


<!-- 
=============================================
    Theme Main Menu
==============================================
-->
<div class="theme-main-menu theme-menu-one">
    <div class="logo">
    <?php
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    if (has_custom_logo( )) { ?>
        <a href="<?php echo get_site_url(); ?>"><img src="<?php echo $image[0]; ?>" alt=""></a>
    <?php } else { ?>
        <a href="<?php echo get_site_url(); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo/logo.svg" alt=""></a>
    <?php } ?>
    </div>
    <nav id="mega-menu-holder" class="navbar navbar-expand-lg">
        <div class="container nav-container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="flaticon-setup"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php 
            wp_nav_menu( array (
                'theme_location' 	=> esc_html__('primary', 'mlab'),
                'depth'             => 2,
                'container' 		=> 'div',
                'container_class' 	=> 'container nav-container',
                'menu_class' 		=> 'navbar-nav',
                'fallback_cb'     	=> 'WP_Bootstrap_Navwalker::fallback',
                'walker'          	=> new WP_Bootstrap_Navwalker()
            ) );
            ?>
            </div>
        </div>
        <!-- /.container -->
    </nav>
    <!-- /#mega-menu-holder -->
    <div class="header-right-widget">
        <ul>
            <li style="color:<?php echo $call_us_color; ?>" class="call-us">
                <?php if (empty($home_call_us)) { echo esc_html__('Call us', 'mlab'); } else { echo esc_html__( $home_mobile_link, 'mlab' ); } ?><a style = "color: <?php echo $mobile_color; ?>" href="tel:<?php if (empty($home_mobile_link)) { echo esc_html__('#', 'mlab'); } else { echo esc_html__( $home_mobile_link, 'mlab' ); } ?>"><?php if (empty($home_mobile_text)) { echo esc_html__('060.663.1540', 'mlab'); } else { echo esc_html__( $home_mobile_text, 'mlab' ); } ?></a>
            </li>
            <li class="language-switcher">
                <div class="dropdown">
                    <button type="button" class="dropdown-toggle" data-toggle="dropdown">
                        En
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <ul class="ct-language__dropdown">
                            <li><a href="https://www.mlab.rs" target="_blank" class="lang-es">SRB</a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li><a style = "color: <?php echo $button_text_color; ?>" href="<?php if (empty($home_header_button_link)) { echo esc_html__('/order', 'mlab'); } else { echo esc_html__( $home_header_button_link, 'mlab' ); } ?>" class="contact-us white-shdw-button order-now-btn"><?php if (empty($home_header_button)) { echo esc_html__('Order Now', 'mlab'); } else { echo esc_html__( $home_header_button, 'mlab' ); } ?> <i class="icon flaticon-next"></i></a></li>
        </ul>
    </div>
    <!-- /.header-right-widget -->
</div>
<!-- /.theme-main-menu -->