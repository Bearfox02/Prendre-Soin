<?php

session_start();
 if (isset($_POST["send"])){
        // extraction des variables
    extract($_POST);
        // vérification si les variables existent et ne sont pas vides
    if(isset($nom) && $nom !="" &&
    if(isset($prenom) && $prenom !="" &&
    if(isset($telephon) && $telephone !="" &&
    if(isset($email) && $email !="" &&
    if(isset($message) && $message !="" ){

    }
 }

// Traitement des données (vous pouvez ajouter votre propre logique ici)
 // Envoyer l'email
            
            // le destinataire ( votre adresse mail)
            
        $to = "jenaimar@gmx.fr";
            // objet du mail
        $subject = "Essai email";. $email;

        $message = "
        <p>Vous avez reçu un message de <strong>".$email."</strong></p>
        <p><strong>nom :</strong>".$nom."</p>
        <p><strong>prenom :</strong>".$prenom."</p>
        <p><strong>telephone :</strong>".$telephone."</p>
        <p><strong>email :</strong>".$email."</p>
        <p><strong>message :</strong>".$message."</p>
        ";

        
        // Toujours définir le type de contenu lors de l'envoi d'emails HTML
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // Plus d'en-têtes
        $headers .= 'From: <".$email."">' . "\r\n";<br>
      
        // Envoi du mail
        $send mail($to,$subject,$message,$headers);
        // Verification de l'envoi
        if($send){
            $_SESSION["succes_message"] = "Message envoyé";
         
        }else {
            $info ="méssage non envoyé";
        }
    }else{
        // si elles sont vides
        $info = "Veuillez remplir tous les champs !";
    }
}

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Contact</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
        // Afficher le message d'erreur
        if(isset($info)) { ?>
            <p class="request_message" style="color:red">
                <?=$info?>
            </p>
        <?php
    }
?>

    <?php
        // Afficher le message de succes
        if(isset($_SESSION["succes_message"])) { ?>
            <p class="request_message" style="color:green">
                <?= $_SESSION["succes_message"]?>
            </p>
        <?php
    }
?>

    
    <form action="" method="post">
        <h2>Contactez-nous</h2>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required>

        <label for="telephone">Numéro de téléphone :</label>
        <input type="tel" id="telephone" name="telephone" required>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message :</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <input type="submit" value="Envoyer">
    </form>
</div>

</body>
</html>
