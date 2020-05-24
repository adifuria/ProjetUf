<?php 
    include("header.php");

    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "projetuf";
    $conn = mysqli_connect($server, $username, $password, $db);

    $request_method = $_SERVER["REQUEST_METHOD"];
    // On détruit les variables de session

    session_unset();
    session_destroy();
    header("connexion.php");

    echo 'vous êtes déconnecté, veuillez retourner a l\'accueil';

    include("footer.php"); 
?>