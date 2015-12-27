<!-- 前後の記事 -->

<?php
  // 前後の記事情報を取得して、記事があれば出力をする処理
  // 参考：http://www.understandard.net/wordpress/wp027.html
function prev_next_post_link() {
  $prev_post = get_previous_post();
  $next_post = get_next_post();
?>
  <div id="post_nav">
    <?php if($prev_post) { ?>
      <div id="prev_post">
        <?php previous_post_link('%link', '&#8656;%title', false); ?>
      </div>
    <?php } ?>
    <?php if($next_post) { ?>
      <div id="next_post">
        <?php next_post_link('%link', '%title&#8658;', false); ?>
      </div>
    <?php } ?>
  </div>
<?php
}
