<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- HeyChange CSS -->
    <link rel="stylesheet" href="https://use.typekit.net/bve5vcq.css">
    <Link Rel="Stylesheet"Href="Https://Stackpath.Bootstrapcdn.Com/Bootstrap/4.3.1/Css/Bootstrap.Min.Css">
        <Link Rel="Stylesheet" Href="Https://Cdnjs.Cloudflare.Com/Ajax/Libs/Font-Awesome/5.9.0/Css/All.Css">
    <link rel="stylesheet" href="css/style.css">
    <title>favoris</title>
</head>
<body>
    <header>
      
        <div class="row align-items-center ">
           <h1 class="page">Mes favoris</h1>
        </div>
        
</header>

<ul class="tabs">
    <li class="jaune"><a href="#tab1">PROFILS</a></li>
    <li class="gris"><a href="#tab2">ANNONCES</a></li>
</ul>
<div class="pane">
    <div id="tab1">
        <h2>@12345678</h2>
        
    </div>
    <div id="tab2" style="display:none;">
        <h2>COURS DE PHOTO</h2>
        
    </div>
</div>


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
            <div class="col"><a href="favorite.php"><img src="heychange_code_script/images/favoris_active.svg" alt=""></a></div>
            <div class="col"><a href="user.php"><img src="heychange_code_script/images/profil.svg" alt=""></a></div>
        </div> 
     </div>
    </div> 
</footer>
</body>
</html>