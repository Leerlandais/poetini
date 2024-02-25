<?php

function getMessages(PDO $db): array
{

  
    $sql = "SELECT * FROM poetini ORDER BY id ASC";
    $query = $db->query($sql);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    $query->closeCursor();
    return $result; 

}


function addMessages(PDO $db,
                    string $firstname,
                    string $lastname,
                    string $usermail,
                    string $userphone,
                    string $message
                    )
{
    $firstN = htmlspecialchars(strip_tags(trim($firstname)), ENT_QUOTES);
    $lastN = htmlspecialchars(strip_tags(trim($lastname)), ENT_QUOTES);
    $email = filter_var($usermail, FILTER_VALIDATE_EMAIL);
    $phone = htmlspecialchars(strip_tags(trim($userphone)), ENT_QUOTES);
    $texte = htmlspecialchars(strip_tags(trim($message)),ENT_QUOTES);
    if (empty($firstN) || empty($lastN) || $email === false || empty($texte)) {
        return false;
    }

    $sql = "INSERT INTO `poetini` (`user_nom`, `user_prenom`, `user_email`, `user_phone`, `user_message`) VALUES ('$firstN', '$lastN', '$email', '$phone', '$texte')";
    try {
    $db->exec($sql);
    return true;
} catch (Exception $e) {
    return $e->getMessage();
}
}

function getImages(PDO $imageDB): array
{
    $sql = "SELECT * from poetini_image ORDER BY id ASC";
    $query = $imageDB->query($sql);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    $query->closeCursor();
    return $result;
}