<div class="artist-page mt5">
  <section class="pt6 pb5 ph6 flex justify-around items-center artist-banner">

    <div class="artist-banner aspect-ratio aspect-ratio--4x3">
        <div style="<?php if( get_field('image') ): ?>
        background-image: url(<?php the_field('image'); ?>); ?>
        <?php endif; ?>" class="artist-banner artist-page-img aspect-ratio--object cover"></div>
    </div>

    <div class="flex flex-column justify-center items-end">
      <h4 class="ttu text-black bg-white pl5 pr4 pv2 tracked ma0 tr"><?php the_title(); ?></h4>
        <div class="pv4 artist-banner-svg">
         <?php if( get_field('apple_music') ) { ?>
          <a href="<?php echo get_field('apple_music'); ?>">
            <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 26 26" width="32px" height="32px"><path d="M 23.933594 18.945313 C 23.335938 20.269531 23.050781 20.863281 22.28125 22.03125 C 21.210938 23.667969 19.695313 25.707031 17.820313 25.71875 C 16.15625 25.734375 15.726563 24.632813 13.464844 24.652344 C 11.203125 24.660156 10.730469 25.738281 9.0625 25.722656 C 7.191406 25.707031 5.757813 23.867188 4.683594 22.238281 C 1.679688 17.664063 1.363281 12.300781 3.21875 9.449219 C 4.53125 7.425781 6.609375 6.238281 8.5625 6.238281 C 10.546875 6.238281 11.796875 7.328125 13.441406 7.328125 C 15.035156 7.328125 16.003906 6.234375 18.304688 6.234375 C 20.039063 6.234375 21.878906 7.179688 23.191406 8.816406 C 18.894531 11.167969 19.59375 17.304688 23.933594 18.945313 Z M 16.558594 4.40625 C 17.394531 3.335938 18.027344 1.820313 17.800781 0.277344 C 16.433594 0.371094 14.839844 1.242188 13.90625 2.367188 C 13.0625 3.394531 12.363281 4.921875 12.636719 6.398438 C 14.125 6.445313 15.664063 5.558594 16.558594 4.40625 Z"/></svg>
          </a>
        <?php } ?>
        <?php if( get_field('spotify') ) { ?>
          <a href="<?php echo get_field('spotify'); ?>">
            <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 26 26" width="32px" height="32px"><path d="M 13 0 C 5.800781 0 0 5.800781 0 13 C 0 20.199219 5.800781 26 13 26 C 20.199219 26 26 20.199219 26 13 C 26 5.800781 20.199219 0 13 0 Z M 18.300781 19.101563 C 18.101563 19.101563 17.898438 19 17.699219 18.898438 C 15.800781 17.800781 13.5 17.199219 11 17.199219 C 9.601563 17.199219 8.199219 17.398438 6.898438 17.699219 C 6.699219 17.699219 6.398438 17.800781 6.300781 17.800781 C 5.800781 17.800781 5.5 17.398438 5.5 17 C 5.5 16.5 5.800781 16.199219 6.199219 16.101563 C 7.800781 15.699219 9.398438 15.5 11.101563 15.5 C 13.898438 15.5 16.5 16.199219 18.699219 17.5 C 19 17.699219 19.199219 17.898438 19.199219 18.398438 C 19.101563 18.800781 18.699219 19.101563 18.300781 19.101563 Z M 19.699219 15.699219 C 19.398438 15.699219 19.199219 15.601563 19 15.5 C 16.898438 14.199219 14 13.398438 10.699219 13.398438 C 9.101563 13.398438 7.601563 13.601563 6.5 13.898438 C 6.199219 14 6.101563 14 5.898438 14 C 5.300781 14 4.898438 13.5 4.898438 13 C 4.898438 12.398438 5.199219 12.101563 5.699219 11.898438 C 7.199219 11.5 8.699219 11.199219 10.800781 11.199219 C 14.199219 11.199219 17.5 12 20.101563 13.601563 C 20.5 13.800781 20.699219 14.199219 20.699219 14.601563 C 20.699219 15.199219 20.300781 15.699219 19.699219 15.699219 Z M 21.300781 11.699219 C 21 11.699219 20.898438 11.601563 20.601563 11.5 C 18.199219 10.101563 14.601563 9.300781 11.101563 9.300781 C 9.300781 9.300781 7.5 9.5 5.898438 9.898438 C 5.699219 9.898438 5.5 10 5.199219 10 C 4.5 10.101563 4 9.5 4 8.800781 C 4 8.101563 4.398438 7.699219 4.898438 7.601563 C 6.800781 7 8.800781 6.800781 11.101563 6.800781 C 14.898438 6.800781 18.898438 7.601563 21.898438 9.300781 C 22.300781 9.5 22.601563 9.898438 22.601563 10.5 C 22.5 11.199219 22 11.699219 21.300781 11.699219 Z"/></svg>          </a>
          </a>
        <?php } ?>
        <?php if( get_field('youtube') ) { ?>
          <a href="<?php echo get_field('youtube'); ?>">
            <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 26 26" width="32px" height="32px"><path d="M 6.3125 0.03125 L 8.09375 5.875 L 8.09375 9.6875 L 9.59375 9.6875 L 9.59375 5.6875 L 11.3125 0.03125 L 9.8125 0.03125 L 8.875 3.875 L 8.78125 3.875 L 7.8125 0.03125 Z M 13.21875 2.375 C 12.617188 2.375 12.136719 2.546875 11.78125 2.875 C 11.425781 3.199219 11.25 3.636719 11.25 4.1875 L 11.25 7.875 C 11.25 8.480469 11.433594 8.988281 11.78125 9.34375 C 12.132813 9.703125 12.574219 9.875 13.15625 9.875 C 13.757813 9.875 14.25 9.691406 14.59375 9.34375 C 14.9375 8.996094 15.09375 8.515625 15.09375 7.90625 L 15.09375 4.21875 C 15.09375 3.675781 14.914063 3.25 14.5625 2.90625 C 14.214844 2.558594 13.769531 2.375 13.21875 2.375 Z M 16.21875 2.5625 L 16.21875 8.53125 C 16.21875 8.957031 16.3125 9.257813 16.46875 9.46875 C 16.625 9.679688 16.851563 9.78125 17.15625 9.78125 C 17.402344 9.78125 17.644531 9.710938 17.90625 9.5625 C 18.171875 9.410156 18.445313 9.195313 18.6875 8.90625 L 18.6875 9.6875 L 20 9.6875 L 20 2.5625 L 18.6875 2.5625 L 18.6875 7.96875 C 18.5625 8.121094 18.429688 8.246094 18.28125 8.34375 C 18.132813 8.445313 18.003906 8.5 17.90625 8.5 C 17.785156 8.5 17.679688 8.480469 17.625 8.40625 C 17.566406 8.332031 17.5625 8.195313 17.5625 8.03125 L 17.5625 2.5625 Z M 13.15625 3.625 C 13.332031 3.625 13.488281 3.65625 13.59375 3.75 C 13.703125 3.847656 13.75 3.972656 13.75 4.125 L 13.75 8.03125 C 13.75 8.222656 13.699219 8.363281 13.59375 8.46875 C 13.488281 8.578125 13.335938 8.625 13.15625 8.625 C 12.980469 8.625 12.84375 8.574219 12.75 8.46875 C 12.652344 8.363281 12.625 8.226563 12.625 8.03125 L 12.625 4.125 C 12.625 3.972656 12.679688 3.847656 12.78125 3.75 C 12.882813 3.65625 12.996094 3.625 13.15625 3.625 Z M 13 11.15625 C 10.40625 11.152344 7.863281 11.175781 5.375 11.28125 C 3.636719 11.28125 2.21875 12.683594 2.21875 14.40625 C 2.113281 15.769531 2.058594 17.136719 2.0625 18.5 C 2.058594 19.863281 2.113281 21.230469 2.21875 22.59375 C 2.21875 24.316406 3.636719 25.71875 5.375 25.71875 C 7.863281 25.820313 10.40625 25.847656 13 25.84375 C 15.597656 25.851563 18.140625 25.820313 20.625 25.71875 C 22.363281 25.71875 23.78125 24.316406 23.78125 22.59375 C 23.886719 21.230469 23.941406 19.863281 23.9375 18.5 C 23.945313 17.136719 23.886719 15.769531 23.78125 14.40625 C 23.78125 12.683594 22.363281 11.28125 20.625 11.28125 C 18.140625 11.175781 15.597656 11.152344 13 11.15625 Z M 3.75 13.375 L 8.34375 13.375 C 8.425781 13.375 8.5 13.449219 8.5 13.53125 L 8.5 14.9375 C 8.5 15.019531 8.425781 15.09375 8.34375 15.09375 L 6.9375 15.09375 L 6.9375 23.1875 C 6.9375 23.269531 6.894531 23.34375 6.8125 23.34375 L 5.3125 23.34375 C 5.230469 23.34375 5.15625 23.269531 5.15625 23.1875 L 5.15625 15.09375 L 3.75 15.09375 C 3.667969 15.09375 3.625 15.019531 3.625 14.9375 L 3.625 13.53125 C 3.625 13.449219 3.667969 13.375 3.75 13.375 Z M 13.40625 13.375 L 14.75 13.375 C 14.832031 13.375 14.90625 13.449219 14.90625 13.53125 L 14.90625 16.25 C 15.015625 16.148438 15.132813 16.066406 15.25 16 C 15.476563 15.875 15.707031 15.8125 15.9375 15.8125 C 16.40625 15.8125 16.75 16 17 16.34375 C 17.238281 16.675781 17.375 17.140625 17.375 17.75 L 17.375 21.71875 C 17.375 22.257813 17.261719 22.675781 17.03125 22.96875 C 16.792969 23.273438 16.4375 23.4375 16 23.4375 C 15.722656 23.4375 15.476563 23.363281 15.25 23.25 C 15.128906 23.1875 15.015625 23.128906 14.90625 23.03125 L 14.90625 23.1875 C 14.90625 23.269531 14.832031 23.34375 14.75 23.34375 L 13.40625 23.34375 C 13.324219 23.34375 13.25 23.269531 13.25 23.1875 L 13.25 13.53125 C 13.25 13.449219 13.324219 13.375 13.40625 13.375 Z M 20.21875 15.71875 C 20.867188 15.71875 21.398438 15.921875 21.75 16.3125 C 22.101563 16.703125 22.28125 17.257813 22.28125 17.96875 L 22.28125 19.8125 C 22.28125 19.894531 22.207031 19.9375 22.125 19.9375 L 19.75 19.9375 L 19.75 21.15625 C 19.75 21.59375 19.796875 21.765625 19.84375 21.84375 C 19.882813 21.90625 19.949219 22 20.15625 22 C 20.324219 22 20.441406 21.953125 20.5 21.875 C 20.527344 21.832031 20.59375 21.675781 20.59375 21.15625 L 20.59375 20.65625 C 20.59375 20.574219 20.667969 20.5 20.75 20.5 L 22.125 20.5 C 22.207031 20.5 22.28125 20.574219 22.28125 20.65625 L 22.28125 21.1875 C 22.28125 21.957031 22.074219 22.542969 21.71875 22.9375 C 21.363281 23.335938 20.828125 23.53125 20.125 23.53125 C 19.488281 23.53125 18.992188 23.332031 18.625 22.90625 C 18.261719 22.488281 18.0625 21.910156 18.0625 21.1875 L 18.0625 17.96875 C 18.0625 17.3125 18.253906 16.792969 18.65625 16.375 C 19.058594 15.957031 19.585938 15.71875 20.21875 15.71875 Z M 8.34375 15.90625 L 9.65625 15.90625 C 9.738281 15.90625 9.8125 15.980469 9.8125 16.0625 L 9.8125 21.53125 C 9.8125 21.710938 9.824219 21.785156 9.84375 21.8125 C 9.851563 21.824219 9.886719 21.875 10 21.875 C 10.039063 21.875 10.125 21.859375 10.28125 21.75 C 10.410156 21.664063 10.523438 21.558594 10.625 21.4375 L 10.625 16.0625 C 10.625 15.980469 10.699219 15.90625 10.78125 15.90625 L 12.125 15.90625 C 12.207031 15.90625 12.25 15.980469 12.25 16.0625 L 12.25 23.1875 C 12.25 23.269531 12.207031 23.34375 12.125 23.34375 L 10.78125 23.34375 C 10.699219 23.34375 10.625 23.269531 10.625 23.1875 L 10.625 22.78125 C 10.449219 22.953125 10.277344 23.082031 10.09375 23.1875 C 9.804688 23.351563 9.53125 23.4375 9.25 23.4375 C 8.894531 23.4375 8.621094 23.316406 8.4375 23.0625 C 8.261719 22.824219 8.1875 22.484375 8.1875 22.03125 L 8.1875 16.0625 C 8.1875 15.980469 8.261719 15.90625 8.34375 15.90625 Z M 15.25 17.25 C 15.199219 17.257813 15.148438 17.285156 15.09375 17.3125 C 15.03125 17.34375 14.96875 17.402344 14.90625 17.46875 L 14.90625 21.78125 C 14.984375 21.863281 15.050781 21.933594 15.125 21.96875 C 15.207031 22.007813 15.285156 22.03125 15.375 22.03125 C 15.542969 22.03125 15.609375 21.960938 15.625 21.9375 C 15.664063 21.886719 15.6875 21.769531 15.6875 21.53125 L 15.6875 17.84375 C 15.6875 17.640625 15.667969 17.472656 15.59375 17.375 C 15.519531 17.277344 15.402344 17.222656 15.25 17.25 Z M 20.1875 17.28125 C 20.027344 17.28125 19.910156 17.316406 19.84375 17.40625 C 19.796875 17.472656 19.75 17.636719 19.75 17.96875 L 19.75 18.53125 L 20.59375 18.53125 L 20.59375 17.96875 C 20.59375 17.640625 20.550781 17.480469 20.5 17.40625 C 20.4375 17.320313 20.339844 17.28125 20.1875 17.28125 Z"/></svg>
          </a>
        <?php } ?>
         <?php if( get_field('twitter') ) { ?>
          <a href="<?php echo get_field('twitter'); ?>">
            <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="32px" height="32px"><path d="M 24 4.300781 C 23.101563 4.699219 22.199219 5 21.199219 5.101563 C 22.199219 4.5 23 3.5 23.398438 2.398438 C 22.398438 3 21.398438 3.398438 20.300781 3.601563 C 19.300781 2.601563 18 2 16.601563 2 C 13.898438 2 11.699219 4.199219 11.699219 6.898438 C 11.699219 7.300781 11.699219 7.699219 11.800781 8 C 7.699219 7.800781 4.101563 5.898438 1.699219 2.898438 C 1.199219 3.601563 1 4.5 1 5.398438 C 1 7.101563 1.898438 8.601563 3.199219 9.5 C 2.398438 9.398438 1.601563 9.199219 1 8.898438 C 1 8.898438 1 8.898438 1 9 C 1 11.398438 2.699219 13.398438 4.898438 13.800781 C 4.5 13.898438 4.101563 14 3.601563 14 C 3.300781 14 3 14 2.699219 13.898438 C 3.300781 15.898438 5.101563 17.300781 7.300781 17.300781 C 5.601563 18.601563 3.5 19.398438 1.199219 19.398438 C 0.800781 19.398438 0.398438 19.398438 0 19.300781 C 2.199219 20.699219 4.800781 21.5 7.5 21.5 C 16.601563 21.5 21.5 14 21.5 7.5 C 21.5 7.300781 21.5 7.101563 21.5 6.898438 C 22.5 6.199219 23.300781 5.300781 24 4.300781"/></svg>
          </a>
        <?php } ?>
        <?php if( get_field('instagram') ) { ?>
          <a href="<?php echo get_field('instagram'); ?>">
            <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="32px" height="32px">    <path d="M 8 3 C 5.239 3 3 5.239 3 8 L 3 16 C 3 18.761 5.239 21 8 21 L 16 21 C 18.761 21 21 18.761 21 16 L 21 8 C 21 5.239 18.761 3 16 3 L 8 3 z M 18 5 C 18.552 5 19 5.448 19 6 C 19 6.552 18.552 7 18 7 C 17.448 7 17 6.552 17 6 C 17 5.448 17.448 5 18 5 z M 12 7 C 14.761 7 17 9.239 17 12 C 17 14.761 14.761 17 12 17 C 9.239 17 7 14.761 7 12 C 7 9.239 9.239 7 12 7 z M 12 9 A 3 3 0 0 0 9 12 A 3 3 0 0 0 12 15 A 3 3 0 0 0 15 12 A 3 3 0 0 0 12 9 z"/></svg>
          </a>
        <?php } ?>
        <?php if( get_field('facebook') ) { ?>
          <a href="<?php echo get_field('facebook'); ?>">
            <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="32px" height="32px">    <path d="M12,0C5.373,0,0,5.373,0,12c0,6.016,4.432,10.984,10.206,11.852V15.18H7.237v-3.154h2.969V9.927c0-3.475,1.693-5,4.581-5 c1.383,0,2.115,0.103,2.461,0.149v2.753h-1.97c-1.226,0-1.654,1.163-1.654,2.473v1.724h3.593L16.73,15.18h-3.106v8.697 C19.481,23.083,24,18.075,24,12C24,5.373,18.627,0,12,0z"/></svg>
          </a>
        <?php } ?>
        <?php if( get_field('tiktok') ) { ?>
          <a href="<?php echo get_field('tiktok'); ?>">
            <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 30 30" width="32px" height="32px">    <path d="M24,4H6C4.895,4,4,4.895,4,6v18c0,1.105,0.895,2,2,2h18c1.105,0,2-0.895,2-2V6C26,4.895,25.104,4,24,4z M22.689,13.474 c-0.13,0.012-0.261,0.02-0.393,0.02c-1.495,0-2.809-0.768-3.574-1.931c0,3.049,0,6.519,0,6.577c0,2.685-2.177,4.861-4.861,4.861 C11.177,23,9,20.823,9,18.139c0-2.685,2.177-4.861,4.861-4.861c0.102,0,0.201,0.009,0.3,0.015v2.396c-0.1-0.012-0.197-0.03-0.3-0.03 c-1.37,0-2.481,1.111-2.481,2.481s1.11,2.481,2.481,2.481c1.371,0,2.581-1.08,2.581-2.45c0-0.055,0.024-11.17,0.024-11.17h2.289 c0.215,2.047,1.868,3.663,3.934,3.811V13.474z"/></svg>
          </a>
        <?php } ?>
      </div>
      <?php if( get_field('website') ) { ?>
        <button class="btn-black tc flex justify-center items-center">

          <a class="ttu" href="<?php echo get_field('website'); ?>">
            Artist Website
          </a>
        </button>
      <?php } ?>
    </div>

  </section>

  <section class="pb4 ph6-ns ph4 text-white tracked-tight">
    <p><?php the_content(); ?></p>
  </section>
</div>


