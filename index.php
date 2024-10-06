<?php get_header(); ?>

<div class="md:flex container mx-auto p-4">
  <div class="md:w-3/4">
    <div class="grid grid-cols-2 md:grid-cols-5 gap-5">
      <?php
      // メインループを使用して投稿を取得
      if (have_posts()) :
        while (have_posts()) : the_post(); ?>
          <div class="gallery-item text-center">
            <a href="<?php the_permalink(); ?>">
              <div class="aspect-square">
                <img src="<?= esc_url(get_field('image_0')); ?>" alt="<?= the_title() ?>" class="object-cover w-full h-full">
              </div>
              <h2 class="mt-2 text-lg font-bold text-gray-800"><?php the_title(); ?></h2>
            </a>
          </div>
        <?php endwhile;
      else : ?>
        <p>画像がありません。</p>
      <?php endif; ?>
    </div>
  </div>
  <div class="md:w-1/4 md:p-4 mt-8 md:mt-0">
    <?php get_sidebar(); ?>
  </div>
</div>

<?php get_footer(); ?>