<?php

// Should photo area be displayed?
if ( get_field('photo_area_power') ) { $photoAreaOn = get_field('photo_area_power'); } 
else { $photoAreaOn = '<h2>Please add a header</h2><br /><p>Please add some paragraph content</p>'; }

// Content
if ( get_field('photo_area') ) { $photoAreaContent = get_field('photo_area'); 
$value = get_field( "text_field" );}
else { $photoAreaContent = '<h2>Please add a header</h2><br /><p>Please add some paragraph content</p>'; }

?>

<?php if ($photoAreaOn == 'On') {
  // Set fields as variables
  $photo_area_content = get_field( "photo_area_content" );
    ?>
<div class="image-area">
  <div class="container">
    <div class="col-sm-6">
      <?php echo $photo_area_content; ?>
    </div>
  </div> 
</div>
<?php } else { /* Nothing to show here.. */ } ?>