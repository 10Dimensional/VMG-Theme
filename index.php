<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package VMG_theme
 */

get_header(); ?>
<div class="page-image-top blog-image">
	     <div class="home-image-inner">
	         <h1 style="width: 750px;">KNOWLEDGE CENTER</h1>
	     </div>
</div>
	<div id="primary" class="content-area">
	<div>
		<h2></h2>
		<p></p>
	</div>
	<main id="main" class="site-main" role="main">
	<div class="the-posts">
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="post">
				<?php 
	
					$image = get_field('post_image');
					
					if( !empty($image) ): ?>
					<div class="container">
						<a href="<?php the_permalink() ?>"><img class="post-image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
					</div>
					<?php endif; ?>
	
					<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
					
					<p class="author-date"><?php the_author(); ?> | <?php the_date(); ?></p>
					
					<?php the_excerpt('Read More', true); ?>
			</div>

			<?php endwhile; ?>

			<?php vmg_theme_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
	</div>
	<div id="sidebar">
	    	<?php dynamic_sidebar( 'sidebar-2' ); ?>
	</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
