<?php
// First left image
$about_left_image                       = get_field ('about_left_image');
$about_left_image_title                 = get_field ('about_left_image_title');
$about_left_image_description           = get_field ('about_left_image_description');
$about_left_image_name                  = get_field ('about_left_image_name');
$about_left_image_signature             = get_field ('about_left_image_signature');

// Second right image
$about_right_image                      = get_field ('about_right_image');
$about_right_image_title                = get_field ('about_right_image_title');
$about_right_image_description          = get_field ('about_right_image_description');
$about_right_image_description_second   = get_field ('about_right_image_description_second');
?>
<!-- 
=============================================
    Theme Solid Inner Banner
============================================== 
-->
<div class="solid-inner-banner">
    <h2 class="page-title">About us.</h2>
</div> <!-- /.solid-inner-banner -->



<!-- 
=============================================
    About Us Standard
============================================== 
-->
<div class="about-us-standard agency-style pt-150">
    <div class="container">
        <div class="demo-container-1100">
            <div class="row gutter-80">
                <div class="col-lg-6 order-lg-last" data-aos="fade-left">
                    <div class="single-block">
                        <h5 class="block-title pb-30"><?php if (empty ($about_left_image_title)) : echo esc_html__('Our History', 'mlab-studio'); else : echo esc_html__($about_left_image_title); endif; ?></h5>
                        
                        <p><?php if (empty ($about_left_image_description)) : echo esc_html__('Unique, fully customizable and functional Web Site that will leave you breathless! We provide complete web design services, web programming, forums, online stores, graphic design, logo creation, internet marketing, advertising on Google and advertising on social networks. Our goal is to continue sustainable development with our users, and this can only be done along you and with you if you are satisfied. We will enable your design to be remarkable. Unique, fully customizable and functional Web Site that will leave you breathless!', 'mlab-studio'); else : echo esc_html__($about_left_image_description); endif; ?>
                        </p>
                        <div class="author-data">
                            <h6 class="name pb-30"><?php if (empty ($about_left_image_name)) : echo esc_html__('Marko Radulovic, CEO', 'mlab-studio'); else : echo esc_html__($about_left_image_name); endif; ?></h6>
                            <img class="about_signature" src="<?php echo $about_left_image_signature['url']; ?>" alt="<?php echo $about_left_image_signature['alt']; ?>">
                        </div>
                    </div> <!-- /.single-block -->
                </div><!--  /.col- -->
                <div class="col-lg-6 order-lg-first" data-aos="fade-right"><div class="img-box"><img class="box_shadow_image" src="<?php echo $about_left_image['url']; ?>" alt="<?php echo $about_left_image['alt']; ?>"></div></div>
            </div> <!-- /.row -->
            <div class="row gutter-80">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="single-block">
                        <h5 class="block-title pb-30"><?php if (empty ($about_right_image_title)) : echo esc_html__('Our Goal', 'mlab-studio'); else : echo esc_html__($about_right_image_title); endif; ?></h5>
                        <p><?php if (empty ($about_right_image_description)) : echo esc_html__('We design sites in desktop or responsive variants. Responsive design will make your site transparent also on mobile devices, which is very important considering the number of smartphone users. Statistics show a significant increase in the number of users searching the Internet via mobile devices. This trend will very likely continue in the future, so like response to the new demands of visitors, a new approach and concept in the design of Web Sites named "responsive design" appeared. Responsive or adaptable design is the one that adjusts to the device. Responsive web design focuses on simplicity. It is based on the idea of creating only one Web Site that can be displayed on all screen sizes whether it\'s a mobile phone, laptop, and tablet.', 'mlab-studio'); else : echo esc_html__($about_right_image_description); endif; ?></p> <br>
                        <p><?php if (empty ($about_right_image_description_second)) : echo esc_html__('', 'mlab-studio'); else : echo esc_html__($about_right_image_description_second); endif; ?></p>
                    </div> <!-- /.single-block -->
                </div><!--  /.col- -->
                <div class="col-lg-6" data-aos="fade-left"><div class="img-box"><img class="box_shadow_image" src="<?php echo $about_right_image['url']; ?>" alt="<?php echo $about_right_image['alt']; ?>"></div></div>
            </div> <!-- /.row -->
        </div> <!-- /.demo-container-900 -->
    </div> <!-- /.container -->
</div> <!-- /.about-us-standard -->