<?php
//Main Banner One
$home_banner_slogan_red                 = get_field ('home_banner_slogan_red');
$home_banner_slogan_default             = get_field ('home_banner_slogan_default');
$home_main_banner_title                 = get_field ('home_main_banner_title');
$home_main_banner_subtitle              = get_field ('home_main_banner_subtitle');
$home_banner_button_text                = get_field ('home_banner_button_text');
$home_banner_button_link                = get_field ('home_banner_button_link');
$home_video_button_text                 = get_field ('home_video_button_text');
$home_video_button_link                 = get_field ('home_video_button_link');
?>
<!-- 
=============================================
    Theme Main Banner One
============================================== 
-->
<div id="theme-banner-one">
    <div class="illustration wow zoomIn animated" data-wow-delay="1s" data-wow-duration="2s">
        <img src="/wp-content/uploads/2020/02/Illustration1.png" alt="" data-wow-delay="2.7s">
    </div>
    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/shape/oval-1.svg" alt="" class="oval-one">
    <img src="/wp-content/uploads/2020/02/shape-1.svg" alt="" class="shape-three">
    <img src="/wp-content/uploads/2020/02/shape-55.svg" alt="" class="shape-four">
    <img src="/wp-content/uploads/2020/02/shape-56.svg" alt="" class="shape-five">
    <img src="/wp-content/uploads/2020/02/shape-57.svg" alt="" class="shape-six">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/shape/shape-58.svg" alt="" class="shape-seven">
    <img src="/wp-content/uploads/2020/02/shape-59.svg" alt="" class="shape-eight">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/shape/shape-60.svg" alt="" class="shape-nine">
    <img src="/wp-content/uploads/2020/02/shape-61.svg" alt="" class="shape-ten">
    <img src="/wp-content/uploads/2020/02/shape-62.svg" alt="" class="shape-eleven">
    <div class="container">
        <div class="main-wrapper">
            <div title="If you're not satisfied, we're not satisfied. Find out more." class="slogan wow fadeInDown animated" data-wow-delay="0.2s"><span><?php if (empty($home_banner_slogan_red)) { echo esc_html__('30% Off ', 'mlab-studio'); } else { echo esc_html__( $home_banner_slogan_red . ' ', 'mlab-studio' ); } ?></span><?php if (empty($home_banner_slogan_default)) { echo esc_html__(' for first 3 months', 'mlab-studio'); } else { echo esc_html__( ' ' . $home_banner_slogan_default, 'mlab-studio' ); } ?></div>
            <h1 class="main-title wow fadeInUp animated" data-wow-delay="0.4s"><?php if (empty($home_main_banner_title)) { echo 'Digital Agency <br>with Excellence <br>Services'; } else { echo $home_main_banner_title; } ?></h1>
            <p class="sub-title wow fadeInUp animated" data-wow-delay="0.9s"><?php if (empty($home_main_banner_subtitle)) { echo 'Lorem ipsum dolor sit amet dolor sit<br> consectetur adipiscing.'; } else { echo $home_main_banner_subtitle; } ?></p>
            <ul class="button-group lightgallery">
                <li><a href="<?php if (empty($home_banner_button_link)) { echo esc_html__('#', 'mlab-studio'); } else { echo esc_html__( $home_banner_button_link, 'mlab-studio' ); } ?>" class="more-button solid-button-one wow fadeInLeft animated" data-wow-delay="1.5s"><?php if (empty($home_banner_button_text)) { echo esc_html__('More About us ', 'mlab-studio'); } else { echo esc_html__( $home_banner_button_text, 'mlab-studio' ); } ?><i class="fa fa-angle-right icon-right" aria-hidden="true"></i></a></li>

                <li><a data-fancybox="" href="<?php if (empty($home_video_button_link)) { echo esc_html__('#', 'mlab-studio'); } else { echo esc_html__( $home_video_button_link, 'mlab-studio' ); } ?>" class="fancybox video-button-one wow fadeInRight animated" data-wow-delay="1.5s"><?php if (empty($home_video_button_text)) { echo esc_html__('See live demo. ', 'mlab-studio'); } else { echo esc_html__( $home_video_button_text, 'mlab-studio' ); } ?><i class="flaticon-play-button icon-right"></i></a></li>
            </ul>
        </div>
        <!-- /.main-wrapper -->
    </div>
    <!-- /.container -->
</div>
<!-- /#theme-banner-one -->