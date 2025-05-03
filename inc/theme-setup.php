<?php
function mi_tema_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('menus');

  register_nav_menus([
    'menu-principal' => 'Menú Principal',
  ]);
}
add_action('after_setup_theme', 'mi_tema_setup');
