
<div id="archive">
  <h1 class="title-font">記事一覧ページ</h1>
<?php
 $query_array = array(
    'post_type'       => 'post',
    'post_status'     => 'publish',
    'posts_per_page'  => 15,
    'paged'           => get_query_var('paged'),
    'orderby'         => 'date'
  );
  query_posts( $query_array );
  if( have_posts() ) : while(have_posts()) : the_post();
?>

  <article>
    <div class="archive-in">
      <a class="link-block" href="<?php the_permalink(); ?>">
        <time class="small-font" datetime="<?php the_time('c'); ?>" pubdate=""><?php the_time('Y年n月j日'); ?></time>
        <h2 class="huge-font"><?php title_limit(); ?></h2>
      </a>
    </div>
  </article>

<?php
  endwhile;
  endif;
  wp_reset_query();
?>

</div><!-- archive -->

<!-- AF広告 -->
<a href="http://px.a8.net/svt/ejp?a8mat=2HUJPN+691VG2+3BPG+60WN5" target="_blank">
<img border="0" width="234" height="60" alt="" src="http://www22.a8.net/svt/bgt?aid=150911051378&wid=001&eno=01&mid=s00000015514001012000&mc=1"></a>
<img border="0" width="1" height="1" src="http://www12.a8.net/0.gif?a8mat=2HUJPN+691VG2+3BPG+60WN5" alt="">