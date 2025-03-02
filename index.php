<?php get_header();

$popular_users = [2,3];

?>

<div class="c-fv">
  <div class="c-fv__image"><img src="<?= get_template_directory_uri();?>/assets/images/fv.png" alt=""></div>
  <div class="c-fv__content">
    <h1 class="c-fv__content__title">かわいい２次元女子に出会える</h1>
  </div>
</div>
<div class="md:flex container mx-auto p-4">
  <div class="md:w-3/4">
    <div class="mb-8">
      <h2>人気の女の子</h2>
      <div class="grid grid-cols-2 md:grid-cols-5 gap-5">
        <?php foreach($popular_users as $user_id): $user = get_user_by('id', $user_id); ?>
          <div class="p-user-card">
            <div class="p-user-card__image"><a href="/author/<?= $user->user_nicename;?>"><img src="<?= get_avatar_url($user_id, ['size'=> 512]);?>" alt=""></a></div>
            <p class="p-user-card__name"><?= $user->display_name; ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="mb-8">
      <h2>おすすめ</h2>
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
  <div class="md:w-1/4 md:p-4 mt-8 md:mt-0">
    <?php get_sidebar(); ?>
  </div>
</div>

<?php get_footer(); ?>