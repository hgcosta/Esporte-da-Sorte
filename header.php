<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/fav.ico">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="author" content="Hugo Costa">
        <meta property="og:site_name" content=""/>
        <!-- Bootstrap-->
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/main.css">
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery-3.4.1.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/bootstrap.bundle.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/main.js"></script>

        <title><?php bloginfo('name')?> | <?php the_title()?></title>
        <?php wp_head();?>
    </head>
    <body <?php body_class()?> >