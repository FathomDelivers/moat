<?php use Roots\Sage\Nav; ?>

<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
      <div class='site-logo'>
          <a class="navbar-brand" href='<?= esc_url(home_url('/' )); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
      </div>
      <?php endif; ?>
    </div>
    <nav class="collapse navbar-collapse" role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new Nav\SageNavWalker(), 'menu_class' => 'nav navbar-nav']);
      endif;
      ?>
    </nav>
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
  </div>
  <?php
    if (has_post_thumbnail()) { //if a thumbnail has been set
    $imgID = get_post_thumbnail_id($post->ID); //get the id of the featured image
    $featuredImage = wp_get_attachment_image_src($imgID, 'full' );//get the url of the featured image (returns an array)
    $imgURL = $featuredImage[0]; //get the url of the image out of the array
  ?>
  <style type="text/css">
    .main-banner {border:none; background-image: url(<?php echo $imgURL ?>); } 
  </style>
  <?php
    }//end if
  ?>
</header>
