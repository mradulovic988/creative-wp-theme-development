<?php
/**
 * Template Name: Order form
 */
get_header(); ?>
<!--
=============================================
	About Us Standard
==============================================
-->
<div class="solid-inner-banner">
	<h2 class="page-title">Order.</h2>
</div>
	<div class="about-us-standard pt-150 pb-150">
		<div class="container">
			<div class="top-icon-box">
				<div class="icon"><i class="flaticon-user"></i></div>
				<span>Order our service</span>
			</div> <!-- /.top-icon-box -->

			<div class="theme-title-three text-center mb-80">
				<h2 class="title">We are always available to help you.</h2>
				<p>You can contact us at any time and get free consultation.</p>
			</div> <!-- /.theme-title-three -->
            <?php get_template_part('template-parts/order_page/content', 'form'); ?>
		</div> <!-- /.container -->
	</div> <!-- /.about-us-standard -->

<?php get_footer();
