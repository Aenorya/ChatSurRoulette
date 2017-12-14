<?php session_start();
$url="mysql:host=prodpeda-venus; dbname=tdigiovanni";
$bdd= new PDO($url,"tdigiovanni","0338240",array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION)); ?>

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
     <?php if(!isset($_SESSION['user'])) {
       echo "<a href=\"signin.php\">Connexion</a>";
       echo "<a href=\"signup.php\">Inscription</a>";
       } else {
       echo "<a href=\"account.php\">Mon compte</a>";
       echo "<a href=\"signout.php\">Deconnexion</a>";
     } ?>
     <a href="about.php">A propos</a>
   </div>
   <?php
      $request = "SELECT * FROM trajets ";
      $prec = false;
      if(isset($_GET['from']) && strlen($_GET['from'])>0){
        $request .= "WHERE depart='".$_GET['from']."' ";
        $prec = true;
      }
      if(isset($_GET['to']) && strlen($_GET['to'])>0){
        if($prec){
          $request .= "AND ";
        }else{
          $request .= "WHERE ";
          $prec = true;
        }
        $request .= "destination='".$_GET['to']."' ";
      }
      if(isset($_GET['date']) && strlen($_GET['date'])==10){
        if($prec){
          $request .= "AND ";
        }else{
          $request .= "WHERE ";
        }
        $request .= "date='".$_GET['date']."' ";
      }
      if(isset($_GET['sortby'])){
        if($_GET['sortby'] == "d"){
          $request .= "ORDER BY date";
        }else{
          $request .= "ORDER BY prix";
        }
      }else{
        $request .= "ORDER BY date";
      }
      $request .= ";";
      echo $request;
   ?>
   <form action="index.php" method="get">
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
          <td class="search"><input type='submit' value='Rechercher'/></td>
          </table>
      </div>
   </form>
   <footer class="foot">
        <p>Chat Sur Roulette ©</p>
   </footer>
  </body>
</html>