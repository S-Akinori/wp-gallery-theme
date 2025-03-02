<?php 
  $args = array(
    'count' => true,
  );
?>
<aside>
  <?php if(is_single()):?>
  <div class="mb-8">
    <?php get_template_part('template-parts/user-info'); ?>
  </div>
  <?php endif; ?>
  <div>
    <h4 class="p-post__title mb-4">タグ</h4>
    <?php get_template_part('template-parts/tag-list', null, $args); ?>
  </div>
</aside>