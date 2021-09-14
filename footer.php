<footer>
  <ul>
    <li><?php echo get_bloginfo( 'description' ); ?>.</li>
    <li><?php echo get_bloginfo( 'wpurl' ); ?></li>
    <li>Copyright © <?php echo get_the_time('Y'); ?> | <?php echo get_bloginfo( 'name' ); ?></li>
  </ul>
      <div>
        <h5>Navigation</h5>
        <nav>
        <?php
            wp_nav_menu(array(
                'theme_location'    => 'footerMenuLocation',
                'sort_column'       => 'menu_order',
                'container'         => 'ul',
                'menu_class'        => 'list-unstyled footer-menu-items',
                'menu_item_class'   => 'mb-2',
            ));
        ?>
        </nav>
          </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>