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
                <h1 class='mb-4'>Frequently Asked Questions</h1>
                
                <?php if(have_rows('faq')) : ?>
                    <div class='faq'>
                        <?php while(have_rows('faq')) : the_row(); ?>
                        <?php
                            $title = get_sub_field('title');
                            $content = get_sub_field('content');
                        ?>
                        <div class='faq-wrap mb-3'>
                            <h2 class='h3 faq-title'><span><?php echo $title; ?></span><i class="fas fa-chevron-down"></i></h2>
                            <div class='faq-content'><?php echo $content; ?></div>
                        </div>

                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
                
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
