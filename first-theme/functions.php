<?php
// my functions page!
function my_excerpt_length() {
  return 25;  
}

add_filter('excerpt_length','my_excerpt_length');

set_post_thumbnail_size(200, 200);
add_theme_support('post-thumbnails');
// Register our navigation

register_nav_menus(array(
  'primary' => 'Primary Menu',
  'footer' => 'Footer Menu',
  'tours' => 'Tours Menu',
  'hotel' => 'Hotel Menu'

));


// enqueuing my scripts
function my_theme_scripts() {
  wp_enqueue_script( 'astuteo', get_template_directory_uri() . '/js/astuteo.js', '1.0.0', false );
  }
  add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );

  // we are registering windgets!!!!
  function init_widgets() {
    register_sidebar(array(
    'name' => 'Sidebar Blog',
    'id' => 'sidebar-blog',
    'before_widget' => '<div class="inner-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
    ));

   
      register_sidebar(array(
      'name' => 'Sidebar About',
      'id' => 'sidebar-about',
      'before_widget' => '<div class="inner-widget">',
      'after_widget' => '</div>',
      'before_title' => '<h3>',
      'after_title' => '</h3>'
      ));

     
        register_sidebar(array(
        'name' => 'Sidebar Tours',
        'id' => 'sidebar-tour',
        'before_widget' => '<div class="inner-tours">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
        ));

        register_sidebar(array(
          'name' => 'Sidebar Footer',
          'id' => 'sidebar-footer',
          'before_widget' => '<div class="row">',
          'after_widget' => '</div>',
          'before_title' => '<h3>',
          'after_title' => '</h3>'
          ));
    

        register_sidebar(array(
          'name' => 'Sidebar Contact',
          'id' => 'sidebar-contact',
          'before_widget' => '<div class="inner-widget">',
          'after_widget' => '</div>',
          'before_title' => '<h3>',
          'after_title' => '</h3>'
          ));


    } // end function init widgets
    // add action AFTER the function
    add_action('widgets_init', 'init_widgets');