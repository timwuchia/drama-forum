<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Drama_Forum
 */

get_header();
?>
	<div class='container page-container'>
		<div class='page-mobile-sidebar d-lg-none'>
			<?php dynamic_sidebar('mobile-sidebar'); ?>
		</div>
		<div class='row'>
			
			<main id="primary" class="site-main col-lg-9">

				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					// if ( comments_open() || get_comments_number() ) :
					// 	comments_template();
					// endif;

				endwhile; // End of the loop.
				?>

			</main><!-- #main -->
			<div class='page-sidebar col-lg-3'>
			<?php
			
			get_sidebar();
			?>
			</div>
		</div>
	</div>

<?php
// get_sidebar();
get_footer();
