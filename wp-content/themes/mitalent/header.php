<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php the_title(); ?></title>
  <?php wp_head(); ?>
</head>
<body>
<header class="header">
  <div class="container header__container">
    <nav class="site-navigation" aria-label="Menu">
      <label for="site-navigation__toggle-menu" aria-label="Menu">
        <i class="site-navigation__icon fas fa-bars"></i>
      </label>
      <input id="site-navigation__toggle-menu" type="checkbox">
      <?php wp_nav_menu(array	(
          'theme_location'  => 'header-menu',
          'container'       => 'ul',
          'container_class' => 'site-navigation',
          'menu_class'      => 'main-menu',
          'echo'            => true,
          'fallback_cb'     => 'wp_page_menu',
          'depth'           => 0)
      ); ?>
    </nav>
    <div class="header__logo-company">
      <img src="<?php echo get_theme_mod('mitalent_custom_logo')?>" alt="Logo-company">
    </div>
    <div class="search">
      <div class="search__wrapper">
        <?php get_search_form(); ?>
      </div>
    </div>
  </div>
</header>
<main>