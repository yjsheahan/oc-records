<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ocrecords
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <div class="post-page bg-grey min-vh-100 pb5">
    <section class="title-mds bg-mds pt6 pb4">
      <h2 class="text-white ttu tc mb2"><?php the_title(); ?></h2>
      <h4 class="text-white tc mv0 f4"><?php the_date(); ?></h4>
    </section>

    <section class="ph6-l ph5-m ph4 text-white lh-copy f4 pv5" id="fade-in">
      <div class="fl pr5 pb5">
      <?php if( get_field('youtube_link') ): ?>
        <?php the_field('youtube_link'); ?>
      <?php endif; ?>
    </div>
    <div class="flex flex-column justify-center items-center">
    <div class="lh-copy">
      <?php the_content(); ?>
    </div>
    <div class="flex justify-center items-center">
      <?php if ( get_field('artist_page') ): ?>
        <button class="btn-black tc flex justify-center items-center">

          <a class="ttu" href="<?php the_field('artist_page'); ?>">
            About Artist
          </a>
        </button>
      <?php endif; ?>
    </div>
    </section>

</article><!-- #post-<?php the_ID(); ?> -->
