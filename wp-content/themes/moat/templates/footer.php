<footer class="content-info" role="contentinfo">
  <div class="container">
  	<div class="col-sm-8 col-sm-offset-2">
    	<?php dynamic_sidebar('sidebar-footer'); ?>
    	<p>&copy; Copyright <?php echo date('Y') ?> <?php echo get_post_meta($post->ID, 'footer-name', true); ?> | <a href="privacy-policy">Privacy Policy</a></p>
  	</div>
  </div>
</footer>
<script> smoothScroll.init(); </script>
