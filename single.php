<?php get_header(); ?>
<<<<<<< HEAD
<div class="blog-main">
=======
<div class="col-sm-12 blog-main">
>>>>>>> bb4951528115f0cb2b12993f7fe1774797cdad0c
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