<div class="main-banner">
	<div class="container-fluid">
		<div class="col-sm-4 col-sm-offset-1">
			<?php get_template_part('templates/salesforce-form', 'page'); ?>
		</div>
		<div class="col-sm-6">
			<h1><?php echo get_post_meta($post->ID, 'main-banner-heading', true); ?></h1>
			<p class="lead"><?php echo get_post_meta($post->ID, 'main-banner-lead', true); ?></p>
		</div>
	</div>
</div>