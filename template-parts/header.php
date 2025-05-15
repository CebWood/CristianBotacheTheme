<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body class="body">
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <div>
        <a class="navbar-brand" href="#">
          <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
        </a>
      </div>
      <div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active fs-5 me-2" aria-current="page" href="#portfolio">Portfolio</a>
            <a class="nav-link fs-5 me-2" href="#about">About</a>
            <a class="nav-link fs-5" href="#contact">Contact</a>
          </div>
        </div>
      </div>
    </div>
  </nav>