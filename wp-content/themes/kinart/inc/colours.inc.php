<?php

function project_colour() {
	// load random colour from pods
	return pods( 'colour', [ 'limit' => 1, 'orderby' => 'RAND()' ] );
}
