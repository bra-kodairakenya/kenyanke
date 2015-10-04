<?php

/*
 * テンプレートを読み込む
 */
foreach (glob(dirname(__FILE__) . '/templates/*.php') as $filename) {
  require_once $filename;
}


/*
 * 管理画面の関数ファイルを読み込む
 */
foreach (glob(dirname(__FILE__) . '/management/*.php') as $filename) {
  require_once $filename;
}


/*
 * クエリの格納されているファイルを読み込む
 */
foreach (glob(dirname(__FILE__) . '/query/*.php') as $filename) {
  require_once $filename;
}
