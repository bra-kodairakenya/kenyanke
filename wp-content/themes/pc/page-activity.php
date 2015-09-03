<!DOCTYPE html>
<html>

<?php get_head_template(); ?>

<body id="body_layout">

<?php get_header(); ?>

  <article>
    <div id="wrapper">

      <div id="activity">
        <?php echo do_shortcode("[huge_it_portfolio id='1']"); // Portfolio/Gallery プラグイン ?>
      </div>

    </div>
  </article>

<?php get_footer(); ?>

</body>

</html>
