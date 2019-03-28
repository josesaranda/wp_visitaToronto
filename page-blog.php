<?php
/*
* Template Name: Guía Toronto
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
    <div id="primary" class="primary blog">
      <?php

      $args = array(
        'category__in' => array(3,4,5,6),
        'post_per_page' => 6,
        'orderby' => 'date',
        'order' => 'DESC',
      );

      $guide_of_toronto = new WP_Query($args);

      while($guide_of_toronto->have_posts()): $guide_of_toronto->the_post();?>
      <div class="post-guide">
        <div class="image">
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('post-image'); ?>
          </a>
          <div class="category">
            <?php the_category(); ?>
          </div>
        </div>
        <div class="content">
          <h3><?php the_title(); ?></h3>
          <p><?php the_excerpt(); ?></p>
          <a href="<?php the_permalink(); ?>">Leer más</a>
          <div class="clear"></div>
          <div class="info-post">
            <p class="author">Por: <span><?php the_author(); ?></span></p>
            <p class="date"><?php the_time(get_option('date_format')); ?></p>
            <div class="clear"></div>
          </div>
        </div>
      </div>
    <?php endwhile; wp_reset_postdata(); ?>
    </div>

  <?php endwhile; ?>


<?php get_sidebar(); ?>

<?php get_footer(); ?>
