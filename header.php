<!DOCTYPE html>
<html <?php language_attributes(); ?> dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo('pingback_url') ?>">
    <title><?php wp_title(''); if(wp_title('',false)){ echo ' | '; } bloginfo('name');?></title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

  <div class="page">
    <header id="masthead" class="site-header" role="banner">
      <div class="container">
        <div class="logo">
          <a href="<?php echo esc_html(home_url('/')); ?>">
            <img src="<?php echo get_template_directory_uri() . '/images/logo.svg' ?>" alt="">
          </a>
        </div>
        <nav id="site-navigation" class="main-navigation" role="navigation">
          <?php wp_nav_menu(array('theme_location' => 'main_menu')); ?>
        </nav>

        <div class="clear"></div>
      </div>
    </header>
  </div>

  <div id="container" class="container">
