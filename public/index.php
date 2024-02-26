<?php

require_once "../config.php";
require_once "../model/poetiniModel.php";

try {
    $db = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET . ";port=" . DB_PORT, DB_LOGIN, DB_PWD);
} catch (Exception $e) {
    die($e->getMessage());
}
$showMessages = getMessages($db);

if (isset($_POST['user_nom'], $_POST['user_prenom'], $_POST['user_email'], $_POST['user_phone'], $_POST['user_message'])) { 
    $insert = addMessages($db,$_POST['user_nom'], $_POST['user_prenom'], $_POST['user_email'], $_POST['user_phone'], $_POST['user_message']);
    if ($insert) {
        header("Location: ?p=contact"); 
        exit();
    } else {
        $messageError = "Erreur avec l'insertion";
    }
}

$placeImages = getImages($db);

if (isset($_POST['imgInp1'], $_POST['imgInp2'], $_POST['imgInp3'], $_POST['imgInp4'], $_POST['imgInp5'], $_POST['imgInp6'], $_POST['imgInp7'], $_POST['imgInp8'])) { 
    $imageInputs = [
        'imgInp1' => $_POST['imgInp1'],
        'imgInp2' => $_POST['imgInp2'],
        'imgInp3' => $_POST['imgInp3'],
        'imgInp4' => $_POST['imgInp4'],
        'imgInp5' => $_POST['imgInp5'],
        'imgInp6' => $_POST['imgInp6'],
        'imgInp7' => $_POST['imgInp7'],
        'imgInp8' => $_POST['imgInp8']
    ];
    $insert = submitNewImages($db, $imageInputs);
    if ($insert) {
        header("Location: ./"); 
        exit();
    } else {
        $messageError = "Erreur avec l'insertion";
    }
}


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
            case 'private' :
                $title = "page pour Chris";
            include("../view/poetiniPrivate.php");
            break;
            case 'imageChanger' :
                $title = "Changer les Images";
            include("../view/poetiniImageChanger.php");
            break;
            default:
            $title = "Page 404";
            include("../view/erreur404.php");
        }
    }else{
        $title = "Page d'Accueil";
        include("../view/poetiniHome.php");
}
