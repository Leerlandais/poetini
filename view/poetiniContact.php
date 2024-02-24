<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/styles/style.css">
    <title>Contact</title>
</head>
<body>
   <?php
        include("../view/inc/header.php");
        ?>
        <fieldset class="contactField">
            <form action="" class="contactForm" id="contactForm" method="POST">
                <div class="messInp">
                <label for="user_nom" class="contactLabel">Nom : </label>
                    <input type="text" name="user_nom">
                </div>
                    <div class="messInp">
                <label for="user_prenom" class="contactLabel">Prénom : </label>
                    <input type="text" name="user_prenom">
                </div>
                    <div class="messInp">
                <label for="user_email" class="contactLabel">Email :</label>
                    <input type="text" name="user_email">
                </div>
                    <div class="messInp">
                <label for="user_phone" class="contactLabel">GSM :</label>
                    <input type="text" name="user_phone">
                </div>
                    <div class="messInp">
                <label for="user_message" class="contactLabel">Message :</label>
                    <textarea name="user_message" id="" cols="20" rows="5"></textarea>
                </div>
                <button type="submit">Envoyer</button>
            </form>
        </fieldset>
        <a href="?p=private"><span>Chris</span></a>
    <script src="../public/scripts/script.js"></script>
    </body>
</html>