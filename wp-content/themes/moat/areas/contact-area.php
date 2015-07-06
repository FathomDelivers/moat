<?php

// Should contact area be displayed?
if ( get_field('contact_area_on') ) { $contactAreaOn = get_field('contact_area_on'); } 
else { $contactAreaOn = '<h2>Please add a header</h2><br /><p>Please add some paragraph content</p>'; }

// Content
if ( get_field('contact_area') ) { $contactAreaContent = get_field('contact_area'); 
$value = get_field( "text_field" );}
else { $contactAreaContent = '<h2>Please add a header</h2><br /><p>Please add some paragraph content</p>'; }

?>

<?php if ($contactAreaOn == 'On') {
	// Set fields as variables
	$contact_area_button_1 = get_field( "contact_area_button_1" );
	$contact_area_link_1   = get_field( "contact_area_link_1" );
	$contact_area_button_2 = get_field( "contact_area_button_2" );
	$contact_area_link_2   = get_field( "contact_area_link_2" );
	$contact_area_image    = get_field( "contact_area_image" );
    ?>
    <div class="container-fluid contact-area">
        <div class="row">
            <div class="col-md-3 col-md-offset-1">
                <?php if( !empty($contact_area_image) ): ?>
					<img src="<?php echo $contact_area_image['url']; ?>" alt="<?php echo $contact_area_image['alt']; ?>" />
				<?php endif; ?>
            </div>
            <div class="col-md-6 col-md-offset-1">
                <div class="col-sm-12">
                    <?php echo $contactAreaContent; ?>
                </div>
                <div class="col-sm-4">
                    <a href="<?php echo $contact_area_link_1; ?>" class="btn-sm-o white"><?php echo $contact_area_button_1; ?></a>
                </div>
                <div class="col-sm-4">
                    <a href="<?php echo $contact_area_link_2; ?>" class="btn-sm-o white"><?php echo $contact_area_button_2; ?></a>
                </div>
            </div>
        </div>
    </div>
<?php } else { /* Nothing to show here.. */ } ?>