<?php

function get_head_template() {
?>

<head>
    <meta charset="UTF-8">
    <title>KURASHIRU</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/sanitize.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
</head>

<?php
}