<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
  <header class="site-header">

    <div class="logo-container">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
        <img src="<?php echo get_template_directory_uri(); ?>/imagenes/header/logo.png" alt="Logo del sitio">
      </a>
      <h1 class="site-title">
        <a href="<?php echo esc_url(home_url('/')); ?>">JUEGOSPS2</a>
      </h1>
    </div>

    <button class="menu-toggle" aria-label="Abrir menú">
      <i class="fa-solid fa-bars"></i>
    </button>

    <nav class="site-nav">
      <?php
        wp_nav_menu(array(
          'theme_location' => 'menu-principal',
          'container' => false,
        ));
      ?>
    </nav>

  </header>