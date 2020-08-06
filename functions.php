<?php 

add_action( 'wp_enqueue_scripts', 'childhood_scripts' );



function childhood_scripts() {
  wp_enqueue_style( 'childhood-style', get_template_directory_uri() . '/assets/styles/main.min.css' );
wp_enqueue_script('childhood_scripts', get_template_directory_uri(  ) . '/assets/js/main.min.js');
};

?>