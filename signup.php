<?php
    if(isset($_GET['nom'],$_GET['prenom'],$_GET['birthdate'],$_GET['mail'],$_GET['pswd'],$_GET['pswdc'])){
        //Requête création de nouveau compte.
    }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Chat Sur Roulette : inscription</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="style.css"/>
  </head>
  
  <body>
    <img src="chaton.jpg" width="1900" height="75"/>
    <div class="topnav" id="myTopnav">
     <a href="home.php">Accueil</a>
     <a href="signup.php">Inscription</a>
     <a href="signin.php">Connexion</a>
     <a href="about.php">A propos</a>
   </div>
   
   <h2><center>S'inscrire</center></h2>
   </br>
   <form action="account.php" method="get">
   <center>
     <table cellpadding='10%'>
        <tr>
            <td><h4>Nom :<font color="red">*</font></h4></td>
            <td><input type='text' name='nom' required/></td>
			<td><h4>Prénom :<font color="red">*</font></h4></td>
            <td><input type='text' name='prenom' required/></td>
			<td><h4>Date de naissance :<font color="red">*</h4></td>
			<td><input type="date" name="birthdate"/></td>
        </tr>
        <tr>
            <td><h4>E-Mail :<font color="red">*</font></h4></td>
            <td><input type='email' name='mail' required/></td>
            <td><h4>Mot de passe :<font color="red">*</font></h4></td>
            <td><input type='password' name='pswd' pattern=".{8,12}" required title="De 8 à 12 caractères"/></td>
            <td><h4>Confirmer mot de passe :<font color="red">*</font></h4></td>
            <td><input type='password' name='pswdc' required/></td>
        </tr>
            <tr>
            </tr>
        </table>
        <input type='submit'/>
     </center>
   </form>
   
   <footer class="foot">
        <p>Chat Sur Roulette ©</p>
   </footer>
  </body>
</html>