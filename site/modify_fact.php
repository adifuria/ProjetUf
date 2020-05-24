<?php 

    include("header.php");
    
    require ('rb.php');
    R::setup( 'mysql:host=localhost;dbname=projetuf',
        'root', '' );

        // $id = $_GET['id'];
        // $facture = R::load('facture', $id);
        
        //On récupère le bean déjà existant et on créer un objet

    $facture = R::load('facture', 1);

    $dateEmission = $_POST['dateEmission'];
    $paye = $_POST['paye'];
    $datePaiement = $_POST['datePaiement'];
    $prix = $_POST['prix'];
        

        //On attribue les nouvelles valeurs
    $facture->dateEmission = $dateEmission;
    $facture->paye = $paye;
    $facture->datePaiement = $datePaiement;
    $facture->prix = $prix;
        //On renvoi l'objet modifié à la bdd
    R::store($facture);
    
   
    include("footer.php"); 
?>