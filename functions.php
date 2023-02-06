<?php


function createDbConn(): PDO
{
    $db = new PDO('mysql:host=db; dbname=jp_mtg_cards', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}


function getAllCards(PDO $db): array
{
    $stmnt = $db->prepare('SELECT `name`, `type_line`, `mana`, `rarity`, `img_url` FROM `cards`;');
    $stmnt->execute();
    return $stmnt->fetchAll();
}