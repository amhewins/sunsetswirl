<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <title>Sunset Swirl <?php wp_title("",true); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <div class="max-width-container">

    <div class="header-navigation-container">
      <nav class="navbar container" role="navigation" aria-label="main navigation">
          <div class="navbar-brand">
            <a class="navbar-item" href="https://sunsetswirl.com/">
                <img class="brand-image" src="/wp-content/uploads/2019/02/logo-new-no-bg.png"/>
            </a>

              <button class="button navbar-burger" data-target="header-menu">
                  <span></span>
                  <span></span>
                  <span></span>
              </button>
          </div>
          <div class="navbar-menu">
          <?php
          wp_nav_menu( array(
              'theme_location'    => 'header-menu',
              'depth'             => 2,
              'container'         => true,
              // 'items_wrap'     => 'div',
              'menu_class'        => 'navbar-end',
              'menu_id'           => 'header-menu',
              'after'             => "</div>",
              'walker'            => new Navwalker())
          );
          ?>
        </div> <!--navbar-menu-->
      </nav>
    </div> <!--header-naviation-container-->
