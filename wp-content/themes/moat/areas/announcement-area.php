<?php

// Should announcement area be displayed?
if ( get_field('announcement_area_power') ) { $announcementAreaOn = get_field('announcement_area_power'); } 
else { $announcementAreaOn = '<h2>Please add content to your announcement Area</h2>'; }

// Content
if ( get_field('announcement_area') ) { $announcementAreaContent = get_field('announcement_area'); 
$value = get_field( "text_field" );}
else { $announcementAreaContent = '<h2>Please add content to your announcement Area</h2>'; }

?>

<?php if ($announcementAreaOn == 'On') {
  // Set fields as variables
  $announcement_area_slide_1 = get_field( "announcement_area_slide_1" );
  $announcement_area_slide_2 = get_field( "announcement_area_slide_2" );
    ?>

<div class="announcement-area">
  <div id="announcement-carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner col-xs-12">
      <div class="item active">
      <?php echo $announcement_area_slide_1; ?>
      </div>
      <div class="item">
      <?php echo $announcement_area_slide_2; ?>
      </div>
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#announcement-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#announcement-carousel" data-slide-to="1" ></li>
      </ol>
    </div>
  </div>
</div> 
<?php } else { /* Nothing to show here.. */ } ?>