<?php
// 現在の投稿の投稿者情報を取得
$user_id = get_the_author_meta('ID');
$user_name = get_the_author_meta('display_name');
$user_description = get_the_author_meta('description');
$user_nick_name = get_the_author_meta('user_nicename');
$user_avatar = get_avatar($user_id, 256);
$is_flex = $args['is_flex'] ?? false;
?>

<div class="p-user-info <?= $is_flex ? 'p-user-info--flex' : '' ;?>">
    <div class="p-user-info__avatar c-avatar"><a href="/author/<?= $user_nick_name;?>"><?= $user_avatar; ?></a></div>
    <div>
        <div class="p-user-info__name"><?= esc_html($user_name); ?></div>
        <div class="p-user-info__description">
            <?php if (!empty($user_description)) : ?>
                <p class="c-user-info__description"><?php echo esc_html($user_description); ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>
