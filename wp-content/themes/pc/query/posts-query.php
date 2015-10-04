<?php

define("POSTS_PER_PAGE_NUMBER", 15); // 表示する記事数


// 公開順の記事一覧
function publish_posts_list($posts_per_page_number = POSTS_PER_PAGE_NUMBER) {
  $paged = get_query_var('paged') ? get_query_var('paged') : 1;
  $args = array(
    'post_type'       => 'post',
    'post_status'     => 'publish',
    'posts_per_page'  => $posts_per_page_number,
    'paged'           => $paged,
    'orderby'         => 'date',
    'order'           => 'DESC'
  );
  return new WP_Query( $args );
}


// カテゴリーの公開順の記事一覧
function category_posts_list($posts_per_page_number = POSTS_PER_PAGE_NUMBER) {
  $paged = get_query_var('paged') ? get_query_var('paged') : 1;
  $args = array(
    'cat'             => get_query_var('cat'),
    'post_type'       => 'post',
    'post_status'     => 'publish',
    'posts_per_page'  => $posts_per_page_number,
    'paged'           => $paged,
    'orderby'         => 'date',
    'order'           => 'DESC'
  );
  return new WP_Query( $args );
}