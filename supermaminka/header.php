<!DOCTYPE html>
<html lang="cs-cz">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?> - <?php echo get_bloginfo( 'name' ); ?>">
  <meta name="author" content="http://vlastapolach.cz">
  <meta property="og:image" content="http://supermaminka.cz/download/supermaminka.png" />
  <meta property="og:title" content="<?php echo get_bloginfo( 'name' ); ?>" />
  <meta property="og:description" content="<?php echo get_bloginfo( 'description' ); ?>" />
  <link rel="shortcut icon" type="image/x-icon" href="http://supermaminka.cz/favicon.ico">

  <!-- Bootstrap Core CSS + FontAwesome-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <script src="https://use.fontawesome.com/a4b13e185e.js"></script>
  <!-- Custom CSS -->
  <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet" type="text/css">
  <?php wp_head();?>
</head>

<body>
  <!-- Hlavní menu -->
  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo get_bloginfo( 'wpurl' );?>"><i class="fa fa-heartbeat" aria-hidden="true"></i> <span class="top-text"><?php echo get_bloginfo( 'name' ); ?></span></a>
      </div>
      <div class="collapse navbar-collapse navbar-right" id="myNavbar">
        <!--?php wp_nav_menu( array( "theme_location" => 'header-menu' ) ) ?-->
        <ul class="nav navbar-nav">
          <li><a href="<?php echo get_bloginfo( 'wpurl' );?>">Úvod</a></li>
          <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Online kurz
        <span class="caret"></span></a>
        <span class="dropdown-menu">
          <?php wp_nav_menu( array( "theme_location" => 'header-menu' ) ) ?>
        </span>
        </li>
        <li><a href="<?php echo get_bloginfo( 'wpurl' );?>/blog">Blog</a></li>
        </ul>
      </div>
    </div>
  </nav>
