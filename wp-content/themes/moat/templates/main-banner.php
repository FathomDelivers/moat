<div class="main-banner">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h1><?php echo get_post_meta($post->ID, 'main-banner-heading', true); ?></h1>
				<p class="lead"><?php echo get_post_meta($post->ID, 'main-banner-lead', true); ?></p>
			</div>
			<div class="col-md-4">
				<?php echo do_shortcode( '[contact-form-7 id="4" title="main-banner"]' ); ?>
			</div>
		</div>
	</div>
</div>