<?php

// Should feature area be displayed?
if ( get_field('feature_area_on') ) { $featureAreaOn = get_field('feature_area_on'); } 
else { $featureAreaOn = '<h2>Please add a header</h2><br /><p>Please add some paragraph content</p>'; }

// Content
if ( get_field('feature_area') ) { $featureAreaContent = get_field('feature_area'); 
$value = get_field( "text_field" );}
else { $featureAreaContent = '<h2>Please add a header</h2><br /><p>Please add some paragraph content</p>'; }

?>

<?php if ($featureAreaOn == 'On') {
	// Set fields as variables
	$feature_area_content_column_1 = get_field( "feature_area_content_column_1" );
	$feature_area_image_1    = get_field( "feature_area_image_1" );
	$feature_area_content_column_2 = get_field( "feature_area_content_column_2" );
	$feature_area_image_2    = get_field( "feature_area_image_2" );
	$feature_area_content_column_3 = get_field( "feature_area_content_column_3" );
	$feature_area_image_3    = get_field( "feature_area_image_3" );
    ?>
<div class="feature-area">
	<div class="container">
		<div class="row center">
			<div class="col-md-4">
				<section>
					<div class="upper">
						<img src="<?php echo $feature_area_image_1['url']; ?>" alt="<?php echo $feature_area_image_1['alt']; ?>" />
					</div>
					<div class="lower">
						<?php echo $feature_area_content_column_1; ?>
					</div>
				</section>
			</div>
			<div class="col-md-4">
				<section>
					<div class="upper">
						<img src="<?php echo $feature_area_image_2['url']; ?>" alt="<?php echo $feature_area_image_2['alt']; ?>" />
					</div>
					<div class="lower">
						<?php echo $feature_area_content_column_2; ?>
					</div>
				</section>
			</div>
			<div class="col-md-4">
				<section>
					<div class="upper">
						<img src="<?php echo $feature_area_image_3['url']; ?>" alt="<?php echo $feature_area_image_3['alt']; ?>" />
					</div>
					<div class="lower">
						<?php echo $feature_area_content_column_3; ?>
					</div>
				</section>
			</div>
		</div>
	</div>
</div>
<?php } else { /* Nothing to show here.. */ } ?>