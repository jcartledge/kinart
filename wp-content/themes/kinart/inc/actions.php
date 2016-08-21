<?php

add_action('manage_colourpair_posts_custom_column', function ($column_name, $post_id) {
	if($column_name == 'colours') {
		$foreground = current(get_post_custom_values('foreground_colour', $post_id));
		$background = current(get_post_custom_values('background_colour', $post_id));
		echo sprintf('<div style="width: 200px; height: 50px; background-color: %s;"></div>', $background);
		echo sprintf('<div style="width: 0px; height: 0px; border-style:solid;  margin-top: -50px; border-width: 50px 200px 0 0; border-color: %s transparent transparent transparent;"></div>', $foreground);
	}
}, 10, 2);
