<?php
/**
* Create custom post types.
*/
add_action('init', 'create_posttype');

function create_posttype()
{
  register_post_type('events',
  array(
    'supports' => array('title', 'editor', 'excerpt'),
    'labels' => array(
      'name' => __('Events'),
      'singular_name' => __('Event')
    ),
    'public' => true,
    'menu_position' => 4,
    'menu_icon' => 'dashicons-format-aside',
    'rewrite' => array('slug' => 'events'),
    'has_archive' => true,
    )
  );
}
