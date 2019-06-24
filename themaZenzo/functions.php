<?php
function themaZenzo_bronnen(){
  wp_enqueue_script('zenzo-scripts', get_theme_file_uri('/js/scriptsZenzo.js'), NULL, '1.0', true);
  wp_enqueue_style('mijnGooglefontd', '//fonts.googleapis.com/css?family=Roboto&display=swap');
  wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'themaZenzo_bronnen');




register_nav_menus( array (
  'hoofd' => __('Hoofd menu'),
  'footer' => __('Menu in footer'),
));


function themaZenzo_widgets(){
  register_sidebar(array(
  'name'          => __( 'Widget aside' ),
	'id'            => __('widget_aside'),    // ID should be LOWERCASE  ! ! !
	'description'   => ('Hier de widgets voor de aside plaatsen'),
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '<h4 class="widgettitle">',
	'after_title'   => '</h4>'
  ));
}

add_action('widgets_init', 'themaZenzo_widgets');

?>
