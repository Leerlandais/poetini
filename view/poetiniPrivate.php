<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/styles/style.css">
    <title>Christian Only</title>
</head>
<body>
   <?php
        include("../view/inc/header.php");
        ?>

<div class="messageSection">   
    <fieldset class="messageField">
        <?php

            foreach ($showMessages as $showMess) : ?>                                   
                    <div class="messageHolder">                                         
                        <h4>Message de <span class="italic" title="<?=$showMess["user_email"]?>"><?=$showMess["user_prenom"]?></span></h4>  
                        <p><?= wordwrap($showMess["user_message"], 28, "\n", true) ?></p><hr>
                    </div>
                    <?php
                endforeach;                                                             
                ?>
        </div>
        </fieldset>