<?php
/*
  Projet      : Hey Change
  Date        : 2021
  Auteur      : Hanaé Lepek
  Description : Gestion de la table "etablissement"
*/

//Retourner les établissement prédéfinis enregsitrés dans la base de données
function readSchools(){
  //initaliser le prepare statement
  static $ps = null;
  //requête
  $sql = "SELECT * FROM etablissement";

  //si le prepare statement n'a encore jamais été fait
  if($ps == null){
    //préparer la requête
    $ps = db()->prepare($sql);
  }
  $answer = false;
  try{
    if($ps->execute())
      $answer = $ps->fetchAll(PDO::FETCH_ASSOC);
  }
  catch(PDOException $e){
    echo $e->getMessage();
  }
  return $answer;
}

//Retourner l'établissement correspondant à un identifiant donné
function readSchools($idEtablissement){
  //initaliser le prepare statement
  static $ps = null;
  //requête
  $sql = "SELECT * FROM etablissement WHERE idEtablissement LIKE :idEtablissement";

  //si le prepare statement n'a encore jamais été fait
  if($ps == null){
    //préparer la requête
    $ps = db()->prepare($sql);
  }

  $answer = false;
  try{
    $ps->bindParam(':idEtablissement', $idEtablissement, PDO::PARAM_INT);
    if($ps->execute())
      $answer = $ps->fetch(PDO::FETCH_ASSOC);
  }
  catch(PDOException $e){
    echo $e->getMessage();
  }
  return $answer;
}