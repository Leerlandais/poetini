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
    $sql = "SELECT * from poetini_image_text ORDER BY image_one ASC";
    $query = $imageDB->query($sql);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    $query->closeCursor();
    return $result;
}

function submitNewImages(PDO $imageDB, array $imageInputs) 
{
    $sql = "UPDATE `poetini_image_text` SET `image_one`=?, `image_two`=?, `image_three`=?, `image_four`=?, `image_five`=?, `image_six`=?, `image_seven`=?, `image_eight`=?";
    $query = $imageDB->prepare($sql);
    $params = [
        $imageInputs['imgInp1'], $imageInputs['imgInp2'], $imageInputs['imgInp3'], $imageInputs['imgInp4'], $imageInputs['imgInp5'], $imageInputs['imgInp6'], $imageInputs['imgInp7'], $imageInputs['imgInp8'],
    ];
    $didIt = $query->execute($params);
    $query->closeCursor();    
    return $didIt;
}




function submitNewText(PDO $textDB, array $textInputs) 
{
    $sql = "UPDATE `poetini_image_text` SET `text_one`=?, `text_two`=?, `text_three`=?, `text_four`=?, `text_five`=?, `text_six`=?, `text_seven`=?, `text_eight`=?";
    $query = $textDB->prepare($sql);
    $params = [
        $textInputs['textInp1'], $textInputs['textInp2'], $textInputs['textInp3'], $textInputs['textInp4'], $textInputs['textInp5'], $textInputs['textInp6'], $textInputs['textInp7'], $textInputs['textInp8'],
    ];
    $didIt = $query->execute($params);
    $query->closeCursor();
    return $didIt;
}