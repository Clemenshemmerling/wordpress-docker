<?php get_header(); ?>
        <?php
          if (have_posts() ):
            while (have_posts() ):
              the_post();
         ?>
         <article>
          <h2><?php the_title(); ?></h2>
          <p><?php the_content(); ?></p>
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
    <?php get_footer("single"); ?>
