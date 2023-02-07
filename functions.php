<?php


/**
 * Creates a DB connection
 * @return PDO as the bd conn
 */
function createDbConn(): PDO
{
    $db = new PDO('mysql:host=db; dbname=jp_mtg_cards', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}


/**
 * retrieves cards data from DB
 * @param PDO $db the PDO connection
 * @return array the results from DB
 */
function getAllCards(PDO $db): array
{
    $stmnt = $db->prepare('SELECT `name`, `type_line`, `mana`, `rarity`, `img_url` FROM `cards`;');
    $stmnt->execute();
    return $stmnt->fetchAll();
}

/**
 * display cards on html format
 * @param $cards multidimensional array of cards
 * @return string to output
 */
function displayCard($cards)
{
    $result='';
    foreach ($cards as $card) {
        $result .= '<article>
                        <div class="cardSection">
                            <div class="imageSection">
                              <img src="' . $card['img_url'] . '" class="image"/>
                            </div>
                            <div class="cardDetails">
                              <p><b>Name: </b>' . $card['name'] . '</p>
                              <p><b>Type: </b>' . $card['type_line'] . '</p>
                              <p><b>Mana: </b>' . $card['mana'] . '</p>
                              <p><b>Rarity: </b>' . $card['rarity'] . '</p>
                            </div>
                        </div>
                    </article>';
    }
    return $result;
}
