<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="alternate" type="application/rss+xml" title="<?= get_bloginfo('name'); ?> Feed" href="<?= esc_url(get_feed_link()); ?>">
    <?php wp_head(); ?>
    <!-- Lead Tracking Package -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script> var jq1110 = jQuery.noConflict();</script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/scripts/source/jquery.cookie.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/scripts/source/source.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/scripts/source/source_two.js"></script>

    <!-- FontAwesome-->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- Typekit -->
    <script src="//use.typekit.net/lwx8zjx.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>
  </head>
