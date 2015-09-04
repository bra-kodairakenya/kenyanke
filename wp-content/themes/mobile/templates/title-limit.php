<?php

/*
 * titleの文字数制限をする関数
 */

function title_limit() {
  global $post;
  $post_title = $post->post_title;
  if( mb_strlen($post_title) > 30 ) {
    $title = mb_substr($post_title, 0,30);
    echo $title . '…';
  }
  else {
    echo $post_title;
  }
}