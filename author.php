<?php
// WordPressヘッダー
get_header();

// 著者情報を取得
$author_id = get_the_author_meta('ID');
$author_name = get_the_author_meta('display_name');
$author_description = get_the_author_meta('description');
$author_avatar = get_avatar($author_id, 256);
?>

<div class="container mx-auto mt-8">
    <div class="p-user-info p-user-info--flex">
        <div class="p-user-info__avatar c-avatar c-avatar--lg">
            <?php echo $author_avatar; ?>
        </div>
        <div class="grow">
            <h1 class="p-user-info__name"><?php echo esc_html($author_name); ?></h1>
            <?php if (!empty($author_description)) : ?>
                <p class="p-user-info__description"><?php echo esc_html($author_description); ?></p>
            <?php endif; ?>
        </div>
    </div>
    <!-- 投稿リスト -->
    <div class="mt-8">
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
</div>

<?php
// WordPressフッター
get_footer();
?>