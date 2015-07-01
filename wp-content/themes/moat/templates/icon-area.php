<?php

// Should icon area be displayed?
if ( get_field('icon_area_on') ) { $iconAreaOn = get_field('icon_area_on'); } 
else { $iconAreaOn = '<h2>Please add a header</h2><br /><p>Please add some paragraph content</p>'; }

// Content
if ( get_field('icon_area') ) { $iconAreaContent = get_field('icon_area'); 
$value = get_field( "text_field" );}
else { $iconAreaContent = '<h2>Please add a header</h2><br /><p>Please add some paragraph content</p>'; }

?>

<?php if ($iconAreaOn == 'On') {
	// Set fields as variables
	$icon_area_content_column_1 = get_field( "icon_area_content_column_1" );
	$icon_area_icon_1    = get_field( "icon_area_icon_1" );
	$icon_area_content_column_2 = get_field( "icon_area_content_column_2" );
	$icon_area_icon_2    = get_field( "icon_area_icon_2" );
	$icon_area_content_column_3 = get_field( "icon_area_content_column_3" );
	$icon_area_icon_3 = get_field( "icon_area_icon_3" );
?>
<div class="icon-area">
	<div class="container">
		<div class="row center">
			<div class="col-md-4">
				<div class="circle">
					<i class="fa fa-<?php echo $icon_area_icon_1; ?>">&nbsp;</i>
				</div>
				<?php echo $icon_area_content_column_1; ?>
			</div>
			<div class="col-md-4">
				<div class="circle">
					<i class="fa fa-<?php echo $icon_area_icon_2; ?>">&nbsp;</i>
				</div>
				<?php echo $icon_area_content_column_2; ?>
			</div>
			<div class="col-md-4">
				<div class="circle">
					<i class="fa fa-<?php echo $icon_area_icon_3; ?>">&nbsp;</i>
				</div>
				<?php echo $icon_area_content_column_3; ?>
			</div>
		</div>
	</div>
</div>
<?php } else { /* Nothing to show here.. */ } ?>