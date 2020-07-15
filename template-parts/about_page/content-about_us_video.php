<?php
//Video
$video_link                             = get_field ('video_link');
?>
<!--
=====================================================
    Video Action Banner One
=====================================================
-->
<div class="video-action-banner-one mt-95">
    <div class="overlay">
        <a data-fancybox="" href="<?php if (empty ($video_link)) : echo esc_html__('#', 'mlab-studio'); else : echo esc_html__($video_link); endif; ?>" class="video-button fancybox"><img src="https://mlab-studio.com/wp-content/uploads/2019/09/play-icon.png" alt="Youtube Play Icon"></a>
    </div> <!-- /.overlay -->
</div> <!-- /.video-action-banner-one -->