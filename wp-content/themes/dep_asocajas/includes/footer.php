<footer class="site-footer footer">
	<div class="footer-row container">
		<?php dynamic_sidebar('footer-widget-area'); ?>
	</div>
	<div class="footer-row container">
		<div class="site-sub-footer">
			<p>&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></p>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
