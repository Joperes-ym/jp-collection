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

//conditional if everything is valid echo valid
if (
    validLength($name) &&
    validLength($type_line) &&
    validLength($mana) &&
    validRarity($rarity) &&
    filter_var($img_url, FILTER_VALIDATE_URL)
) {
    $db = createDbConn();
    insertCard($db, $name, $type_line, $mana, $rarity, $img_url);
}

header("Location: index.php");

