<?php
session_start();

$_SESSION['userAgent'] = session_id();
$_SESSION['serverName'] = 'serverDeBGMaGle';
?>
<!DOCTYPE html>
<html lang="foreach" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 1</title>
  </head>
  <body>
      <p>
        Votre User Agent est : <?php echo $_SESSION['userAgent']; ?><br />
        Votre adresse IP est: <?php echo $_SERVER['REMOTE_ADDR']; ?> <br />
        Et votre serveur s'appelle => <?php echo $_SESSION['serverName']; ?>
      </p>
  </body>
</html>
