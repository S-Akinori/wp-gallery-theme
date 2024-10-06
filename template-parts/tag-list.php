<?php 
$posttags = get_tags();  //タグの情報を取得
?>

<ul class="p-tag-list">
<?php if($posttags) : foreach($posttags as $tag) :?>
    <li class="p-tag-list__item"><a href="<?=get_tag_link($tag->term_id);?>"><?=$tag->name;?><?php if($args['count']) echo '(' .$tag->count. ')'?></a></li>
<?php endforeach; endif; ?>
</ul>