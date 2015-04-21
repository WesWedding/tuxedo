<?php
function register_wawco_tuxedo_menus() {
  register_nav_menus( array(
      'main-nav' => __( 'Main Nav Menu' )
  ) );
}
add_action('init', 'register_wawco_tuxedo_menus');

add_theme_support( 'title-tag' );
