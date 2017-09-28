<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>brand</title>
		<link href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<div class="page">
			<div class="header">
				<div class="header-logo">
					<img class="logo" src="logo.jpg" alt="logo" />
					<a href="<?php bloginfo('url'); ?>"><span class="logo-text"><?php bloginfo('name'); ?></span></a>
				</div><!--end of header-top-->
				<?php wp_nav_menu(array('theme_location'=>'header_menu','container_class'=>'navigator','walker'=>new brand_menudescription())); ?>
			</div><!--end of header-->