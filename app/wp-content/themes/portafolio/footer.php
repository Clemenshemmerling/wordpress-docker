    <footer>
      <div class="row small-12">
        <?php
          wp_nav_menu(
            array (
              'theme_location' => bottom-menu,
              )
            )
         ?>
        <h4>Este es el footer</h4>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>
