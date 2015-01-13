<?php
	/**
		Plugin Name: custom_plugin
		Plugin URI: http://wordpress.org/plugins/hello-dolly/
		Description: This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong: Hello, Dolly. When activated you will randomly see a lyric from <cite>Hello, Dolly</cite> in the upper right of your admin screen on every page.
		Author: Owen
		Version: 1.6
		Author URI: 
	 */

	add_action( 'admin_menu', 'register_my_custom_menu_page' );

	function register_my_custom_menu_page(){
	    add_menu_page( 'Gallery', 'Gallery', 'manage_options', 'custompage', 'my_custom_menu_page', plugins_url( 'custom/images/icon.png' ), 81 ); 
	    add_submenu_page( 'custompage', 'My Custom Submenu Page', 'Upload Image', 'manage_options', 'my-custom-submenu-page', 'my_custom_submenu_page_callback' ); 
	}

	function my_custom_menu_page(){
	    echo "Admin Page Test";	
	}

	function my_custom_submenu_page_callback() {
		
		echo '<div class="wrap"><div id="icon-tools" class="icon32"></div>';
			echo '<h2>My Custom Submenu Page</h2>';
		echo '</div>';

	}

	function getGallery(){
		echo "test Gallery";
	}

?> 
