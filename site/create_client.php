<?php include("header.php");

    require ('rb.php');
    R::setup( 'mysql:host=localhost;dbname=projetuf',
        'root', '' );
    //On créer un bean qui sera notre objet a inserer dans la bdd
    
    $new_inscription = R::dispense('client');

    echo '<h1>Création client effectuée!</h1>';

        //On récupère la valeur des champs et on la stocke dans des variables
        
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $mdp = $_POST['mdp'];

    echo 'nom : ' . $nom . '<br>';
    echo 'prenom : ' . $prenom . '<br>';
    echo 'email : ' . $email . '<br>';
    echo 'login : ' . $login . '<br>';
    echo 'mdp : ' . $mdp . '<br>';

    $new_inscription->nom = $nom;
    $new_inscription->prenom = $prenom;
    $new_inscription->email = $email;
    $new_inscription->login = $login;
    $new_inscription->mdp = $mdp;

    //On envoi les données à la bdd
    R::store($new_inscription);
    
    include("footer.php"); 
?>