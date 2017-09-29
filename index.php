<?php get_header()?>
<div class="content">
	<div class="slider">
		<?php echo do_shortcode("[metaslider id=42 restrict_to=home]"); ?>
	</div><!--end of slider-->
	<div class="imax">
		<?php query_posts('page_id=10'); ?>
		<?php while(have_posts()) : the_post(); ?>

		<?php echo mb_strimwidth(strip_tags(apply_filters('the_content',$post->post_content)),0,300,"......"); ?>

		<?php endwhile; wp_reset_query(); ?>
	</div><!--end of imax-->
	<div class="sidebar">
		<!--以下通过小工具添加-->
		<?php if(!function_exists('dynamic_sidebar')||!dynamic_sidebar('sidebar1')): ?>
		<?php endif; ?>
	</div><!--end of sidebar-->

	<div class="post_list">
		<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>
		<div class="post">
			<div class="post_thumbnail">
				<a href="<?php the_permalink(); ?>" class="thumbnail">
					<?php if(has_post_thumbnail()) : ?>
					<?php the_post_thumbnail('thumbnail'); ?>
					<?php else: ?>
					<img src="<?php echo catch_first_image(); ?>"/>
					<?php endif; ?>
				</a>
			</div><!--end of post_thumbnail-->
			<div class="post_content">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php the_content(); ?>
				<div class="post_metadata">
					<?php the_author(); ?>
				</div><!--end of post_metadata-->
			</div><!--end of post_content-->
		</div><!--end of post-->
		<?php endwhile; ?>
		<div class="paging">
			<?php echo paginate_links( array(
				'prev_text'=> __('« Previous'),
				'next_text'=> __('Next »'),
			)); ?>
		</div>
		<?php endif; ?>
	</div><!--end of article_list-->
</div><!--end of content-->
<?php get_footer(); ?>