 <?php
require_once("init_inc.php");
if (utilisateur_est_connecte()) {
  header("location:profil.php");
  die();
}

if ($_POST) {
    
    if (isset($_POST['pseudo'])) {
      $_POST['pseudo'] = htmlentities($_POST['pseudo'], ENT_QUOTES);
      $_POST['mdp']    = htmlentities($_POST['mdp'], ENT_QUOTES);
      $resultat        = execute_requete("SELECT * FROM utilisateur WHERE pseudo ='$_POST[pseudo]' and mdp='$_POST[mdp]'");
      if ($resultat->num_rows > 0) {
        $membre = $resultat->fetch_assoc();
        foreach ($membre as $indice => $valuer) {
            $_SESSION['utilisateur'][$indice] = $valuer;
        }        
        header("location:profil.php");
    
    } else {
        $msg .= "Erreur d'identification";
        
    }
    }elseif (isset($_POST['prepseudo'])) {
      debug($_POST);

      foreach ($_POST as $key => $value) {
      $_POST[$key] = htmlentities($value,ENT_QUOTES);
      }
    
      $resultat = execute_requete("SELECT * FROM utilisateur WHERE pseudo ='$_POST[prepseudo]'");
      $pseudo = $_POST['prepseudo'];
      $mdp= $_POST['password'];
      $mail= $_POST['preemail'];

      if ($resultat->num_rows==0) {
        execute_requete("INSERT INTO utilisateur(pseudo, mdp, email ) VALUES('$pseudo','$mdp','$mail')" );
        $msg .= "<div class='validation'>Inscription okay<div>";
        echo $msg;
        header("location:profil.php");
      }else{
      $msg .= "<div class='validation'>Ce pseudo existe déjà<div>";
      echo $msg;
      }
 
      
      header("location:profil.php");
    }
      $msg .= " Erreur interne";
}

require_once("haut_de_site.php");

require_once("menu.php");

echo $msg;
?>

<div class="desc" >
  <h1 >Bienvenue sur Murano</h1>
  
  <p >Connectez vous pour obtenir de l'aide</p>
  <p>Join to get help</p>
  <p>تسجيل الدخول للحصول على مساعدة</p>
  <p>Zaloguj się, aby uzyskać pomoc</p>
  <p>登錄獲得幫助</p>

</div>

<div id="connexion">
  
  <div class="co">
    <form action="" method="post">
      
      <div class="i">
        <input
        type="text"
        id="pseudo"
        name="pseudo"
        autocomplete="on"
        placeholder="Pseudo"
        required
        />
      </div>
      
      <div class="i">
          <input type="password" id="mdp" name="mdp" placeholder="Mot de passe"required>
      </div>
      <div class="i">
        <button type="submit" class="btn btn-primary">
          Connexion
        </button> 
      </div>
    </form>
  </div>


  <div class="co">
    <h2>
      <strong>
        Première connexion ?
      </strong>Joignez nous
    </h2>
        
        
    <form action="" class="i1"  method="post">
          
      <div class="field">
        <input type="text"  class="i"autocomplete="off" name="prepseudo" maxlength="20" placeholder="Pseudo" required>
      </div>
      <div class="field">
        <input type="email"  class="i"autocomplete="off" name="preemail" placeholder="Adresse email" required>
      </div>
      <div class="field">
        <input type="password" class="i" name="password" placeholder="Mot de passe" required>
      </div>
          
      <div class="i">
        <button type="submit" class="btn btn-success">
          S'inscrire
        </button>
      </div>
    </form>
  </div>
</div>

</div>
<?php
  require_once("footer.php");
?>