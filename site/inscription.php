<?php include("header.php"); //Formulaire de création de client ?>
<h1 class="titre">Inscription</h1>

<form method="post" action="create_client.php">
  <div class="form-group">
    <label for="nom">Nom</label>
    <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom" required>
  </div>
  <div class="form-group">
    <label for="prenom">Prenom</label>
    <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Prénom" required>
  </div>
  <div class="form-group">
    <label for="email">Adresse Email</label>
    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp"
      placeholder="Entrez email" required>
    <small id="emailHelp" class="form-text text-muted">Nous ne le partagerons avec personne.</small>
  </div>
  <div class="form-group">
    <label for="login">Login</label>
    <input type="text" class="form-control" name="login" id="login" placeholder="Pseudo" required>
  </div>
  <div class="form-group">
    <label for="mdp">Mot de passe</label>
    <input type="password" class="form-control" name="mdp" id="mdp" placeholder="Password" required>
  </div>

  <button type="submit" class="btn btn-primary">Valider</button>
</form>


<?php include("footer.php"); ?>