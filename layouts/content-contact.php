<article class="inside-page" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!--<header class="entry-header">
	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	
	<div class="entry-content full">
		<?php the_content(); ?>
	<div class="contact-copy">
		<h2>natus error cupidatat sint omnis esse perspiciatis</h2>
		<p>Excepteur sint occaecat quid cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum? Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium. Doloremque laudantium totam rem, dolor nolor ipsom est cupidatat natus.</p>
	</div>
	<div class="contact-form">
		<form>
			<div class="first-last">
				<input placeholder="FIRST NAME">
				<input class="last" placeholder="LAST NAME">
			</div>
			<div class="company-email-phone">
				<input placeholder="EMAIL">
				<input placeholder="PHONE">
				<input placeholder="COMPANY/ORGANIZATION">
			</div>
			<select id="dropdown" class="empty">
				<option selected disabled>SELECT ONE</option>
				<option>OPTION 1</option>
				<option>OPTION 2</option>
				<option>OPTION 3</option>
			</select>
			<textarea placeholder="TYPE YOUR MESSAGE HERE"></textarea>
			<div class="submit">
				<input type="submit" vlaue="SUBMIT">
			</div>
		</form>
	</div>
	</div><!-- .entry-content -->
<?php get_footer('contact'); ?>
	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'vmg_theme' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->