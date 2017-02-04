<?php

function front_page_colour_pairs ($conditions = []) {
	$colours = pods( 'colourpair', [ 'orderby' => 'RAND()' ] );
	$pairs = [];
	while ( $colours->fetch() ) {
		$pairs[] = [ 'fg' => $colours->raw( 'foreground_colour' ), 'bg' => $colours->raw( 'background_colour' ) ];
	}
	return $pairs;
}
