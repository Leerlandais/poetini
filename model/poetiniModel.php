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

    $sql = "INSERT INTO `poetini` (
        `user_nom`, 
        `user_prenom`, 
        `user_email`, 
        `user_phone`, 
        `user_message`
        ) VALUES (
            '$firstN', 
            '$lastN', 
            '$email', 
            '$phone', 
            '$texte')";
    try {
    $db->exec($sql);
    return true;
} catch (Exception $e) {
    return $e->getMessage();
}
}

function getImages(PDO $imageDB): array
{
    $sql = "SELECT * from poetini_home ORDER BY id ASC";
    $query = $imageDB->query($sql);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    $query->closeCursor();
    return $result;
}

function submitNewImages(PDO $imageDB, array $imageInputs) 
{
    $sql = "UPDATE `poetini_home` 
            SET `image_src` = 
                CASE 
                    WHEN `id` = 1 THEN :imgInp1
                    WHEN `id` = 2 THEN :imgInp2
                    WHEN `id` = 3 THEN :imgInp3
                    WHEN `id` = 4 THEN :imgInp4
                    WHEN `id` = 5 THEN :imgInp5
                    WHEN `id` = 6 THEN :imgInp6
                    WHEN `id` = 7 THEN :imgInp7
                    WHEN `id` = 8 THEN :imgInp8
                    ELSE `image_src`
                END";

    $query = $imageDB->prepare($sql);
    $didIt = $query->execute([
        ':imgInp1' => $imageInputs['imgInp1'],
        ':imgInp2' => $imageInputs['imgInp2'],
        ':imgInp3' => $imageInputs['imgInp3'],
        ':imgInp4' => $imageInputs['imgInp4'],
        ':imgInp5' => $imageInputs['imgInp5'],
        ':imgInp6' => $imageInputs['imgInp6'],
        ':imgInp7' => $imageInputs['imgInp7'],
        ':imgInp8' => $imageInputs['imgInp8'],
    ]);

    $query->closeCursor();
    return $didIt;
}

function submitNewTitle(PDO $titleDB, array $titleInputs) 
{
    $sql = "UPDATE `poetini_home` 
            SET `image_title` = 
                CASE 
                    WHEN `id` = 1 THEN :titleInp1
                    WHEN `id` = 2 THEN :titleInp2
                    WHEN `id` = 3 THEN :titleInp3
                    WHEN `id` = 4 THEN :titleInp4
                    WHEN `id` = 5 THEN :titleInp5
                    WHEN `id` = 6 THEN :titleInp6
                    WHEN `id` = 7 THEN :titleInp7
                    WHEN `id` = 8 THEN :titleInp8
                    ELSE `image_title`
                END";

    $query = $titleDB->prepare($sql);
    $didIt = $query->execute([
        ':titleInp1' => $titleInputs['titleInp1'],
        ':titleInp2' => $titleInputs['titleInp2'],
        ':titleInp3' => $titleInputs['titleInp3'],
        ':titleInp4' => $titleInputs['titleInp4'],
        ':titleInp5' => $titleInputs['titleInp5'],
        ':titleInp6' => $titleInputs['titleInp6'],
        ':titleInp7' => $titleInputs['titleInp7'],
        ':titleInp8' => $titleInputs['titleInp8'],
    ]);

    $query->closeCursor();
    return $didIt;
}



function submitNewText(PDO $textDB, array $textInputs) 
{
    $sql = "UPDATE `poetini_home` 
            SET `image_text` = 
                CASE 
                    WHEN `id` = 1 THEN :textInp1
                    WHEN `id` = 2 THEN :textInp2
                    WHEN `id` = 3 THEN :textInp3
                    WHEN `id` = 4 THEN :textInp4
                    WHEN `id` = 5 THEN :textInp5
                    WHEN `id` = 6 THEN :textInp6
                    WHEN `id` = 7 THEN :textInp7
                    WHEN `id` = 8 THEN :textInp8
                    ELSE `image_text`
                END";

    $query = $textDB->prepare($sql);
    $didIt = $query->execute([
        ':textInp1' => $textInputs['textInp1'],
        ':textInp2' => $textInputs['textInp2'],
        ':textInp3' => $textInputs['textInp3'],
        ':textInp4' => $textInputs['textInp4'],
        ':textInp5' => $textInputs['textInp5'],
        ':textInp6' => $textInputs['textInp6'],
        ':textInp7' => $textInputs['textInp7'],
        ':textInp8' => $textInputs['textInp8'],
    ]);

    $query->closeCursor();
    return $didIt;
}