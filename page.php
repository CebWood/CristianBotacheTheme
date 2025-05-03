<?php get_header(); ?>

<main>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <!-- Hero -->
    <section class="hero" style="background-color: #f5f5f5; padding: 60px 20px; text-align: center;">
      <div class="container">
        <h1 style="font-size: 3em; margin-bottom: 10px;"><?php the_title(); ?></h1>
        <?php if (has_excerpt()) : ?>
          <p style="font-size: 1.2em; color: #555;"><?php the_excerpt(); ?></p>
        <?php endif; ?>
      </div>
    </section>

    <!-- Contenido principal -->
    <section class="contenido-pagina" style="max-width: 800px; margin: 40px auto; padding: 0 20px;">
      <?php the_content(); ?>
    </section>

  <?php endwhile; else : ?>
    <section style="text-align:center; padding: 40px;">
      <h2>Oops, esta página no existe.</h2>
    </section>
  <?php endif; ?>

</main>

<?php get_footer(); ?>
