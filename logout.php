<?php
/*
  Projet      : Heychange
  Date        : 2021
  Auteur      : Hanaé Lepek
  Description : Page de déconnexion
*/

include("backend/autoload.php");

session_start();

//Détruire la session
session_destroy();
$_SESSION = array();

//Rediriger vers la page d'accueil
header('Location: index.php');
exit;

