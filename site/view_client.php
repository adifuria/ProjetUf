<?php 
    include("header.php"); 
    
    require ('rb.php');
    R::setup( 'mysql:host=localhost;dbname=projetuf',
        'root', '' );
    //On récupère l'id grâce à l'url et on exécute la requête
    $id = $_GET['id'];
    $clients = R::find ('client', 'id =' . $id);
    echo '<h1>Détail client</h1>';
    //On affiche les champs du client dont l'id correspond
    foreach ($clients as $client) {
        echo '<div class="col col-auto">';
        
        echo 'Nom:' . $client->nom . '<br>';
        echo 'Prénom: ' . $client->prenom . '<br>';
        echo 'Email: ' . $client->email . '<br>';
        echo 'Login: ' . $client->login . '<br>';
        echo 'Mot De Passe: ' . $client->mdp . '<br>';
        
        echo '</div>';
        }
    include("footer.php"); 
?>