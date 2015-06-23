<?php
/**
 * Template Name: Homepage
 */
?>
<?php get_template_part('templates/main-banner', 'page'); ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'page'); ?>
  <?php get_template_part('templates/information-area', 'page'); ?>
<?php endwhile; ?>
<?php
    get_template_part('templates/footer');
    wp_footer();
?>
