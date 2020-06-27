<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jean Forteroche</title>

    <!-- Bootstrap core CSS -->
    <link href="public/frontend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="public/frontend/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="public/frontend/css/clean-blog.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="index.php">Jean Forteroche</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?action=login">Admin</a>
            </li>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="index.php?action=about">About</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="index.php?action=contact">Contact</a>
              </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('public/frontend/img/alaska.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Billet simple pour l'Alaska</h1>
              <span class="subheading">Par Jean Forteroche</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <?= $content ?>
          <!-- Pager -->
          
        </div>
      </div>
    </div>

    <a href="index.php?action=listAllPosts">
      <div class="text-center">
        <button class="btn btn-primary btn-sx" type="button">Voir tous les articles</button>
      </div>
    </a>
    <hr>

    <!-- Bootstrap core JavaScript -->
    <script src="public/frontend/vendor/jquery/jquery.min.js"></script>
    <script src="public/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="public/frontend/js/clean-blog.min.js"></script>

  </body>

</html>