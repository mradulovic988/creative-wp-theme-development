<?php
//Pricing Plan
$home_pricing_title                     = get_field ('home_pricing_title');
$home_pricing_lead_title                = get_field ('home_pricing_lead_title');
?>
<!--
=====================================================
    Our Pricing
=====================================================
-->
<div class="element-section mb-150">
    <div class="seo-our-pricing">
        <div class="container">
            <div class="theme-title-one title-underline text-center">
                <div class="upper-title"><?php if (empty ($home_pricing_title)) : echo esc_html__ ('Pricing Plan', 'mlab-studio'); else : echo esc_html__($home_pricing_title, 'mlab-studio'); endif; ?></div>
                <h2 class="main-title"><?php if (empty ($home_pricing_lead_title)) : echo 'No Hidden Charges! Choose <br>your Plan.'; else : echo $home_pricing_lead_title; endif; ?></h2>
            </div> <!-- /.theme-title-one -->

            <div class="row">

            <?php 
            $pricing = new WP_Query (array (
                'post_type'         => 'pricing_plan',
                'orderby'           => 'post_id',
                'posts_per_page'    => 3,
                'order'             => 'ASC'
            ));

            while ($pricing -> have_posts()) : $pricing -> the_post();

            // Declaring variable for fields
            $home_pricing_icon                      = get_field ('home_pricing_icon');
            $home_pricing_plan_title                = get_field ('home_pricing_plan_title');
            $home_pricing_plan_big_price            = get_field ('home_pricing_plan_big_price');
            $home_pricing_plan_small_price          = get_field ('home_pricing_plan_small_price');
            $home_pricing_plan_package              = get_field ('home_pricing_plan_package');
            $home_pricing_plan_slogan               = get_field ('home_pricing_plan_slogan');
            $home_pricing_plan_services             = get_field ('home_pricing_plan_services');
            $home_pricing_plan_subfield_services    = get_sub_field ('home_pricing_plan_subfield_services');
            $home_pricing_field_color               = get_field ('home_pricing_field_color');
            $home_pricing_button_link               = get_field ('home_pricing_button_link');
            $home_pricing_free_trial                = get_field ('home_pricing_free_trial');
            ?>
                <div class="col-lg-4" data-aos="fade-up">
                    <div class="single-pr-table <?php echo $home_pricing_field_color; ?>">
                        <div class="pr-header">
                            <img src="<?php echo $home_pricing_icon['url']; ?>" alt="<?php echo $home_pricing_icon['alt']; ?>" class="icon" data-aos="fade-right">
                            <h4 class="title"><?php if (empty ($home_pricing_plan_title)) : echo esc_html__('Subway', 'mlab-studio'); else : echo esc_html__($home_pricing_plan_title, 'mlab-studio'); endif; ?></h4>
                            
                            <div class="price"><?php if (empty ($home_pricing_plan_big_price)) : echo esc_html__('$1390.', 'mlab-studio'); else : echo '$' . esc_html__($home_pricing_plan_big_price, 'mlab-studio') . '.'; endif; ?><sup><?php if (empty ($home_pricing_plan_small_price)) : echo esc_html__('99', 'mlab-studio'); else : echo esc_html__($home_pricing_plan_small_price, 'mlab-studio'); endif; ?></sup></div>
                            <div class="package"><?php if (empty ($home_pricing_plan_package)) : echo esc_html__('Weekly', 'mlab-studio'); else : echo esc_html__($home_pricing_plan_package, 'mlab-studio'); endif; ?></div>
                        </div> <!-- /.pr-header -->
                        <div class="pr-body">
                            <h3 class="slogan"><?php if (empty ($home_pricing_plan_slogan)) : echo esc_html__('Quick job, Small Work', 'mlab-studio'); else : echo esc_html__($home_pricing_plan_slogan, 'mlab-studio'); endif; ?></h3>
                            <ul>
                                <?php
                                
                                if( have_rows('home_pricing_plan_services') ) :
                                    
                                    // Loop through the rows of data
                                    while ( have_rows('home_pricing_plan_services') ) : the_row();
                                        echo '<li>';
                                        // Display sub field data
                                        echo $home_pricing_plan_subfield_services;
                                        the_sub_field('home_pricing_plan_subfield_services');
                                        
                                        echo '</li>';
                                    endwhile;
                                
                                else : ?>
                                    <li>50GB Bandwidth</li>
                                    <li>Business & Financ Analysing</li>
                                    <li>24 hour support</li>
                                    <li>Customer Managemet</li>
                                <?php endif; ?>
                            </ul>
                        </div> <!-- /.pr-body -->
                        <div class="pr-footer">
                            <a href="<?php if (empty ($home_pricing_button_link)) : echo esc_html__('#', 'mlab-studio'); else : echo esc_html__($home_pricing_button_link, 'mlab-studio'); endif; ?>" class="contact-button line-button-one">Choose Plan</a>
                            <a href="<?php if (empty ($home_pricing_free_trial)) : echo esc_html__('#', 'mlab-studio'); else : echo esc_html__($home_pricing_free_trial, 'mlab-studio'); endif; ?>" class="trial-button">Get your 30 day free trial</a>
                        </div> <!-- /.pr-footer -->
                    </div> <!-- /.single-pr-table -->
                </div> <!-- /.col- -->
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
            <?php wp_reset_postdata(); ?>

            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.seo-our-pricing -->
</div>