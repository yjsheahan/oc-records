<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ocrecords
 */

get_header();
?>
	<main id="primary" class="site-main">
		<?php
		while ( have_posts() ) :
			the_post();
      if ( is_page(22) ) {
        get_template_part( 'template-parts/content-artists-index' );
      } elseif ( is_page(53) ) {
        get_template_part( 'template-parts/content-shop' );
      } elseif ( is_page(60) ) {
        get_template_part( 'template-parts/content-news' );
      } elseif ( is_page(77) ) {
        get_template_part( 'template-parts/content-contact' );
      } else {
			get_template_part( 'template-parts/content', 'page' );
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
    }
		endwhile; // End of the loop.
		?>
	</main><!-- #main -->
<?php
get_footer();
