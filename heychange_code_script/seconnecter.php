<?php
/*
* HeyChange
* Se connecter
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
    <title>M'identifier</title>
</head>
<body>

<h1>Identifie-toi</h1> 
    
<form action="home.php" method="get" class="form-connection">
    
    <input type="text" id="IdUtilisateur" name="IdUtilisateur" required
       minlength="4" maxlength="10" size="30" placeholder="Entre ton pseudo:">

        <br>

       
    <input type="email" id="email" name="email" required="@eduge.ch"
        minlength="10" maxlength="30" size="30" placeholder="Entre ton adresse e-mail eduge">

        <br>

       
       <input type="password" name="password" autocomplete="current-password" required="" minlength="8" size="30" id="id_password" placeholder="Entre ton mot-de-passe:">
       <i class="far fa-eye"  id="togglePassword" style="margin-left: -30px; cursor: pointer;" ></i>

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




       <button type="submit" id="creer" name="creer" value="Terminer"  required
       minlength="4" maxlength="10" size="10"><span>Terminer</span></button>




       <h2>Pas de compte?</h2> <br>
        <a href="creeruncompte.php">Crée ton compte</a>



        </form>
    <footer>
        <div class="navbar"></div>
    </footer>




    
    

</body>
</html>