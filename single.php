<?php get_header(); ?>
<div class="row content-single">
	<div class="bread">
		<?php if(function_exists('cmp_breadcrumbs')) cmp_breadcrumbs();?>
	</div>
    <div class="col-md-4 col-sm-12 sidebar">
    	<p>这是目录列表</p>
        <?php get_sidebar(); ?>
    </div>
    <div class="col-md-8 col-sm-12 wrapper">
		<?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
        <?php get_template_part('content','single'); ?>
        <?php endwhile; wp_reset_query(); ?>
		<?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>
