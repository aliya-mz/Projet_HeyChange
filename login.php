<?php
/*
  Projet      : Suggestion de tenues en fonction de la météo
  Date        : Mai 2021
  Auteur      : Hanaé Lepek
  Description : Login
*/

include("backend/autoload.php");
session_start();

//Vérifier que l'utilisateur est déconnecté
VerifyAccessibility([0]);
//récupérer les données du formulaire
$login = FILTER_INPUT(INPUT_POST, "login", FILTER_SANITIZE_STRING);
$password = FILTER_INPUT(INPUT_POST, "password", FILTER_SANITIZE_STRING);
$connexion = FILTER_INPUT(INPUT_POST, "connexion", FILTER_SANITIZE_STRING);
?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Projet WearTher">
  <meta name="author" content="Myaz Aliya">
  <title>Connexion</title>
  <!-- CSS Bootstrap -->
  <link rel="stylesheet" href="https://use.typekit.net/bve5vcq.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <!-- CSS propre au projet-->
  <link href="css/style.css" rel="stylesheet">
</head>

<!-- vérifier qu'un compte existe -->
<?php
if(isset($_POST['formconnexion'])) {
   $mailconnect = htmlspecialchars($_POST['mailconnect']);
   $mdpconnect = sha1($_POST['mdpconnect']);
   if(!empty($mailconnect) AND !empty($mdpconnect)) {
      $requser = $bdd->prepare("SELECT * FROM utilisateur WHERE email = ? AND password = ?");
      $requser->execute(array($mailconnect, $mdpconnect));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['idUtilisateur'] = $userinfo['idUtilisateur'];
         $_SESSION['username'] = $userinfo['username'];
         $_SESSION['email'] = $userinfo['mail'];
         header("Location: profil.php?id=".$_SESSION['id']);
      } else {
         $erreur = "Mauvais mail ou mot de passe !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>
























<?php 
  /*$connecter = FILTER_INPUT(INPUT_POST, "connecter", FILTER_SANITIZE_STRING);



    if($connecter){
    //Si tous les paramètres ont bien été entrés
    if($username && $email && $prenom && $myPassword){
      //Checker qqch
      if(checkPseudo( $username, $email)==false){
        //Enregistrer les données dans la session 
        $_SESSION["EnCreation"] = [$username, $nom, $prenom, $email, $instagram, $myPassword];
        header('Location: signinSuite.php');
        exit;
            
      }else{

      }
   
   
      }
    }



    //Modifier les informations d'un utilisateur dans la base de données grâce à son identifiant
    function checkIdentity( $email, $password){

      

      //initaliser le prepare statement
      static $ps = null;
      //requête
      $sql = "SELECT * FROM utilisateur WHERE email = :email OR  password = :password;";

      //si le prépare statement n'a encore jamais été fait
      if($ps == null){
        //préparer la requête
      }
      
      //var_dump(db());
      $ps = db()->prepare($sql);

      $answer = false;
    
      try{
        //lier le paramètre dans la requête avec la variable
      
        $ps->bindParam(':email', $email1, PDO::PARAM_STR);
        $ps->bindParam(':password', $password1, PDO::PARAM_STR);
        $password1 = $password;
        $email1 = $email;
        $ps->execute();
        $resultat = $ps->fetchAll();
        //var_dump($resultat);
        if($resultat){
          $answer = true;
        }

      }
      catch(PDOException $e){
        echo $e->getMessage();

      }
    
      return $answer;
      
    }



*/
  ?>











  <body>
    <!-- Navigation principale-->

<div class="titre">
  <h1>Identifie-toi</h1>
</div>
<main class="ordinaryForm">
  <!--Navigation secondaire-->
  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar mainSidebar">
        <div class="sidebar-sticky marginTop100">
          <ul class="nav flex-column">
            <!--Retour page principale-->
            <li class="nav-item">
              <!---<a class="nav-link " aria-current="page" href="index.php"><img class="mIconButton" src="img/home.png"/></a>--->
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>

  <!--Formulaire de connexion-->
  <form class="formAdd" action="home.php" method="POST" class="listClothes">
    <table>
      <div class="centrerformadd">
        <tr>
          <td colspan="6"><input type="text" name="email" value="" required placeholder="Entre ton email:*" size="40"
              pattern="[a-z0-9._%+-]+@eduge\.ch$"></td>
        </tr>
        <tr>
          <td>
            <input type="password" name="password3" autocomplete="current-password" size="40" required minlength="8"
              id="password3" placeholder="Entre ton mot-de-passe:*">
            <i class="far fa-eye" id="togglePassword3" style="margin-left: -30px; cursor: pointer;"></i>

            <script>
              const togglePassword3 = document.querySelector('#togglePassword3');
              const password3 = document.querySelector('#password3');

              togglePassword3.addEventListener('click', function (e) {
                // toggle the type attribute
                const type = password3.getAttribute('type') === 'password' ? 'text' : 'password';
                password3.setAttribute('type', type);
                // toggle the eye slash icon
                this.classList.toggle('fa-eye-slash');
              });
            </script>
          </td>
        </tr>
      </div>
      <tr>

        <td colspan="4">
          <h5 class="creation-connexion">Pas de compte?</h5>

          <a href="signin.php">Crée ton compte</a>
        </td>

      </tr>
      </div>
      <tr>
        <td colspan="6"><button class="btnCreateIdea" type="submit" name="connexion"
            value="connexion"><span>Connexion</span> </button></td>
      </tr>
      <tr>
        <td colspan="2" class="error">
          <?php
              if($connexion){
                //si tous les champs sont remplis
                if($email && $password){
                  //Essayer de connecter l'utilisateur, envoyer un message d'erreur si échec
                  ConnectUser($email, $password);
                }
              }
            ?>
        </td>
      </tr>

    </table>
    <div class="question"> </div>

    <div class="question infoErreur">
      <?php  
          if($connecter){
          //Si tous les paramètres ont bien été entrés
            if($email && $password){
            //Checker username et email
              if(checkIdentity( $email, $password)==true){
              
              echo "Essaie avec un autre email et/ou un autre identifiant ou essaie de te connecter";
              exit;
                  
            }
            }
          }
        ?>
    </div>

  </form>
</main>
</body>

</html>