<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package M_Lab_Studio
 */


wp_footer(); ?>
<!-- 
=============================================
    Contact Banner
============================================== 
-->
<div class="agn-contact-banner">
    <div class="container">
        <h2 class="title">Do you have any projects? <br>Contact us.</h2>
        <a href="/contact-us" class="contact-button line-button-one">Contact Us</a>
        <a href="/order" class="contact-button line-button-one">Order</a>
    </div>
    <!-- /.contianer -->
</div>
<!-- /.agn-contact-banner -->

<!--
=====================================================
    Footer
=====================================================
-->
<footer class="theme-footer-one">
<div class="shape-one" data-aos="zoom-in-right"></div>
<img src="<?php bloginfo('stylesheet_directory'); ?>/images/shape/shape-67.svg" alt="" class="shape-two">
    <div class="top-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-12 about-widget logo_footer" data-aos="fade-up">
                <?php
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                if (has_custom_logo( )) { ?>
                    <a href="index.html"><img style="width:50%;" src="<?php echo $image[0]; ?>" alt=""></a>
                <?php } else { ?>
                    <a href="index.html" class="logo"><img style="width:50%;" src="<?php bloginfo('stylesheet_directory'); ?>/images/logo/logo2.svg" alt=""></a>
                <?php } ?>
                    <a href="#" class="email">info@mlabstudio.com</a>
                    <a href="#" class="phone">+38160.663.1540</a>

                </div>
                <!-- /.about-widget -->
                <div class="col-lg-3 col-lg-3 col-sm-6 col-12 footer-list" data-aos="fade-up">
                    <h5 class="title">Services</h5>
                    <ul>
                        <li><a href="/what-we-do">What We Do</a></li>
                        <li><a href="/what-we-do">Web Design</a></li>
                        <li><a href="/what-we-do">WordPress Theme and Plugin</a></li>
                        <li><a href="/what-we-do">Ongoing WordPress Support</a></li>
                        <li><a href="/what-we-do">SEO & Affiliate Marketing</a></li>
                        <li><a href="/what-we-do">Social & Online Marketing</a></li>
                    </ul>
                </div>
                <!-- /.footer-recent-post -->
                <div class="col-lg-3 col-sm-6 col-12 footer-list" data-aos="fade-up">
                    <h5 class="title">About us</h5>
                    <ul>
                        <li><a href="/what-we-do">What We Do</a></li>
                        <li><a href="/team">Team</a></li>
                        <li><a href="/portfolio">Portfolio</a></li>
                        <li><a href="/our-plans">Our Plans</a></li>
                    </ul>
                </div>
                <!-- /.footer-list -->
                <div class="col-lg-3 col-lg-2 col-sm-6 col-12 footer-information" data-aos="fade-up">
                    <h5 class="title">Our Address</h5>
                    <p>- Orville Road California, USA<br>
                    - Ibarska 15. Smederevo, Serbia</p>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.top-footer -->

    <div class="container">
        <div class="bottom-footer">
            <div class="clearfix">
                <p>&copy; 2015 - <?php echo date('Y'); ?> all right reserved <a href="https://mlab-studio.com">M LabStudio</a></p>
                <ul>
                    <li><a href="/privacy-policy">Privace & Policy.</a></li>
                    <li><a href="#">Faq.</a></li>
                    <li><a href="#">Terms.</a></li>
                </ul>
            </div>
        </div>
        <!-- /.bottom-footer -->
    </div>
</footer>
<!-- /.theme-footer-one -->




<!-- Scroll Top Button -->
<button class="scroll-top tran3s">
    <i class="fa fa-angle-up" aria-hidden="true"></i>
</button>

<!-- Optional JavaScript _____________________________  -->

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!-- jQuery -->
<script src="<?php bloginfo( 'template_directory' ); ?>/vendor/jquery.2.2.3.min.js"></script>
<!-- Popper js -->
<script src="<?php bloginfo( 'template_directory' ); ?>/vendor/popper.js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="<?php bloginfo( 'template_directory' ); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
<!-- menu  -->
<script src="<?php bloginfo( 'template_directory' ); ?>/vendor/mega-menu/assets/js/custom.js"></script>
<!-- AOS js -->
<script src="<?php bloginfo( 'template_directory' ); ?>/vendor/aos-next/dist/aos.js"></script>
<!-- WOW js -->
<script src="<?php bloginfo( 'template_directory' ); ?>/vendor/WOW-master/dist/wow.min.js"></script>
<!-- owl.carousel -->
<script src="<?php bloginfo( 'template_directory' ); ?>/vendor/owl-carousel/owl.carousel.min.js"></script>
<!-- js count to -->
<script src="<?php bloginfo( 'template_directory' ); ?>/vendor/jquery.appear.js"></script>

<script src="<?php bloginfo( 'template_directory' ); ?>/vendor/jquery.countTo.js"></script>
<!-- Fancybox -->
<script src="<?php bloginfo( 'template_directory' ); ?>/vendor/fancybox/dist/jquery.fancybox.min.js"></script>

<!-- js ui -->
<script src="<?php bloginfo( 'template_directory' ); ?>/vendor/jquery-ui/jquery-ui.min.js"></script>
<!-- Select js -->
<script src="<?php bloginfo( 'template_directory' ); ?>/vendor/selectize.js/selectize.min.js"></script>
<!-- isotop -->
<script src="<?php bloginfo( 'template_directory' ); ?>/vendor/isotope.pkgd.min.js"></script>
<!-- Language js -->
<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


<!-- Theme js -->
<script src="<?php bloginfo( 'template_directory' ); ?>/js/lang.js"></script>
<script src="<?php bloginfo( 'template_directory' ); ?>/js/theme.js"></script>
<script src="<?php bloginfo( 'template_directory' ); ?>/js/main.js"></script>

<script type="text/javascript" id="cookieinfo"
        src="//cookieinfoscript.com/js/cookieinfo.min.js"
        data-bg="#ff3a46"
        data-fg="#FFFFFF"
        data-mask-background="#fff"
        data-cookie="m-lab-studio"
        data-link="#fff"
        data-divlink ="#ff3a46"
        data-effect="true"
        data-divlinkbg = "#fff"
        data-text-align="left"
        data-close-text="Got it!"
        data-moreinfo="https://mlab-studio.com/privacy-policy/">
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/paper.js/0.12.0/paper-core.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/simplex-noise/2.4.0/simplex-noise.min.js"></script>


</body>
</html>
