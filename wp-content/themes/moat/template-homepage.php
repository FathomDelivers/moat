<?php
/**
 * Template Name: Homepage
 */
?>
<div class="col-md-8 col-md-offset-2"> 
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
<?php echo do_shortcode( '[contact-form-7 id="4" title="home"]' ); ?>

</div>