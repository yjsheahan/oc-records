<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ocrecords
 */

get_header();
?>

	<main id="primary" class="site-main">
    <section class="home-hero">
      <!-- <div class="aspect-ratio aspect-ratio--16x9">
          <div class="aspect-ratio--object cover" style="background-image: url('https://orangecountyrecords.flywheelsites.com/wp-content/uploads/2021/03/CinoPayso_Large-1.png'); filter: grayscale(100%);">
            <div class="hero-divider flex items-center">
              <div class="line bg-white"></div>
              <h4 class="text-white ph3 ph4-ns tc">Cino Payso</h4>
            </div>
          </div>
      </div> -->

    <video src="<?php echo get_template_directory_uri() . '/cino.mp4.mp4'; ?>" id="vid" class="db w-100 h-auto" autoplay muted loop></video>
    </section>
    <section class="home-text bg-mds flex flex-column justify-center items-center min-vh-100 tc text-white pv4">
      <h4 class="ttu">OC Records</h4>
      <p class="w-60-l w-80 lh-copy tracked-tight" id="fade-in">
        Founded by CP in 2021, blah blah Lorem ipsum dolor sit amet,
        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      </p>
      <p class="w-60-l w-80 lh-copy tracked-tight" id="fade-in">
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
        dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </section>
	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
