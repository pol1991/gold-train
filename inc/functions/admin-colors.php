<?php 
function gold_train_admin_color_scheme() {
  //Get the theme directory
  $theme_dir = get_stylesheet_directory_uri();

  //Gold train
  wp_admin_css_color( 'gold-train', __( 'Gold train' ),
    $theme_dir . '/gold-train.css',
    array( '#040404', '#fff', '#d54e21' , '#040404')
  );
}
add_action('admin_init', 'gold_train_admin_color_scheme');
