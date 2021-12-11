<?php
/*
* HeyChange
* Annonce
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.typekit.net/bve5vcq.css">
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js'></script>
	<link href='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css' rel='stylesheet' />
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>

<a href="home.php">RETOUR</a>
    <div class="titre">
    <h1 id="titre">Cours de photo</h1>
    </div>

    <div class="clickProfil" id="idUtilisateur"><a href="randomuser.php">@123456789</a></div>

  <div class="annoncecontent">
    <div class="infoannonce">
       <div class="lieu"><p>Lieu: <span id="lieuannonce">CFP Arts</span> </p></div>
       <div class="type"><p>Type: <span id="typeannonce">Propose un service</span></p></div>
    </div>

    <div class=“photo-hue-rotate”>
        <div class="lik"></div>
        <a class="bichrome" href="heychange_code_script/images/photo.jpg">
            <figure>
            <img src="heychange_code_script/images/photo.jpg" alt="">
                <figcaption id="legendePhotoAnnonce">Cours de photo pour débutant <br> 
                (niveau 2ème année)</figcaption>
            </figure>
        </a>

    </div>

    <p id="description"> Ayant fait des cours de photo en première et deuxième année dans ma formation au CFP Arts, je saurais vous apprendre les bases techniques telles que l'utilisation des ISO, de l'ouverture du diaphragme, de la vitesse d'obturation... </p>

  </div>


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
      coordinates: [6.1176508,46.2217029] 
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

<div class="question"></div>

    <footer><div class="navbar"><a class="btnCreateIdea" href="chat.php" name="contacter" value="contacter"><span>Contacter</span> </a></div></footer>





</body>

</html>