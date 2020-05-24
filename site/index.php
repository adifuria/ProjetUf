<?php
    require ('rb.php');
    R::setup( 'mysql:host=localhost;dbname=projetuf',
        'root', '' );
        //On récupère tous les produits
    $produits = R::findAll('produit');
    include("header.php"); 
?>

<h1 class="titre">Bonjour</h1>
<h2 class="titre">Vous aimeriez peut être...</h2>
<div class="row text-center">

    <?php 
        //On parcours la liste de produit et on créer un composant pour chaque produit
        foreach ($produits as $produit) {
            echo '<div class="col">';
            echo '<div class="row d-flex justify-content-center"><img src="css/produit.png" width="300px" height="auto" ></div>' ;
            echo '<div class="row d-flex justify-content-center"> Nom: ' . $produit->nom .  '<br>' . 'Prix:  ' .$produit->prix . '€</div>';
            echo '<div class="row d-flex justify-content-center"><form method="get" action="produit.php" class="form-inline my-2 my-lg-0">';
            echo '  <div class="text center"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Voir détails</button></div><br><br><br>';
            echo '</form></div>';
            echo '</div>';
        }
    ?>

</div>

<?php include("footer.php"); ?>