<?php get_header(); ?>

<main>
  <?php
  if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
      <article>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
      </article>
    <?php endwhile;
  else :
    echo '<p>No hay entradas.</p>';
  endif;
  ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
