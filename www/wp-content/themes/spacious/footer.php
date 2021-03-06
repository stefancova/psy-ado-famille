<?php 
/**
 * Theme Footer Section for our theme.
 * 
 * Displays all of the footer section and closing of the #main div.
 *
 * @package ThemeGrill
 * @subpackage Spacious
 * @since Spacious 1.0
 */
?>

		</div><!-- .inner-wrap -->
	</div><!-- #main -->	
	<?php do_action( 'spacious_before_footer' ); ?>
		<footer id="colophon" class="clearfix">	
			<?php get_sidebar( 'footer' ); ?>

			<div class="footer-widgets-wrapper footer-gmaps">
				<div class="inner-wrap">
					<div class="footer-widgets-area clearfix">
						<div class="footer-perso-info">
							<h3 class="widget-title">
								<span>Contact rapide</span>
							</h3>
							<p>Cécile Martin, Psychologue Clinicienne</p>
							<p>46 rue Trousseau - 75011, Paris</p>
							<p>Tél : <a href="tel:+33699427853">06 99 42 78 53</a></p>
							<p>Mail : <a href="mailto:contact@psy-ado-famille.fr">contact@psy-ado-famille.fr</a></p>
						</div>
						<div class="footer-perso-maps">
					        <iframe class="" width="100%" height="200" frameborder="0" style="border:0"
								src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCAmWyHVSHb0Oldx0F-ToMX77MbYCOQXGs&q=46+rue+Trousseau,75011+Paris">
							</iframe>
						</div>
					</div>
				</div>
			</div>

			<div class="footer-socket-wrapper clearfix">
				<div class="inner-wrap">
					<div class="footer-socket-area">
						<?php do_action( 'spacious_footer_copyright' ); ?>
						<nav class="small-menu clearfix">
							<?php
								if ( has_nav_menu( 'footer' ) ) {									
										wp_nav_menu( array( 'theme_location' => 'footer',
																 'depth'           => -1
																 ) );
								}
							?>
		    			</nav>
					</div>
				</div>
			</div>			
		</footer>
		<a href="#masthead" id="scroll-up"></a>	
	</div><!-- #page -->
	<?php wp_footer(); ?>
</body>
</html>