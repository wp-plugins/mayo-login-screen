<?php
/**
* Plugin Name: MAYO - Login Screen
* Plugin URI: http://PassionInDesign.com
* Description: Let you customize the default Wordpress login screen without coding.
* Version: 1.1
* Author: Passion In Design
* Author URI: http://PassionInDesign.com
**/

/*
==============================
Table of content
==============================
- Define constant
- Include admin files
*/

//-- Define constant ------------------------------
define('MAYO_LOGIN_SCREEN_DIR',__DIR__ .'/');
define('MAYO_LOGIN_SCREEN_URL',plugins_url('',__FILE__ ).'/');

global $mayo_login_screen_option;
$mayo_login_screen_option = get_option('mayo_login_screen_option');

//-- Include admin files ------------------------------
if(is_admin()) include(MAYO_LOGIN_SCREEN_DIR.'admin/admin-backend.php');

//-- Login screen ------------------------------
add_action( 'login_enqueue_scripts', 'mayo_login_screen' );
function mayo_login_screen(){
	global $mayo_login_screen_option;
	echo '<style>';
	echo stripslashes($mayo_login_screen_option['login_screen_css']);
	echo '</style>';
}
?>