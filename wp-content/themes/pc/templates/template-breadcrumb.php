<?php

// http://lblevery.com/sfn/create/wordpress-tips/wordpress-pankuzu/

function breadcrumb() {
  global $post;
  $postcate = get_the_category($post->post_id);
  $cat_bread = get_category_parents( $postcate[0]->term_id,TRUE );
?>
  <ol>
    <li><a href="<?php echo home_url('/'); ?>">ホーム</a></li>
    <li><?php echo $cat_bread; ?></li>
  </ol>
<?php
}


