<?php
/**
 * Template Name: Preview
 */
?>
<?php get_template_part('templates/main-banner', 'page'); ?>

<?php while (have_posts()) : the_post(); ?>
	<?php get_template_part('areas/announcement-area', 'page'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
  <?php get_template_part('areas/icon-area', 'page'); ?>
  <?php get_template_part('areas/contact-area', 'page'); ?>
  <?php get_template_part('areas/information-area', 'page'); ?>
  <?php get_template_part('areas/feature-area', 'page'); ?>
  <?php get_template_part('areas/testimonial-area', 'page'); ?>
  <?php get_template_part('areas/image-area', 'page'); ?>
  <?php get_template_part('areas/block-area', 'page'); ?>
<?php endwhile; ?>
<?php
    get_template_part('templates/footer');
    wp_footer();
?>