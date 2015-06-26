<?php

// Should contact band be displayed?
if ( get_field('contact_band_on') ) { $contactBandOn = get_field('contact_band_on'); } 
else { $contactBandOn = 'Default Value if not entered?'; }

// Content
if ( get_field('contact_band') ) { $contactBandContent = get_field('contact_band'); }
else { $contactBandContent = 'Default Value if not entered?'; }

?>

<?php if ($contactBandOn == 'On') {
    ?>
    <div class="container-fluid contact-band">
        <div class="row">
            <div class="col-md-3 col-md-offset-1">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone.png" />
            </div>
            <div class="col-md-6 col-md-offset-1">
                <div class="col-sm-12">
                    <p><?php echo $contactBandContent; ?></p>
                </div>
                <div class="col-sm-4">
                    <a href="<?php get_field('contact_band_button_1_link')?>" class="btn-sm-o white"><i class="fa fa-phone">&nbsp;</i><?php get_field('contact_band_button_1')?></a>
                </div>
                <div class="col-sm-4">
                    <a href="<?php echo get_post_meta($post->ID, 'contact-band-button-two-link', true); ?>" class="btn-sm-o"><i class="fa fa-book">&nbsp;</i> <?php echo get_post_meta($post->ID, 'contact-band-button-two', true); ?></a>
                </div>
            </div>
        </div>
    </div>
<?php } else { /* Nothing to show here.. */ } ?>