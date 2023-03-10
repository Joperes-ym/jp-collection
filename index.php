<?php

require_once 'functions.php';

$db = createDbConn();
$cards = getAllCards($db);
$cardhtml = displayCard($cards);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Collection</title>
    <link rel="stylesheet" type="text/css" href="normalize.css" >
    <link rel="stylesheet" type="text/css"  href="styles.css" >
</head>
<body>
    <navbar>
        <a href="#home"><img src="img/logo.png" id="logo" alt="Home"></a>
        <div>
            <ul>
                <li><a href="#myCollection" ><button type="button" class="menuButton">MY COLLECTION</button></a></li>
            </ul>
        </div>
    </navbar>
    <header id="home">
        <div id="intro">
            <h1>Welcome to my Magic: The Gathering Collection</h1>
            <p>Magic: The Gathering, also Magic or MTG, is a strategy card game created in 1993 and holds the title of "Most Played Trading Card Game".<br>Magic is not a single game but rather a game system that shares a set of rules and game components (mainly cards). It can be played in many different formats.</p>
            <p>There are currently more than 20,000 unique Magic cards, to which hundreds are added each year.</p>
        </div>
    </header>
    <main id="myCollection">
        <h1>My Collection</h1>
        <section id="myCollectionSec">
            <?php echo $cardhtml; ?>
        </section>
    </main>
</body>
</html>
