<?php get_header(); ?>
  <div class="container">
    <div class="row">
      <?php get_sidebar(); ?>
      <div class="col s12 l9">
        <div class="row"></div>
        <div class="row">
          <h4 class="blue-grey-text">
            Mis Proyectos más recientes
          </h4>
          <div class="divider"></div>

          <?php if (have_posts()){
            while (have_posts()) {
              the_post(); ?>
              <article>
                <h5 style="text-transform: uppercase !important;">
                  <?php the_title(); ?>
                </h5>
                <div class="flow-text blue-grey-text"><?php the_excerpt(); ?></div>
                <footer>
                  <blockquote>
                    <?php the_tags(); ?> @<?php the_author(); ?>
                  </blockquote>
                </footer>
              </article>
              <?php
            }
          }?>

        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>