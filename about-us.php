<?php
/**
 * Template Name: About Us
 */

get_header(); ?>

<?php get_template_part('template-parts/about_page/content', 'about_us_header'); ?>
<?php get_template_part('template-parts/about_page/content', 'about_us_counter'); ?>
<?php get_template_part('template-parts/about_page/content', 'about_us_video'); ?>
<?php get_template_part('template-parts/about_page/content', 'about_us_team'); ?>
<?php get_template_part('template-parts/about_page/content', 'about_us_testimonials'); ?>

<?php get_footer(); ?>