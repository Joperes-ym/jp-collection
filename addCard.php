<?php

require_once 'functions.php';

session_start();

//write a conditional that if the POST data doesnt contain everything we want then redirect back to homepage

if (!isset($_POST['name']) || !isset($_POST['type_line']) || !isset($_POST['mana']) ||!isset($_POST['rarity']) || !isset($_POST['img_url'])) {
    header("Location: index.php");
}

$name = $_POST['name'];
$type_line = $_POST['type_line'];
$mana = $_POST['mana'];
$rarity = $_POST['rarity'];
$img_url = $_POST['img_url'];



// validation
    // check if the name is less than 100 characters

if (strlen($name) > 100) {
    $nameValid = false;
} else {
    $nameValid = true;
}

if (strlen($type_line) > 100) {
    $type_lineValid = false;
} else {
    $type_lineValid = true;
}

if (strlen($mana) > 100) {
    $manaValid = false;
} else {
    $manaValid = true;
}

$validRarityValues = ['Uncommon', 'Common', 'Rare', 'Mythic rare'];
$rarityValid = in_array($rarity, $validRarityValues);

if (!filter_var($img_url, FILTER_VALIDATE_URL) === false) {
    $img_urlValid = false;
} else {
    $img_urlValid = true;
}


//conditional if everything is valid echo valid,
    //if not then echo invalid
if ($nameValid && $type_lineValid && $manaValid && $rarityValid && $img_urlValid) {
    echo 'Valid';
} else {
    echo 'Invalid';
}
