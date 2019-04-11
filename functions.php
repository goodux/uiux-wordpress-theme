<?php 

class UIUX_Wordpress_theme {

	function __construct() {
		add_action( 'wp_enqueue_scripts', array($this, 'load_js') );
		add_action( 'wp_enqueue_scripts', array($this, 'load_css') );
	}

	function load_js() {
		wp_enqueue_script( 'particles-js', get_template_directory_uri().'/static/js/particles.min.js', false );
		wp_enqueue_script( 'theme-js', get_template_directory_uri().'/static/js/things.js', false, false, true );
	}

	function load_css() {
		wp_enqueue_style( 'theme-stylesheet', get_stylesheet_uri(), false );
	}

}

$uiux_theme = new UIUX_Wordpress_theme();

?>