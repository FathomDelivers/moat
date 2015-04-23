<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/utils.php',                 // Utility functions
  'lib/init.php',                  // Initial theme setup and constants
  'lib/wrapper.php',               // Theme wrapper class
  'lib/conditional-tag-check.php', // ConditionalTagCheck class
  'lib/config.php',                // Configuration
  'lib/assets.php',                // Scripts and stylesheets
  'lib/titles.php',                // Page titles
  'lib/nav.php',                   // Custom nav modifications
  'lib/gallery.php',               // Custom [gallery] modifications
  'lib/extras.php',                // Custom functions
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

// chalet name for enquiry form
function parameter_queryvars( $qvars ) {
    $qvars[] = 'chalet';
    return $qvars;
}
add_filter('query_vars', 'parameter_queryvars' );

function echo_chalet() {
    global $wp_query;
        if (isset($wp_query->query_vars['chalet']))
        {
            print $wp_query->query_vars['chalet'];
        }
}


// custom logo
function themeslug_theme_customizer( $wp_customize ) {
    
  $wp_customize->add_section( 'themeslug_logo_section' , array(
      'title'       => __( 'Logo', 'themeslug' ),
      'priority'    => 30,
      'description' => 'Upload a logo to replace the default site name and description in the header',
  ) );

  $wp_customize->add_setting( 'themeslug_logo' );

  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(
      'label'    => __( 'Logo', 'themeslug' ),
      'section'  => 'themeslug_logo_section',
      'settings' => 'themeslug_logo',
  ) ) );

}
add_action( 'customize_register', 'themeslug_theme_customizer' );
