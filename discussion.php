<?php
/*
* HeyChange
* discussion exemple
*/
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Discussion</title>
</head>

<body>
    <header>
        <a class="fleche" href="chat.php"></a>
        <div class="row align-items-center ">
           <h1 class="page">@12345678</h1>
        </div>
    </header>
    <div class="chatcontent">
        <div class="bulleMe orange">
            <p>Hello! Je suis intéressée par ton annonce pour les cours de photo!</p>
            <span class="time-right">11:00</span>
        </div>
        <div class="bulleAutre orangefonce">
            <p>Salut! J'ai encore de la place mais je cherche une guitare pour un projet, j'ai vu que tu en prêtais une
                sur ton profil.</p>
            <span class="time-left">11:01</span>
        </div>
        <div class="bulleMe orange">
            <p>Cool! Mince je l'ai pas actuellement, quelqu'un me l'a déjà empruntée...</p>
            <span class="time-right">11:01</span>
        </div>
        <div class="bulleAutre orangefonce">
            <p>Hmmm, Sinon j'aurais besoin d'aide pour l'anglais, tu te débrouilles?</p>
            <span class="time-left">11:03</span>
        </div>
        <div class="bulleAutre orangefonce">
            <p>Je sais que c'est pas sur ton profil mais je demande quand-même ;)</p>
            <span class="time-left">11:03</span>
        </div>

    </div>

<footer>
    <div class="navbar">

    <div class="chat">


        <div class="chat-message clearfix">
            <textarea name="message-to-send" id="message-to-send" placeholder="Écris quelque chose..." rows="3"></textarea>

            <button>Envoyer</button>
            <label for="uploadPicture">
		<img class="uploadPicture" src="/heychange_code_script/images/Icon awesome-camera.svg" alt="dd" srcset="">
	</label>	
	<input class="cacher" type="file" id="uploadPicture" name="uploadPicture">

	<script>
		document.querySelector("#uploadPicture").addEventListener("change", function (input) {
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
            

        </div> <!-- end chat-message -->

    </div> <!-- end chat -->

    </div>
</footer>



</body>

</html>