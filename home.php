<!DOCTYPE html>
<?php session_start(); ?>
<html>
  <head>
    <title> Chat Sur Roulette </title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="style.css"/>
  </head>
  <body>
    <img src="chaton.jpg" width="1900" height="75"/>
    <div class="topnav" id="myTopnav">
     <a href="home.php"> Accueil</a>
     <?php if(!isset($_SESSION['user'])):?>
       <a href='signin.php'>Connexion</a>
       <a href='signup.php'>Inscription</a>"
     <?php
     else:?>
       <a href='account.php'>Mon compte</a>
     <?php endif; ?>
     <a href="#aPropos">A propos</a>
   </div>
  </body>
</html>