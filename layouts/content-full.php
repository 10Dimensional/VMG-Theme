<article class="inside-page" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!--<header class="entry-header">
	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	
	<div class="entry-content full">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
<?php get_footer(); ?>
	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'vmg_theme' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->