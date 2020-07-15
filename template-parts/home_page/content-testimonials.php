<?php
//Testimonials
$home_testimonials_title                = get_field ('home_testimonials_title');
$home_testimonials_description          = get_field ('home_testimonials_description');
?>
<!--
=====================================================
    Testimonial
=====================================================
-->
<div class="agn-testimonial">
    <div class="shape-box">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/shape/4.png" alt="">
    <?php
    $testimonials = new WP_Query (array (
        'post_type'         => 'testimonials',
        'orderby'           => 'post_id',
        'posts_per_page'    => 6,
        'order'             => 'DESC'
    ));
    while ($testimonials -> have_posts()) : $testimonials -> the_post();
    $home_testimonials_image        = get_field ('home_testimonials_image');
    ?>
        <img src="<?php echo $home_testimonials_image['url']; ?>" alt="<?php echo $home_testimonials_image['alt']; ?>" class="people">
    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
    <?php wp_reset_postdata(); ?>
        <img src="/wp-content/uploads/2020/02/shape-6.svg" alt="" class="shape-one">
    </div>
    <img src="/wp-content/uploads/2020/02/shape-66.svg" alt="" class="shape-two" data-aos="fade-left">
    <div class="container clearfix">
        <div class="main-content">
            <div class="theme-title-one">
                <div class="upper-title"><?php if (empty ($home_testimonials_title)) : echo esc_html__('Testimonials', 'mlab-studio'); else : echo esc_html__($home_testimonials_title, 'mlab-studio'); endif; ?></div>
                <h2 class="main-title"><?php if (empty ($home_testimonials_description)) : echo esc_html__('Check what’s our client say about us!', 'mlab-studio'); else : echo esc_html__($home_testimonials_description, 'mlab-studio'); endif; ?></h2>
            </div>
            <!-- /.theme-title-one -->

            <div class="agn-testimonial-slider">
            <?php
            $testimonials = new WP_Query (array (
                'post_type'         => 'testimonials',
                'orderby'           => 'post_id',
                'posts_per_page'    => 6,
                'order'             => 'DESC'
            ));
            while ($testimonials -> have_posts()) : $testimonials -> the_post();

            // Declaring variables for the Testimonials section
            $home_testimonials_image        = get_field ('home_testimonials_image');
            $home_testimonials_company      = get_field ('home_testimonials_company');
            ?>

                <div class="item">
                    <?php the_content(); ?>
                    <div class="author-info clearfix">
                        <img src="<?php echo $home_testimonials_image['url']; ?>" alt="<?php echo $home_testimonials_image['alt']; ?>" class="author-img">
                        <div class="name-info">
                            <h6 class="name"><?php the_title(); ?></h6>
                            <span><?php if (empty ($home_testimonials_company)) : echo esc_html__('Designer', 'mlab-studio'); else : echo $home_testimonials_company; endif; ?></span>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
            <?php wp_reset_postdata(); ?>

            </div>
            <!-- /.agn-testimonial-slider -->
        </div>
        <!-- /.main-content -->
    </div>
    <!-- /.container -->
</div>
<!-- /.agn-testimonial -->