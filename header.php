<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Drama_Forum
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'drama_forum' ); ?></a>

	<header id="masthead" class="site-header">
		<div class='d-flex justify-content-between align-items-center px-3 py-3'>
			<div class="site-branding">
				<?php if(get_field('logo', 'options')) : ?>
				<a href="/">
				<?php
				$logo = get_field('logo', 'options');
				echo wp_get_attachment_image($logo['id'], 'full');
				?>
				</a>
				<?php endif; ?>
			</div><!-- .site-branding -->
				
			<div class='d-flex align-items-center header-right'>
				<div class='header-search'>
				<form class='mr-3' action="/" id="header-search-form" method="get"><input type="text" name="s" id="s" placeholder="Search"><button type="submit"><i class="fas fa-search"></i></button></form>
				</div>
				<div class='header-account'>
					<a href="/members/me/"><i class="far fa-user"></i></a>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
