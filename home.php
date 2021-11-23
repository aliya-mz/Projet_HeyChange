<?php
/*
  Projet     : Hey Change
  Auteur     : Hanaé Lepek
  Date       : 2021
  Sujet      : Page principale de l'application
*/

session_start();

include("backend/autoload.php");

//Afficher des annonces aléatoires
/*if(GetUserRole()==0){
	
}*/
/*
$informations = getUser();
echo "<div>". $informations["nom"]. " " . "</div>";*/
?>

<!doctype html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- HeyChange CSS -->
	<Link Rel="Stylesheet" Href="Https://Stackpath.Bootstrapcdn.Com/Bootstrap/4.3.1/Css/Bootstrap.Min.Css">
	<Link Rel="Stylesheet" Href="Https://Cdnjs.Cloudflare.Com/Ajax/Libs/Font-Awesome/5.9.0/Css/All.Css">
	<link rel="stylesheet" href="https://use.typekit.net/bve5vcq.css">
	<script src='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js'></script>
	<link href='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css' rel='stylesheet' />
  <link href="css/style.css" rel="stylesheet"> 
  <title>Accueil</title>
  </head>

  <body>
    <header>
      <a href="home.php">
        <div class="logo_heychange"></div>
      </a>
    </header>

    <!-------------Match------------------------>
    <div id="stacked-cards-block" class="stackedcards stackedcards--animatable init">
      <div class="stackedcards-container">
        <div class="card-item proposition">
          <a href="annonce.php">
            <div class=“photo-hue-rotate”>
              <a class="bichrome" href="heychange_code_script/images/photo.jpg"><img src="heychange_code_script/images/photo.jpg" alt=""></a>
            </div>
            <h2>COURS DE PHOTO</h2>
            <p>Lorem ipsum dolor sit amet,
              consetetur sadipscing elitr, sed
              diam nonumy eirmod tempor</p>
          </a>
        </div>
        <div class="card-item demande">
          <div class=“photo-hue-rotate”>
            <a class="bichrome" href="heychange_code_script/images/photo.jpg"><img src="heychange_code_script/images/photo.jpg" alt=""></a>
          </div>
          <h2>COURS DE PHOTO</h2>
          <p>Lorem ipsum dolor sit amet,
            consetetur sadipscing elitr, sed
            diam nonumy eirmod tempor</p>
        </div>
        <div class="card-item proposition">
          <div class=“photo-hue-rotate”>
            <a class="bichrome" href="heychange_code_script/images/photo.jpg"><img src="heychange_code_script/images/photo.jpg" alt=""></a>
          </div>
          <h2>COURS DE PHOTO</h2>
          <p>Lorem ipsum dolor sit amet,
            consetetur sadipscing elitr, sed
            diam nonumy eirmod tempor</p>
        </div>
        <div class="card-item proposition">
          <div class=“photo-hue-rotate”>
            <a class="bichrome" href="heychange_code_script/images/photo.jpg"><img src="heychange_code_script/images/photo.jpg" alt=""></a>
          </div>
          <h2>COURS DE PHOTO</h2>
          <p>Lorem ipsum dolor sit amet,
            consetetur sadipscing elitr, sed
            diam nonumy eirmod tempor</p>
        </div>
        <div class="card-item proposition">
          <div class=“photo-hue-rotate”>
            <a class="bichrome" href="heychange_code_script/images/photo.jpg"><img src="heychange_code_script/images/photo.jpg" alt=""></a>
          </div>
          <h2>COURS DE PHOTO</h2>
          <p>Lorem ipsum dolor sit amet,
            consetetur sadipscing elitr, sed
            diam nonumy eirmod tempor</p>
        </div>
        <div class="card-item demande">
          <div class=“photo-hue-rotate”>
            <a class="bichrome" href="heychange_code_script/images/photo.jpg"><img src="heychange_code_script/images/photo.jpg" alt=""></a>
          </div>
          <h2>COURS DE PHOTO</h2>
          <p>Lorem ipsum dolor sit amet,
            consetetur sadipscing elitr, sed
            diam nonumy eirmod tempor</p>
        </div>
        <div class="card-item demande">
          <div class=“photo-hue-rotate”>
            <a class="bichrome" href="heychange_code_script/images/photo.jpg"><img src="heychange_code_script/images/photo.jpg" alt=""></a>
          </div>
          <h2>COURS DE PHOTO</h2>
          <p>Lorem ipsum dolor sit amet,
            consetetur sadipscing elitr, sed
            diam nonumy eirmod tempor</p>
        </div>
      </div>
      <div class="stackedcards--animatable stackedcards-overlay top">TOP</div>
      <div class="stackedcards--animatable stackedcards-overlay right">Ajouté aux favoris</div>
      <div class="stackedcards--animatable stackedcards-overlay left">Ne convient pas</div>
    </div>
    <div class="global-actions">
      <div class="left-action"><img src="" alt=""></div>
      <div class="right-action"><img src="" alt=""></div>
    </div>
    <!-------------/Match------------------------>
    <!-------------RECHERCHE------------------------->
    <div Class="Recherche_p">
      <Form Class="Form-Inline My-2 My-Lg-0">
        <Div Class="Recherche-Barr">
          <Input Class="Recherche-Input" Type="Search" Placeholder="" Aria-Label="Search">
          <A Href="#" Class="Recherche-Icone">
            <I Class="Fas Fa-Search"></I>
          </A>
        </Div>
      </Form>
    </div>
    <!-------------/RECHERCHE------------------------->
    <form action="get">
    <select id="school" name="school" class="lieuannonce filtre col-5">
      <option value="tout" >Établissement</option>
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
    </form>

    <form action="" class="typeannonce filtre col-5">
      <select name="typeannonce" id="typeannonce" value="Type d'annonce">
        <option value="tout" >Type d'annonce</option>
        <optgroup label="Offre">
          <option value="Offre">Offre</option>
          <option value="Offre">Offre matérielle</option>
          <option value="Offre">Offre de service</option>
        </optgroup>
        <optgroup label="Demande">
          <option value="Demande">Demande</option>
          <option value="Demande">Demande matérielle</option>
          <option value="Demande">Demande de service</option>
        </optgroup>
      </select>
    </form>
    <!-------------MAP------------------------->
    <div id='map' style='width: 100%; height: 200px;'></div>
    <script>
      mapboxgl.accessToken =
      'pk.eyJ1IjoiaGFuYWVlZWxwayIsImEiOiJja3cwZXc4NzUwMG4yMnZtb2gzd3JpZHZiIn0.jVGoXwkmwx3hugxteB5IAg';
      var map = new mapboxgl.Map({
        container: 'map', // container ID
        style: 'mapbox://styles/hanaeeelpk/ckw0ef6y88qgh14m3uvrqn0vz', // style URL
        center: [6.14087, 46.20618], // starting position [lng, lat]
        zoom: 10 // starting zoom
      });

      // Add zoom and rotation controls to the map.
      map.addControl(new mapboxgl.NavigationControl(),'bottom-right');

  var geojson = {
    type: 'SchoolCollection',
    features: [
      {
    type: 'Collège André-Chavanne',
    geometry: {
      type: 'Point',
      coordinates: [46.2217029,6.1176508] 
    },
    properties: {
      title: 'Collège André-Chavanne',
      description: 'Av. Trembley 14, 1209 Genève',
      customLink: 'https://edu.ge.ch/secondaire2/cecha/vie-de-lecole'
    }
    }
    ]
  }


  // add markers to map
  geojson.features.forEach(function(marker) {

    // create a HTML element for each feature
    var el = document.createElement('div');
    el.className = 'marker' + ' ' + marker.properties.category;

    // make a marker for each feature and add to the map
    new mapboxgl.Marker(el)
    .setLngLat(marker.geometry.coordinates)
    .setPopup(new mapboxgl.Popup({ offset: 25 }) // add popups
    .setHTML('<a href="'+ marker.properties.customLink +'"><h3>' + marker.properties.title + '</h3><p>' + marker.properties.description + '</p></a>'))
    .addTo(map);
  });


  </script>
    </div>
    <!-- .map -->
    <!-------------/MAP------------------------->
    <!-------------LISTE------------------------->
    <div class="liste-annonce">

      <div href="annonce.php" class="card-item proposition liste-item-card">
        <div class=“photo-hue-rotate”>
          <a class="bichrome" href="heychange_code_script/images/photo.jpg"><img src="heychange_code_script/images/photo.jpg" alt=""></a>
        </div>
        <h2>COURS DE PHOTO</h2>
        <p>Lorem ipsum dolor sit amet,
          consetetur sadipscing elitr, sed
          diam nonumy eirmod tempor</p>
          
      </div>

      <div class="card-item demande liste-item-card">
        <div class=“photo-hue-rotate”>
          <a class="bichrome" href="heychange_code_script/images/photo.jpg"><img src="heychange_code_script/images/photo.jpg" alt=""></a>
        </div>
        <h2>COURS DE PHOTO</h2>
        <p>Lorem ipsum dolor sit amet,
          consetetur sadipscing elitr, sed
          diam nonumy eirmod tempor</p>
      </div>
      <div class="card-item proposition liste-item-card">
        <div class=“photo-hue-rotate”>
          <a class="bichrome" href="heychange_code_script/images/photo.jpg"><img src="heychange_code_script/images/photo.jpg" alt=""></a>
        </div>
        <h2>COURS DE PHOTO</h2>
        <p>Lorem ipsum dolor sit amet,
          consetetur sadipscing elitr, sed
          diam nonumy eirmod tempor</p>
      </div>
      <div class="card-item proposition liste-item-card">
        <div class=“photo-hue-rotate”>
          <a class="bichrome" href="heychange_code_script/images/photo.jpg"><img src="heychange_code_script/images/photo.jpg" alt=""></a>
        </div>
        <h2>COURS DE PHOTO</h2>
        <p>Lorem ipsum dolor sit amet,
          consetetur sadipscing elitr, sed
          diam nonumy eirmod tempor</p>
      </div>
      <div class="card-item proposition liste-item-card">
        <div class=“photo-hue-rotate”>
          <a class="bichrome" href="heychange_code_script/images/photo.jpg"><img src="heychange_code_script/images/photo.jpg" alt=""></a>
        </div>
        <h2>COURS DE PHOTO</h2>
        <p>Lorem ipsum dolor sit amet,
          consetetur sadipscing elitr, sed
          diam nonumy eirmod tempor</p>
      </div>
      <div class="card-item demande liste-item-card">
        <div class=“photo-hue-rotate”>
          <a class="bichrome" href="heychange_code_script/images/photo.jpg"><img src="heychange_code_script/images/photo.jpg" alt=""></a>
        </div>
        <h2>COURS DE PHOTO</h2>
        <p>Lorem ipsum dolor sit amet,
          consetetur sadipscing elitr, sed
          diam nonumy eirmod tempor</p>
      </div>
      <div class="card-item demande liste-item-card">
        <div class=“photo-hue-rotate”>
          <a class="bichrome" href="heychange_code_script/images/photo.jpg"><img src="heychange_code_script/images/photo.jpg" alt=""></a>
        </div>
        <h2>COURS DE PHOTO</h2>
        <p>Lorem ipsum dolor sit amet,
          consetetur sadipscing elitr, sed
          diam nonumy eirmod tempor</p>
      </div>
    </div>
    <!-------------/LISTE------------------------->






    <footer>
      <!-------------MENU------------------------>
      <div class="navbar">
        <div class="container">
          <div class="row">
            <div class="col"><a href="home.php"><img src="heychange_code_script/images/home_active.svg" alt=""></a></div>
            <div class="col"><a href="chat.php"><img src="heychange_code_script/images/chat.svg" alt=""></a></div>
            <div class="col"><a href="#"><img src="heychange_code_script/images/Icon awesome-plus.svg" alt=""></a></div>

            <div class="col"><a href="favorite.php"><img src="heychange_code_script/images/favoris.svg" alt=""></a></div>


            <div class="col"><a href="user.php"><img src="heychange_code_script/images/profil.svg" alt=""></a></div>
          </div>
        </div>
      </div>
      <!-------------/MENU------------------------>
    </footer>


    <script>
      document.addEventListener("DOMContentLoaded", function (event) {

        // Permet de se placer en mode favori (true)
        var isFavori = false;

        function stackedCards() {

          var stackedOptions = 'Top'; //Change stacked cards view from 'Bottom', 'Top' or 'None'.
          var rotate = true; //Activate the elements' rotation for each move on stacked cards.
          var items = 3; //Number of visible elements when the stacked options are bottom or top.
          var elementsMargin =
          10; //Define the distance of each element when the stacked options are bottom or top.
          var useOverlays = true; //Enable or disable the overlays for swipe elements.
          var maxElements; //Total of stacked cards on DOM.
          var currentPosition = 0; //Keep the position of active stacked card.
          var velocity = 0.3; //Minimum velocity allowed to trigger a swipe.
          var topObj; //Keep the swipe top properties.
          var rightObj; //Keep the swipe right properties.
          var leftObj; //Keep the swipe left properties.
          var listElNodesObj; //Keep the list of nodes from stacked cards.
          var listElNodesWidth; //Keep the stacked cards width.
          var currentElementObj; //Keep the stacked card element to swipe.
          var stackedCardsObj;
          var isFirstTime = true;
          var elementHeight;
          var obj;
          var elTrans;

          obj = document.getElementById('stacked-cards-block');
          stackedCardsObj = obj.querySelector('.stackedcards-container');
          listElNodesObj = stackedCardsObj.children;

          topObj = obj.querySelector('.stackedcards-overlay.top');
          rightObj = obj.querySelector('.stackedcards-overlay.right');
          leftObj = obj.querySelector('.stackedcards-overlay.left');

          countElements();
          currentElement();
          listElNodesWidth = stackedCardsObj.offsetWidth;
          currentElementObj = listElNodesObj[0];
          updateUi();

          //Prepare elements on DOM
          addMargin = elementsMargin * (items - 1) + 'px';

          if (stackedOptions === "Top") {

            for (i = items; i < maxElements; i++) {
              listElNodesObj[i].classList.add('stackedcards-top', 'stackedcards--animatable',
                'stackedcards-origin-top');
            }

            elTrans = elementsMargin * (items - 1);

            stackedCardsObj.style.marginBottom = addMargin;

          } else if (stackedOptions === "Bottom") {


            for (i = items; i < maxElements; i++) {
              listElNodesObj[i].classList.add('stackedcards-bottom', 'stackedcards--animatable',
                'stackedcards-origin-bottom');
            }

            elTrans = 0;

            stackedCardsObj.style.marginBottom = addMargin;

          } else if (stackedOptions === "None") {

            for (i = items; i < maxElements; i++) {
              listElNodesObj[i].classList.add('stackedcards-none', 'stackedcards--animatable');
            }

            elTrans = 0;

          }

          for (i = items; i < maxElements; i++) {
            listElNodesObj[i].style.zIndex = 0;
            listElNodesObj[i].style.opacity = 0;
            listElNodesObj[i].style.webkitTransform = 'scale(' + (1 - (items * 0.04)) +
              ') translateX(0) translateY(' + elTrans + 'px) translateZ(0)';
            listElNodesObj[i].style.transform = 'scale(' + (1 - (items * 0.04)) +
              ') translateX(0) translateY(' + elTrans + 'px) translateZ(0)';
          }

          if (listElNodesObj[currentPosition]) {
            listElNodesObj[currentPosition].classList.add('stackedcards-active');
          }

          if (useOverlays) {
            leftObj.style.transform = 'translateX(0px) translateY(' + elTrans +
              'px) translateZ(0px) rotate(0deg)';
            leftObj.style.webkitTransform = 'translateX(0px) translateY(' + elTrans +
              'px) translateZ(0px) rotate(0deg)';

            rightObj.style.transform = 'translateX(0px) translateY(' + elTrans +
              'px) translateZ(0px) rotate(0deg)';
            rightObj.style.webkitTransform = 'translateX(0px) translateY(' + elTrans +
              'px) translateZ(0px) rotate(0deg)';

            topObj.style.transform = 'translateX(0px) translateY(' + elTrans +
              'px) translateZ(0px) rotate(0deg)';
            topObj.style.webkitTransform = 'translateX(0px) translateY(' + elTrans +
              'px) translateZ(0px) rotate(0deg)';

          } else {
            leftObj.className = '';
            rightObj.className = '';
            topObj.className = '';

            leftObj.classList.add('stackedcards-overlay-hidden');
            rightObj.classList.add('stackedcards-overlay-hidden');
            topObj.classList.add('stackedcards-overlay-hidden');
          }

          //Remove class init
          setTimeout(function () {
            obj.classList.remove('init');
          }, 150);


          function backToMiddle() {

            removeNoTransition();
            transformUi(0, 0, 1, currentElementObj);

            if (useOverlays) {
              transformUi(0, 0, 0, leftObj);
              transformUi(0, 0, 0, rightObj);
              transformUi(0, 0, 0, topObj);
            }

            setZindex(5);

            if (!(currentPosition >= maxElements)) {
              //roll back the opacity of second element
              if ((currentPosition + 1) < maxElements) {
                listElNodesObj[currentPosition + 1].style.opacity = '.8';
              }
            }
          };

          // Usable functions
          function countElements() {
            maxElements = listElNodesObj.length;
            if (items > maxElements) {
              items = maxElements;
            }
          };

          //Keep the active card.
          function currentElement() {
            currentElementObj = listElNodesObj[currentPosition];
          };

          //Functions to swipe left elements on logic external action.
          function onActionLeft() {
            if (!(currentPosition >= maxElements)) {
              if (useOverlays) {
                leftObj.classList.remove('no-transition');
                topObj.classList.remove('no-transition');
                leftObj.style.zIndex = '8';
                transformUi(0, 0, 1, leftObj);

              }

              setTimeout(function () {
                onSwipeLeft();
                resetOverlayLeft();
              }, 300);
            }
          };

          //Functions to swipe right elements on logic external action.
          function onActionRight() {
            if (!(currentPosition >= maxElements)) {
              if (useOverlays) {
                rightObj.classList.remove('no-transition');
                topObj.classList.remove('no-transition');
                rightObj.style.zIndex = '8';
                transformUi(0, 0, 1, rightObj);
              }

              setTimeout(function () {
                onSwipeRight();
                resetOverlayRight();
              }, 300);
            }
          };

          //Functions de présentation des favoris.
          function onActionFavori() {
            //alert("Hello : " + isFavori?"favori":"no favori");
            isFavori = true;
            stackedCards();
          };

          //Functions to swipe top elements on logic external action.


          //Swipe active card to left.
          function onSwipeLeft() {
            removeNoTransition();
            transformUi(-1000, 0, 0, currentElementObj);
            if (useOverlays) {
              transformUi(-1000, 0, 0, leftObj); //Move leftOverlay
              transformUi(-1000, 0, 0, topObj); //Move topOverlay
              resetOverlayLeft();
            }
            currentPosition = currentPosition + 1;
            updateUi();
            currentElement();
            setActiveHidden();
          };

          //Swipe active card to right.
          function onSwipeRight() {
            removeNoTransition();
            transformUi(1000, 0, 0, currentElementObj);
            if (useOverlays) {
              transformUi(1000, 0, 0, rightObj); //Move rightOverlay
              transformUi(1000, 0, 0, topObj); //Move topOverlay
              resetOverlayRight();
            }

            currentPosition = currentPosition + 1;
            updateUi();
            currentElement();
            setActiveHidden();
            setActiveFavori();
          };

          //Swipe active card to top.
          function onSwipeTop() {
            removeNoTransition();
            transformUi(0, -1000, 0, currentElementObj);
            if (useOverlays) {
              transformUi(0, -1000, 0, leftObj); //Move leftOverlay
              transformUi(0, -1000, 0, rightObj); //Move rightOverlay
              transformUi(0, -1000, 0, topObj); //Move topOverlay
              resetOverlays();
            }

            currentPosition = currentPosition + 1;
            updateUi();
            currentElement();
            setActiveHidden();
          };

          //Remove transitions from all elements to be moved in each swipe movement to improve perfomance of stacked cards.
          function removeNoTransition() {
            if (listElNodesObj[currentPosition]) {

              if (useOverlays) {
                leftObj.classList.remove('no-transition');
                rightObj.classList.remove('no-transition');
                topObj.classList.remove('no-transition');
              }

              listElNodesObj[currentPosition].classList.remove('no-transition');
              listElNodesObj[currentPosition].style.zIndex = 6;
            }

          };

          //Move the overlay left to initial position.
          function resetOverlayLeft() {
            if (!(currentPosition >= maxElements)) {
              if (useOverlays) {
                setTimeout(function () {

                  if (stackedOptions === "Top") {

                    elTrans = elementsMargin * (items - 1);

                  } else if (stackedOptions === "Bottom" || stackedOptions === "None") {

                    elTrans = 0;

                  }

                  if (!isFirstTime) {

                    leftObj.classList.add('no-transition');
                    topObj.classList.add('no-transition');

                  }

                  requestAnimationFrame(function () {

                    leftObj.style.transform = "translateX(0) translateY(" + elTrans +
                      "px) translateZ(0)";
                    leftObj.style.webkitTransform = "translateX(0) translateY(" +
                      elTrans + "px) translateZ(0)";
                    leftObj.style.opacity = '0';

                    topObj.style.transform = "translateX(0) translateY(" + elTrans +
                      "px) translateZ(0)";
                    topObj.style.webkitTransform = "translateX(0) translateY(" +
                      elTrans + "px) translateZ(0)";
                    topObj.style.opacity = '0';

                  });

                }, 300);

                isFirstTime = false;
              }
            }
          };

          //Move the overlay right to initial position.
          function resetOverlayRight() {
            if (!(currentPosition >= maxElements)) {
              if (useOverlays) {
                setTimeout(function () {

                  if (stackedOptions === "Top") {
                    +2

                    elTrans = elementsMargin * (items - 1);

                  } else if (stackedOptions === "Bottom" || stackedOptions === "None") {

                    elTrans = 0;

                  }

                  if (!isFirstTime) {

                    rightObj.classList.add('no-transition');
                    topObj.classList.add('no-transition');

                  }

                  requestAnimationFrame(function () {

                    rightObj.style.transform = "translateX(0) translateY(" + elTrans +
                      "px) translateZ(0)";
                    rightObj.style.webkitTransform = "translateX(0) translateY(" +
                      elTrans + "px) translateZ(0)";
                    rightObj.style.opacity = '0';

                    topObj.style.transform = "translateX(0) translateY(" + elTrans +
                      "px) translateZ(0)";
                    topObj.style.webkitTransform = "translateX(0) translateY(" +
                      elTrans + "px) translateZ(0)";
                    topObj.style.opacity = '0';

                  });

                }, 300);

                isFirstTime = false;
              }
            }
          };

          //Move the overlays to initial position.
          function resetOverlays() {
            if (!(currentPosition >= maxElements)) {
              if (useOverlays) {

                setTimeout(function () {
                  if (stackedOptions === "Top") {

                    elTrans = elementsMargin * (items - 1);

                  } else if (stackedOptions === "Bottom" || stackedOptions === "None") {

                    elTrans = 0;

                  }

                  if (!isFirstTime) {

                    leftObj.classList.add('no-transition');
                    rightObj.classList.add('no-transition');
                    topObj.classList.add('no-transition');

                  }

                  requestAnimationFrame(function () {

                    leftObj.style.transform = "translateX(0) translateY(" + elTrans +
                      "px) translateZ(0)";
                    leftObj.style.webkitTransform = "translateX(0) translateY(" +
                      elTrans + "px) translateZ(0)";
                    leftObj.style.opacity = '0';

                    rightObj.style.transform = "translateX(0) translateY(" + elTrans +
                      "px) translateZ(0)";
                    rightObj.style.webkitTransform = "translateX(0) translateY(" +
                      elTrans + "px) translateZ(0)";
                    rightObj.style.opacity = '0';

                    topObj.style.transform = "translateX(0) translateY(" + elTrans +
                      "px) translateZ(0)";
                    topObj.style.webkitTransform = "translateX(0) translateY(" +
                      elTrans + "px) translateZ(0)";
                    topObj.style.opacity = '0';

                  });

                }, 300); // wait for animations time

                isFirstTime = false;
              }
            }
          };

          function setActiveHidden() {
            if (!(currentPosition >= maxElements)) {
              listElNodesObj[currentPosition - 1].classList.remove('stackedcards-active');
              listElNodesObj[currentPosition - 1].classList.add('stackedcards-hidden');
              listElNodesObj[currentPosition].classList.add('stackedcards-active');
            }
          };

          function setActiveFavori() {
            if (!(currentPosition >= maxElements)) {
              listElNodesObj[currentPosition - 1].classList.add('stackedcards-favori');

            }
          };

          //Set the new z-index for specific card.
          function setZindex(zIndex) {
            if (listElNodesObj[currentPosition]) {
              listElNodesObj[currentPosition].style.zIndex = zIndex;
            }
          };

          // Remove element from the DOM after swipe. To use this method you need to call this function in onSwipeLeft, onSwipeRight and onSwipeTop and put the method just above the variable 'currentPosition = currentPosition + 1'. 
          //On the actions onSwipeLeft, onSwipeRight and onSwipeTop you need to remove the currentPosition variable (currentPosition = currentPosition + 1) and the function setActiveHidden

          function removeElement() {
            currentElementObj.remove();
            if (!(currentPosition >= maxElements)) {
              listElNodesObj[currentPosition].classList.add('stackedcards-active');
            }
          };

          //Add translate X and Y to active card for each frame.
          function transformUi(moveX, moveY, opacity, elementObj) {
            requestAnimationFrame(function () {
              var element = elementObj;

              // Function to generate rotate value 
              function RotateRegulator(value) {
                if (value / 10 > 15) {
                  return 15;
                } else if (value / 10 < -15) {
                  return -15;
                }
                return value / 10;
              }

              if (rotate) {
                rotateElement = RotateRegulator(moveX);
              } else {
                rotateElement = 0;
              }

              if (stackedOptions === "Top") {
                elTrans = elementsMargin * (items - 1);
                if (element) {
                  element.style.webkitTransform = "translateX(" + moveX + "px) translateY(" + (
                      moveY + elTrans) + "px) translateZ(0) rotate(" + rotateElement +
                    "deg)";
                  element.style.transform = "translateX(" + moveX + "px) translateY(" + (moveY +
                    elTrans) + "px) translateZ(0) rotate(" + rotateElement + "deg)";
                  element.style.opacity = opacity;
                }
              } else if (stackedOptions === "Bottom" || stackedOptions === "None") {

                if (element) {
                  element.style.webkitTransform = "translateX(" + moveX + "px) translateY(" + (
                    moveY) + "px) translateZ(0) rotate(" + rotateElement + "deg)";
                  element.style.transform = "translateX(" + moveX + "px) translateY(" + (
                    moveY) + "px) translateZ(0) rotate(" + rotateElement + "deg)";
                  element.style.opacity = opacity;
                }

              }
            });
          };

          //Action to update all elements on the DOM for each stacked card.
          function updateUi() {
            requestAnimationFrame(function () {
              elTrans = 0;
              var elZindex = 5;
              var elScale = 1;
              var elOpac = 1;
              var elTransTop = items;
              var elTransInc = elementsMargin;

              for (i = currentPosition; i < (currentPosition + items); i++) {
                if (listElNodesObj[i] && (!isFavori || listElNodesObj[i].classList.contains(
                    "stackedcards-favori"))) {
                  if (stackedOptions === "Top") {

                    listElNodesObj[i].classList.add('stackedcards-top',
                      'stackedcards--animatable', 'stackedcards-origin-top');

                    if (useOverlays) {
                      leftObj.classList.add('stackedcards-origin-top');
                      rightObj.classList.add('stackedcards-origin-top');
                      topObj.classList.add('stackedcards-origin-top');
                    }

                    elTrans = elTransInc * elTransTop;
                    elTransTop--;

                  } else if (stackedOptions === "Bottom") {
                    listElNodesObj[i].classList.add('stackedcards-bottom',
                      'stackedcards--animatable', 'stackedcards-origin-bottom');

                    if (useOverlays) {
                      leftObj.classList.add('stackedcards-origin-bottom');
                      rightObj.classList.add('stackedcards-origin-bottom');
                      topObj.classList.add('stackedcards-origin-bottom');
                    }

                    elTrans = elTrans + elTransInc;

                  } else if (stackedOptions === "None") {

                    listElNodesObj[i].classList.add('stackedcards-none',
                      'stackedcards--animatable');
                    elTrans = elTrans + elTransInc;

                  }

                  listElNodesObj[i].style.transform = 'scale(' + elScale +
                    ') translateX(0) translateY(' + (elTrans - elTransInc) +
                    'px) translateZ(0)';
                  listElNodesObj[i].style.webkitTransform = 'scale(' + elScale +
                    ') translateX(0) translateY(' + (elTrans - elTransInc) +
                    'px) translateZ(0)';
                  listElNodesObj[i].style.opacity = elOpac;
                  listElNodesObj[i].style.zIndex = elZindex;

                  elScale = elScale - 0.04;
                  elOpac = elOpac - (1 / items);
                  elZindex--;
                }
              }

            });

          };

          //Touch events block
          var element = obj;
          var startTime;
          var startX;
          var startY;
          var translateX;
          var translateY;
          var currentX;
          var currentY;
          var touchingElement = false;
          var timeTaken;
          var topOpacity;
          var rightOpacity;
          var leftOpacity;

          function setOverlayOpacity() {

            topOpacity = (((translateY + (elementHeight) / 2) / 100) * -1);
            rightOpacity = translateX / 100;
            leftOpacity = ((translateX / 100) * -1);


            if (topOpacity > 1) {
              topOpacity = 1;
            }

            if (rightOpacity > 1) {
              rightOpacity = 1;
            }

            if (leftOpacity > 1) {
              leftOpacity = 1;
            }
          }

          function gestureStart(evt) {
            startTime = new Date().getTime();

            startX = evt.changedTouches[0].clientX;
            startY = evt.changedTouches[0].clientY;

            currentX = startX;
            currentY = startY;

            setOverlayOpacity();

            touchingElement = true;
            if (!(currentPosition >= maxElements)) {
              if (listElNodesObj[currentPosition]) {
                listElNodesObj[currentPosition].classList.add('no-transition');
                setZindex(6);

                if (useOverlays) {
                  leftObj.classList.add('no-transition');
                  rightObj.classList.add('no-transition');
                  topObj.classList.add('no-transition');
                }

                if ((currentPosition + 1) < maxElements) {
                  listElNodesObj[currentPosition + 1].style.opacity = '1';
                }

                elementHeight = listElNodesObj[currentPosition].offsetHeight / 3;
              }

            }

          };

          function gestureMove(evt) {
            currentX = evt.changedTouches[0].pageX;
            currentY = evt.changedTouches[0].pageY;

            translateX = currentX - startX;
            translateY = currentY - startY;

            setOverlayOpacity();

            if (!(currentPosition >= maxElements)) {
              evt.preventDefault();
              transformUi(translateX, translateY, 1, currentElementObj);

              if (useOverlays) {
                transformUi(translateX, translateY, topOpacity, topObj);

                if (translateX < 0) {
                  transformUi(translateX, translateY, leftOpacity, leftObj);
                  transformUi(0, 0, 0, rightObj);

                } else if (translateX > 0) {
                  transformUi(translateX, translateY, rightOpacity, rightObj);
                  transformUi(0, 0, 0, leftObj);
                }

                if (useOverlays) {
                  leftObj.style.zIndex = 8;
                  rightObj.style.zIndex = 8;
                  topObj.style.zIndex = 7;
                }

              }

            }

          };

          function gestureEnd(evt) {

            if (!touchingElement) {
              return;
            }

            translateX = currentX - startX;
            translateY = currentY - startY;

            timeTaken = new Date().getTime() - startTime;

            touchingElement = false;

            if (!(currentPosition >= maxElements)) {
              if (translateY < (elementHeight * -1) && translateX > ((listElNodesWidth / 2) * -1) &&
                translateX < (listElNodesWidth / 2)) { //is Top?

                if (translateY < (elementHeight * -1) || (Math.abs(translateY) / timeTaken >
                  velocity)) { // Did It Move To Top?
                  onSwipeTop();
                } else {
                  backToMiddle();
                }

              } else {

                if (translateX < 0) {
                  if (translateX < ((listElNodesWidth / 2) * -1) || (Math.abs(translateX) / timeTaken >
                      velocity)) { // Did It Move To Left?
                    onSwipeLeft();
                  } else {
                    backToMiddle();
                  }
                } else if (translateX > 0) {

                  if (translateX > (listElNodesWidth / 2) && (Math.abs(translateX) / timeTaken >
                      velocity)) { // Did It Move To Right?
                    onSwipeRight();
                  } else {
                    backToMiddle();
                  }

                }
              }
            }
          };

          element.addEventListener('touchstart', gestureStart, false);
          element.addEventListener('touchmove', gestureMove, false);
          element.addEventListener('touchend', gestureEnd, false);

          //Add listeners to call global action for swipe cards
          var buttonLeft = document.querySelector('.left-action');
          var buttonRight = document.querySelector('.right-action');

          buttonLeft.addEventListener('click', onActionLeft, false);
          buttonRight.addEventListener('click', onActionRight, false);

          //--
          var buttonFavori = document.querySelector('#btnFavori');
          buttonFavori.addEventListener('click', onActionFavori, false);


        }

        stackedCards();

      });
    </script>
  </body>
</html>
