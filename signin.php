<!DOCTYPE html>
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
     <a href="signin.php">Connexion</a>
     <a href="signup.php">Inscription</a>
     <a href="#aPropos">A propos</a>
   </div>
   <h2><center>Se connecter</center></h2>
   <form action="connect.php" method="post">
     <center>
        <table>
            <h3>E-Mail:</h3>
            <input type='email' name='mail' required/>
            <h3>Mot de passe:</h3>
            <input type='password' name='pswd' required/>
            <h3/><input type='submit'/>
        </table>
     </center
   </form>
  </body>
</html>