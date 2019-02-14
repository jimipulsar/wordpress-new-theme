<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-8">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="post singolo-post">
          <?php the_post_thumbnail()?>
          <h2><?php the_title(); ?> <small><?php the_time('j F Y'); ?></small></h2>
          <p>
            <?php the_content(); ?>
          </p>
          <h3>Scritto da: <?php the_author_posts_link(); ?></h3>
          <p><?php the_category(); ?></p>
          <?php
          $postTags = wp_get_post_tags($post->ID);
          ?>

          <?php if (!empty($postTags)) { ?>
            <?php the_tags('I tag del post: ', ', ', '.<br>'); ?>
          <?php } ?>

          <?php comments_template(); ?>
        </div>
      <?php endwhile; else: ?>
        <p>Articolo non trovato</p>
      <?php endif; ?>
    </div>
    <div class="col-4 sidebar">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
