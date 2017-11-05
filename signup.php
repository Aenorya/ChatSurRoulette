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
   <?php
    if(isset($_GET['mail'],$_GET['pseudo'],$_GET['pswd'],$_GET['pswdc'])){
        //Requête création de nouveau compte.
    }
   ?>
   <h2><center>S'inscrire</center></h2>
   <h3/>
   <form action="account.php" method="get">
   <center>
     <table cellpadding='10%'>
        <tr>
            <td><h5>E-Mail:<font color="red">*</font></h5></td>
            <td><input type='email' name='mail' required/></td>
            <td><h5>Pseudo:<font color="red">*</font></h5></td>
            <td><input type='text' name='pseudo' required/></td>
        </tr>
        <tr>
            <td><h5>Mot de passe:<font color="red">*</font></h5></td>
            <td><input type='password' name='pswd' pattern=".{8,12}" required title="8 to 12 caractères"/></td>
            <td><h5>Confirmer mot de passe:<font color="red">*</font></h5></td>
            <td><input type='password' name='pswdc' required/></td>
        </tr>
            <tr>
            </tr>
        </table>
        <input type='submit'/>
     </center>
   </form>
   </center>
   <footer class="foot">
        <p>Chat Sur Roulette ©</p>
   </footer>
  </body>
</html>