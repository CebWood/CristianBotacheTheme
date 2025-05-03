<?php get_template_part('template-parts/header');?>

<main style="max-width: 800px; margin: 0 auto; padding: 40px 20px;">
  <h1>Blog</h1>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article>
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <p><?php the_excerpt(); ?></p>
    </article>
  <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
