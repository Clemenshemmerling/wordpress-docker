<?php get_header(); ?>
    <div class="row small-12">
      <div class="column small-12 medium-9">
        <h3>Últimos trabajos</h3>
        <?php
            if ( have_posts() ) {
              while (have_posts()) {
                the_post();
                ?>
                <article>
                  <h2><?php the_title(); ?></h2>
                  <p><?php the_excerpt(); ?></p>
                  <footer>
                    <small><?php the_tags(); ?> <?php the_author(); ?></small>
                  </footer>
                </article>
                <?php
              }
            }
         ?>
      </div>
      <?php get_sidebar(); ?>
    </div>
    <?php get_footer(); ?>
