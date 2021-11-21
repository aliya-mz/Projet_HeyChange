<?php
/*
  Projet      : Hey Change
  Date        : Mai 2021
  Auteur      : Aliya Myaz
  Description : Gestion de la table "utilisateur"
*/

//Retourner les informations de l'utilisateur correspondant au nom d'utilisateur envoyé
function ReadUserByUsername($login){
  //initaliser le prepare statement
  static $ps = null;
  //requête
  $sql = "SELECT * FROM utilisateur WHERE username = :username";

  //si le prepare statement n'a encore jamais été fait
  if($ps == null){
    //préparer la requête
    $ps = db()->prepare($sql);
  }
  $answer = false;
  try{
    //lier le paramètre dans la requête avec la variable
    $ps->bindParam(':username', $username, PDO::PARAM_STR);

    if($ps->execute())
      $answer = $ps->fetch(PDO::FETCH_ASSOC);
  }
  catch(PDOException $e){
    echo $e->getMessage();
  }

  return $answer;
}

//Retourner les informations de l'utilisateur correspondant à l'identifiant envoyé
function ReadUserById($idUser){
  //initaliser le prepare statement
  static $ps = null;
  //requête
  $sql = "SELECT * FROM utilisateur WHERE idUtilisateur LIKE :idUser";

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
      $answer = $ps->fetch(PDO::FETCH_ASSOC);
  }
  catch(PDOException $e){
    echo $e->getMessage();
  }

  return $answer;
}

//Ajouter un utilisateur dans la base de données
function CreateUser($username, $nom, $prenom, $myPassword, $description, $descScolaire, $email, $instagram, $idEtablissement){
  //initaliser le prepare statement
  static $ps = null;
  //requête
  $sql = "INSERT INTO `user` (`username`, `nom`, `prenom`, `password`, `description`, `descScolaire`, `email`, `instagram`, `idEtablissement`) VALUES ( :login, :firstName, :lastName, :eMail, :myPassword, 1)";

  //si le prepare statement n'a encore jamais été fait
  if($ps == null){
    //préparer la requête
    $ps = db()->prepare($sql);
  }
  $answer = false;
  try{
    //lier le paramètre dans la requête avec la variable
    $ps->bindParam(':username', $username, PDO::PARAM_STR);
    $ps->bindParam(':nom', $nom, PDO::PARAM_STR);
    $ps->bindParam(':prenom', $prenom, PDO::PARAM_STR);
    $ps->bindParam(':password', $password, PDO::PARAM_STR);
    $ps->bindParam(':description', $description, PDO::PARAM_STR);
    $ps->bindParam(':descScolaire', $descScolaire, PDO::PARAM_STR);
    $ps->bindParam(':email', $email, PDO::PARAM_STR);
    $ps->bindParam(':instagram', $instagram, PDO::PARAM_STR);
    $ps->bindParam(':idEtablissement', $idEtablissement, PDO::PARAM_INT);

    $answer = $ps->execute();
    if($answer){
    }
  }
  catch(PDOException $e){
    echo $e->getMessage();
  }
  return $answer;
}

//Modifier les informations d'un utilisateur dans la base de données grâce à son identifiant
function UpdateUserById($idUtilisateur, $username, $nom, $prenom, $description, $descScolaire, $email, $instagram, $idEtablissement){
  //initaliser le prepare statement
  static $ps = null;
  //requête
  $sql = 'UPDATE user SET username = :username, nom = :nom, prenom = :prenom, description = :description, descScolaire = :descScolaire, email = :email, instagram = :instagram, idEtablissement = :idEtablissement WHERE idUtilisateur = :idUtilisateur';

  //si le prépare statement n'a encore jamais été fait
  if($ps == null){
    //préparer la requête
    $ps = db()->prepare($sql);
  }
  $answer = false;
  try{
    //lier le paramètre dans la requête avec la variable
    $ps->bindParam(':idUtilisateur', $idUtilisateur, PDO::PARAM_INT);
    $ps->bindParam(':username', $username, PDO::PARAM_STR);
    $ps->bindParam(':nom', $nom, PDO::PARAM_STR);
    $ps->bindParam(':prenom', $prenom, PDO::PARAM_STR);
    $ps->bindParam(':description', $description, PDO::PARAM_STR);
    $ps->bindParam(':descScolaire', $descScolaire, PDO::PARAM_STR);
    $ps->bindParam(':email', $email, PDO::PARAM_STR);
    $ps->bindParam(':instagram', $instagram, PDO::PARAM_STR);
    $ps->bindParam(':idEtablissement', $idEtablissement, PDO::PARAM_INT);


    $answer = $ps->execute();
  }
  catch(PDOException $e){
    echo $e->getMessage();
  }
  return $answer;
}