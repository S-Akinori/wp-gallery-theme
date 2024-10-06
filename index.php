<?php get_header(); ?>

<div class="container mx-auto p-5">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-5">
        <?php
        // メインループを使用して投稿を取得
        if ( have_posts() ) :
            while ( have_posts() ) : the_post(); ?>
                <div class="gallery-item text-center">
                    <a href="<?php the_permalink(); ?>">
                          <div class="aspect-w-1 aspect-h-1">
                            <img src="<?= esc_url(get_field('image_0')); ?>" alt="<?= the_title() ?>">
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

<?php get_footer(); ?>
