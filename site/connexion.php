<?php 
 //On définit la connexion à la bdd
    include("header.php");
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "projetuf";
    $conn = mysqli_connect($server, $username, $password, $db);
 
    $request_method = $_SERVER["REQUEST_METHOD"];
    
    
    if(isset($_POST['valider'])){
        
            $query= mysqli_query($conn,"SELECT * FROM client WHERE login='".$_POST['login']."' AND mdp = '".$_POST['mdp']."';");
 
        
        if(mysqli_num_rows($query)){ //On regarde si la requête a abouti
            //Si oui
            session_start();
            while($donnees = mysqli_fetch_assoc($query)){ //On créé les variables de session
                $_SESSION['id'] = $donnees['id'];
                $_SESSION['nom'] = $donnees['nom'];
                $_SESSION['prenom'] = $donnees['prenom'];
                $_SESSION['email'] = $donnees['email'];
                $_SESSION['login'] = $donnees['login'];
                $_SESSION['mdp'] = $donnees['mdp'];
                
            }
            header('Location: index.php');
 
        }
        else{
            //Si non
            echo "Mauvais identifiants";
        }
    }
    
    
  
?>

<h1 class="titre">Connexion</h1>
<form id="frmConnexion" action="" method="post">
    <div class="corpsForm">
        <input type="hidden" name="etape" id="etape" value="validerConnexion" />

        <div class="form-group">
            <label for="login" accesskey="n">Login</label>
            <input type="text" class="form-control" id="login" name="login" maxlength="20" size="15" value=""  placeholder="Entrez votre login">
        </div>
        <div class="form-group">
            <label for="mdp" accesskey="m">Mot de passe</label>
            <input type="password" class="form-control" id="mdp" name="mdp" maxlength="15" size="15" value="" placeholder="Entrez votre mot de passe">
        </div>
        <button type="submit" id="ok" value="Valider" name='valider' class="btn btn-primary" style="margin-left: 1%; margin-right: 1%;">Valider</button>
        <button  type="reset" id="annuler" value="Effacer" name='effacer' class="btn btn-primary" style="margin-left: 1%; margin-right: 1%;">Effacer</button>
    </div>
</form>
<?php include("footer.php"); ?>