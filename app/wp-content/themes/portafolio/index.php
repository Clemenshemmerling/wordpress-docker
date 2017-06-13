<?php get_header(); ?>
    <div class="row small-12">
      <div class="column small-12 medium-9">
        <h3>Últimos trabajos</h3>
        <?php
          $args = array('cat' => 6, 'author' => "admin", 'posts_per_page' => 1);
          $filter_post = new WP_Query($args);

          if ($filter_post->have_posts() ):
            while ($filter_post->have_posts() ):
              $filter_post->the_post();
         ?>
         <article>
          <h2><?php the_title(); ?></h2>
          <p><?php the_excerpt(); ?></p>
          <footer>
            <small><?php the_tags(); ?> <?php the_author(); ?></small>
          </footer>
         </article>
         <?php
           endwhile;
           else :
          ?>
          <h4>No se encontraron entradas</h4>
          <?php
            endif;
            wp_reset_postdata();
           ?>
           <?php
             $args = array('cat' => 4, 'author' => "admin");
             $filter_post = new WP_Query($args);

             if ($filter_post->have_posts() ):
               while ($filter_post->have_posts() ):
                 $filter_post->the_post();
            ?>
            <article>
             <h2><?php the_title(); ?></h2>
             <p><?php the_excerpt(); ?></p>
             <footer>
               <small><?php the_tags(); ?> <?php the_author(); ?></small>
             </footer>
            </article>
            <?php
              endwhile;
              else :
             ?>
             <h4>No se encontraron entradas</h4>
             <?php
               endif;
               wp_reset_postdata();
              ?>
      </div>
      <?php get_sidebar(); ?>
    </div>
    <?php get_footer(); ?>
