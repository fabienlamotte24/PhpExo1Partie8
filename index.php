<?php
session_start();//Démarre le système de session

//Déclaration d'une variable de session 'userAgent'
//session_id s'il n'est pas défini génère un id aléatoire
//C'est une fonction préétabli par PHP
$_SESSION['userAgent'] = session_id();
$_SESSION['serverName'] = 'serverDeBGMaGle';//Déclaration d'une variable de session 'serverName'
?>
<!DOCTYPE html>
<html lang="foreach" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 1</title>
  </head>
  <body>
      <p>
        Votre User Agent est : <?php echo $_SESSION['userAgent']; ?><br /><!--Affichage de la valeur des valeurs de session-->
        Votre adresse IP est: <?php echo $_SERVER['REMOTE_ADDR']; ?> <br /><!--Affichage de la valeur des valeurs de session-->
        <!--$_SERVER['REMOTE_ADDR'] est une fonction pré-établie par PHP pour connaître l'adresse IP-->
        Et votre serveur s'appelle => <?php echo $_SESSION['serverName']; ?><!--Affichage de la valeur des valeurs de session-->
      </p>
  </body>
</html>
