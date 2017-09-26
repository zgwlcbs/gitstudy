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
				<img class="logo" src="logo.jpg" alt="logo" />
				<a href="<?php bloginfo('url'); ?>"><span class="logo-text"><?php bloginfo('name'); ?></span></a>
			</div><!--end of header-->
			<div class="content">
					<div class="navigator">
								<?php $walker = new consulting_thinkup_menudescription;
								wp_nav_menu(array( 'container' => false, 'theme_location'  => 'header_menu', 'walker' => new consulting_thinkup_menudescription() ) ); ?>
								<?php consulting_thinkup_input_headersearch(); ?>
						<!--<ul>
							<li>首页</li>
							<li class="nav-li"></li>
							<li>关于神鹰</li>
							<li class="nav-li"></li>
							<li>服务项目</li>
							<li class="nav-li"></li>
							<li>商标分类</li>
							<li class="nav-li"></li>
							<li>法律法规</li>
							<li class="nav-li"></li>
							<li>收费标准</li>
							<li class="nav-li"></li>
							<li>信息中心</li>
							<li class="nav-li"></li>
							<li>关于我们</li>
						</ul>-->
					</div><!--end of navigator-->
					<div class="slider">
						<img src="banner1.jpg" alt="banner1"/>
					</div><!--end of slider>
				<div class="sidebar">
				</div><!--end of sidebar-->
			</div><!--end of content-->
			<div class="footer">
			</div><!--end of footer-->
		</div><!--end of page-->
	</body>
</html>