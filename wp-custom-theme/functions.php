<?php 

/*
  Enqueue scripts and styles

function your_theme_enqueue_scripts() {
    // all styles
    wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css', array(), 20141119 );
    wp_enqueue_style( 'theme-style', get_stylesheet_directory_uri() . '/css/style.min.css', array(), 20141119 );
    // all scripts
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '20120206', true );
    wp_enqueue_script( 'mdbootstrap', get_template_directory_uri() . '/mdb.min.js', array('jquery'), '20120206', true );
}
add_action( 'wp_enqueue_scripts', 'your_theme_enqueue_scripts' );

*/



add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}