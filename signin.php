<?php
/*
  Projet     : Hey Change
  Auteur     : Hanaé Lepek
  Date       : 2021
  Sujet      : Page d'inscription - première partie
*/

include("backend/autoload.php");

session_start();

//Vérifier que l'utilisateur est déconnecté ou que c'est un administrateur
VerifyAccessibility([0]);

//récupérer les données du formulaire
$username = FILTER_INPUT(INPUT_POST, "username", FILTER_SANITIZE_STRING); 
$nom = FILTER_INPUT(INPUT_POST, "nom", FILTER_SANITIZE_STRING);
$prenom = FILTER_INPUT(INPUT_POST, "prenom", FILTER_SANITIZE_STRING);
$email = FILTER_INPUT(INPUT_POST, "email", FILTER_SANITIZE_STRING);
$instagram = FILTER_INPUT(INPUT_POST, "instagram", FILTER_SANITIZE_STRING);
$myPassword = FILTER_INPUT(INPUT_POST, "password", FILTER_SANITIZE_STRING);
$creer = FILTER_INPUT(INPUT_POST, "creer", FILTER_SANITIZE_STRING);

if($creer){
  //Si tous les paramètres ont bien été entrés
  if($username && $email && $prenom && $myPassword){
    //Vérifier le format de l'email (eduge)
    if(true){
      echo "okkk";
      //Enregistrer les données dans la session 
      $_SESSION["EnCreation"] = [$username, $nom, $prenom, $email, $instagram, $myPassword];
      header('Location: signinSuite.php');
      exit;
    }
  }
}
?>

<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <Link Rel="Stylesheet" Href="Https://Stackpath.Bootstrapcdn.Com/Bootstrap/4.3.1/Css/Bootstrap.Min.Css">
    <Link Rel="Stylesheet" Href="Https://Cdnjs.Cloudflare.Com/Ajax/Libs/Font-Awesome/5.9.0/Css/All.Css">
    <link rel="stylesheet" href="https://use.typekit.net/bve5vcq.css">
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css' rel='stylesheet' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <title>Créer mon compte</title>
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <div class="titre">
  <h1>Crée ton profil</h1> 
  <h5 class="double_cree_titre" >Crée ton profil</h5> 
  </div>
    <form action="signinSuite.php" method="post" class="form-creer">
      
        <input type="text" id="username" name="username" required
           minlength="4" maxlength="10" size="40" placeholder="Écris ton pseudo:*"> <br>
        
        <input type="email" id="email" name="email" required  minlength="10" maxlength="60" size="40"  placeholder="Entre ton adresse e-mail edu:*" pattern="[a-z0-9._%+-]+@eduge\.ch$"><br>

       <input type="text" id="instagram" name="instagram" size="40"  placeholder="Écris ton instagram:"><br>        
    
        <input type="text" id="prenom" name="prenom" required maxlength="30" size="40"  placeholder="Écris ton prénom:*"><br>

        <input type="text" id="nom" name="nom"   maxlength="30" size="40"  placeholder="Écris ton nom"><br>

        <input type="password" onkeyup='check();' name="password" autocomplete="current-password" size="40" required minlength="8" id="id_password" placeholder="Choisis ton mot-de-passe:*">
        <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
     
         <script> 
             const togglePassword = document.querySelector('#togglePassword');
             const password = document.querySelector('#id_password');
      
             togglePassword.addEventListener('click', function (e) {
              // toggle the type attribute
              const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
              password.setAttribute('type', type);
              // toggle the eye slash icon
              this.classList.toggle('fa-eye-slash');
             });
             
         </script>
    
         <br>   
           
           <input type="password" onkeyup='check();' name="passwordConfirm" autocomplete="current-password" size="40" required="password"  minlength="8" id="id_passwordConfirm" placeholder="Confirme ton mot-de-passe:*">
           <i class="far fa-eye" id="togglepasswordConfirm" style="margin-left: -30px; cursor: pointer;"></i> <br>
           <span id='messageErreur'></span>
          <script> 
            const togglepasswordConfirm = document.querySelector('#togglepasswordConfirm');
            const passwordConfirm = document.querySelector('#id_passwordConfirm');
     
            togglepasswordConfirm.addEventListener('click', function (e) {
             // toggle the type attribute
             const type = passwordConfirm.getAttribute('type') === 'password' ? 'text' : 'password';
             passwordConfirm.setAttribute('type', type);
             // toggle the eye slash icon
             this.classList.toggle('fa-eye-slash');
            });
            

            var check = function() {
      if (document.getElementById('id_password').value ==
          document.getElementById('id_passwordConfirm').value) {
          document.getElementById('messageErreur').style.color = 'green';
          document.getElementById('messageErreur').innerHTML = '';
      } else {
      		document.getElementById('messageErreur').style.color = 'red';
          document.getElementById('messageErreur').innerHTML = 'Ce n\'est pas le même mot de passe';
      }
  }






          </script>
        
           <button type="submit" id="creer" name="creer" value="creer" size="10"><span>Continuer</span></button>
    
    
    
    
           <h2>Tu as déjà un compte?</h2>
            <a href="login.php">Connecte-toi</a>
    
    
    
        </form>
        
        <footer>
            <div class="navbar"></div>
        </footer>
  </body>
</html>
