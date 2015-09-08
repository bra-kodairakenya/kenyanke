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
?>

</div>