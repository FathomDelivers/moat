<?php

// Should testimonial area be displayed?
if ( get_field('testimonial_area_on') ) { $testimonialAreaOn = get_field('testimonial_area_on'); } 
else { $testimonialAreaOn = '<h2>Please add a header</h2><br /><p>Please add some paragraph content</p>'; }

// Content
if ( get_field('testimonial_area') ) { $testimonialAreaContent = get_field('testimonial_area'); 
$value = get_field( "text_field" );}
else { $testimonialAreaContent = '<h2>Please add a header</h2><br /><p>Please add some paragraph content</p>'; }

?>

<?php if ($testimonialAreaOn == 'On') {
	// Set fields as variables
	$testimonial_area_content_1 = get_field( "testimonial_area_content_1" );
	$testimonial_area_image_1    = get_field( "testimonial_area_image_1" );
	$testimonial_area_content_2 = get_field( "testimonial_area_content_2" );
	$testimonial_area_image_2    = get_field( "testimonial_area_image_2" );
	$testimonial_area_content_3 = get_field( "testimonial_area_content_3" );
	$testimonial_area_image_3    = get_field( "testimonial_area_image_3" );
?>
<div class="container-fluid testimonial-area">
	<div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
		<div class="col-md-4 col-md-offset-4">
		  <div class="carousel-inner">
		    <div class="item active">
		        <img src="<?php echo $testimonial_area_image_1['url']; ?>" alt="<?php echo $testimonial_area_image_1['alt']; ?>" />
		        <p><?php echo $testimonial_area_content_1 ?></p>
				<span>Roberta F.</span>
		    </div>
		     <div class="item">
		        <img src="<?php echo $testimonial_area_image_2['url']; ?>" alt="<?php echo $testimonial_area_image_2['alt']; ?>" />
		        <p><?php echo $testimonial_area_content_2 ?></p>
				<span>Roberta F.</span>
		    </div>
		     <div class="item">
		        <img src="<?php echo $testimonial_area_image_3['url']; ?>" alt="<?php echo $testimonial_area_image_3['alt']; ?>" />
		        <p><?php echo $testimonial_area_content_3 ?></p>
				<span>Roberta F.</span>
		    </div>
		  </div>
		</div>
		<a class="left carousel-control" href="#testimonial-carousel" role="button" data-slide="prev">
		  <i class="fa fa-angle-left"></i>
		</a>
		<a class="right carousel-control" href="#testimonial-carousel" role="button" data-slide="next">
		  <i class="fa fa-angle-right"></i>
		</a>
	</div>
</div>
<?php } else { /* Nothing to show here.. */ } ?>