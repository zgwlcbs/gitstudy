<?php get_header()?>
			<div class="content">
					<div class="slider">
						<img src="<?php bloginfo('template_directory'); ?>/images/banner1.jpg" alt="banner1"/>
					</div><!--end of slider-->
				<div class="sidebar">
					<!--<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>-->
					<?php if(!function_exists('dynamic_sidebar')||!dynamic_sidebar('sidebar1')): ?>
					<?php endif; ?>
				</div><!--end of sidebar-->
			</div><!--end of content-->
		<?php get_footer(); ?>