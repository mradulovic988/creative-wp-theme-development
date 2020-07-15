<?php
//Portfolio
$home_portfolio_title                   = get_field ('home_portfolio_title');
$home_portfolio_description             = get_field ('home_portfolio_description');
$home_portfolio_button_text             = get_field ('home_portfolio_button_text');
$home_portfolio_button_url              = get_field ('home_portfolio_button_url');
?>
<!-- 
=============================================
    Our Portfolio
============================================== 
-->
<div class="agn-our-gallery">
    <img src="/wp-content/uploads/2020/02/shape-62.svg" alt="" class="shape-one">
    <img src="/wp-content/uploads/2020/02/shape-55.svg" alt="" class="shape-two">
    <img src="/wp-content/uploads/2020/02/shape-61.svg" alt="" class="shape-three">
    <div class="container">
        <div class="theme-title-one">
            <h2 class="main-title"><?php if (empty($home_portfolio_title)) { echo 'Check some of our <br>Recent work'; } else { echo $home_portfolio_title; } ?></h2>
            <p class="bottom-title"><?php if (empty($home_portfolio_description)) { echo esc_html__('Click the below button to check all of our work.', 'mlab-studio'); } else { echo esc_html__( $home_portfolio_description, 'mlab-studio' ); } ?></p>
        </div>
        <!-- /.theme-title-one -->
    </div>
    <!-- /.container -->
    <div class="main-wrapper">
        <a href="<?php if (empty($home_portfolio_button_url)) { echo esc_html__('#', 'mlab-studio'); } else { echo esc_html__( $home_portfolio_button_url, 'mlab-studio' ); } ?>" class="view-gallery"><?php if (empty($home_portfolio_button_text)) { echo esc_html__('View Portfolio', 'mlab-studio'); } else { echo esc_html__( $home_portfolio_button_text, 'mlab-studio' ); } ?></a>
        <div class="gallery-slider lightgallery">
            <?php 

            $portfolio_cpt = new WP_Query ( array (
                'post_type'         => 'portfolio_cpt',
                'orderby'           => 'post_id',
                'posts_per_page'    => 6,
                'order'             => 'DESC'
            ));

            while ($portfolio_cpt -> have_posts()) : $portfolio_cpt -> the_post(); 
            $portfolio_image = get_field ('portfolio_image');
            ?>

            <div class="item">
                <div class="img-box spec">
                    <img src="<?php echo $portfolio_image['url']; ?>" alt="<?php echo $portfolio_image['alt']; ?>">
                    <div class="hover-content"></div>
                </div>
            </div>

            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
            <?php wp_reset_postdata(); ?>

        </div>
        <!-- /.gallery-slider -->
    </div>
    <!-- /.main-wrapper -->
</div>
<!-- /.agn-our-gallery -->