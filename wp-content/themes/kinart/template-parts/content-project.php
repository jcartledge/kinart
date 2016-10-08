<?php
/**
 * @package kinart
 */

require_once dirname( __FILE__ ) . '/../inc/colours.inc.php';
$colours = project_colour();
?>

<article id="post-<?php the_ID(); ?>" class="project">
	<header class="project__title">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header>
	<?php get_template_part( 'template-parts/carousel' ); ?>
	<svg class="project__background" version="1.1" xmlns="http://www.w3.org/2000/svg">
		<polygon
			points="0 0, 1200 0, 0 600"
			stroke="none"
			fill="<?php echo $colours->raw( 'colour' ); ?>" />
	</svg>
	<div class="project__content">
		<?php the_content(); ?>
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'kinart' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</div>
	<footer class="project__footer">
	</footer>
</article>
