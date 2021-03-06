<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php bloginfo('name'); ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/blog-home.css" rel="stylesheet">

      <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/mystyle.css" rel="stylesheet">

  </head>

  <body>

      <!-- Navigation -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="<?php echo get_home_url() ?>"><?php bloginfo('name') ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">

        <?php
         wp_nav_menu(array(
           'theme_location'=> 'primary',
           'container' => 'ul',
           'menu_class'=> 'navbar-nav ml-auto'
         ));
          ?>

        <!--
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
      -->

        </div>
      </div>
    </nav>


      <!-- Page Content -->
  <div class="container">

<div class="row">

  <!-- Blog Entries Column -->
  <div class="col-md-8">