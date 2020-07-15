<?php
/**
 * Template Name: Home Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package M_Lab_Studio
 */

get_header(); ?>

<?php get_template_part('template-parts/home_page/content', 'main_banner'); ?>
<?php get_template_part('template-parts/home_page/content', 'what_we_do'); ?>
<?php get_template_part('template-parts/home_page/content', 'about_us'); ?>
<?php get_template_part('template-parts/home_page/content', 'theme_counter'); ?>
<?php get_template_part('template-parts/home_page/content', 'portfolio'); ?>
<?php // get_template_part('template-parts/home_page/content', 'pricing'); ?>
<?php get_template_part('template-parts/home_page/content', 'testimonials'); ?>

<?php
// get_sidebar();
get_footer();
