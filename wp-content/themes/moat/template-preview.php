<?php
/**
 * Template Name: Preview
 */
?>
<?php get_template_part('templates/main-banner', 'page'); ?>

<?php while (have_posts()) : the_post(); ?>
	<?php get_template_part('templates/announcement-area', 'page'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
  <?php get_template_part('templates/icon-area', 'page'); ?>
  <?php get_template_part('templates/contact-area', 'page'); ?>
  <?php get_template_part('templates/information-area', 'page'); ?>
  <?php get_template_part('templates/feature-area', 'page'); ?>
  <?php get_template_part('templates/testimonial-area', 'page'); ?>
  <?php get_template_part('templates/block-area', 'page'); ?>
<?php endwhile; ?>
<?php
    get_template_part('templates/footer');
    wp_footer();
?>