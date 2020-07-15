<!--
=====================================================
    Testimonial
=====================================================
-->
<div class="apps-testimonial bg-white">
    <div class="container">
        <div class="theme-title-one">
            <h2 class="main-title">What’s Our Customer <br>Saying.</h2>
        </div> <!-- /.theme-title-one -->

        <div class="customer-slider">

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
                <div class="customer-block">
                    <?php echo wp_trim_words( get_the_content(), 20, '...' ); ?>
                    <div class="clearfix">
                        <img src="<?php echo $home_testimonials_image['url']; ?>" alt="<?php echo $home_testimonials_image['alt']; ?>" class="customer-img">
                        <div class="customer-info">
                            <h5 class="name"><?php the_title(); ?></h5>
                            <span><?php echo $home_testimonials_company; ?></span>
                        </div> <!-- /.customer-info -->
                    </div>
                </div> <!-- /.customer-block -->
            </div> <!-- /.item -->

        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
        <?php wp_reset_postdata(); ?>

        </div>
    </div> <!-- /.container -->
</div> <!-- /.apps-testimonial -->