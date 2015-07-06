<?php

// Should block area be displayed?
if ( get_field('block_area_on') ) { $blockAreaOn = get_field('block_area_on'); } 
else { $blockAreaOn = '<h2>Please add a header</h2><br /><p>Please add some paragraph content</p>'; }

// Content
if ( get_field('block_area') ) { $blockAreaContent = get_field('block_area'); 
$value = get_field( "text_field" );}
else { $blockAreaContent = '<h2>Please add a header</h2><br /><p>Please add some paragraph content</p>'; }

?>

<?php if ($blockAreaOn == 'On') {
	// Set fields as variables
	$block_area_content = get_field( "block_area_content" );
	$block_area_link   = get_field( "block_area_link" );
	$block_area_button = get_field( "block_area_button" );
    ?>
<div class="block-area">
	<div class="container">
		<div class="col-sm-8 col-sm-offset-2">
			<?php echo $block_area_content; ?>
			<div class="col-sm-4 col-sm-offset-4">
				<a href="<?php echo $block_area_link; ?>" class="btn-sm"><?php echo $block_area_button; ?></a>
			</div>
		</div>
	</div>
</div>
<?php } else { /* Nothing to show here.. */ } ?>