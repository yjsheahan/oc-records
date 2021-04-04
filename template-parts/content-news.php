<div class="news bg-white text-black min-vh-100">
  <section class="title-mds bg-white pt6 pb2">
    <h2 class="text-black ttu tc"><?php the_title(); ?></h2>
  </section>

  <section class="news-card-index mw9 center ph3-ns pb4">
    <div class="cf ph2-ns">
    <?php

    $background = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'full' );


    $args = array(
      'posts_per_page' => -1,
      'post_type' => 'post',
      'orderby' => 'date',
      'order' => 'ASC'
    );

    $query = new WP_Query( $args );

    if ( $query->have_posts() ): while ( $query->have_posts() ): $query->the_post(); ?>
        <div class="news-card fl w-100 w-third-ns pa4">
          <div class="bg-white">
             <div class="aspect-ratio aspect-ratio--1x1">
                  <div style="<?php if( get_field('image') ): ?>
                  background-image: url(<?php the_field('image'); ?>); ?>
                  <?php endif; ?>" class="news-img aspect-ratio--object cover"></div>
              </div>
              <div class="w-100 flex flex-column justify-center items-center tc pv2">
                <h7 class="ttu f7 tc" style="text-align: center;">
                  <?php
                    foreach((get_the_category()) as $category) {
                      echo $category->cat_name . ' ';
                    }
                  ?>
              </h7>

              <h4 class="f4 ma0 tc"><?php the_title(); ?></h4>
              <?php custom_excerpt_length( the_excerpt() ); ?>
            </div>
          </div>
        </div>

<!--         <section class="overlay-news bg-orange text-black flex flex-column justify-center items-center pv6 ph4">
          <?php the_title(); ?>
          <?php the_content(); ?>
        </section> -->

    <?php endwhile; endif; ?>
          </div>

  </section>

</div>

