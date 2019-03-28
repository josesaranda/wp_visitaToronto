<?php get_header(); ?>
    <?php while(have_posts()): the_post();?>
      <?php if(has_post_thumbnail()) { ?>
      <div class="fav">
        <?php the_post_thumbnail('image-fav'); ?>
        <h2><?php the_title();?></h2>
      </div>
    <?php } else {?>
      <h2 class="no-image"><?php the_title();?></h2>
    <?php } ?>
    <div id="primary" class="primary">
      <div class="publication">
        <p><?php the_tags();?></p>
        <p style="float: left;">Categoría: <?php the_category(',') ?></p>
        <p style="float: right;">Autor: <span class="author"><?php the_author(); ?></span></p>
        <div class="clear"></div>
      </div>
      <article id="post-<?php the_id();?>" <?php post_class();?>>
        <p><?php the_content(); ?></p>

        <?php comments_template(); ?>
      </article>
    </div>
    <?php endwhile; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
