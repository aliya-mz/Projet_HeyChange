<?php
/*
  Projet      : Hey Change
  Date        : 2021
  Auteur      : Hané Lepek
  Description : Gestion de la table "annnonce"
*/

//Recherche des annonces par type (demande ou proposition)
function ReadAnnoncesByType($type){
  //initaliser le prepare statement
  static $ps = null;
  //requête
  $sql = "SELECT * FROM annonce WERE type like :type";

  //si le prepare statement n'a encore jamais été fait
  if($ps == null){
    //préparer la requête
    $ps = db()->prepare($sql);
  }
  $answer = false;
  try{
    //lier le paramètre dans la requête avec la variable   
    $ps->bindParam(':type', $type, PDO::PARAM_INT);

    if($ps->execute())
      $answer = $ps->fetchAll(PDO::FETCH_ASSOC);
  }
  catch(PDOException $e){
    echo $e->getMessage();
  }

  return $answer;
}

//Recherche des annonces par type de service (service ou bien)
function ReadAnnoncesByServiceType($service){
  //initaliser le prepare statement
  static $ps = null;
  //requête
  $sql = "SELECT * FROM annonce WERE service like :service";

  //si le prepare statement n'a encore jamais été fait
  if($ps == null){
    //préparer la requête
    $ps = db()->prepare($sql);
  }
  $answer = false;
  try{
    //lier le paramètre dans la requête avec la variable   
    $ps->bindParam(':service', $service, PDO::PARAM_INT);

    if($ps->execute())
      $answer = $ps->fetchAll(PDO::FETCH_ASSOC);
  }
  catch(PDOException $e){
    echo $e->getMessage();
  }

  return $answer;
}

//Recherche des annonces par type (proposition ou demande) et type de service (service ou bien)
function ReadAnnoncesBy($type, $service){
  //initaliser le prepare statement
  static $ps = null;
  //requête
  $sql = "SELECT * FROM annonce WERE service like :service AND type like :type";

  //si le prepare statement n'a encore jamais été fait
  if($ps == null){
    //préparer la requête
    $ps = db()->prepare($sql);
  }
  $answer = false;
  try{
    //lier le paramètre dans la requête avec la variable   
    $ps->bindParam(':type', $type, PDO::PARAM_INT);
    $ps->bindParam(':service', $service, PDO::PARAM_INT);

    if($ps->execute())
      $answer = $ps->fetchAll(PDO::FETCH_ASSOC);
  }
  catch(PDOException $e){
    echo $e->getMessage();
  }

  return $answer;
}

//Récupérer l'annonce correspondant à l'identifiant
function ReadAnnonceById($idAnnonce){
  //initaliser le prepare statement
  static $ps = null;
  //requête
  $sql = "SELECT * FROM annonce WHERE idAnnonce LIKE :idAnnonce";

  //si le prepare statement n'a encore jamais été fait
  if($ps == null){
    //préparer la requête
    $ps = db()->prepare($sql);
  }
  $answer = false;
  try{
    //lier le paramètre dans la requête avec la variable
    $ps->bindParam(':idAnnonce', $idAnnonce, PDO::PARAM_INT);

    if($ps->execute())
      $answer = $ps->fetch(PDO::FETCH_ASSOC);
  }
  catch(PDOException $e){
    echo $e->getMessage();
  }

  return $answer;
}

//Récupérer les annonces appartenant à l'utilisateur
function ReadAnnoncesByUser($idUtilisateur){
  //initaliser le prepare statement
  static $ps = null;
  //requête
  $sql = "SELECT * FROM annonce WHERE idUtilisateur LIKE :idUtilisateur";

  //si le prepare statement n'a encore jamais été fait
  if($ps == null){
    //préparer la requête
    $ps = db()->prepare($sql);
  }
  $answer = false;
  try{
    //lier le paramètre dans la requête avec la variable
    $ps->bindParam(':idUtilisateur', $idUtilisateur, PDO::PARAM_INT);

    if($ps->execute())
      $answer = $ps->fetchAll(PDO::FETCH_ASSOC);
  }
  catch(PDOException $e){
    echo $e->getMessage();
  }

  return $answer;
}

//Créer une annonces avec des propriétés données
function CreateAnnonce($titre, $description, $type, $idUtilisateur){
  //initaliser le prepare statement
  static $ps = null;
  //requête
  $sql = "INSERT INTO `annonce` (`titre`, `description`, `type`, `idUtilisateur`) VALUES ( :titre, :description, :type, :idUtilisateur)";

  //si le prepare statement n'a encore jamais été fait
  if($ps == null){
    //préparer la requête
    $ps = db()->prepare($sql);
  }
  $answer = false;
  try{
    //lier le paramètre dans la requête avec la variable
    $ps->bindParam(':titre', $titre, PDO::PARAM_STR);
    $ps->bindParam(':description', $description, PDO::PARAM_STR);
    $ps->bindParam(':type', $type, PDO::PARAM_STR);
    $ps->bindParam(':idUtilisateur', $idUtilisateur, PDO::PARAM_INT);

    $answer = $ps->execute();
  }
  catch(PDOException $e){
    echo $e->getMessage();
  }
  return $answer;
}