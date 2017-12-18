<?php
session_start(); 
$bdd= new PDO("mysql:host=localhost; dbname=chatsurroulette","root","",array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

if (isset($_GET['search'])) {
	if (isset($_GET['from'],$_GET['to'],$_GET['date'])) {
		$query = "select * from TRAJET where ";
        $query .= "DEPART='".$_GET['from']."' ";
        $query .= "and ARRIVEE='".$_GET['to']."' ";
		$query .= "and DJOUR='".$_GET['date']."' ";
		if($_GET['sortby'] == "d"){
			$query .= "order by DATE";
        } else {
			$query .= "order by PRIX";
        }
		$query .= ";";
		echo $query;
    } else {
		echo "Vous n'avez pas rempli toutes les informations !";
	}
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title> Chat Sur Roulette </title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="style.css"/>
  </head>
  
  <body>
    <img src="chaton.jpg" width="100%" height="75px"/>
    <div class="topnav" id="myTopnav">
     <a href="home.php">Accueil</a>
     <?php
	 if(!isset($_SESSION['user'])) {
       echo "<a href=\"signup.php\">Inscription</a>";
       echo "<a href=\"signin.php\">Connexion</a>";
       } else {
       echo "<a href=\"account.php\">Mon compte</a>";
       echo "<a href=\"signout.php\">Deconnexion</a>";
	   }
	   ?>
     <a href="about.php">A propos</a>
   </div>
   <form method="get" action='#'>
      <div class="searchbar">
          <table>
          <td><p>Ville de départ :</p></td>
          <td><input type="text" name="from"/></td>
          <td><p>Ville d'arrivée :</p></td>
          <td><input type="text" name="to"/></td>
          <td><p>Date de départ :</p></td>
          <td><input type="date" name="date"/></td>
          <td><p>Trier par:</p></td>
          <td>
            <select name="sortby">
              <option value="d">Date</option>
              <option value="p">Prix</option>
            </select>
          </td>
          <td class="search"><input type='submit' name='search' value='Rechercher'/></td>
          </table>
      </div>
   </form>
   <footer class="foot">
        <p>Chat Sur Roulette ©</p>
   </footer>
  </body>
</html>