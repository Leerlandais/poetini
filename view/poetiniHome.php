<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/styles/style.css">
    <title>Librarie Poetini</title>
</head>
<body>
   <?php
        include("../view/inc/header.php");
        foreach($placeImages as $placeMe);
    //    var_dump($placeImages);
    //    var_dump($placeMe);
        ?>

        <div class="articleHolder">
            <div class="articleWindow artWindow1" id="articleWindow1"><img src="<?=$placeMe['image_one']?>" alt="artImage" class="articleImage"></div>
            <div class="articleWindow artWindow2" id="articleWindow2"><img src="<?=$placeMe['image_two']?>" alt="artImage" class="articleImage"></div>
            <div class="articleWindow artWindow3" id="articleWindow3"><img src="<?=$placeMe['image_three']?>" alt="artImage" class="articleImage"></div>
            <div class="articleWindow artWindow4" id="articleWindow4"><img src="<?=$placeMe['image_four']?>" alt="artImage" class="articleImage"></div>
            <div class="articleWindow artWindow5" id="articleWindow5"><img src="<?=$placeMe['image_five']?>" alt="artImage" class="articleImage"></div>
            <div class="articleWindow artWindow6" id="articleWindow6"><img src="<?=$placeMe['image_six']?>" alt="artImage" class="articleImage"></div>
            <div class="articleWindow artWindow7" id="articleWindow7"><img src="<?=$placeMe['image_seven']?>" alt="artImage" class="articleImage"></div>
            <div class="articleWindow artWindow8" id="articleWindow8"><img src="<?=$placeMe['image_eight']?>" alt="artImage" class="articleImage"></div>
        </div>
        <?php
              //  endforeach;  Faut que je demande à Michael pourquoi je ne peux pas endforeach ici
                ?>  
                     <a href="?p=imageChanger"><li>Images</li></a>
    <script src="../public/scripts/script.js"></script>
    </body>
</html>