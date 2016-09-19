<?php

add_filter( 'manage_colourpair_posts_columns', function ( $defaults ) {
	unset( $defaults[ 'title' ] );
	$defaults[ 'colours' ] = 'Colours';
	return $defaults;
});
