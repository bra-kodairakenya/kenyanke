<?php

/*
 * テキストエディターのボタンをCSSで消す
 * 参考:http://www.webworkersclip.com/1325/
 */
function delete_buttons() {
  echo '<style type="text/css">
  #qt_content_em,
  #qt_content_del,
  #qt_content_ins,
  #qt_content_img,
  #qt_content_ul,
  #qt_content_ol,
  #qt_content_li,
  #qt_content_close,
  #qt_content_fullscreen
  { display:none !important }
  </style>';
}

add_action( 'admin_print_styles', 'delete_buttons' );