<?php get_header(); ?>
  <header>
    <div class="row small-12 align-center">
      <div class="column small-12">
        <h1><?php bloginfo(name); ?></h1>
      </div>
    </div>
  </header>
    <div class="row small-12">
      <div class="column small-12 medium-9">
        <h3>Últimos trabajos</h3>
        <?php
          $args = array('author' => "admin");
          $filter_post = new WP_Query($args);

          if ($filter_post->have_posts() ):
            while ($filter_post->have_posts() ):
              $filter_post->the_post();
         ?>
         <article>
          <h2><?php the_title(); ?></h2>
          <?php
              if (has_post_thumbnail()) { ?>
                <picture>
                  <source srcset="<?php the_post_thumbnail_url('full'); ?>" media"(min-width: 600px)">
                  <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="">
                </picture>
                <?php
              }
          ?>
          <p><?php the_excerpt(); ?></p>
          <footer>
            <small><?php the_tags(); ?> <?php the_author(); ?></small>
            <a href="<?php  the_permalink(); ?>">Leer más</a>
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
