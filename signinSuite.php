<?php
/*
  Projet     : Hey Change
  Auteur     : Hanaé Lepek
  Date       : 2021
  Sujet      : Page d'inscription - deuxième partie
*/

include("backend/autoload.php");

session_start();

//Vérifier que l'utilisateur est déconnecté ou que c'est un administrateur
VerifyAccessibility([0]);

//récupérer les données du formulaire
$toi = FILTER_INPUT(INPUT_POST, "toi", FILTER_SANITIZE_STRING);
$scolarite = FILTER_INPUT(INPUT_POST, "scolarite", FILTER_SANITIZE_STRING);
$idEtablissement = FILTER_INPUT(INPUT_POST, "lastName", FILTER_SANITIZE_STRING);
$terminer = FILTER_INPUT(INPUT_POST, "Terminer", FILTER_SANITIZE_STRING);

if($terminer){
  //On vérifie que les premières informations de l'utilisateur ont été enregistrées
  if(isset($_SESSION["EnCreation"])){
    echo isset($_SESSION["EnCreation"]);
    //Enregistrer l'utilisateur dans la base de données
    SignUserIn($_SESSION["EnCreation"][0], $_SESSION["EnCreation"][1], $_SESSION["EnCreation"][2], 
    $_SESSION["EnCreation"][5], $toi, $scolarite, $_SESSION["EnCreation"][3], $_SESSION["EnCreation"][4], $idEtablissement);
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
  <a href="creeruncompte.html">retour</a>
<h1>Crée ton profil</h1> 

<h3>* impose une réponse</h3>
    
<form action="" method="post" class="form-autre"
style="width:200px;">
    
    	<select id="school" name="school" required >
		<option value="false" disabled selected>Selectionne ton école:*</option>
		<optgroup label="Collège">
		<option value="collegeAndreChavanne">Collège André Chavanne</option>
		<option value="collegeCalvin">Collège Calvin</option>
		<option value="collegeClaparede">Collège Claparède</option>
		<option value="collegeCandolle">Collège de Candolle</option>
		<option value="collegeDeSaussure">Collège De Saussure</option>
		<option value="collegeEmilieGourd">Collège Émilie Gourd</option>
		<option value="CollegeDeStael">Collège De Staël</option>
		<option value="collegeRousseau">Collège Rousseau</option>
		<option value="collegeSismondi">Collège Sismondi</option>
	  	<option value="collegeVoltaire">Collège Voltaire</option>
		  </optgroup>
	  	<optgroup label="ECG">
		<option value="ECGHenryDunant">ECG Henry Dunant</option>
	  	<option value="ECGDeStael">ECG De Staël</option>
		<option value="ECGJeanPiaget">ECG Jean Piaget</option>
	  	<option value="ECGEllaMaillart">ECG Ella Maillart</option>
	  	<option value="ECGAimeeStitelmann">ECG Aimée-Stitelmann</option>
		</optgroup>
	  	<optgroup label="CFP Arts">
	  	<option value="CFPArtsBij">CFP Arts-Bijouterie</option>
		<option value="CFPArtsCeram">CFP Arts-Céramique</option>
		<option value="CFPArtsCVT">CFP Arts-Création de vêtements</option>
		<option value="CFPArtsDanse">CFP Arts-Danse Contemporaine</option>
		<option value="CFPArtsDAI">CFP Arts-Dessin d'architecture d'intérieur</option>
		<option value="CFPArtsPoly">CFP Arts-Polydesign 3D</option>
		<option value="CFPArtsGR">CFP Arts-Graphisme</option>
		<option value="CFPArtsID">CFP Arts-Interactive Media Design</option>
		</optgroup> 
		<optgroup label="École de Commerce">
	  	<option value="EcoleDeCommRaymondUldry">École de Commerce Raymond Uldry</option>
	  	<option value="EspaceEntreprise">Éspace Entreprise</option>
	  	<option value="EcoleDeCommEmilieGourd">École de Commerce Emilie Gourd</option>
	  	<option value="EcoleDeCommAimeeStitelmann">École de Commerce Aimée-Stitelmann</option>
	  	<option value="EcoleDeCommAndreChavanne">École de Commerce André-Chavanne</option>
	  	<option value="EcoleDeCommNicolasBouvier">École de Commerce Nicolas Bouvier</option>
	  	</optgroup>
		<optgroup label="CFPC">
		<option value="CFPCBois">CFPC-métiers du bois</option>
		<option value="CFPCPierre">CFPC-métiers de la pierre</option>
		<option value="CFPCSF">CFPC-structure et finitions</option>
		<option value="CFPCMetal">CFPC-métallurgie du bâtiment</option>
		<option value="CFPCElec">CFPC-électricité du bâtiment</option>
		<option value="CFPCCP">CFPC-conception et planification</option>
		</optgroup>
		<optgroup label="CFPNE/Lullier">
	 	<option value="CFPNEH">CFPNE-Horticulture (Floriculture et Paysagisme)</option>
		 <option value="CFPNEH">CFPNE-Horticulture (Pepinière et Paysagisme)</option>
		 <option value="CFPNEF">CFPNE-Fleuriste</option>
		</optgroup>
		<optgroup label="CFPSa">
		<option value="CFPSaDent">Ecole du domaine dentaire</option>
		<option value="CFPSaAssistantMedical">Ecole d'assistantes et assistants médicaux</option>
		<option value="CFPSaLabo">Ecole des métiers du laboratoire</option>
		<option value="CFPSaAssistantCommunautaire">Ecole d'assistant-e-s en soins et santé communautaire</option> 
		</optgroup>
		<optgroup label="CFPSo">
	  	<option value="CFPSoDiet">Ecole professionnelle de cuisinier-ère-s en diététique</option>
	  	<option value="CFPSoAssistant">Ecole d'assistant-e-s socio-éducatif-ve-s</option>
		</optgroup>
		<optgroup label="CFPSHR">
	  	  <option value="CFPSHRBoulangerie">CFPSHR-Boulangerie-Pâtisserie-Confiserie</option>
		  <option value="CFPSHRCuisine">CFPSHR-Cuisinier/ère</option>
		  <option value="CFPSHREmpCuisine">CFPSHR-Employé/e de cuisine</option>
		  <option value="CFPSHRSpeResto">CFPSHR-Spécialiste en restauration</option>
		  <option value="CFPSHREmpResto">CFPSHR-Employé.e en restauration</option>
		  <option value="CFPSHRCoiffure">CFPSHR-Coiffure</option>
		  <option value="CFPSHRLogistique">CFPSHR-Logistique</option>
		</optgroup>
		<optgroup label="CFPT">
	  	<option value="CFPTInformatique">École d'informatique</option>
		<option value="CFPTElectronique">École d'électronique</option>
		<option value="CFPTHorlogerie">École d'horlogerie</option>
		<option value="CFPTMecaIndu">École de mécatronique industrielle</option>
		<option value="CFPTAuto">École des métiers de l'automobile</option>
		</optgroup>
    </select>
		<br>

	<h2 class="ajouterphoto"> Ajoute une photo de profil</h2>	
	<label for="addpicture">
		<img class="ajouterimage" src="images/ajouterimage.png" alt="dd" srcset="">
	</label>	
	<input class="cacher" type="file" id="addpicture" name="addpicture">

	<script>
		document.querySelector("#addpicture").addEventListener("change", function (input) {
			console.log(input)
			if (input.target.files && input.target.files[0]) {
				
				var reader = new FileReader();
				reader.onload = function (e) {
					input.target.parentElement.querySelector("label img").src = e.target.result
				}
				reader.readAsDataURL(input.target.files[0]);
			}
		})
	</script>
	

     <br>
    <input class="big" type="text" id="scolarite" name="scolarite" 
       minlength="0" maxlength="300" size="35" height="10" placeholder="Ici, Tu peux décrire ta scolarité:">

    <br>
    <input class="big" type="text" id="toi" name="toi" 
       minlength="0" maxlength="300" size="35" placeholder="Ici, Tu peux écrire à propos de toi:">

        <br>

    
       <button type="submit" id="creer" name="Terminer" value="Terminer" 
	    size="10"><span>Terminer</span></button>

 </form>
 
    <footer>
        <div class="navbar"></div>
    </footer>
  </body>
</html>
