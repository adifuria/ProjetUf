<?php include("header.php"); //formulaire d'ajout de produit ?>
    
    <form method="post" action="index.php">
        <h1>création produit</h1>
            <label for="name">entrez le nom du produit: </label> 
            <input type="text" name="nom" id="nom" required> <br/>
            <label for="name">Petite description: </label>
            <input type="text" name="description" id="description" required> <br/>
            <label for="name">entrez le prix du produit: </label>
            <input type="text" name="prix" id="prix" required> <br/>
            <label for="name">entrez la quantité du produit: </label>
            <input type="text" name="stock" id="stock" required> <br/>
            <label for="name">entrez un commentaire pour le produit: </label>
            <input type="text" name="commentaire" id="commentaire" required> <br/>
    
            <input type="submit" value="Valider">
        
    </form>
<?php include("footer.php"); ?>