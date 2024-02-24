<?php

if(isset($_GET["p"])){
    switch($_GET["p"]){
        case 'home':
            $title = "Page d'Accueil";
            include("../view/poetiniHome.php");
            break;
            case 'contact':
                $title = "Page de Contact";
            include("../view/poetiniContact.php");
            break;
            case 'horaire':
                $title = "Horaires";
            include("../view/poetiniHoraires.php");
            break;
            case 'commander':
                $title = "Commander un livre";
            include("../view/poetiniCommander.php");
            break;
            default:
            $title = "Page 404";
            include("../templates/erreur404.php");
        }
    }else{
        $title = "Page d'Accueil";
        include("../view/poetiniHome.php");
}