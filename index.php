<?php get_header(); ?>
  <div class="container">
    <div class="row">
      <?php get_sidebar(); ?>
      <div class="col s12 l9">
        <div class="row"></div>
        <div class="row">
            <?php
              $args = array('category_name' => 'about');
              $category_posts = new WP_Query($args);

              if($category_posts->have_posts()):
                while($category_posts->have_posts()):
                  $category_posts->the_post();
            ?>
                  <article>
                    <div class="flow-text grey-text" style="font-style: italic;">
                      <?php the_excerpt(); ?> 
                      <p>
                        <a class="blue-grey-text btn white" href="<?php the_permalink(); ?>">
                          Leer más
                        </a>
                      </p>
                    </div>

                  </article>
            <?php 
                endwhile;
              else:
            ?>
                <div class="row"></div>
                <p class="flow-text">
                  No encontramos entradas 😱
                </p>
                <div class="row"></div>
                <div class="row"></div>
                

            <?php 
              endif;
              wp_reset_postdata();
            ?>
          </div>
          <div class="row">
            <h4 class="teal-text">
              Mis proyectos más recientes
            </h4>
            <div class="divider"></div>
            <?php
              $args = array('category_name' => 'home');
              $category_posts = new WP_Query($args);

              if($category_posts->have_posts()):
                while($category_posts->have_posts()):
                  $category_posts->the_post();
            ?>
                  <article>
                    <h5 style="text-transform: uppercase !important;"><a class="black-text" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                      
                    </h5>
                    <div class="flow-text grey-text darken-1-text"><?php the_excerpt(); ?></div>
                    <footer>
                      <blockquote>
                        <?php the_tags(); ?> @<?php the_author(); ?>
                      </blockquote>
                    </footer>
                  </article>
            <?php 
                endwhile;
              else:
            ?>
                <div class="row"></div>
                <p class="flow-text">
                  No encontramos entradas 😱
                </p>
                <div class="row"></div>
                <div class="row"></div>
                

            <?php 
              endif;
            ?>
        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>