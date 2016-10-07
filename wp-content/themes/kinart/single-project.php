<?php
/**
 * @package kinart
 */

the_post();

// If the page has children it's a group of projects - redirect to the first child.
$children = get_pages( [
  'child_of' => $post->ID,
  'orderby' => 'menu_order',
  'post_type' => 'project',
] );
if ( $children ) {
	wp_redirect( get_permalink( $children[0]->ID ) );
}

get_header(); ?>

<div class="sidebar">
  <?php get_sidebar( 'project' ); ?>
</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php get_template_part( 'template-parts/content', 'project' ); ?>
		</main>
	</div>

<?php
get_footer();
