<?php 
  $webpage_url = isset($_GET['webpage_url']) && !empty($_GET['webpage_url']) ? $_GET['webpage_url'] : null;
  $image_url = isset($_GET['image_url']) && !empty($_GET['image_url']) ? $_GET['image_url'] : null;
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Cover Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <!-- Optional theme -->
    <!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css"> -->

    <!-- Custom styles for this template -->
    <link href="styles/cover.css" rel="stylesheet">
    <link href="styles/custom.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>

    </style>
  </head>

  <body>
    <div class="site-wrapper">

      <div class="site-wrapper-inner">
        <img src="http://i.imgur.com/LBU1as4.jpg" class="overlay" alt="Overlay image">
        
        <div class="cover-container">


          <div class="inner cover">
            <h1 class="cover-heading">Over</h1>
            <p class=""><br /></p>
            <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
            <form action="index.php" method="get">
              <div class="input-group input-group-lg">
                <span class="input-group-addon glyphicon glyphicon-globe"></span>
                <input type="text" class="form-control" name="webpage_url" placeholder="Site - eg. http://example.com">
              </div>
              <p class=""></p>
              <div class="input-group input-group-lg">
                <span class="input-group-addon glyphicon glyphicon-picture"></span>
                <input type="text" class="form-control" name="image_url" placeholder="Overlay image - http://img.example.com/img.jpg">
              </div>
              <p class=""></p>
              <p class="lead">
                <input type="submit" value="GO!" class="btn btn-lg btn-default" />
              </p>
            </form>

          </div>

          <div class="mastfoot">
            <div class="inner">
              <p>Cover template for <a href="http://getbootstrap.com">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
            </div>
          </div>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="scripts/docs.min.js"></script>
    <script src="scripts/drags.js"></script>
    <script src="scripts/custom.js"></script>
  </body>
</html>
