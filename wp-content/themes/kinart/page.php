<?php
/**
 * @package kinart
 */

get_header();
?>
	<aside id="secondary" class="widget-area" role="complementary">
		<a href="/#shownav" class="category-title"><?php the_title(); ?></a>
	</aside>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
