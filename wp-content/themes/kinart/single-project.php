<?php
/**
 * @package kinart
 */

get_header(); ?>

<div class="sidebar">
  <?php get_sidebar( 'project' ); ?>
</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );
				get_template_part( 'template-parts/carousel' );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
