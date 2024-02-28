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
            <div class="articleWindow artWindow1" id="articleWindow1"><a href="#img1"><img src="<?=$placeMe['image_one']?>" alt="artImage" class="articleImage"></a></div>
                <div class="textHolder"><a href="#" class="lightbox" id="img1">
                   <p class="backText"><?=$placeMe['text_one']?></p></a></div>
            <div class="articleWindow artWindow2" id="articleWindow2"><a href="#img2"><img src="<?=$placeMe['image_two']?>" alt="artImage" class="articleImage"></a></div>
                <div class="textHolder"><a href="#" class="lightbox" id="img2">
                   <p class="backText"><?=$placeMe['text_two']?></p></a></div>
            <div class="articleWindow artWindow3" id="articleWindow3"><a href="#img3"><img src="<?=$placeMe['image_three']?>" alt="artImage" class="articleImage"></a></div>
                <div class="textHolder"><a href="#" class="lightbox" id="img3">
                   <p class="backText"><?=$placeMe['text_three']?></p></a></div>
            <div class="articleWindow artWindow4" id="articleWindow4"><a href="#img4"><img src="<?=$placeMe['image_four']?>" alt="artImage" class="articleImage"></a></div>
                <div class="textHolder"><a href="#" class="lightbox" id="img4">
                   <p class="backText"><?=$placeMe['text_four']?></p></a></div>
            <div class="articleWindow artWindow5" id="articleWindow5"><a href="#img5"><img src="<?=$placeMe['image_five']?>" alt="artImage" class="articleImage"></a></div>
                <div class="textHolder"><a href="#" class="lightbox" id="img5">
                   <p class="backText"><?=$placeMe['text_five']?></p></a></div>
            <div class="articleWindow artWindow6" id="articleWindow6"><a href="#img6"><img src="<?=$placeMe['image_six']?>" alt="artImage" class="articleImage"></a></div>
                <div class="textHolder"><a href="#" class="lightbox" id="img6">
                   <p class="backText"><?=$placeMe['text_six']?></p></a></div>
            <div class="articleWindow artWindow7" id="articleWindow7"><a href="#img7"><img src="<?=$placeMe['image_seven']?>" alt="artImage" class="articleImage"></a></div>
                <div class="textHolder"><a href="#" class="lightbox" id="img7">
                   <p class="backText"><?=$placeMe['text_seven']?></p></a></div>
            <div class="articleWindow artWindow8" id="articleWindow8"><a href="#img8"><img src="<?=$placeMe['image_eight']?>" alt="artImage" class="articleImage"></a></div>
                <div class="textHolder"><a href="#" class="lightbox" id="img8">
                   <p class="backText"><?=$placeMe['text_eight']?></p></a></div>
        </div>
        <?php
              
                ?>  
                     <a href="?p=imageChanger"><li>Images</li></a>
    <script src="../public/scripts/script.js"></script>
    </body>
</html>

