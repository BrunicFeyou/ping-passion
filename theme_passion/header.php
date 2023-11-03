<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Theme_Passion
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'theme_blanc' ); ?></a>

    <header id="masthead" class="site-header">
	<?php if( get_field('logo', 81) ): ?>
		<div class= "logo">
      <img  src="<?php the_field('logo', 81); ?>" />
	  </div>
       <?php endif; ?>
		<nav id="site-navigation" class="main-navigation">
			<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'theme_blanc' ); ?></button> -->
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'header-menu',
					'menu_id'        => 'header-menu',
					'menu_class' =>  'header-menu', 
					'menu_container' => 'nav'
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
</div>
