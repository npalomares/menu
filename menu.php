<?
/*
Plugin Name: Really Simple Restaurant Menu Plugin
Plugin URI: http://www.nicholaspalomares.com
Description: Menu plugin for restaurants to easily create, add and update their menus.
Version: 1.0
Author: Nicholas Palomares
Author URI: http://www.nicholaspalomares.com/
License: All Rights Reserved
*/
require("inc/posttype.php");
require("inc/metabox.php");
require("inc/taxonomy.php");
require("inc/shortcodes.php");
//require("inc/admin.php");

function menu_scripts() {
    $plugin_url = plugin_dir_url( __FILE__ );

    //register slideshow css
    wp_register_style( 'menuStyle', $plugin_url . 'inc/css/menu.css' );
    wp_enqueue_style( 'menuStyle' );
	
	//load javascript - Uncomment these 2 lines if you're not using Bootstrap 3.0
	   
    wp_register_script( 'menuScript', $plugin_url . 'inc/js/menu.js' );
    wp_enqueue_script( 'menuScript' );
}
add_action( 'wp_enqueue_scripts', 'menu_scripts' );
?>
