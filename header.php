<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>brand</title>
		<link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" type="text/css" rel="stylesheet" />
		<link href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<div class="container">
		<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<div class="row">
				<div class="header col-md-12 col-sm-12">
					<div class="header-logo">
						<img class="logo" src="<?php bloginfo('template_directory'); ?>/images/logo.jpg" alt="logo" />
						<a href="<?php bloginfo('url'); ?>"><span class="logo-text"><?php bloginfo('name'); ?></span></a>
					</div><!--end of header-top-->
					<?php wp_nav_menu(array('theme_location'=>'header_menu','container_class'=>'navigator','walker'=>new brand_menudescription())); ?>
				</div><!--end of header-->
			</div>