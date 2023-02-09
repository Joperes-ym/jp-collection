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
 *
 * display cards on html format
 * @param $cards multidimensional array of cards
 * @return string to output
 */
function displayCard(array $cards) : string
{
    $result='';
    foreach ($cards as $card) {
        if (array_key_exists('img_url', $card)
            && array_key_exists('name', $card)
            && array_key_exists('type_line', $card)
            && array_key_exists('mana', $card)
            && array_key_exists('rarity', $card)) {
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
    }
    return $result;
}

/**
 * verify if all data is present
 * @param array $userData to send data
 * @return bool returns true or false
 */
function allDataPresent(array $userData): bool
{
    return (isset($userData['name']) && isset($userData['type_line']) && isset($userData['mana']) && isset($userData['rarity']) && isset($userData['img_url']));
}

// validation
/**
 * makes sure the string length is less than 100 characters
 * @param string $data as a string to be checked
 * @return bool true or false
 */
function validLength(string $data): bool
{
    return !(strlen($data) > 100);
}

/**
 * makes sure only have those strings as an option
 * @param string $rarity
 * @return bool
 */
function validRarity(string $rarity): bool
{
    $validRarityValues = ['Uncommon', 'Common', 'Rare', 'Mythic rare'];
    return in_array($rarity, $validRarityValues);
}



