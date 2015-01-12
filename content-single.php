<?php $image = get_field('post_image');
	  $title = get_the_title();
	  $author = get_the_author();
	  $date = get_the_date();
?>
<?php echo '<div class="page-image-top post-title" style="background-image: url('.$image["url"].');">
	     <div class="home-image-inner">
	         <h1>'.$title.'</h1>
	         <p class="author-date">'.$author.' | '.$date.'</p>
	     </div>
</div>' ?>
<article class="inside-page" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!--<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
	<div id="sidebar">
	    	<?php dynamic_sidebar( 'sidebar-2' ); ?>
	</div>
<?php get_footer(); ?>
	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'vmg_theme' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
