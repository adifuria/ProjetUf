<?php 
    include("header.php"); 

    require ('rb.php');
    R::setup( 'mysql:host=localhost;dbname=projetuf',
        'root', '' );
    $clients = R::findAll('client');
    echo '<h1>Liste des Clients</h1>';
    //On exécute la requête et on affiche les champs de tous les clients
    foreach ($clients as $client) {
   

        echo '<div class="col col-auto">'; ?>
        <h2>Client <?php echo $client->id; ?></h2>
        <?php 
            echo 'Nom:' . $client->nom . '<br>';
            echo 'Prénom: ' . $client->prenom . '<br>';
            echo 'Email: ' . $client->email . '<br>';
            echo 'Login: ' . $client->login . '<br>';
            echo 'Mot De Passe: ' . $client->mdp . '<br><br>';
       
            echo '</div>';
       
    }
    
    
    include("footer.php"); 
?>
