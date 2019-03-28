<?php get_header(); ?>
  <div id="primary" class="primary">
      <h1>Categoría: <?php single_cat_title(); ?></h1>
  <?php while(have_posts()): the_post();?>
      <h2 class="advices"><?php the_title(); ?></h2>
      <p><?php the_content(); ?></p>

  <?php endwhile; ?>
  </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
