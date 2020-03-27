<?php get_header(); ?>
<<<<<<< HEAD
<div class="blog-main">
=======
<div class="col-sm-12 blog-main">
>>>>>>> bb4951528115f0cb2b12993f7fe1774797cdad0c
	
	<?php
	if ( have_posts() ) {
	while ( have_posts() ) : the_post();
	?>
	<div class="blog-post">
<<<<<<< HEAD
		<h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<p class="blog-post-meta"><?php the_date(); ?> by <?php the_author(); ?></p>
		<?php if ( has_post_thumbnail()) : ?>
         <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
          <?php the_post_thumbnail(); ?>
         </a>
        <?php endif; ?>
		<?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>" class="button post-button">Read More</a>
=======
		<i class="glyphicon glyphicon-post glyphicon-pushpin"></i><h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<p class="blog-post-meta"><?php the_date(); ?> by <?php the_author(); ?></p>
		<?php if ( has_post_thumbnail()) : ?>
   <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
   <?php the_post_thumbnail(); ?>
   </a>
 <?php endif; ?>
		<?php the_excerpt(); ?>
>>>>>>> bb4951528115f0cb2b12993f7fe1774797cdad0c
	</div><!-- /.blog-post -->
		<?php
		endwhile;
		}
<<<<<<< HEAD
	?>
=======
		?>
>>>>>>> bb4951528115f0cb2b12993f7fe1774797cdad0c
	<nav>
			<ul class="pager">
				<li><?php next_posts_link('Previous'); ?></li>
				<li><?php previous_posts_link('Next'); ?></li>
			</ul>
	</nav>
</div><!-- /.blog-main -->
<<<<<<< HEAD
<?php 
if ( ! is_active_sidebar( 'sidebar-1' ) ) {
    return;
}
?>
 
=======
>>>>>>> bb4951528115f0cb2b12993f7fe1774797cdad0c
<?php get_footer(); ?>