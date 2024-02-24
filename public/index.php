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

    
    // on appelle la fonction d'insertion dans la DB (addLivreOr())
    $insert = addMessages($db,$_POST['user_nom'], $_POST['user_prenom'], $_POST['user_email'], $_POST['user_phone'], $_POST['user_message']);
    
    // si l'insertion a réussi
    if ($insert) {
        // on redirige vers la page actuelle
        header("Location: ?p=contact"); 
        exit();
    } else {
        // sinon, on affiche un message d'erreur
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
            default:
            $title = "Page 404";
            include("../templates/erreur404.php");
        }
    }else{
        $title = "Page d'Accueil";
        include("../view/poetiniHome.php");
}
