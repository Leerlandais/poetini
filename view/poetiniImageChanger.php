<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/styles/style.css">
    <title>Commander Un Livre</title>
</head>
<body>
   <?php
        include("../view/inc/header.php");

        ?>
            <fieldset class="imgField">
<?php
                $i = 1;
            foreach($placeImages as $DbLoc) : ?>
                <form action="" class="imgForm" method="POST">
                        
                    <div class="imgInput"><label for="" class="imgChgLabel">Image <?=$i?></label><input type="text" name="imgInp<?=$i?>" class="imgChgInput" value="<?=$DbLoc['image_src']?>"></div>
                <?php
                $i++;
             endforeach; ?>
                    <button type="submit" id="imgSubmit">Changer Images</button>
                </form>
                <?php
                $i=1;
            foreach($placeImages as $DbLoc) : ?>
                <form action="" class="titleForm" method="POST">
                    <div class="titleInput"><label for="" class="titleChgLabel">Title for Image <?=$i?></label><input type="text" name="titleInp<?=$i?>" class="titleChgInput" value="<?=$DbLoc['image_title']?>"></div>

                <?php
                $i++;
             endforeach; ?>
                    <button type="submit" id="textSubmit">Changer Titres</button>
                </form>
                <?php
                $i=1;
            foreach($placeImages as $DbLoc) : ?>
                <form action="" class="textForm" method="POST">
                    <div class="textInput"><label for="" class="textChgLabel">Text for Image <?=$i?></label><input type="text" name="textInp<?=$i?>" class="textChgInput" value="<?=$DbLoc['image_text']?>"></div>
                <?php
                $i++;
             endforeach; ?>
                    <button type="submit" id="textSubmit">Changer Textes</button>
                </form>
            </fieldset>
    <script src="../public/scripts/script.js"></script>
    </body>
</html>



