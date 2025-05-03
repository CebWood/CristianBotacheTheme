<div class="d-flex">
  <?php get_template_part('template-parts/sidebar'); ?>
  <main class="container-fluid">
    <div class="row">
      <!-- Contenido -->
      <div class="col-md-12 bg-dark text-light" style="min-height: 100vh;">
        <section id="home" class="p-5 bg-dark text-light section-content">
          <?php
          $home = get_page_by_path('home');
          if ($home) {
            echo apply_filters('the_content', $home->post_content);
          }
          ?>
        </section>

        <section id="portafolio" class="p-5 section-content">
          <h2>Portafolio</h2>
          <div class="row">
            <?php
            $proyectos = new WP_Query(['post_type' => 'proyecto', 'posts_per_page' => -1]);
            if ($proyectos->have_posts()):
              while ($proyectos->have_posts()): $proyectos->the_post(); ?>
                <div class="col-md-4 mb-4">
                  <div class="card bg-secondary text-white">
                    <div class="card-body">
                      <h5 class="card-title"><?php the_title(); ?></h5>
                      <div class="card-text"><?php the_content(); ?></div>
                    </div>
                  </div>
                </div>
            <?php endwhile;
              wp_reset_postdata();
            endif; ?>
          </div>
        </section>

        <section id="about" class="p-5 bg-secondary text-light section-content">
          <h2>About</h2>
          <?php
          $about = get_page_by_path('about');
          if ($about) {
            echo apply_filters('the_content', $about->post_content);
          }
          ?>
        </section>

        <section id="contacto" class="p-5 bg-dark text-light section-content">
          <h2>Contacto</h2>
          <?php
          $contacto = get_page_by_path('contacto');
          if ($contacto) {
            echo apply_filters('the_content', $contacto->post_content);
          }
          ?>
        </section>
      </div>
    </div>
  </main>
</div>



<?php get_template_part('template-parts/footer'); ?>