<?php

//path to images
if( !defined(THEME_IMG_PATH)){
  define( 'THEME_IMG_PATH', get_stylesheet_directory_uri() . '/assets/images' );
}

function catch_that_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+?src=[\'"]([^\'"]+)[\'"].*?>/i', $post->post_content, $matches);
    $first_img = $matches[1][0];
    if(empty($first_img)) {
      $first_img = "/path/to/default.png";
    }
    return $first_img;
  }

//connect css and javascript
function od_register_header(){
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('od-custom-style', get_template_directory_uri() . "/style.css", array(), $version , 'all');
    wp_register_style('flexslider-style', get_template_directory_uri() . "/assets/css/flexslider.css", array(), false , 'all');
    wp_enqueue_style('flexslider-style');
    wp_enqueue_script('od-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), '3.5.1', true);
    wp_enqueue_script('od-script', get_template_directory_uri() . '/assets/js/main.js', array(), '1.1', true);
    wp_register_script('flexslider-script', get_template_directory_uri() . '/assets/js/jquery.flexslider-min.js', '', 1, true);
    wp_enqueue_script('flexslider-script');

}
add_action( 'wp_enqueue_scripts', 'od_register_header');




function op_menus() {
    $locations = array(
        'primary'=>'Main Menu',

    );
    register_nav_menus($locations);
  }
  add_action('init', 'op_menus');


   add_image_size('slider', 1200, 700, true );


?>