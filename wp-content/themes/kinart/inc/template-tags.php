<?php
/**
 * Custom template tags for this theme.
 *
 * @package kinart
 */

/**
 * Flush out the transients used in kinart_categorized_blog.
 */
function kinart_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	delete_transient( 'kinart_categories' );
}
add_action( 'edit_category', 'kinart_category_transient_flusher' );
add_action( 'save_post', 'kinart_category_transient_flusher' );
