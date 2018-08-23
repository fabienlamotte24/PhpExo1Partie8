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
              <div class="offset-3 col-6 info">
                <p>User Agent: <span class="bold"><?= $_SERVER['HTTP_USER_AGENT']; ?></span></p><!--Affichage de l'User Agent-->
                  <!--$_SERVER['HTTP_USER_AGENT'] est une fonction pré-établie par PHP pour connaître l'User Agent-->
                <p>Votre adresse IP est: <span class="bold"><?= $_SERVER['REMOTE_ADDR']; ?></span></p><!--Affichage de la valeur de session-->
                  <!--$_SERVER['REMOTE_ADDR'] est une fonction pré-établie par PHP pour connaître l'adresse IP-->
                <p>Nom du serveur: <span class="bold"> <?= $_SERVER['SERVER_NAME']; ?></span></p><!--Affichage de la valeur de session-->
              </div>
          </div>
      </div>
  </body>
</html>
