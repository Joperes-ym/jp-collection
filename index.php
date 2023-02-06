<?php

require_once 'functions.php';

$db = createDbConn();
$cards = getAllCards($db);

echo '<pre>';
var_dump($cards);
echo '<pre>';