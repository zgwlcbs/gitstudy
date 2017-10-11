<?php get_header(); ?>
<div class="content-page">
	<div class="bread">
		<?php if(function_exists('cmp_breadcrumbs')) cmp_breadcrumbs();?>
	</div>
	<div class="row">
		<div class="col-md-4 col-sm-12 sidebar">
			<?php get_sidebar(); ?>
		</div>
		<div class="col-md-7 col-sm-12 wrapper">
			<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
			<?php get_template_part('content','page'); ?>
			<?php endwhile; wp_reset_query(); ?>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>