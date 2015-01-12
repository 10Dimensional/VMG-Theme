<?php
/**
 * Template Name: Services Page
 *
 * @package VMG_theme
 */
?>

<?php get_header(); ?>
<div class="page-image-top">
	     <div class="home-image-inner">
	         <h1 style="width: 450px;">CONTACT US</h1>
	     </div>
</div>
        <?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'layouts/content', 'services' ); ?>
				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template();
                ?>
        <?php endwhile; // end of the loop. ?>