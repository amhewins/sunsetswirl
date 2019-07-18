<?php
  // register custom menus
      function register_my_menus() {
      register_nav_menus(
        array(
          'header-menu' => __( 'Header Menu' )
        )
      );
    }
    add_action( 'init', 'register_my_menus' );

  // bulma navwalker
    require_once('navwalker.php');
      register_nav_menus( array(
          'primary' => __( 'Primary Menu', 'menuname' ),
      ) );

  // include custom styles
    function loadMyScripts()
    {
    	wp_register_script( 'theme-scripts', 'js/script.js' );
    	wp_enqueue_script( 'cript' );
    }

    add_action( 'wp_enqueue_scripts','loadMyScripts' );

    function my_assets() {
    	wp_enqueue_style( 'theme-style', get_stylesheet_uri(), array( 'style' ) );
    	wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/style.css' );

    	wp_enqueue_style( 'theme-style', get_stylesheet_uri(), array( 'bulma' ) );
    	wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/bulma-0.6.2/css/bulma.css.map' );

      wp_enqueue_script( 'theme-scripts', get_stylesheet_directory_uri() . '/website-scripts.js', array( 'jquery' ), '1.0', true );
    }
    add_action( 'wp_enqueue_scripts', 'my_assets' );

    add_action( 'wp_enqueue_scripts', 'add_my_script' );
    function add_my_script() {
        wp_enqueue_script(
            'script', // name your script so that you can attach other scripts and de-register, etc.
            get_template_directory_uri() . '/js/script.js', // this is the location of your script file
            array('jquery') // this array lists the scripts upon which your script depends
        );
    }

  // include custom jQuery
    function shapeSpace_include_custom_jquery() {

    	wp_deregister_script('jquery');
    	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);

    }
    add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery');

    show_admin_bar( false );

 ?>
