<?php

add_filter( 'manage_colourpair_posts_columns', function ( $defaults ) {
	unset( $defaults[ 'title' ] );
	$defaults[ 'colours' ] = 'Colours';
	return $defaults;
});

add_filter( 'manage_colour_posts_columns', function ( $defaults ) {
	unset( $defaults[ 'title' ] );
	$defaults[ 'colour' ] = 'Colour';
	return $defaults;
});

add_filter( 'pre_get_posts', function ( $query ) {
	if( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {
		$query->set( 'post_type', [ 'post', 'nav_menu_item', 'project' ] );
		return $query;
	}
});
