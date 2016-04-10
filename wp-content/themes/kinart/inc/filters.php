<?php

add_filter('manage_colourpair_posts_columns', function ($defaults) {
  $defaults['preview'] = 'Preview';
  return $defaults;
});
