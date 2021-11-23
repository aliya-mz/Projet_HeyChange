<?php
/*
* HeyChange
* Page de chargement
*/

session_start();

include("backend/autoload.php");

//Vérifier que l'utilisateur est déconnecté ou que c'est un administrateur
VerifyAccessibility([0]);

//Afficher des annonces aléatoire
$annoncesRandom = getRandomAnnonces();
?>
<!doctype html>
<html lang="fr">
  <head>
   <meta http-equiv="refresh" content="2;login.php" />

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- TYPO -->
    <link rel="stylesheet" href="https://use.typekit.net/bve5vcq.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    <!-- HeyChange CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>chargement HeyChange</title>
  </head>
  <body class="home">
   <div class="container">
       <div class="row align-items-center ">
           <div class="loader-group">
<img src="/heychange_code_script/images/logo_heychange.svg" alt="">
              
           </div>
       </div><!-- .row -->
   </div><!-- .container -->
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>



  
</html>
