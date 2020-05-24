<?php 
    include("header.php");

    require ('rb.php');
    R::setup( 'mysql:host=localhost;dbname=projetuf',
        'root', '' );
    $factures = R::findAll('facture');
    echo '<h1>Liste des Factures</h1>';

    //On exécute la requête et on affiche les champs de tous les clients
    foreach ($factures as $facture) {
        echo '<div class="col col-auto">';?>
        <h2>Facture <?php echo $facture->id; ?></h2>
    <?php
        echo 'Date d\'émission: ' . $facture->dateEmission . '<br>';
        echo 'Facture payée?: ' . $facture->paye . '<br>';
        echo 'Date de paiement: ' . $facture->datePaiement . '<br>';
        echo 'Prix: ' . $facture->prix . '€' . '<br>';
        
        
        echo '</div>';   
    }

    include("footer.php"); 
?>