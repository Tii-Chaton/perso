<?php

// on teste si le visiteur a soumis le formulaire de connexion
if (isset($_POST['connexion']) && $_POST['connexion'] == 'Connexion') {
  if ((isset($_POST['login']) && !empty($_POST['login'])) && (isset($_POST['pass']) && !empty($_POST['pass']))) {

  $base = mysqli_connect('localhost', 'root', 'toto');
  //mysqli_select_db($base, 'rush00');

  // on teste si une entrée de la base contient ce couple login / pass
  //$sql = 'SELECT count(*) FROM membre WHERE login="'.mysql_escape_string($_POST['login']).'" AND pass_md5="'.mysql_escape_string(md5($_POST['pass'])).'"';
  //$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
  //$data = mysql_fetch_array($req);

  //mysql_free_result($req);
  //mysql_close();

  // si on obtient une réponse, alors l'utilisateur est un membre
  //if ($data[0] == 1) {
  //  session_start();
  //  $_SESSION['login'] = $_POST['login'];
  //  header('Location: membre.php');
  //  exit();
  //}
  //// si on ne trouve aucune réponse, le visiteur s'est trompé soit dans son login, soit dans son mot de passe
  //elseif ($data[0] == 0) {
  //  $erreur = 'Compte non reconnu.';
  //}
  //// sinon, alors la, il y a un gros problème :)
  //else {
  //  $erreur = 'Probème dans la base de données : plusieurs membres ont les mêmes identifiants de connexion.';
  //}
  //}
  //else {
  //$erreur = 'Au moins un des champs est vide.';
  //}
}
}
?>

<html>
<link rel="stylesheet" type="text/css" href="Fr0.css">
<head>
  <title>Nounours-Land</title>
</head>
<body>
<a href="http://e3r12p9.42.fr:8080/rush/Fr0.html"> <h1 id="ban">Nounours-Land</h1></a>

<ul id="menu-demo2">
  <div id="test7">
  <li><a href="http://e3r12p9.42.fr:8080/rush/compte.php">mon compte</a>
    <ul>
      <li><a href="https://profile.intra.42.fr/">Profil</a></li>
    </ul>
  </li>
  <li><a href="http://e3r12p9.42.fr:8080/rush/Fr0.html">liste des ours</a>
    <ul>
      <li><a href="http://e3r12p9.42.fr:8080/rush/oursb.html">ours polaire</a></li>
      <li><a href="http://e3r12p9.42.fr:8080/rush/zombie.html">ours zombie</a></li>
      <li><a href="http://e3r12p9.42.fr:8080/rush/oursbrun.html">ours brun</a></li>
      <li><a href="http://e3r12p9.42.fr:8080/rush/kawaii.html">ours kawaii</a></li>
      <li><a href="http://e3r12p9.42.fr:8080/rush/etoile.html">La grande ours</a></li>
    </ul>
  </li>
  <li><a href="http://e3r12p9.42.fr:8080/rush/solde.html">Soldes</a>
    <ul>
      <li><a href="http://e3r12p9.42.fr:8080/rush/zombie.html">ours zombie</a></li>
      <li><a href="http://e3r12p9.42.fr:8080/rush/kawaii.html">ours kawaii</a></li>

    </ul>
  </li>
  <li><a href="http://e3r12p9.42.fr:8080/rush/panier.html">Mon panier</a>
    <ul>
      <li><a href="http://e3r12p9.42.fr:8080/rush/panier.html">J'ai fini</a></li>
    </div>
    </ul>
  </li>
</ul>

<div id="fondban">
<div id="idpwd">
<fieldset>
<legend>Identifiez-vous</legend>
<form action="compte.php" method="POST">
Login : <input type="text" name="login" value="<?php if (isset($_POST['login'])) echo htmlentities(trim($_POST['login'])); ?>"><br />
Mot de passe : <input type="password" name="pass" value="<?php if (isset($_POST['pass'])) echo htmlentities(trim($_POST['pass'])); ?>"><br />
<input type="submit" name="connexion" value="Connexion">
</form>
<a href="inscription.php">Vous inscrire</a>
</fieldset>


</body>
</html>


