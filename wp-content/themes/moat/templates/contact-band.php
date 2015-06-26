<?php

// Should contact band be displayed?
if ( get_field('contact_band_on') ) { $contactBandOn = get_field('contact_band_on'); } 
else { $contactBandOn = 'Default Value if not entered?'; }

// Content
if ( get_field('contact_band') ) { $contactBandContent = get_field('contact_band'); 
$value = get_field( "text_field" );}
else { $contactBandContent = 'Default Value if not entered?'; }

?>

<?php if ($contactBandOn == 'On') {
	// Set fields as variables
	$contact_band_button_1 = get_field( "contact_band_button_1" );
	$contact_band_link_1   = get_field( "contact_band_link_1" );
	$contact_band_button_2 = get_field( "contact_band_button_2" );
	$contact_band_link_2   = get_field( "contact_band_link_2" );
	$contact_band_image    = get_field( "contact_band_image" );
    ?>
    <div class="container-fluid contact-band">
        <div class="row">
            <div class="col-md-3 col-md-offset-1">
                <?php if( !empty($contact_band_image) ): ?>
					<img src="<?php echo $contact_band_image['url']; ?>" alt="<?php echo $contact_band_image['alt']; ?>" />
				<?php endif; ?>
            </div>
            <div class="col-md-6 col-md-offset-1">
                <div class="col-sm-12">
                    <p><?php echo $contactBandContent; ?></p>
                </div>
                <div class="col-sm-4">
                    <a href="<?php echo $contact_band_link_1; ?>" class="btn-sm-o white"><?php echo $contact_band_button_1; ?></a>
                </div>
                <div class="col-sm-4">
                    <a href="<?php echo $contact_band_link_2; ?>" class="btn-sm-o white"><?php echo $contact_band_button_2; ?></a>
                </div>
            </div>
        </div>
    </div>
<?php } else { /* Nothing to show here.. */ } ?>