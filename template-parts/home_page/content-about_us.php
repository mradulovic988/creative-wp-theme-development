<?php
//About Us
$home_about_section_name                = get_field ('home_about_section_name');
$home_about_title                       = get_field ('home_about_title');
$home_about_content                     = get_field ('home_about_content');
$home_about_quote                       = get_field ('home_about_quote');
$home_about_name                        = get_field ('home_about_name');
$home_about_company                     = get_field ('home_about_company');
$home_about_signature                   = get_field ('home_about_signature');
$home_about_lead_image                  = get_field ('home_about_lead_image');
$home_about_button_text                 = get_field ('home_about_button_text');
$home_about_button_link                 = get_field ('home_about_button_link');
?>
<!-- 
=============================================
    About Us
============================================== 
-->
<div class="agn-about-us">
    <img src="/wp-content/uploads/2020/02/shape-61.svg" alt="" class="shape-one">
    <img src="/wp-content/uploads/2020/02/shape-64.svg" alt="" class="shape-two" data-aos="fade-left">
    <img src="/wp-content/uploads/2020/02/shape-65.svg" alt="" class="shape-three" data-aos="fade-right">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/shape/shape-60.svg" alt="" class="shape-four">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 order-lg-last">
                <div class="text-wrapper">
                    <div class="theme-title-one">
                        <div class="upper-title"><?php if (empty($home_about_section_name)) { echo esc_html__('About us', 'mlab-studio'); } else { echo esc_html__( $home_about_section_name, 'mlab-studio' ); } ?></div>
                        <h2 class="main-title"><?php if (empty($home_about_title)) { echo esc_html__('Leading Digital Agency for Business Solution.', 'mlab-studio'); } else { echo esc_html__( $home_about_title, 'mlab-studio' ); } ?></h2>
                    </div>
                    <!-- /.theme-title-one -->
                    <p><?php if (empty($home_about_content)) { echo 'By combining the exclusive premium web design and the latest technologies in Web Site design, we create a high quality presence of your business on the online market.'; } else { echo $home_about_content; } ?></p>
                    <p class="quote"><?php if (empty($home_about_quote)) { echo 'Our goal is simple. To design and create what the users will like. We are based on this principle and we will always be dedicated to him.'; } else { echo $home_about_quote; } ?></p>
                    <div class="author"><span class="name"><?php if (empty($home_about_name)) { echo esc_html__('Marko Radulovic, ', 'mlab-studio'); } else { echo esc_html__( $home_about_name, 'mlab-studio' ); } ?> </span><?php if (empty($home_about_company)) { echo esc_html__('CEO M LabStudio', 'mlab-studio'); } else { echo esc_html__( $home_about_company, 'mlab-studio' ); } ?></div>
                    <img class="signature" src="<?php if (empty ($home_about_signature)) { echo esc_html( '/wp-content/uploads/2019/08/signature-1.png', 'mlab-studio' ); } else { echo $home_about_signature['url'];} ?>" alt="<?php if (empty ($home_about_signature)) { echo esc_html( 'Signature', 'mlab-studio' ); } else { echo $home_about_signature['alt'];} ?>">
                </div>
            </div>
            <div class="col-lg-6 order-lg-first">
                <div class="img-box">
                    <img src="<?php if (empty ($home_about_lead_image)) { echo esc_html( '/wp-content/uploads/2019/08/1.jpg', 'mlab-studio' ); } else { echo $home_about_lead_image['url'];} ?>" alt="<?php if (empty ($home_about_signature)) { echo esc_html( 'Portfolio', 'mlab-studio' ); } else { echo $home_about_signature['alt'];} ?>" class="main-img">
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
    <a href="<?php if (empty($home_about_button_link)) { echo esc_html__('#', 'mlab-studio'); } else { echo esc_html__( $home_about_button_link, 'mlab-studio' ); } ?>" class="learn-more theme-button-two" data-aos="fade-left"><?php if (empty($home_about_button_text)) { echo esc_html__('Learn More ', 'mlab-studio'); } else { echo esc_html__( $home_about_button_text, 'mlab-studio' ); } ?> <i class="fa fa-angle-right icon-right" aria-hidden="true"></i></a>
</div>
<!-- /.agn-about-us -->