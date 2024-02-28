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
        foreach($placeImages as $DbLoc);
        ?>
            <fieldset class="imgField">
                <form action="" class="imgForm" method="POST">

                    <div class="imgInput"><label for="" class="imgChgLabel">Image 1</label><input type="text" name="imgInp1" class="imgChgInput" placeholder="<?=$DbLoc['image_one']?>"></div>
                    <div class="imgInput"><label for="" class="imgChgLabel">Image 2</label><input type="text" name="imgInp2" class="imgChgInput" placeholder="<?=$DbLoc['image_two']?>"></div>
                    <div class="imgInput"><label for="" class="imgChgLabel">Image 3</label><input type="text" name="imgInp3" class="imgChgInput" placeholder="<?=$DbLoc['image_three']?>"></div>
                    <div class="imgInput"><label for="" class="imgChgLabel">Image 4</label><input type="text" name="imgInp4" class="imgChgInput" placeholder="<?=$DbLoc['image_four']?>"></div>
                    <div class="imgInput"><label for="" class="imgChgLabel">Image 5</label><input type="text" name="imgInp5" class="imgChgInput" placeholder="<?=$DbLoc['image_five']?>"></div>
                    <div class="imgInput"><label for="" class="imgChgLabel">Image 6</label><input type="text" name="imgInp6" class="imgChgInput" placeholder="<?=$DbLoc['image_six']?>"></div>
                    <div class="imgInput"><label for="" class="imgChgLabel">Image 7</label><input type="text" name="imgInp7" class="imgChgInput" placeholder="<?=$DbLoc['image_seven']?>"></div>
                    <div class="imgInput"><label for="" class="imgChgLabel">Image 8</label><input type="text" name="imgInp8" class="imgChgInput" placeholder="<?=$DbLoc['image_eight']?>"></div>
                    <button type="submit" id="imgSubmit">Changer Images</button>
                </form>
    
    
                <form action="" class="textForm" method="POST">
                    <div class="textInput"><label for="" class="textChgLabel">Text for Image 1</label><input type="text" name="textInp1" class="textChgInput" placeholder="<?=$DbLoc['text_one']?>"></div>
                    <div class="textInput"><label for="" class="textChgLabel">Text for Image 2</label><input type="text" name="textInp2" class="textChgInput" placeholder="<?=$DbLoc['text_two']?>"></div>
                    <div class="textInput"><label for="" class="textChgLabel">Text for Image 3</label><input type="text" name="textInp3" class="textChgInput" placeholder="<?=$DbLoc['text_three']?>"></div>
                    <div class="textInput"><label for="" class="textChgLabel">Text for Image 4</label><input type="text" name="textInp4" class="textChgInput" placeholder="<?=$DbLoc['text_four']?>"></div>
                    <div class="textInput"><label for="" class="textChgLabel">Text for Image 5</label><input type="text" name="textInp5" class="textChgInput" placeholder="<?=$DbLoc['text_five']?>"></div>
                    <div class="textInput"><label for="" class="textChgLabel">Text for Image 6</label><input type="text" name="textInp6" class="textChgInput" placeholder="<?=$DbLoc['text_six']?>"></div>
                    <div class="textInput"><label for="" class="textChgLabel">Text for Image 7</label><input type="text" name="textInp7" class="textChgInput" placeholder="<?=$DbLoc['text_seven']?>"></div>
                    <div class="textInput"><label for="" class="textChgLabel">Text for Image 8</label><input type="text" name="textInp8" class="textChgInput" placeholder="<?=$DbLoc['text_eight']?>"></div>
                    <button type="submit" id="textSubmit">Changer Textes</button>
                </form>
            </fieldset>
    <script src="../public/scripts/script.js"></script>
    </body>
</html>



<!-- THINGS TO DO NEXT


        - FIGURE OUT HOW TO REPLACE IMG SOURCE WITH ENTRIES
        - FIGURE OUR HOW TO DO THAT IF SOME ENTRIES ARE EMPTY

-->