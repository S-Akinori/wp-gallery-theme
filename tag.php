<?php get_header(); ?>

<div class="container mx-auto p-5">
    <h1 class="text-xl mb-4">#<?php single_tag_title(); ?></h1>
    <div class="md:flex ">
        <div class="md:w-3/4">
            <div class="grid grid-cols-2 md:grid-cols-5 gap-5">
                <?php
                // メインループを使用して投稿を取得
                if (have_posts()) :
                    while (have_posts()) : the_post(); ?>
                        <div class="gallery-item text-center">
                            <a href="<?php the_permalink(); ?>">
                                <div class="aspect-square">
                                    <img src="<?= esc_url(get_the_post_thumbnail_url()); ?>" alt="<?= the_title() ?>" class="object-cover w-full h-full">
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
</div>

<?php get_footer(); ?>