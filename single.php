<?php get_header(); ?>
<article class="p-single">
  <div class="p-4 mx-auto container">
    <div class="md:flex">
      <div class="md:w-2/3 md:p-4">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="swiper slider">
              <div class="swiper-wrapper">
                <?php
                for ($i = 0; $i < 8; $i++) :
                  if (!get_field('image_' . $i)) {
                    break;
                  }
                ?>
                  <div class="swiper-slide">
                    <img src="<?= esc_url(get_field('image_' . $i)); ?>" alt="<?= the_title() . '-' . $i; ?>">
                  </div>
                <?php endfor; ?>
              </div>

              <div class="swiper-pagination"></div>

              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>
            <!-- サムネイル -->
            <div class="swiper slider-thumbnail">
              <div class="swiper-wrapper">
                <?php
                for ($i = 0; $i < 8; $i++) :
                  if (!get_field('image_' . $i)) {
                    break;
                  }
                ?>
                  <div class="swiper-slide">
                    <img src="<?= esc_url(get_field('image_' . $i)); ?>" alt="<?= the_title() . '-' . $i; ?>">
                  </div>
                <?php endfor; ?>
              </div>
            </div>
            <div>
              <h1><?php the_title(); ?></h1>
            </div>
            <div class="flex">
              <span><?php the_date(); ?></span>
              <div class="flex items-center ml-4">
                <?php the_tags('<ul class="p-tag-list"><li class="p-tag-list__item">', '</li><li class="p-tag-list__item">', '</li></ul>'); ?>
              </div>
            </div>
            <div>
              <?php the_content(); ?>
            </div>
        <?php endwhile;
        endif ?>
      </div>
      <div class="md:w-1/3 md:p-4 mt-8 md:mt-0">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</article>
<?php get_footer(); ?>