<div class="container-fluid contact-band">
	<div class="row">
		<div class="col-md-3 col-md-offset-1">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone.png" />
		</div>
		<div class="col-md-6 col-md-offset-1">
			<div class="col-sm-12">
				<h2><?php echo get_post_meta($post->ID, 'contact-band-heading', true); ?></h2>
				<p>Ullamcorper, duo et soleat vocent, definiebas interesset mea cuvix. Indoctum salutandi his ea, esse autem consulatu.</p>
			</div>
			<div class="col-sm-6">
				<a href="tel:<?php echo get_post_meta($post->ID, 'contact-band-button-one', true); ?>" class="btn-sm-o"><i class="fa fa-phone">&nbsp;</i><?php echo get_post_meta($post->ID, 'contact-band-button-one', true); ?></a>
			</div>
			<div class="col-sm-6">
				<a href="mailto:<?php echo get_post_meta($post->ID, 'contact-band-button-two', true); ?>" class="btn-sm-o"><i class="fa fa-envelope">&nbsp;</i><?php echo get_post_meta($post->ID, 'contact-band-button-two', true); ?></a>
			</div>
		</div>
	</div>
</div>