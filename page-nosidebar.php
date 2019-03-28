<?php
/*
* Template Name: NoSidebar
*/

 get_header(); ?>

  <?php while(have_posts()): the_post();?>

    <?php if(has_post_thumbnail()) { ?>
    <div class="fav">
      <?php the_post_thumbnail('image-fav'); ?>
      <h2><?php the_title();?></h2>
    </div>
  <?php } else {?>
    <h2 class="no-image"><?php the_title();?></h2>
  <?php } ?>
    <div id="primary" class="primary no-sidebar">
      <p><?php the_content(); ?></p>
    </div>

  <?php endwhile; ?>

<?php get_footer(); ?>
