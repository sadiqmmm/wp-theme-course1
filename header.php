<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Msadiq
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
<div id="wrapper">
<?php wp_body_open(); ?>
<div id="page" class="site">

	<header>
		<div id="branding">
			<?php if (has_custom_logo()): ?>
				<?php the_custom_logo() ?>
			<?php else : ?>
			<h1>Smashing HTML5!</h1>
			<p>
				HTML5 in the year <del>2022</del> 2009
			</p>
			<?php endif; ?>
		</div>
		<nav>
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
		</nav>
    </header>