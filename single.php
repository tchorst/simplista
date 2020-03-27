<?php get_header(); ?>
<div class="blog-main">
			<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
				  get_template_part( 'content-single', get_post_format() );
				endwhile; endif; 
			?>
	<nav>
			<ul class="pager">
				<li><?php next_posts_link('Previous'); ?></li>
				<li><?php previous_posts_link('Next'); ?></li>
			</ul>
	</nav>
</div><!-- /.blog-main -->
<?php get_footer(); ?>