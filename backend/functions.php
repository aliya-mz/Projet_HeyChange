<?PHP
/*
  Projet      : Suggestion de tenues en fonction de la météo
  Date        : Mai 2021
  Auteur      : Aliya Myaz
  Description : Fonctions du projet
*/

//Gestion des utilisateurs - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 

//Message d'erreur de connexion
define("ERROR_MESSAGE", "Votre pseudo ou mot de passe est erroné");


//Retourner l'identifiant de l'utilisateur connecté
function GetIdUser(){
  //Si l'utilsiateur est définit dans la session
  if(isset($_SESSION["idUser"])){
    //Retourner son identifiant
    return $_SESSION["idUser"];
  }
  else{
    return false;
  }  
}

//Définit l'utilisateur connecté
function SetIdUser($idUser){
  $_SESSION["idUser"] = $idUser;
}

//Retourner l'identifiant de l'utilisateur sélectionné par l'administrateur et envoyé en GET
function GetIdUserToUpdate($idUser){
  $user = "";
  //Récupérer l'utilisateur envoyé en paramètre
  if(isset($idUser)){
    if(GetUser($idUser)!=null){
      $user = $idUser;
    }
    //Si le paramètre est erroné, quitter
    else{
      header('Location: manageUsers.php');
      exit;
    }
  }
  //Si le paramètre n'existe pas, quitter
  else{
    header('Location: manageUsers.php');
    exit;
  }
  return $user;
}

//Retourner l'utilisateur sélectionné par l'administrateur et envoyé en GET
function GetUserToUpdate($idUser){
  return readUserById(GetIdUserToUpdate($idUser));
}

//Retourner le rôle de l'utilisateur
function GetUserRole(){
  //Si l'utilisateur est défini dans la session
  if(isset($_SESSION["idUser"])){
    return 1;
  }
  //Sinon, l'utilisateur est déconnecté
  else{
    return 0;
  }
}

//Retourner toutes les informations de l'utilisateur
function GetUser(){
  return readUserById(GetIdUser());
}

//Vérifier que l'utilisateur (déconnecté, utilisateur ou administrateur) a le droit d'accéder à la page
function VerifyAccessibility($acceptedRoles){
  //Si l'un des rôles envoyés en paramètre est connecté, rester sur la page
  $accepted = false;
  foreach($acceptedRoles as $acceptedRole){
    if(GetUserRole()==$acceptedRole){
      $accepted = true;
    }
  } 
  if(!$accepted){
    if(GetUserRole()==0){
      header('Location: login.php');
      exit;
    }
    else{
      header('Location: home.php');
      exit;
    }    
  }
}

//Vérifier que l'utilisateur existe et que son mot de passe est correct pour le connecter
function ConnectUser($login, $password){
  //Vérifier qu'un utilisateur avec ce pseudo existe
  if(ReadUserByUsername($login)){
    //Récupérer l'utilisateur
    $user = ReadUserByUsername($login);

    //Vérifier le mot de passe crypté avec le mot de passe entré
    if(password_verify($password, $user["password"])){ 

      //enregister l'utilisateur dans la session
      SetIdUser($user["idUser"]);

      //rediriger vers la page d'accueil
      header('Location: home.php');
      exit;
    }
    else{
      //Message d'erreur
      echo ERROR_MESSAGE;
    }
  }
  else{
    //Message d'erreur
    echo ERROR_MESSAGE;
  }
}

//Inscrire l'utilisateur, en l'ajoutant dans la BD avec son mot de passe hashé
function SignUserIn($username, $nom, $prenom, $myPassword, $description, $descScolaire, $email, $instagram, $idEtablissement){
  echo $myPassword;
  //hasher le mot de passe
  $myPassword = password_hash($myPassword, PASSWORD_DEFAULT);

  //ajouter l'utilisateur dans la BD
  CreateUser($username, $nom, $prenom, $myPassword, $description, $descScolaire, $email, $instagram, 0);

  //rediriger vers la page d'accueil
  //header('Location: index.php');
  //exit;
}

//Afficher une barre de navigation pour la page principale, contenant les liens adaptés au rôle de l'utilisateur
function ShowNavByRole(){
  //Si l'utilisateur est déconnecté, afficher...
  if(GetUserRole()==0){
   
  }
  //Si c'est un utilisateur connecté, afficher...
  else if(GetUserRole()==1){
  
  }
}

//Supprime un utilisateur de la base de données en fonction de son identifiant
function DeleteUser($idUser){
  DeleteUserById($idUser);
}

//Met à jour les informations de l'utilisateur
function UpdateUser($login, $firstName, $lastName, $eMail, $password, $idUserToUpdate){
  //Si l'utilisateur a changé son mot de passer
  if(strlen($password) > 0){
    //Hasher le nouveau mot de passe
    $password = password_hash($password, PASSWORD_DEFAULT);

    //Envoyer les informations modifiées à la base de données
    UpdateUserByIdWithPassword(GetIdUser(), $login, $firstName, $lastName, $eMail, $password);
  }
  //Sinon, juste envoyer les nouvelles informations à la base de données
  else{
    UpdateUserById(GetIdUser(), $login, $firstName, $lastName, $eMail);
  }
}


//Gestion des annonces - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 

function newAnnonce($login, $firstName, $lastName, $eMail, $password, $idUserToUpdate){
  createAnnonce();
}

function deleteAnnonce($idAnnonce){
  
}

//Recherche toutes les annonces corresponsdant aux criètres de recherche (service/bien, proposition/demande, mot-clé)
function getAnnonceByFliter($recherche, $service, $motCle){
  if ($recherche == true){

  }
}

function getAnnoncesByUser($idUser, $recherche){
  
}

function getRandomAnnonces(){
  //Récupérer 8 identifiants d'annonces

  //retourner les identifiants

  return [];
}

function showAnnonces($idAnnonces){
  foreach ($idAnnonces as $idAnnonce) {
    //Récupérer les informations de chaque annonce et les afficher
    $annonce = ReadAnnonceById($idAnnonce);
    showAnnonce($annonce);
  }
}


 //Afficher une annonce
function showAnnonce($annonce){
  echo "<button name=\"annonce\" value=\"".$annonce["idAnnonce"]."\" class=\"card-item";

  //Définir la classe en fonction du type de l'annonce
  if($annonce["type"]=0){
    echo "proposition\">";
  }
  else{
    echo "demande\">";
  }

  //Afficher les informations de l'annonces
  echo      "<div class=\"photo-hue-rotate\">
              <a class=\"bichrome\" href=\"heychange_code_script/images/photo.jpg\"><img src=\"heychange_code_script/images/photo.jpg\"></a>
            </div>
            <h2>".$annonce["titre"]."</h2>
            <p>".$annonce["description"]."</p>";

  echo "</button>";
}