<!-- 
=============================================
  Blog Filter 
============================================== 
-->
<div class="our-blog blog-filer">
  <div class="blog-filter-title">
    <p class="upper-title">Our Project</p>
    <h2 class="main-title">Our inside stories <br> for you</h2>
  </div> <!-- /.blog-filter-title -->
  
  <ul class="isotop-menu-wrapper blog-filter-nav clearfix">
    <li class="is-checked" data-filter="*"><span>All</span></li>
    <li data-filter=".web-design"><span>Web Design</span></li>
    <li data-filter=".theme-dev"><span>Theme Development</span></li>
    <li data-filter=".plugin-dev"><span>Plugin Development</span></li>
  </ul>

  <div class="masnory-blog-wrapper">
    <div class="grid-sizer"></div>
    <?php 
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $portfolio_cpt = new WP_Query ( array (
        'post_type'           => 'portfolio_cpt',
        'orderby'             => 'post_id',
        'posts_per_page'      => 8,
        'paged'               => $paged,
        'order'               => 'DESC'
    ));

    while ($portfolio_cpt -> have_posts()) : $portfolio_cpt -> the_post(); 
    $portfolio_image = get_field ('portfolio_image');
    ?>
    <?php
    // vars	
    $portfolio_category = get_field('portfolio_category');
    $portfolio_link = get_field('portfolio_link'); ?>

    <div class="isotop-item <?php foreach( $portfolio_category as $portfolio_cat ): echo $portfolio_cat; endforeach; ?>">
      <div class="single-blog-post">
        <div class="img-box spec"><img src="<?php echo $portfolio_image['url']; ?>" alt="<?php echo $portfolio_image['alt']; ?>"></div>
        <div class="post-data">
          <h5 class="blog-title-one title"><a href="<?php echo $portfolio_link; ?>" target="_blank"><?php echo the_title(); ?></a></h5>
          <p><?php echo the_content(); ?></p>
          <a href="blog-details-full-grid.html" class="read-more"><i class="flaticon-next-1"></i></a>
        </div> <!-- /.post-data -->
      </div> <!-- /.single-blog-post -->
    </div> <!-- /.isotop-item -->
    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
    <?php wp_reset_postdata(); ?>
  </div> <!-- /.masnory-blog-wrapper -->
  <div class="theme-pagination-one text-center pt-15">
    <ul>
      <?php
      echo paginate_links( array(
          'base'            => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
          'total'           => $portfolio_cpt->max_num_pages,
          'current'         => max( 1, get_query_var( 'paged' ) ),
          'format'          => '?paged=%#%',
          'show_all'        => false,
          'type'            => 'list',
          'end_size'        => 2,
          'mid_size'        => 1,
          'prev_next'       => true,
          'prev_text'       => sprintf( '<i></i> %1$s', __( 'Back', 'mlab-studio' ) ),
          'next_text'       => sprintf( '%1$s <i></i>', __( 'Check Further', 'mlab-studio' ) ),
          'add_args'        => false,
          'add_fragment'    => '',
      ) );
      ?>
    </ul>
  </div> <!-- /.theme-pagination-one -->
</div> <!-- /.our-blog -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>
$(document).ready(function(){
    setInterval(function(){
        if($('.shape-one').hasClass('aos-animate')) {
            $('.top-footer .aos-init').addClass('aos-animate');
        }
    },100)      
});


</script>