<?php
/*
* HeyChange
* Création d'un compte
*/
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <Link Rel="Stylesheet" Href="Https://Stackpath.Bootstrapcdn.Com/Bootstrap/4.3.1/Css/Bootstrap.Min.Css">
	<Link Rel="Stylesheet" Href="Https://Cdnjs.Cloudflare.Com/Ajax/Libs/Font-Awesome/5.9.0/Css/All.Css">
	<link rel="stylesheet" href="https://use.typekit.net/bve5vcq.css">
	<link rel="stylesheet" href="style.css">
	<script src='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js'></script>
	<link href='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css' rel='stylesheet' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
     <title>Créer mon compte</title>
</head>
<body>

<h1>Crée ton profil</h1> 
    
<form action="suitecreation.php" method="get" class="form-floating form-creer">
  
    <input type="text" id="IdUtilisateur" name="IdUtilisateur" required
       minlength="4" maxlength="10" size="20" placeholder="Écris ton pseudo:*">
       

        <br>

    
    <input type="email" id="email" name="email" required
       minlength="10" maxlength="30" size="30"  placeholder="Entre ton adresse e-mail edu:*"
       pattern="/^.*@[eduge\.ch]$/">
        <br>

        
        <input type="password" name="password" autocomplete="current-password" size="30" required minlength="8" id="id_password" placeholder="Choisis ton mot-de-passe:*">
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

       
       <input type="password" name="password2" autocomplete="current-password" size="30" required="password"  minlength="8" id="id_password2" placeholder="Confirme ton mot-de-passe:*">
       <i class="far fa-eye" id="togglePassword2" style="margin-left: -30px; cursor: pointer;"></i>

    <script> 
        const togglePassword2 = document.querySelector('#togglePassword2');
        const password2 = document.querySelector('#id_password2');
 
        togglePassword2.addEventListener('click', function (e) {
         // toggle the type attribute
         const type = password2.getAttribute('type') === 'password' ? 'text' : 'password';
         password2.setAttribute('type', type);
         // toggle the eye slash icon
         this.classList.toggle('fa-eye-slash');
        });
        
    </script>
    
       <button type="submit" id="creer" name="creer"  required
       minlength="4" maxlength="10" size="10"><span>Continuer</span></button>




       <h2>Tu as déjà un compte?</h2>
        <a href="seconnecter.php">Connecte-toi</a>



        </form>
    <footer>
        <div class="navbar"></div>
    </footer>

</body>
</html>