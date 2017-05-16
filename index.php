<?php get_header(); ?>
  <div class="container">
    <div class="row">
      <?php get_sidebar(); ?>
      <div class="col s12 l9">
        <div class="row"></div>
        <div class="row">
          <h3>Mis Proyectos más recientes</h3>
          <div class="divider"></div>

          <?php if (have_posts()){
            while (have_posts()) {
              the_post(); ?>
              <h4><?php the_title(); ?></h4>
              <p><?php the_excerpt(); ?></p>
              <?php
            }
          }?>

        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>