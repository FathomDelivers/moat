<?php
/**
 * Template Name: Homepage
 */
?>
<?php get_template_part('templates/main-banner', 'page'); ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
<?php get_template_part('templates/feature-area', 'page'); ?>
<?php get_template_part('templates/contact-band', 'page'); ?>
