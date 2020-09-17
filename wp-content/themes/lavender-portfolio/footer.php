<?php wp_footer();?>
</body>
<footer class="footer">
	<div class="footer-full-menu">
		<?php
			wp_nav_menu([
			'theme_location' => 'social_menu'
			]);
		?>
		<p>Copyright &copy; <?php echo date("Y"); ?> | <?php bloginfo('blogname'); ?></p>
	</div>

</footer>
</html>

