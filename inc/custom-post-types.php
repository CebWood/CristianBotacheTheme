<?php
function registrar_cpt_proyectos() {
  register_post_type('proyecto', [
    'labels' => [
      'name' => 'Proyectos',
      'singular_name' => 'Proyecto'
    ],
    'public' => true,
    'has_archive' => true,
    'menu_icon' => 'dashicons-portfolio',
    'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
    'rewrite' => ['slug' => 'proyectos'],
  ]);
}
add_action('init', 'registrar_cpt_proyectos');
