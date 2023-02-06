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
    <link rel="stylesheet" type="text/css" href="normalize.css" />
    <link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
    <navbar>
        <a href="#"><img src="logo.png" id="logo"></a>
        <div>
            <ul>
                <li><button class="menuButton">MY COLLECTION</button></li>
                <li><button class="menuButton">ADD TO COLLECTION</button></li>
            </ul>
        </div>
    </navbar>
</body>
</html>
