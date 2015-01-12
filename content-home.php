<?php
/**
 * Template Name: Home Page
 *
 * @package VMG_theme
 */
?>

<?php get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<!--<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>-->
	</header><!-- .entry-header -->

	<div class="home-image-top">
	     <div class="home-image-inner">
	         <h1>quism fuguit odio</h1>
	         <p>Nolor elit sed labore. Dolor magna fuguit incididunt minimum veniam ullamco quism do eiusmod tempore elabore
magna elit. Nolor elit sed labore, dolor magna fuguit incididunt minimum veniam. Ullamco quism do eiusmod
tempore exercitation, fuguit nolor incididunt minimum, xercitation ad nostrud quism do eiusmod. Magna veniam
ullamco quism fuguit exercitation ad nostrud. Ullamco do eiusmod  magna fuguit incididunt.</p>
	         <div class="home-inner-links">
	             <a href="#">Quid dolor<i class="fa fa-arrow-circle-right"></i></a>
	             <a href="#">Quid dolor<i class="fa fa-arrow-circle-right"></i></a>
	         </div>
	     </div>
    </div>
    <div class="home-about">
	     <div class="home-about-inner">
	         <div class="about-h1-outer">
	         	<h1>About VMG</h1>
	         </div>
	         <p>Nolor elit sed labore. Dolor magna fuguit incididunt minimum veniam ullamco quism do eiusmod tempore elabore
magna elit. Nolor elit sed labore, dolor magna fuguit incididunt minimum veniam. Ullamco quism do eiusmod
tempore exercitation, fuguit nolor incididunt minimum, xercitation ad nostrud quism do eiusmod. Magna veniam
ullamco quism fuguit exercitation ad nostrud. Ullamco do eiusmod  magna fuguit incididunt.</p>
			 <p class="strong">Nolor elit sed illio veniam est quid incididunt minimum veniam ullamco quism.</p>
	         <div class="home-inner-links">
	             <a href="/about-vmg">Learn more<i class="fa fa-arrow-circle-right"></i></a>
	         </div>
	     </div>
    </div>
	<div class="home-services">
	     <div class="home-services-inner">
	      	<div class="services-title">
	      		<h1>Services</h1>
	      	</div>
	      	<div class="services-list">
	      		<ul>
	      			<li><a href=""><p class="service-icon large"><i class="fa fa-wrench fa-4x"></i></p></a></li>
	      			<li><a href=""><p class="service-icon large"><i class="fa fa-paint-brush fa-4x"></i></p></a></li>
	      			<li><a href=""><p class="service-icon large"><i class="fa fa-tree fa-4x"></i></p></a></li>
	      			<li><a href=""><p class="service-icon large"><i class="fa fa-lightbulb-o fa-4x"></i></p></a></li>
	      			<li><a href=""><p class="service-icon large"><i class="fa fa-trash fa-4x"></i></p></a></li>
	      			<li><a href=""><p class="service-icon large"><i class="fa fa-key fa-4x"></i></p></a></li>
	      			<li><a href=""><p class="service-icon large"><i class="fa fa-bug fa-4x"></i></p></a></li>
	      		</ul>
	      	</div>
	     </div>
    </div>
    <div class="home-places">
	     <div class="home-places-inner">
	      	<div class="left">
	      		<img src="<?php bloginfo('template_url'); ?>/images/skyscraper.png" width="280">
	      		<div class="copy-cta">
	      			<h1>Commercial</h1>
	      			<p>Dolor magna fuguit incididunt minimum veniam ullamco do eiusmod tempore exercitation. Nolor elit sed labore, magna fuguit minimum veniam ullamco do eiusmod tempore exercitation ad nostrud labore magna elit. Veniam ullamco quism do eiusmod tempore exercitation nostrud labore magna veniam. Nolor elit sed illio est quid incididunt, elit sed illio veniam est quid.</p>
	      			<a href="/services/commercial">More<i class="fa fa-arrow-circle-right"></i></a>
	      		</div>
	      	</div>
	      	<div class="right">
	      		<img class="mobile" src="<?php bloginfo('template_url'); ?>/images/house.png" width="280"> 
	      		<div class="copy-cta">
	      			<h1 style="margin-left: 550px;" class="residential">Residential</h1>
	      			<p>Dolor magna fuguit incididunt minimum veniam ullamco do eiusmod tempore exercitation. Nolor elit sed labore, magna fuguit minimum veniam ullamco do eiusmod tempore exercitation ad nostrud labore magna elit. Veniam ullamco quism do eiusmod tempore exercitation nostrud labore magna veniam. Nolor elit sed illio est quid incididunt, elit sed illio veniam est quid.</p>
	      			<a href="/services/residential">More<i class="fa fa-arrow-circle-right"></i></a>
	      		</div>
	      		<img class="desktop" src="<?php bloginfo('template_url'); ?>/images/house.png" width="280">
	      	</div>
	     </div>
    </div>
		<?php the_content(); ?>
	</div><!-- .entry-content -->

<?php get_footer(); ?>

	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'vmg_theme' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->