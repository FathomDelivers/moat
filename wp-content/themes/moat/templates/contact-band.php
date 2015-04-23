<div class="container-fluid contact-band">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h4><?php echo get_post_meta($post->ID, 'contact-band-heading', true); ?></h4>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3 col-md-offset-3">
			<a href="#" class="btn-sm"><i class="fa fa-phone">&nbsp;</i><?php echo get_post_meta($post->ID, 'contact-band-button-one', true); ?></a>
		</div>
		<div class="col-md-3">
			<a href="#" class="btn-sm"><i class="fa fa-envelope">&nbsp;</i><?php echo get_post_meta($post->ID, 'contact-band-button-two', true); ?></a>
		</div>
	</div>
</div>