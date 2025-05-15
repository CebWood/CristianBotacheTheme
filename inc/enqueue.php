<?php
function mi_tema_assets()
{
  wp_enqueue_style('mi-tema-style', get_stylesheet_uri());
  wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css');
  wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', [], null, true);

  // Bootstrap CSS
  wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');

  // Bootstrap JS
  wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', [], null, true);

  // GSAP
  wp_enqueue_script('gsap', 'https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js', [], null, true);
}
add_action('wp_enqueue_scripts', 'mi_tema_assets');
