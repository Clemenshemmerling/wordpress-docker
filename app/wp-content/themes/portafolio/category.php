<?php get_header(); ?>
<body>
  <header>
    <div class="row small-12 align-center">
      <div class="column small-12">
        <h1>Categoría: <?php single_cat_title(); ?></h1>
      </div>
    </div>
  </header>
    <div class="row small-12">
      <div class="column small-12 medium-9">
        <?php
          if (have_posts() ):
            while (have_posts() ):
              the_post();
         ?>
         <article>
          <h2><?php the_title(); ?></h2>
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
    </div>
    <?php get_footer(); ?>
