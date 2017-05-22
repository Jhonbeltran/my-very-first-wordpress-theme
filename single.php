<?php get_header(); ?>
  <div class="container">
    <div class="row">
      <?php get_sidebar(); ?>
      <div class="col s12 l9">
        <div class="row"></div>
          <div class="row">
            <?php
              if(have_posts()):
                while(have_posts()):
                  the_post();
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