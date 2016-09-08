<?php

function front_page_colour_pair () {
	// load random colour pair from pods
	return pods( 'colourpair', [ 'limit' => 1, 'orderby' => 'RAND()' ] );
}
