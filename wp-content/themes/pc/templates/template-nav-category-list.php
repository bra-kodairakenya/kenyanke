<?php

/*
  get_categoriesの説明
  https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/get_categories
  http://elearn.jp/wpman/function/get_categories.html
*/

// すべての親カテゴリーを取得
function get_cat_all() {
  $args = array(
    'orderby'     => 'name', // 名前順
    'order'       => 'ASC',
    'hide_empty'  => '0',  // 投稿が0のカテゴリーは排除するには'1'をいれる
    'parent'      => '0'
  );
  $categories = get_categories($args);
  return $categories;
}


// すべての親カテゴリーを表示
function get_nav_cat_list() {
  $categories = get_cat_all();

  foreach ($categories as $cat) {
    $cat_id = $cat->cat_ID;
    $cat_name = $cat->cat_name;
    $cat_link = get_category_link($cat_id);
?>

<li class="cat_nav_list_in"><a href="<?php echo $cat_link; ?>"><?php echo $cat_name; ?></a></li>

<?php
  }
}


// 表示するデザイン
function get_nav_cat_template() {
?>

<div id="posts_list_nav">
  <ul id="cat_nav_list">
    <?php get_nav_cat_list(); ?>
  </ul>
</div>

<?php
}