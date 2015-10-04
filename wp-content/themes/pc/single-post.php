<!DOCTYPE html>
<html>

<?php get_head_template(); ?>

<body id="body_layout">

<?php get_header(); ?>

  <article>
    <div id="wrapper">

      <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
        <main role="main">
          <div id="single">
            <div id="single_title">
              <time class="small-font" datetime="<?php the_time('c'); ?>" pubdate=""><?php the_time('Y年n月j日'); ?></time>
              <h1><?php the_title(); ?></h1>
            </div>
            <div id="single_content">
              <?php the_content(); ?>
            </div>
          </div><!-- single -->
        </main>
      <?php endwhile; endif; ?>

    </div><!-- wrapper -->
  </article>

<?php get_footer(); ?>

</body>

</html>
