			<footer class="footer" role="contentinfo">

				<div id="inner-footer" class="wrap cf">

					<div class="main-footer">
					<a href="/" title="Monster Markup Manual" class="home-link">Monster Markup Manual</a>
								<nav role="navigation">
									<?php wp_nav_menu(array(
									'container' => '',                              // remove nav container
									'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
									'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
									'menu_class' => 'nav footer-nav cf',            // adding custom nav class
									'theme_location' => 'footer-links',             // where it's located in the theme
									'before' => '',                                 // before the menu
								'after' => '',                                  // after the menu
								'link_before' => '',                            // before each link
								'link_after' => '',                             // after each link
								'depth' => 0,                                   // limit the depth of the nav
									'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
									)); ?>
								</nav>

								<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>

						</div>
						<div class="logo-footer">
							<a href="<?php echo home_url(); ?>" rel="nofollow"><img src="<?php echo get_stylesheet_directory_uri()?>/library/images/logo-small.png" alt="<?php bloginfo('name'); ?>" /></a>
						</div>
				</div>



			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
