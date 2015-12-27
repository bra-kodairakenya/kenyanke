<?php

// 公開順の記事一覧
function get_new_posts_list_template() {
  $query = publish_posts_list();
  $page_titile = "新しい順の日記だよ";
  posts_list_view($query, $page_titile);
}

// カテゴリーの記事一覧
function get_cat_posts_list_template() {
  $query = category_posts_list();
  $page_titile = get_cat_name(get_query_var('cat')) . "の記事だよ";
  posts_list_view($query, $page_titile);
}


// 記事一覧のデザインを呼び出す
function posts_list_view($query, $page_titile) {
?>
<div id="archive">
  <h1 class="title-font"><?php echo $page_titile; ?></h1>

<?php get_nav_cat_template(); ?>

<?php
  if ($query->have_posts()):
  while ($query->have_posts()): $query->the_post();
?>

  <article>
    <ul>
      <li class="archive-in">
        <a class="link-block" href="<?php the_permalink(); ?>">
          <time class="small-font" datetime="<?php the_time('c'); ?>" pubdate=""><?php the_time('Y年n月j日'); ?></time>
          <h2 class="huge-font"><?php title_limit(); ?></h2>
        </a>
      </li>
    </ul>
  </article>

<?php
  endwhile;
  endif;
  wp_reset_query();
  wp_reset_postdata();
?>

</div>

<?php
}