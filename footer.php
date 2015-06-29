</div>
</div>

			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
				<div class="inner-footer">
					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. Last modified on <?php the_modified_time('F j, Y'); ?>.</p>
          <div class="footer-logo">
            <a href="http://arts.vcu.edu">
              <img class="monotone" src="<?php echo get_template_directory_uri(); ?>/library/images/svg/vcuarts.svg" onerror="this.onerror=null; this.src='<?php echo get_template_directory_uri(); ?>/library/images/svg/fallbacks/vcuarts-dk.jpg'">
              <img class="color" src="<?php echo get_template_directory_uri(); ?>/library/images/svg/vcuarts-hover.svg" onerror="this.onerror=null; this.src='<?php echo get_template_directory_uri(); ?>/library/images/svg/fallbacks/vcuarts-dk-hover.jpg'">
            </a>
          </div>
				</div>

			</footer>

	

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

    <?php echo get_development_scripts(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
