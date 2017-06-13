<?php
    /*Template Name: Page with sidebar*/
 ?>
<?php get_header(); ?>
<body>
  <header>
    <div class="row small-12 align-center">
      <div class="column small-12">
        <h1>
          <span>Información:</span>
          <?php the_title(); ?>
        </h1>
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
          <p><?php the_content(); ?></p>
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
