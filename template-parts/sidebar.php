<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <aside>
    <div class="sidebar bg-black text-white vh-100 d-flex flex-column p-3 sticky-top" style="width: 100%; max-width: 250px;">
      <h3 class="mb-4">
        <a href="#home" class="text-decoration-none text-light mb-2 section-link">CRISTIAN BOTACHE</a>
      </h3>
      <a href="#portafolio" class="text-decoration-none text-light mb-2 section-link">PORTAFOLIO</a>
      <a href="#about" class="text-decoration-none text-light mb-2 section-link">ABOUT</a>
      <a href="#contacto" class="text-decoration-none text-light mb-2 section-link">CONTACTO</a>
    </div>
  </aside>