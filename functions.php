<?php
//function to add theme scripts
function theme_scripts(){
  wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css');
  wp_enqueue_style( 'style', get_stylesheet_uri());
}
//hook to theme scripts
add_action('wp_enqueue_scripts', 'theme_scripts');


//Register the nav menu

register_nav_menus(array(
  'main_menu' => __('Menu principal','PlantillaWP')
));

//Theme support

add_theme_support('post-thumbnails');

add_image_size( 'image-fav', 1100, 418, true);
add_image_size( 'post-image', 358, 208, true);

//Theme widgets

function theme_widgets() {
  register_sidebar(array(
    'name' => __('Sidebar Testimonials'),
    'id' => 'sidebar-2',
    'description' => 'widgets of testimonials',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>'
  ));
}

add_action('widgets_init','theme_widgets');

?>
