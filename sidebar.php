<?php 
  $args = array(
    'count' => true,
  );
?>
<aside>
  <h4 class="p-post__title mb-4">タグ</h4>
  <?php get_template_part('template-parts/tag-list', null, $args); ?>
</aside>