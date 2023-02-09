<?php

require_once 'functions.php';

$userData = $_POST;
//if the POST data doesnt contain everything then redirect back to homepage
if (!allDataPresent($userData)) {
    header("Location: index.php");
}

$name = $userData['name'];
$type_line = $userData['type_line'];
$mana = $userData['mana'];
$rarity = $userData['rarity'];
$img_url = $userData['img_url'];

$input_valid = validLength($name, $type_line, $mana, $rarity, $img_url);

//conditional if everything is valid echo valid
if ($input_valid === true) {
    $db = createDbConn();
    insertCard($db, $name, $type_line, $mana, $rarity, $img_url);
    header("Location: index.php");
} else {
    echo 'Invalid';
}


