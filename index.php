<?php get_header()?>
<div class="content">
	<div class="row">
		<div class="col-md-12 col-sm-12 slider">
			<?php echo do_shortcode("[metaslider id=42 restrict_to=home]"); ?>
		</div><!--end of slider-->
	</div><!--end of slider row-->
	<div class="row">
		<div class="col-md-12 col-sm-12 jumbotron">
			<?php query_posts('page_id=10'); ?>
			<?php while(have_posts()) : the_post(); ?>
	    	<h3><?php the_title(); ?></h3>
			<p>	
			<?php echo mb_strimwidth(strip_tags(apply_filters('the_content',$post->post_content)),0,300,"......"); ?>
			<?php endwhile; wp_reset_query(); ?>
			</p>
		    <p><a class="btn btn-primary btn-lg" href="#" role="button">查看全文</a></p>
		</div><!--end of jumbotron-->
	</div><!--end of jumbotron row-->
	<div class="row main-content-background">
		<div class="col-md-8 col-sm-12 post-list">
			<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
			<div class="post">
				<div class="post-thumbnail">
					<a href="<?php the_permalink(); ?>" class="thumbnail">
						<?php if(has_post_thumbnail()) : ?>
						<?php the_post_thumbnail('thumbnail'); ?>
						<?php else: ?>
						<img src="<?php echo catch_first_image(); ?>"/>
						<?php endif; ?>
					</a>
				</div><!--end of post-thumbnail-->
				<div class="post-content">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<p><?php the_content(); ?></p>
					<p>
						<div class="post-metadata">
							<?php the_author(); ?>
						</div><!--end of post-metadata-->
					</p>
					<p><a href="#" class="btn btn-primary" role="button">点击查看全文</a>
				</div><!--end of post-content-->
			</div><!--end of post-->
			<?php endwhile; ?>
			<div class="paging">
				<?php echo paginate_links( array(
					'prev_text'=> __('« Previous'),
					'next_text'=> __('Next »'),
				)); ?>
			</div><!--end of paging-->
			<?php endif; ?>
		</div><!--end of post-list-->
		<div class="col-md-4 col-sm-12 sidebar">
			<!--以下通过小工具添加-->
			<?php if(!function_exists('dynamic_sidebar')||!dynamic_sidebar('sidebar1')): ?>
			<?php endif; ?>
		</div><!--end of sidebar-->
	</div><!--end of post-list and sidebar row-->
</div><!--end of content-->
<?php get_footer(); ?>