<?php
function themaZenzo_bronnen(){
  wp_enqueue_script('zenzo-scripts', get_theme_file_uri('/js/scriptsZenzo.js'), NULL, '1.0', true);
  wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'themaZenzo_bronnen');




register_nav_menus( array (
  'hoofd' => __('Hoofd menu'),
  'footer' => __('Menu in footer'),
));


?>
