<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta property="og:image" content="" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="" />
    <meta property="og:title" content="Beauty By Green" />
    <title>Beauty By Green</title>
    <link rel="icon" href="<?php echo get_bloginfo('template_directory'); ?>/img/logo-leaf.png">
    <!-- Google Font -->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
       <!-- STICKY STYLES -->
       <link href="https://uploads-ssl.webflow.com/5acfb574ab89753aa4a296df/css/sticky-sidebar.2f7183a5c.css" rel="stylesheet" type="text/css"/>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo get_bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?php echo get_bloginfo('template_directory'); ?>/css/mdb.min.css" rel="stylesheet">
    <!-- Tempus Date time picker -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css" />

    <!-- Custom styles  -->
    <link href="<?php echo get_bloginfo('template_directory'); ?>/css/style.min.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/css/main.css" rel="stylesheet">
    <style type="text/css">
      
      @media (min-width: 800px) and (max-width: 850px) {
              .navbar:not(.top-nav-collapse) {
                  background: #1C2331!important;
              }
          }
    </style>

    <?php wp_head();?>
</head>

<body>
  <div id="wptime-plugin-preloader" style="background-color: rgba(0,0,0, 0.8)"></div>
  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar" id="nav">
  <p class="text-white navbar-brand"><?php echo get_bloginfo( 'description' ); ?></p>
    <div class="container">
    

      <!-- Brand -->
      <a class="navbar-brand brand-font" href="<?php echo get_bloginfo( 'wpurl' );?>" >
        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/logo.svg" alt="" class="grow">
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto ">
          <li class="nav-item">
            <a class="nav-link grow" href="<?php echo get_bloginfo( 'wpurl' );?>">Hjem
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link grow" href="#behandlinger">Behandlinger</a>
          </li>

          <li class="nav-item">
            <a class="nav-link grow" href="<?php echo get_bloginfo( 'wpurl' );?>/?page_id=12&preview=true">Prisliste</a>
          </li>
          <li class="nav-item">
            <a class="nav-link grow" href="<?php echo get_bloginfo( 'wpurl' );?>/?page_id=15&preview=true">Åbningstider</a>
          </li>
          <li class="nav-item">
            <a class="nav-link grow" href="#service">Om os</a>
          </li>

        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">

          <li class="nav-item">
            <a href="http://localhost/beautyispain/?page_id=8" class="grow nav-link px-3 btn-outline-white">
              <i class="far fa-calendar-alt pr-2"></i>Book Tid
            </a>
          </li>
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->
