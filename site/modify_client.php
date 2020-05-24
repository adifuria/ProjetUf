<?php 
    include("header.php");
   
    require ('rb.php');
    R::setup( 'mysql:host=localhost;dbname=projetuf',
        'root', '' );
        
        // $id = $_GET['id'];
        // $client = R::load('client', $id);

        //On récupère le bean déjà existant et on créer un objet

    $client = R::load('client', 1);

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $mdp = $_POST['mdp'];
        
        //On attribue les nouvelles valeurs
    $client->nom = $nom;
    $client->prenom = $prenom;
    $client->email = $email;
    $client->login = $login;
    $client->mdp = $mdp;
        //On renvoi l'objet modifié à la bdd
    R::store($client);
    
    include("footer.php"); 
?>