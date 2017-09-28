<?php
	require_once( get_template_directory() . '/admin/requires/theme_setup.php' ); 
	// Setup theme features, register menus and scripts.
	if ( ! function_exists( 'brandtheme_themesetup' ) ) {
		function brandtheme_themesetup(){
			// Register theme menu's.
			if(function_exists('register_nav_menu')){
			   register_nav_menus(array('header_menu'=>'my_header_menu') );
			}
			// Register sidebar menu
			if(function_exists('register_sidebar')){
        		register_sidebar(array(
		            'name'=>'sidebar1',
		            'before_widget'=>'<div class="sidebox">',
		            'after_widget'=>'</div>',
		            'before_title'=>'<h2>',
		            'after_title'=>'</h2>'
    			));
			}
		}
	}
	add_action( 'after_setup_theme', 'brandtheme_themesetup' );
?>

