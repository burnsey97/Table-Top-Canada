<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Table_Top_Canada
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

<!-- !UNiversal site heading creation -->
	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			if (! empty (has_custom_logo() ) ) {
				the_custom_logo();
			} else {
			$tbtcan_description = get_bloginfo( 'description', 'display' );
			if ( $tbtcan_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $tbtcan_description; 
				// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif;
			}
			?>
			
		</div>
		<!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<!-- Custom Menu -->
			<?php
			if( has_nav_menu( 'menu-primary' ) ) {
			wp_nav_menu(
				array(
					'theme_location' => 'menu-primary',
					'menu_id'        => 'primary-menu',
				)
			);
			}
			?>
			


		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->


	<!-- Header Created  -->