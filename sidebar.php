	<div class="sidebar">
		<div class="sidebox"><!--热门文章-->
			<h2 class="sidebar-item-title">热门文章</h2>
			<?php 
			$random_post = new WP_query();
			$random_post->query('cat=9&posts_per_page=10');
			echo $random_post->_toString();
			?>
			<ul>
			<?php while ($random_post->have_posts()) : $random_post->the_post();
			?>
			<li><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
			<?php
			endwhile;?>
			</ul>
			<?php wp_reset_postdata();
			?>
		</div><!--end of sidebox-->
		<!--以下通过小工具添加-->
		<?php if(!function_exists('dynamic_sidebar')||!dynamic_sidebar('sidebar1')): ?>
		<?php endif; ?>
	</div>