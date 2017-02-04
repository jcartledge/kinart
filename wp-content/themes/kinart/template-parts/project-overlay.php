<?php
/**
 * @package kinart
 */

require_once dirname( __FILE__ ) . '/../inc/colours.inc.php';
$colour = project_colour();
?>
<div class="project-overlay is-out">
	<div class="project-overlay__intro project-overlay__content">
		<?php the_content(); ?>
	</div>
	<div class="project-overlay__controls" style="color: <?php echo $colour; ?>">
		<div class="project-overlay__show">More</div>
		<div class="project-overlay__hide">Or less</div>
	</div>
	<svg class="project-overlay__triangle" version="1.1" xmlns="http://www.w3.org/2000/svg">
		<polygon
			points="0 0, 1200 0, 0 600"
			stroke="none"
			fill="<?php echo $colour; ?>" />
	</svg>
	<?php get_template_part( 'template-parts/carousel' ); ?>
	<div class="project-overlay__description project-overlay__content">
		<?php echo get_post_meta($post->ID, 'description', true); ?>
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
</div>
