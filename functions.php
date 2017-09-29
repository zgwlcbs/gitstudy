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
			//文章缩略图
			if(function_exists('add_theme_support')){
				add_theme_support('post-thumbnails');
			}
			function catch_first_image(){
				global $post,$posts;
				$first_img = "";
				ob_start();
				ob_end_clean();
				$output = preg_match_all('/<img.+src=[\""]([^\""]+)[\""].*>/i',$post->post_content,$matches);
				$first_img = $matches[1][0];
				if(empty($first_img)){
					echo get_bloginfo('stylesheet_directory');
					echo '/images/thumbnail_default.jpg';
				}
				return $first_img;
			}
		}
	}
	add_action( 'after_setup_theme', 'brandtheme_themesetup' );
?>

