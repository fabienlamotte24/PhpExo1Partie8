<?php
    session_start();//Démarrage de la session de l'utilisateur

    //Déclaration d'une variable de session 'userAgent'
    //session_id s'il n'est pas défini génère un id aléatoire
    //C'est une fonction préétabli par PHP
    $_SESSION['userAgent'] = session_id();
    $_SESSION['serverName'] = 'serveurDeMaladeT\'esPasPrêt';//Déclaration d'une variable de session 'serverName'
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Exercice 1</title>
  </head>
  <body>
      <div class="container">
          <div class="row">
              <div class="offset-lg-3 col-lg-6 info">
                <p>
                    Votre User Agent est: <b><?php echo $_SESSION['userAgent']; ?></b><br /><!--Affichage de la valeur des valeurs de session-->
                    Votre adresse IP est: <b><?php echo $_SERVER['REMOTE_ADDR']; ?></b> <br /><!--Affichage de la valeur des valeurs de session-->
                  <!--$_SERVER['REMOTE_ADDR'] est une fonction pré-établie par PHP pour connaître l'adresse IP-->
                  Et votre serveur s'appelle: <b> <?php echo $_SESSION['serverName']; ?></b><!--Affichage de la valeur des valeurs de session-->
                </p>
              </div>
          </div>
      </div>
  </body>
</html>
