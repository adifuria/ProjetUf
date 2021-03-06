<?php include("header.php");  //Formulaire de modification de facture ?>
<form method="post" action="modify_fact.php">
  <h1>Modification facture</h1>
  <div class="form-group">
    <label for="dateEmission">Date d'émission</label>
    <input type="text" class="form-control" name="dateEmission" id="dateEmission" placeholder="ex: 21 juin 2019"
      required>
  </div>
  <div class="form-group">
    <label for="paye">Payé? Oui/Non</label>
    <input type="text" class="form-control" name="paye" id="paye" placeholder="Oui ou Non" required>
  </div>
  <div class="form-group">
    <label for="datePaiement">Date de paiement</label>
    <input type="text" class="form-control" name="datePaiement" id="datePaiement" placeholder="ex: 21 juin 2019">
  </div>
  <div class="form-group">
    <label for="prix">Prix</label>
    <input type="text" class="form-control" name="prix" id="prix" placeholder="ex: 20.5">
  </div>
  <button type="submit" class="btn btn-primary">Valider</button>
</form>

<?php include("footer.php"); ?>