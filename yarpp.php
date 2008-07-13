<?php
/*
Plugin Name: Yet Another Related Posts Plugin
Plugin URI: http://mitcho.com/code/yarpp/
Description: Returns a list of the related entries based on keyword matches, limited by a certain relatedness threshold. Like the tried and true Related Posts plugins—just better!
Version: 2.0
Author: mitcho (Michael Yoshitaka Erlewine)
*/

require_once('includes.php');
require_once('magic.php');
require_once('related-functions.php');

add_action('admin_head','yarpp_admin_menu');
add_action('admin_print_scripts','yarpp_upgrade_check');
add_filter('the_content','yarpp_default',1200);
register_activation_hook(__FILE__,'yarpp_activate');

// new in 2.0: add as a widget
add_action('plugins_loaded', 'widget_yarpp_init');

?>