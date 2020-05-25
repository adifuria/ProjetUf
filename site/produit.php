<?php include("header.php"); ?>
<h1 class="titre">Votre produit</h1>
<div class="container row">
    <div class="col col-4">
        <img src="css/produit.png" heigh="auto" width="100%">
    </div>

    <?php
    
        require ('rb.php');
        R::setup( 'mysql:host=localhost;dbname=projetuf',
        'root', '' );
        //On récupère l'id grâce à l'url et on fait une requête select
        $id = $_GET['id'];
        $produits = R::find ('produit', 'id =' . $id);
    
        foreach ($produits as $produit) { 
            echo '<div class="col col-auto">';
            echo 'Nom : ' . $produit->nom . '<br>';
            echo 'Description : ' . $produit->description . '<br>';
            echo 'Prix : ' . $produit->prix . '<br>';
            echo 'Stock : ' . $produit->stock . '<br>';
            echo 'commentaire : ' . $produit->commentaire . '<br>';
            echo '<form method="get" action="creation_facture.php" class="form-inline my-2 my-lg-0">';
            echo '  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Acheter</button>';
            echo '</form>';
            echo '</div>';
        } 
    ?>
</div>

<?php include("footer.php"); ?>