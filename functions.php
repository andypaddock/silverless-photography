<?php 
	 add_action( 'wp_enqueue_scripts', 'silverless_photography_enqueue_styles' );
	 function silverless_photography_enqueue_styles() {
 		  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
 		  } 
 ?>