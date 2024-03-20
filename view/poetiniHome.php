<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Librarie Poetini</title>
</head>
<body>
    <h6 id="screenwidth"></h6>
    <div class="articleHolder">
   <?php
        include("../view/inc/header.php");
        
        $i = 1;
        foreach($placeImages as $placeMe) :
    //    var_dump($placeImages);
    //    var_dump($placeMe);
        ?>
        
            <div class="articleWindow artWindow<?=$i?>" id="articleWindow<?=$i?>"><a href="#img<?=$i?>"><img src="<?=$placeMe['image_src']?>" alt="artImage" class="articleImage"></a></div>
                <div class="textHolder"><a href="#" class="lightbox" id="img<?=$i?>">
                    <h4 class="textHeader"><?=$placeMe['image_title']?></h4>
                   <p class="backText"><?=$placeMe['image_text']?></p></a></div>

                   <?php
        $i++;
    endforeach;
    ?>  
    </div>
                     <a href="?p=imageChanger"><li>Images</li></a>
    <script src="scripts/script.js"></script>
    </body>
</html>


