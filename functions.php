<?php

// Navigation menu
register_nav_menus(array(
	'primary' => 'Primary Menu',
	'footer' => 'Footer Menu'
));



// Admin footer

add_filter('admin_footer_text', 'left_admin_footer_text_output'); //left side
function left_admin_footer_text_output($text) {
    $text = 'Site developed by <a href="http://parsleyandsprouts.com" target="_blank">Parsley &amp Sprouts</a>.';
    return $text;
}
 
add_filter('update_footer', 'right_admin_footer_text_output', 11); //right side
function right_admin_footer_text_output($text) {
    $text = '&copy '. date('Y').'.';
    return $text;
}

// Custom login screen

function my_login_head() {
	echo "<link rel='stylesheet' href='".get_bloginfo('template_url')."/css/login-style.css' type='text/css'>";
}
add_action('login_head', 'my_login_head');

function loginpage_custom_link() {
	return 'http://www.rareformmastering.com';
}
add_filter('login_headerurl','loginpage_custom_link');

function change_title_on_logo() {
	return 'Rare Form Mastering';
}
add_filter('login_headertitle', 'change_title_on_logo');


?>