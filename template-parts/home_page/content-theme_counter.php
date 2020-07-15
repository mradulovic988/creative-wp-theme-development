<?php
//Counter
$home_counter_title                     = get_field ('home_counter_title');
$home_counter_one                       = get_field ('home_counter_one');
$counter_data_to_one                    = get_field ('counter_data_to_one');
$home_counter_data_sign_one             = get_field ('home_counter_data_sign_one');
$home_counter_two                       = get_field ('home_counter_two');
$counter_data_to_two                    = get_field ('counter_data_to_two');
$home_counter_data_sign_two             = get_field ('home_counter_data_sign_two');
$home_counter_three                     = get_field ('home_counter_three');
$counter_data_to_three                  = get_field ('counter_data_to_three');
$home_counter_data_sign_three           = get_field ('home_counter_data_sign_three');
$home_counter_question                  = get_field ('home_counter_question');
$home_counter_message                   = get_field ('home_counter_message');
$home_counter_button_name               = get_field ('home_counter_button_name');
$home_counter_button_link               = get_field ('home_counter_button_link');
?>
<!-- 
=============================================
    Theme Counter
============================================== 
-->
<div class="agn-counter-section">
    <img src="/wp-content/uploads/2020/02/shape-55.svg" alt="" class="shape-one">
    <img src="/wp-content/uploads/2020/02/shape-59.svg" alt="" class="shape-two">
    <img src="/wp-content/uploads/2020/02/shape-61.svg" alt="" class="shape-three">
    <div class="container">
        <div class="main-wrapper">
            <div class="theme-title-one text-center">
                <h2 class="main-title"><?php if (empty($home_counter_title)) { echo 'We completed 500+ Projects Yearly <br>Successfully & counting'; } else { echo $home_counter_title; } ?></h2>
            </div>
            <!-- /.theme-title-one -->

            <div class="counter-wrapper">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="single-counter-box">
                            <h2 class="number"><span class="timer" data-from="0" data-to="<?php if (empty($counter_data_to_one)) { echo esc_html__('500', 'mlab-studio'); } else { echo esc_html__( $counter_data_to_one, 'mlab-studio' ); } ?>" data-speed="1200" data-refresh-interval="5">0</span><?php if (empty($home_counter_data_sign_one)) { echo esc_html__('k', 'mlab-studio'); } else { echo esc_html__( $home_counter_data_sign_one, 'mlab-studio' ); } ?></h2>
                            <p><?php if (empty($home_counter_one)) { echo esc_html__('Global Customer', 'mlab-studio'); } else { echo esc_html__( $home_counter_one, 'mlab-studio' ); } ?></p>
                        </div>
                        <!-- /.single-counter-box -->
                    </div>
                    <div class="col-sm-4">
                        <div class="single-counter-box">
                            <h2 class="number"><span class="timer" data-from="0" data-to="<?php if (empty($counter_data_to_two)) { echo esc_html__('1000', 'mlab-studio'); } else { echo esc_html__( $counter_data_to_two, 'mlab-studio' ); } ?>" data-speed="1200" data-refresh-interval="5">0</span><?php if (empty($home_counter_data_sign_two)) { echo esc_html__('+', 'mlab-studio'); } else { echo esc_html__( $home_counter_data_sign_two, 'mlab-studio' ); } ?></h2>
                            <p><?php if (empty($home_counter_two)) { echo esc_html__('Completed Projects', 'mlab-studio'); } else { echo esc_html__( $home_counter_two, 'mlab-studio' ); } ?></p>
                        </div>
                        <!-- /.single-counter-box -->
                    </div>
                    <div class="col-sm-4">
                        <div class="single-counter-box">
                            <h2 class="number"><span class="timer" data-from="0" data-to="<?php if (empty($counter_data_to_three)) { echo esc_html__('15', 'mlab-studio'); } else { echo esc_html__( $counter_data_to_three, 'mlab-studio' ); } ?>" data-speed="1200" data-refresh-interval="5">0</span><?php if (empty($home_counter_data_sign_three)) { echo esc_html__('+', 'mlab-studio'); } else { echo esc_html__( $home_counter_data_sign_three, 'mlab-studio' ); } ?></h2>
                            <p><?php if (empty($home_counter_three)) { echo esc_html__('Experts Worker', 'mlab-studio'); } else { echo esc_html__( $home_counter_three, 'mlab-studio' ); } ?></p>
                        </div>
                        <!-- /.single-counter-box -->
                    </div>
                </div>
            </div>
            <!-- /.counter-wrapper -->
        </div>
        <!-- /.main-wrapper -->

        <div class="bottom-banner">
            <div class="clearfix">
                <div class="text">
                    <h3 class="title"><?php if (empty($home_counter_question)) { echo esc_html__('Have any question about us?', 'mlab-studio'); } else { echo esc_html__( $home_counter_question, 'mlab-studio' ); } ?></h3>
                    <p><?php if (empty($home_counter_message)) { echo esc_html__('Dont’t hesitate to contact us.', 'mlab-studio'); } else { echo esc_html__( $home_counter_message, 'mlab-studio' ); } ?></p>
                </div>
                <a href="<?php if (empty($home_counter_button_link)) { echo esc_html__('#', 'mlab-studio'); } else { echo esc_html__( $home_counter_button_link, 'mlab-studio' ); } ?>" class="contact solid-button-one"><?php if (empty($home_counter_button_name)) { echo esc_html__('Contact us', 'mlab-studio'); } else { echo esc_html__( $home_counter_button_name, 'mlab-studio' ); } ?></a>
            </div>
        </div>
    </div>
    <!-- /.container -->
</div>
<!-- /.agn-counter-section -->