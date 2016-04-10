<?php

add_action('manage_colourpair_posts_custom_column', function ($column_name, $post_id) {
  if($column_name == 'preview') {
    $foreground = current(get_post_custom_values('foreground_colour', $post_id));
    $background = current(get_post_custom_values('background_colour', $post_id));
    echo sprintf('<div style="color:%s; background-color: %s;"> Preview </div>', $foreground, $background);
    echo sprintf('<div style="background-color: %s;">&nbsp</div>', $foreground);
  }
}, 10, 2);
