<?php get_header(); ?>
<div class="blog-main">
	
	<?php
	if ( have_posts() ) {
	while ( have_posts() ) : the_post();
	?>
	<div class="blog-post">
		<h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<p class="blog-post-meta"><?php the_date(); ?> by <?php the_author(); ?></p>
		<?php if ( has_post_thumbnail()) : ?>
         <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
          <?php the_post_thumbnail(); ?>
         </a>
        <?php endif; ?>
		<?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>" class="button post-button">Read More</a>
	</div><!-- /.blog-post -->
		<?php
		endwhile;
		}
	?>
	<nav>
			<ul class="pager">
				<li><?php next_posts_link('Previous'); ?></li>
				<li><?php previous_posts_link('Next'); ?></li>
			</ul>
	</nav>
</div><!-- /.blog-main -->
<?php 
if ( ! is_active_sidebar( 'sidebar-1' ) ) {
    return;
}
?>
 
<?php get_footer(); ?>