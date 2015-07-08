<?php

// Should information area be displayed?
if ( get_field('information_area_power') ) { $informationAreaOn = get_field('information_area_power'); } 
else { $informationAreaOn = '<h2>Please add content to your Information Area</h2>'; }

// Content
if ( get_field('information_area') ) { $informationAreaContent = get_field('information_area'); 
$value = get_field( "text_field" );}
else { $informationAreaContent = '<h2>Please add content to your Information Area</h2>'; }

?>

<?php if ($informationAreaOn == 'On') {
	// Set fields as variables
	$information_area_column_1 = get_field( "information_area_column_1" );
	$information_area_column_2 = get_field( "information_area_column_2" );
    ?>
<div class="information-area">
	<div class="container">
		<div class="col-md-4 col-md-offset-2">
			<?php echo $information_area_column_1; ?>
		</div>
		<div class="col-md-4">
			<?php echo $information_area_column_2; ?>
		</div>
	</div>
</div>
<?php } else { /* Nothing to show here.. */ } ?>