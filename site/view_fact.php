<?php 
    include("header.php"); 

    require ('rb.php');
    R::setup( 'mysql:host=localhost;dbname=projetuf',
        'root', '' );
    //On récupère l'id grâce à l'url et on exécute la requête
    $id = $_GET['id'];
    $factures = R::find ('facture', 'id =' . $id);
    echo '<h1>Voir facture</h1>';
    //On affiche les champs de la facture dont l'id correspond
    foreach ($factures as $facture) {
        
        echo '<div class="col col-auto">';

        echo 'Date d\'émission: ' . $facture->dateEmission . '<br>';
        echo 'Facture payée?: ' . $facture->paye . '<br>';
        echo 'Date de paiement: ' . $facture->datePaiement . '<br>';
        echo 'Prix: ' . $facture->prix . '€' . '<br>';

        
        echo '</div>';  
    }
    
    include("footer.php");
?>