<?php

// JSの参考URL：http://blog.livedoor.jp/tacshock-code14/archives/6760786.html

function loading_bg() {
?>
  <script type="text/javascript">
    window.onload = function(){
      $(function() {
        $("#loading-bg").fadeOut();
        $("#wrapper").fadeIn();
      });
    }
  </script>


  <style>
    #wrapper {
      display: none;
    }
    #loading-bg{
      position:absolute;
      left:50%;
      top:50%;
    }
  </style>


  <div id="loading-bg">
    <img src="<?php echo get_template_directory_uri(); ?>/images/load-image.gif" alt="ロード中">
  </div>

<?php
}