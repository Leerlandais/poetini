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
        foreach($placeImages as $oldImageURL);
        ?>
            <fieldset class="imgField">
                <form action="" class="imgForm" method="POST">

                    <div class="imgInput"><label for="" class="imgChgLabel">Image 1</label><input type="text" name="imgInp1" class="imgChgInput" placeholder="<?=$oldImageURL['image_one']?>"></div>
                    <div class="imgInput"><label for="" class="imgChgLabel">Image 2</label><input type="text" name="imgInp2" class="imgChgInput" placeholder="<?=$oldImageURL['image_two']?>"></div>
                    <div class="imgInput"><label for="" class="imgChgLabel">Image 3</label><input type="text" name="imgInp3" class="imgChgInput" placeholder="<?=$oldImageURL['image_three']?>"></div>
                    <div class="imgInput"><label for="" class="imgChgLabel">Image 4</label><input type="text" name="imgInp4" class="imgChgInput" placeholder="<?=$oldImageURL['image_four']?>"></div>
                    <div class="imgInput"><label for="" class="imgChgLabel">Image 5</label><input type="text" name="imgInp5" class="imgChgInput" placeholder="<?=$oldImageURL['image_five']?>"></div>
                    <div class="imgInput"><label for="" class="imgChgLabel">Image 6</label><input type="text" name="imgInp6" class="imgChgInput" placeholder="<?=$oldImageURL['image_six']?>"></div>
                    <div class="imgInput"><label for="" class="imgChgLabel">Image 7</label><input type="text" name="imgInp7" class="imgChgInput" placeholder="<?=$oldImageURL['image_seven']?>"></div>
                    <div class="imgInput"><label for="" class="imgChgLabel">Image 8</label><input type="text" name="imgInp8" class="imgChgInput" placeholder="<?=$oldImageURL['image_eight']?>"></div>
                    <button type="submit" id="imgSubmit">Changer</button>

                </form>
            </fieldset>
    <script src="../public/scripts/script.js"></script>
    </body>
</html>



<!-- THINGS TO DO NEXT


        - FIGURE OUT HOW TO REPLACE IMG SOURCE WITH ENTRIES
        - FIGURE OUR HOW TO DO THAT IF SOME ENTRIES ARE EMPTY

-->