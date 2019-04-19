<?php
function themaZenzo_bronnen(){
  wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'themaZenzo_bronnen');




register_nav_menus( array (
  'hoofd' => ('Hoofd menu'),
  'footer' => ('Menu in footer'),
));


?>
