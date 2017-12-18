<!DOCTYPE html>
<html>
  <head>
    <title>Chat Sur Roulette : à propos</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="style.css"/>
  </head>
  
  <body>
    <img src="chaton.jpg" width="1900" height="75"/>
    <div class="topnav" id="myTopnav">
     <a href="home.php">Accueil</a>
	 <?php if(!isset($_SESSION['user'])) {
       echo "<a href=\"signup.php\">Inscription</a>";
       echo "<a href=\"signin.php\">Connexion</a>";
       } else {
       echo "<a href=\"account.php\">Mon compte</a>";
       echo "<a href=\"signout.php\">Deconnexion</a>";
	   } ?>
     <a href="about.php">A propos</a>
   </div>
   
   blabla
   
   <footer class="foot">
        <p>Chat Sur Roulette ©</p>
   </footer>
   </body>
 </html>