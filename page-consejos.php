<?php
/*
* Template Name: Consejos
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
    <div id="primary" class="primary advices">
      <?php
      $args = array(
        'cat' => 9,
        'post_per_page' => 6,
        'orderby' => 'date',
        'order' => 'DESC',
      );

      $advices = new WP_Query($args);
      while($advices->have_posts()): $advices->the_post();?>
      <?php the_post_thumbnail('post-fav') ?>
      <h3 class="title"><?php the_title(); ?></h3>
      <?php the_content(); ?>
    <?php endwhile; wp_reset_postdata(); ?>

    </div>

  <?php endwhile; ?>


<?php get_sidebar(); ?>

<?php get_footer(); ?>
