 <?php
require_once ("init_inc.php");

if ($_POST)
{
  
$_POST['pseudo'] = htmlentities($_POST['pseudo'], ENT_QUOTES);
$_POST['mdp'] = htmlentities($_POST['mdp'], ENT_QUOTES);
$resultat = execute_requete("SELECT * FROM utilisateur WHERE pseudo ='$_POST[pseudo]' and mdp='$_POST[mdp]'");
if ($resultat->num_rows > 0)
{
$membre = $resultat->fetch_assoc();
foreach($membre as $indice => $valuer)
{
$_SESSION['utilisateur'][$indice] = $valuer;
}

header("location:profil.php");
}
  else
{
$msg.= "Erreur d'identification";
}
}

require_once ("haut_de_site.php");

require_once ("menu.php");

echo $msg;
?>

<div id="connexion">
  <div class="co">
    <form action="" method="post">
      <div class="username field">
        <input
        type="text"
        id="pseudo"
        name="pseudo"
        autocomplete="on"
        placeholder="Pseudo"
        />
      </div>
      
      <table class="">
        <tbody>
          <tr>
            <td class="">
              <div class="">
                <input type="password" id="mdp" name="mdp" placeholder="Mot de passe">
              </div>
            </td>
            <td class="">
              <button type="submit" class="">
                Connexion
              </button>
            </td>
          </tr>
        </tbody>
          </table>
          
          
          
      </form>
  </div>


<div class="co1">
  <h2>
    <strong>
      Première connexion ?
    </strong>
    Joins nous
        </h2>
        
        
        <form action="" class="t1-form signup"  method="post">
          
          <div class="field">
            <input type="text" autocomplete="off" name="prepseudo" maxlength="20" placeholder="Pseudo">
          </div>
          <div class="field">
            <input type="text" autocomplete="off" name="preemail" placeholder="Adresse email">
          </div>
          <div class="field">
            <input type="password" name="password" placeholder="Mot de passe">
          </div>
          
          
          <button type="submit" class="btn signup-btn u-floatRight">
            Valider
          </button>
        </form>
        
</div>
</div>


<!--
<p class="affair">
Portail
</p>


<form method="post" >
<label for="pseudo">
Pseudo
</label>
<input id="pseudo" placeholder="Votre pseudo" type="text" name="pseudo" required/>

<label for="mdp">
Mot de passe
</label>
<input id="mdp" type="password" placeholder="Votre mot de passe" type="text" name="mdp" required />
<br/>
<br />

<button type="submit" class="btn btn-primary">
Connexion
</button>

</form>

<br/>

<br/>
-->