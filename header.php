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
				<div class='main-navigation'>
					<?php
						wp_nav_menu(
							array(
								'menu'  		  => 'main-menu',
								'depth'           => 3, // 1 = no dropdowns, 2 = with dropdowns.
								'container'       => 'div',
								'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
								'walker'          => new WP_Bootstrap_Navwalker(),
							)
						);
					?>
					<div class='px-3 header-search d-lg-none'>
						<form class='mr-3' action="/" id="header-search-form" method="get"><input type="text" name="s" id="s" placeholder="Search"><button type="submit"><i class="fas fa-search"></i></button></form>
					</div>
				</div>
				<div class='header-search d-none d-lg-block'>
				<form class='mr-3' action="/" id="header-search-form" method="get"><input type="text" name="s" id="s" placeholder="Search"><button type="submit"><i class="fas fa-search"></i></button></form>
				</div>
			</div>
			<div class='header-right d-flex align-items-center'>
				<div class='header-account d-flex align-items-center'>
					<?php if(is_user_logged_in()) :  ?>
						<a itemprop="url" href="https://forum.timwuweb.com/community/?foro=logout" class="nav-link"><span itemprop="name">Logout</span></a>
						<a class='profile-toggle mr-3' href="#"><i class="far fa-user"></i></a>
					<?php else : ?>
						<a itemprop="url" href="https://forum.timwuweb.com/community/?foro=signin" class="nav-link" aria-current="page"><span itemprop="name">Sign In</span></a>
						<a itemprop="url" href="https://forum.timwuweb.com/community/?foro=signup" class="nav-link"><span itemprop="name">Register</span></a>
					<?php endif; ?>
					<div class='user-navigation'>
						<?php
							wp_nav_menu(
								array(
									'menu'  		  => 'user-menu',
									'depth'           => 3, // 1 = no dropdowns, 2 = with dropdowns.
									'container'       => 'div',
									'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
									'walker'          => new WP_Bootstrap_Navwalker(),
								)
							);
						?>
					</div>
				</div>
				<button class="hamburger hamburger--minus d-lg-none" type="button">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</button>
			</div>
		</div>
		
	</header><!-- #masthead -->
