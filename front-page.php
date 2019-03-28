<?php get_header(); ?>
<div id="slider">
  <ul class="bxslider">
    <?php
    $args = array(
      'posts_per_page' => 4,
      'orderby' => 'date',
      'order' => 'DESC',
      'post_type' => 'post'
    );?>

    <?php $slider = new WP_Query($args); ?>
    <?php while($slider->have_posts()): $slider->the_post()?>
      <li><a href="<?php the_permalink();?>"><?php the_post_thumbnail('post-image'); ?></a></li>
    <?php endwhile; wp_reset_postdata(); ?>
  </ul>
</div>

<div class="clear"></div>
  <div class="front-page">
    <?php dynamic_sidebar('front-page'); ?>
  </div>
  <div class="clear"></div>
  <div id="info-advices">
    <div class="info">
      <?php
      $information = new WP_Query('page_id=9');
      while($information->have_posts()):$information->the_post();?>
      <h2 class="title"><?php the_title(); ?></h2>
      <?php the_excerpt(); ?>

    <?php endwhile; wp_reset_postdata(); ?>
    </div>
    <div class="advices">

      <h2 class="title">Consejos para viajar a Canada:</h2>
      <?php
      $args = array(
        'cat' => 9,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_per_page' => 2
      );

      $advices = new WP_Query($args);
      while($advices->have_posts()):$advices->the_post();?>

      <div class="advice-content">
        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail('post-image'); ?>
          <h2><?php the_title(); ?></h2>
        </a>
        <?php the_excerpt(); ?>
      </div>

      <?php endwhile; wp_reset_postdata(); ?>
    </div>
  </div>
<?php get_footer(); ?>
