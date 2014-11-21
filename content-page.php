<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package VMG_theme
 */
?>

<?php get_header(); ?>
<div class="page-image-top">
	     <div class="home-image-inner">
	         <h1>WHY VMG?</h1>
	     </div>
</div>
<article class="inside-page" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!--<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
	<div id="sidebar">
	    	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div>
<?php get_footer(); ?>
	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'vmg_theme' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
