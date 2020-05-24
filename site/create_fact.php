<?php include("header.php"); ?>
<h1>Votre facture:</h1>
<?php
    require ('rb.php');
    R::setup( 'mysql:host=localhost;dbname=projetuf',
        'root', '' );
        //On créer un bean qui sera notre objet a inserer dans la bdd
    $new_facture = R::dispense('facture');

        
        //On récupère la valeur des champs et on la stocke dans des variables

    $dateEmission = $_POST['dateEmission'];
    $paye = $_POST['paye'];
    $datePaiement = $_POST['datePaiement'];
    $prix = $_POST['prix'];
       

    echo 'dateEmission : ' . $dateEmission . '<br>';
    echo 'paye : ' . $paye . '<br>';
    echo 'datePaiement : ' . $datePaiement . '<br>';
    echo 'prix : ' . $prix . '<br>';
      

    $new_facture->dateEmission = $dateEmission;
    $new_facture->paye = $paye;
    $new_facture->datePaiement = $datePaiement;
    $new_facture->prix = $prix;

        //On envoi les données à la bdd
    R::store($new_facture);
    
?>
<?php include("footer.php"); ?>