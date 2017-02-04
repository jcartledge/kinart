<?php
/**
 * @package kinart
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main category" role="main">

		<?php if ( have_posts() ) : ?>
			<header class="page-header">
				<h1 class="page-title category-title">&lsaquo; <?php single_cat_title(); ?></h1>
			</header>
			<?php get_template_part( 'template-parts/project_list' );
		endif; ?>

		</main>
	</div>

<?php get_sidebar();
