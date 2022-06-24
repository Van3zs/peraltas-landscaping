    <footer>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/white-logo.svg" alt="Peralta's Logo" class="logo_header">
      <div class='footer-content'>
        <p><?php echo the_field('company_local') ?></p>

        <p><?php bloginfo('name'); ?> © <?php echo date("Y"); ?>. All Rights Reserved.</p>
      </div>
		</footer>

    <?php wp_footer(); ?>
	</body>
</html>