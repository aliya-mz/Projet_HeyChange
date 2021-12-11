<?php
/*
  Projet      : HeyChange
  Date        : 2021
  Auteur      : Hanaé Lepek
  Description : Compte Random
*/
include("backend/autoload.php");
session_start();
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- HeyChange CSS -->
    <!-- TYPO -->
    <link rel="stylesheet" href="https://use.typekit.net/bve5vcq.css">
    <!-- /TYPO -->
    <link rel="stylesheet" href="css/style.css">
    <Link Rel="Stylesheet"Href="Https://Stackpath.Bootstrapcdn.Com/Bootstrap/4.3.1/Css/Bootstrap.Min.Css">
     <Link Rel="Stylesheet" Href="Https://Cdnjs.Cloudflare.Com/Ajax/Libs/Font-Awesome/5.9.0/Css/All.Css">
        
    <title>Profil</title>
</head>
<body>
 

<a class="retour" href="home.php">RETOUR</a>


<div class="titre">
<?php echo "<h1>@123456789" . $_SESSION["EnCreation"][0] . "</h1>"; ?>
   
</div>
<div class="profilcontent">
<?php echo "<p class=\"textgrasg\">" . $_SESSION["EnCreation"][2] . " " .  $_SESSION["EnCreation"][1] . "</p>" ;?>   
<?php echo "<p class=\"textinstagram\">" . $_SESSION["EnCreation"][4] . "</p>" ;?>   

<?php echo "<div class=\"scolarite textgras\"><p>" . $_SESSION["EnCreation"][7] . "</p></div>";?> 


<img class="pdp" src="heychange_code_script/images/photo.jpg" alt="">


<?php 
 echo "<div class=\"description\"><p>" . $_SESSION["EnCreation"][6] . "</p></div>"; ?>
</div>


<ul class="tabs">
    <li class="jaune"><a href="#tab1">JE RECHERCHE</a></li>
    <li class="gris"><a href="#tab2">JE PROPOSE</a></li>
</ul>
<div class="pane">
    <div id="tab1">
        <h2>@12345678</h2>
        
    </div>
    <div id="tab2" style="display:none;">
        <h2>COURS DE PHOTO</h2>
        
    </div>
</div>

<div class="question"></div>

<script>
$(document).ready(function() {
    $("ul.tabs a").click(function() {
        $(".pane div").hide();
        $($(this).attr("href")).show();
    });
})
</script>

<footer> 
    <div class="navbar">
     <div class="container"> 
         <div class="row"> 
            <div class="col"><a href="home.php"><img src="heychange_code_script/images/home.svg" alt=""></a></div>
            <div class="col"><a href="chat.php"><img src="heychange_code_script/images/chat.svg" alt=""></a></div>
            <div class="col"><a href="createAnnonce.php"><img src="heychange_code_script/images/Icon awesome-plus.svg" alt=""></a></div>
            <div class="col"><a href="favorite.php"><img src="heychange_code_script/images/favoris.svg" alt=""></a></div>
            <div class="col"><a href="user.php"><img src="heychange_code_script/images/profil_active.svg" alt=""></a></div>
        </div> 
     </div>
    </div> 
</footer>
</body>
</html>