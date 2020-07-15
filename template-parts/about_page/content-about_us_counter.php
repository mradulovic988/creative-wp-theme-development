<?php
//Counter
$counter_one_title                      = get_field ('counter_one_title');
$counter_one_number                     = get_field ('counter_one_number');
$counter_one_sign                       = get_field ('counter_one_sign');
$counter_two_title                      = get_field ('counter_two_title');
$counter_two_number                     = get_field ('counter_two_number');
$counter_two_sign                       = get_field ('counter_two_sign');
$counter_three_title                    = get_field ('counter_three_title');
$counter_three_number                   = get_field ('counter_three_number');
$counter_three_sign                     = get_field ('counter_three_sign');
?>
<!-- 
=============================================
    Theme Counter
============================================== 
-->
<div class="agn-counter-section fix-bg-position m0 pt-50">
    <div class="container">
        <div class="main-wrapper">
            <div class="counter-wrapper">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="single-counter-box">
                            <h2 class="number"><span class="timer" data-from="0" data-to="<?php if (empty ($counter_one_number)) : echo esc_html__('1', 'mlab-studio'); else : echo esc_html__($counter_one_number); endif; ?>" data-speed="1200" data-refresh-interval="5">0</span><?php if (empty ($counter_one_sign)) : echo esc_html__('k', 'mlab-studio'); else : echo esc_html__($counter_one_sign); endif; ?></h2>
                            <p><?php if (empty ($counter_one_title)) : echo esc_html__('Global Customer', 'mlab-studio'); else : echo esc_html__($counter_one_title); endif; ?></p>
                        </div> <!-- /.single-counter-box -->
                    </div>
                    <div class="col-sm-4">
                        <div class="single-counter-box">
                            <h2 class="number"><span class="timer" data-from="0" data-to="<?php if (empty ($counter_two_number)) : echo esc_html__('500', 'mlab-studio'); else : echo esc_html__($counter_two_number); endif; ?>" data-speed="1200" data-refresh-interval="5">0</span><?php if (empty ($counter_two_sign)) : echo esc_html__('+', 'mlab-studio'); else : echo esc_html__($counter_two_sign); endif; ?></h2>
                            <p><?php if (empty ($counter_two_title)) : echo esc_html__('Completed Projects', 'mlab-studio'); else : echo esc_html__($counter_two_title); endif; ?></p>
                        </div> <!-- /.single-counter-box -->
                    </div>
                    <div class="col-sm-4">
                        <div class="single-counter-box">
                            <h2 class="number"><span class="timer" data-from="0" data-to="<?php if (empty ($counter_three_number)) : echo esc_html__('15', 'mlab-studio'); else : echo esc_html__($counter_three_number); endif; ?>" data-speed="1200" data-refresh-interval="5">0</span><?php if (empty ($counter_three_sign)) : echo esc_html__('+', 'mlab-studio'); else : echo esc_html__($counter_three_sign); endif; ?></h2>
                            <p><?php if (empty ($counter_three_title)) : echo esc_html__('Experts Worker', 'mlab-studio'); else : echo esc_html__($counter_three_title); endif; ?></p>
                        </div> <!-- /.single-counter-box -->
                    </div>
                </div>
            </div> <!-- /.counter-wrapper -->
        </div> <!-- /.main-wrapper -->
    </div> <!-- /.container -->
</div> <!-- /.agn-counter-section -->