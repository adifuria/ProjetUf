<!doctype html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>Buythings.com</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">

    <a class="navbar-brand" href="index.php"><img src="css/logo.png" width="75px" height="auto"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <?php
      session_start();
      if (isset($_SESSION['id'])){
    
        echo '<div class="collapse navbar-collapse" id="navbarSupportedContent">';
        echo '<ul class="navbar-nav mr-auto">';
        echo '<li class="nav-item active">';
        echo '<a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>';
        echo '</li>';
        echo '<li class="nav-item active">';
        echo '<a class="nav-link" href="view_client.php">Voir un client <span class="sr-only">(current)</span></a>';
        echo '</li>';
        echo '<li class="nav-item active">';
        echo '<a class="nav-link" href="view_clients.php">Voir les clients <span class="sr-only">(current)</span></a>';
        echo '</li>';
        echo '<li class="nav-item active">';
        echo '<a class="nav-link" href="modifier_client.php">Modifier un client <span class="sr-only">(current)</span></a>';
        echo '</li>';
        echo '<li class="nav-item active">';
        echo '<a class="nav-link" href="view_fact.php">Voir une facture <span class="sr-only">(current)</span></a>';
        echo '</li>';
        echo '<li class="nav-item active">';
        echo '<a class="nav-link" href="view_facts.php">Voir les factures <span class="sr-only">(current)</span></a>';
        echo '</li>';
        echo '<li class="nav-item active">';
        echo '<a class="nav-link" href="modifier_facture.php">Modifier une facture <span class="sr-only">(current)</span></a>';
        echo '</li>';
        echo '</ul>';
        echo '<form  method="post" action="deconnexion.php" class="form-inline my-2 my-lg-0">';
        echo '<button class="btn btn-outline-success my-2 my-sm-0" type="submit"  style="margin-left: 1%; margin-right: 1%;">Déconnexion </button>';
        echo '</form>';
        echo '</div>';
        echo '</nav>';
      } 
      else {
        echo '<div class="collapse navbar-collapse" id="navbarSupportedContent">';
        echo '<ul class="navbar-nav mr-auto">';
        echo '<li class="nav-item active">';
        echo '<a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>';
        echo '</li>';
        echo '</ul>';
        echo '<form method="post" action="inscription.php" class="form-inline my-2 my-lg-0">';
        echo '<button class="btn btn-outline-success my-2 my-sm-0" type="submit"  style="margin-left: 1%;margin-right: 15px;">Inscription</button>';
        echo '</form>';
        echo '<form  method="post" action="connexion.php" class="form-inline my-2 my-lg-0">';
        echo '<button class="btn btn-outline-success my-2 my-sm-0" type="submit"  style="margin-left: 1%; margin-right: 1%;">Connexion </button>';
        echo '</form>';
        echo '</div>';
        echo '</nav>';
      }
    ?>

    <div class="col-2"></div>
    <div class="container col-8">