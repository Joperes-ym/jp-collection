<?php

require_once 'functions.php';

$db = createDbConn();
$cards = getAllCards($db);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Collection</title>
    <link rel="stylesheet" type="text/css" href="normalize.css" >
    <link rel="stylesheet"  href="styles.css" >
</head>
<body>
    <navbar>
        <a href="#"><img src="img/logo.png" id="logo"></a>
        <div>
            <ul>
                <li><button class="menuButton">MY COLLECTION</button></li>
                <li><button class="menuButton">ADD TO COLLECTION</button></li>
            </ul>
        </div>
    </navbar>
    <header>
            <h1>Welcome to my Magic: The Gathering Collection</h1>
            <p>Magic: The Gathering, also Magic or MTG, is a strategy card game created in 1993 and holds the title of "Most Played Trading Card Game". Magic is not a single game but rather a game system that shares a set of rules and game components (mainly cards). It can be played in many different formats.</p>
            <p>There are currently more than 20,000 unique Magic cards, to which hundreds are added each year.</p>
    </header>
</body>
</html>
