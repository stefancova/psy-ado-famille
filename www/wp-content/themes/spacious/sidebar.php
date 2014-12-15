<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package ThemeGrill
 * @subpackage Spacious
 * @since Spacious 1.0
 */
?>

<div id="secondary">
	<?php do_action( 'spacious_before_sidebar' ); ?>
		<?php 
			if( is_page_template( 'page-templates/contact.php' ) ) {
				$sidebar = 'spacious_contact_page_sidebar';
			}
			else {
				$sidebar = 'spacious_right_sidebar';
			}
		?>

		<div class="menu-perso">
			<?php
				# source : http://lashon.fr/menus-dynamiques-wordpress-site-web-blog-pages-categories/
				$children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");

				if ($children) {
					$parent_title = get_the_title($post->post_parent);
					echo '<p class="menu-perso-title">'.$parent_title.'</p>';
				?>
				<ul>
					<?php echo $children; ?>
				</ul>
			<?php } ?>
		</div><!-- fin menu-perso -->

		<div class="menu-perso">
			<p class="menu-perso-title">Accès rapide</p>
			<ul>
				<li><a href="">Blabla</a></li>
				<li><a href="">Blibli</a></li>
			</ul>
		</div>


	<?php do_action( 'spacious_after_sidebar' ); ?>
</div>