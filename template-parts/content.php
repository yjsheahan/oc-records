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

  <div class="post-page min-vh-100">
    <section class="title-mds bg-mds pt6 pb4">
      <h2 class="text-white ttu tc mb2"><?php the_title(); ?></h2>
      <h4 class="text-white tc mv0 f4"><?php the_date(); ?></h4>
    </section>

    <section class="ph6-l ph5-m ph4 text-white lh-copy f4 pv5" id="fade-in">

      <div class="aspect-ratio aspect-ratio--1x1">

      <div class="fl artist-banner aspect-ratio aspect-ratio--4x3 pr4-ns pb4-ns">
          <div style="<?php if( get_field('image') ): ?>
          background-image: url(<?php the_field('image'); ?>); ?>
          <?php endif; ?>" class="artist-banner artist-page-img aspect-ratio--object cover"></div>
      </div>
      <?php the_content(); ?>
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
