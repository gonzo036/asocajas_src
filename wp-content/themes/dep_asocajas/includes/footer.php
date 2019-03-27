<footer class="container site-footer">
	<div class="footer-row">
    <?php dynamic_sidebar('footer-widget-area'); ?>
  </div>
  <hr/>
  <div class="footer-row">
    <div class="site-sub-footer">
      <p>&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
