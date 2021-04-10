<div class="contact-flex flex-row-reverse w-100 h-100 flex">
  <div class="w-50-ns w-100 bg-black text-white flex flex-column">
    <?php the_content(); ?>
  </div>
  <div class="contact-page cf w-50-ns w-100">
    <?php

      $args = array(
        'posts_per_page' => 4,
        'post_type' => 'post',
        'orderby' => 'rand',
        'order' => 'ASC',
        'category_name' => 'releases',
      );

      $query = new WP_Query( $args );

      if ( $query->have_posts() ): while ( $query->have_posts() ): $query->the_post(); ?>

        <div class="fl w-50-ns w-25">
          <a href="<?php the_permalink(); ?>">

            <div class="aspect-ratio aspect-ratio--1x1">
              <div style="<?php if( get_field('image') ): ?>
                background-image: url(<?php the_field('image'); ?>); ?>
                <?php endif; ?>" class="db bg-center cover aspect-ratio--object cover">
              </div>
            </div>
          </a>
        </div>
      <?php endwhile; endif;
    ?>

  </div>
</div>
