<!-- 
=============================================
    Our Team Standard
============================================== 
-->
<div class="team-standard our-team pt-150 pb-200">
    <div class="container">
        <div class="row">

            <?php
            $team_page = new WP_Query (array (
                'post_type'         => 'team',
                'orderby'           => 'post_id',
                'order'             => 'ASC'
            ));
            while ($team_page -> have_posts()) : $team_page -> the_post();

            // Declaring all variables for team
            $about_team_company         = get_field ('about_team_company');
            $about_team_image           = get_field ('about_team_image');
            $about_team_facebook_link   = get_field ('about_team_facebook_link');
            $about_team_dribbble_link   = get_field ('about_team_dribbble_link');
            $about_team_linkedin_link   = get_field ('about_team_linkedin_link');
            ?>


            <div class="col-lg-6 col-md-6">
                <div class="single-team-member">
                    <div class="wrapper">
                        <div class="img-box"><img src="<?php echo $about_team_image['url']; ?>" alt="<?php echo $about_team_image['alt']; ?>"></div>
                        <div class="info-meta">
                            <h6 class="name"><?php the_title(); ?></h6>
                            <span><?php echo esc_html__($about_team_company); ?></span>
                        </div>
                    </div>
                    <div class="hover-content">
                        <ul>
                            <li><a href="<?php if (empty ($about_team_facebook_link)) : echo esc_html__('#', 'mlab-studio'); else : echo esc_html__($about_team_facebook_link); endif; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="<?php if (empty ($about_team_dribbble_link)) : echo esc_html__('#', 'mlab-studio'); else : echo esc_html__($about_team_dribbble_link); endif; ?>"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                            <li><a href="<?php if (empty ($about_team_linkedin_link)) : echo esc_html__('#', 'mlab-studio'); else : echo esc_html__($about_team_linkedin_link); endif; ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                    </div> <!-- /.hover-content -->
                </div> <!-- /.single-team-member -->
            </div> <!-- /.col- -->

            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
            <?php wp_reset_postdata(); ?>

        </div> <!-- /.row -->

        <!-- 
        <div class="text-center pt-50">
            <a href="#" class="theme-button-one">Load More</a>
        </div> 
        -->
    </div> <!-- /.container -->
</div> <!-- /.team-standard -->