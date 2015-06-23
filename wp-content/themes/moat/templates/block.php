<div class="block">
	<div class="container">
		<div class="col-sm-8 col-sm-offset-2">
			<h3><?php echo get_post_meta($post->ID, 'block-heading', true); ?></h3>
			<div class="col-sm-4 col-sm-offset-4">
				<a href="<?php echo get_post_meta($post->ID, 'block-button-link', true); ?>" class="btn-sm"><?php echo get_post_meta($post->ID, 'block-button', true); ?></a>
			</div>
		</div>
	</div>
</div>