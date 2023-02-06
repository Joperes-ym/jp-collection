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
    <link rel="stylesheet" type="text/css" href="styles.css.css" />
</head>
<body>
    <navbar>
        <a href="#"><img src="logo.png"></a>
        <div>
            <ul>
                <li><button>MY COLLECTION</button></li>
                <li><button>ADD TO COLLECTION</button></li>
            </ul>
        </div>
    </navbar>
</body>
</html>
