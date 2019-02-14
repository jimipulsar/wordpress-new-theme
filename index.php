<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <meta charset="utf-8">
    <title>Pie Roots Theme</title>
  </head>
  <body> -->
<?php get_header(); ?>
  <div class="container">
    <div class="row">
      <div class="col-8">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="post">
            <h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
            <small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>
            <p><?php the_excerpt(); ?></p>
            <h3>Autore: <?php the_author_posts_link(); ?></h3>
            <p><?php the_category(); ?></p>
          </div>
        <?php endwhile; else: ?>
          <p>Nessun articolo disponibile</p>
        <?php endif; ?>
      </div>
      <div class="col-4 sidebar">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
<?php get_footer(); ?>
