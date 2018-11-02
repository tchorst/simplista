<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel='stylesheet' id='FontAwesome-css'  href='//use.fontawesome.com/releases/v5.0.13/css/all.css' type='text/css' media='all' />
</head>

<body <?php body_class(); ?>>
<nav class="navbar navbar-inverse navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/"><span class="glyphicon glyphicon glyphicon-chevron-left" aria-hidden="true"></span>tch<span class="glyphicon glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/about">About</a></li>
        <li><a href="/contact">Contact</a></li>
        <li><a href="https://github.com/tchorst" target="_blank"><i class="fab fa-github"></i></a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron">
  <div class="container">
    <h1 class="headline">Timothy Horst</h1>
    <p>Development. Site Performance Optimization. DPM.</p>
  </div>
</div>

<div class="container">
    <div class="row">