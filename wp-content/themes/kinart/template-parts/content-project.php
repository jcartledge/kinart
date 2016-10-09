<?php
/**
 * @package kinart
 */
?>
<article id="post-<?php the_ID(); ?>" class="project">
	<header class="project__title">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header>
	<?php get_template_part( 'template-parts/carousel' ); ?>
	<?php get_template_part( 'template-parts/project-overlay' ); ?>
</article>
