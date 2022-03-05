<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <title>Blog de Wizz</title>
</head>
<body>
  
      <nav>
         <label class="logo">Blog de Wizz</label>
         <ul>
            <li><a class="active" href="#">Accueil</a></li>
            <li>
               <a href="publication.php">Publications
               <i class="fas fa-caret-down"></i>
               </a>
               <ul>
                  <li><a target="_BLANK" href="https://github.com/WizzDev-WZ/">Github</a></li>
                  <li><a target="_BLANK" href="https://www.youtube.com/channel/UC7x1G0cpP0C3Nc_kzff30Cw">YouTube</a></li>
               </ul>
            </li>
         </ul>
      </nav>
      <div class="container">
        <div class="text">Bienvenue sur le blog !</div>
      </div>
  <h3 class="sondage">Sondage du matin ^^</h3>
  <form method="get">
    <input type="text" name="coffee" id="coffee" placeholder="Votre café préférée">
    <input type="submit" name="formsend" id="formsend">
  </form>

  <p>Votre café:</p>
  <?php

      if(isset($_GET['formsend'])){
        echo $_GET['coffee'];
      }
  
  ?>
      <section></section>
</body>
</html>