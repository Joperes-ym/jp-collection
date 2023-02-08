<?php

require_once '../functions.php';
require_once '../addCard.php';

use PHPUnit\Framework\TestCase;

class indexTest extends TestCase
{
    public function testSuccessDisplay()
    {
        //expected result of the test
        $expected = '        <form action="addCard.php" method="post">
            <label for="name">Name: </label>
            <input id="name" type="text" name="name" placeholder="Card name..." value="" /><br>
            <label for="type_line">Type: </label>
            <input id="type_line" type="text" name="type_line" placeholder="Type of card..." value=""/><br>
            <label for="mana">Mana: </label>
            <input id="mana" type="text" name="mana" placeholder="Mana category" value=""/><br>
            <label for="rarity">Rarity: </label>
            <select id="rarity" name="rarity" value="">
                <option value="Uncommon">Uncommon</option>
                <option value="Common">Common</option>
                <option value="Rare">Rare</option>
                <option value="Mythic rare">Mythic rare</option>
            </select><br>
            <label for="img_url">Image URL: </label>
            <input id="img_url" type="text" name="img_url" placeholder="Type image URL..." value=""/><br>
            <input type="submit" />
        </form>';
        //create the input to get the expected output
        $input = [
            ['name' => 'Cuthbert', 'type_line' => 'Creature', 'mana' => 'Forest', 'rarity' => 'Rare', 'img_url' => 'www.google.com']
        ];
        //run the real function by passing in the input and saving the output
        $case = displayCard($input);
        //compare the expected result with the actual result
        $this->assertEquals($expected, $case);
    }

    public function testFailureDisplayCard()
    {
        $expected = '';
        $input = [
                ['name' => 'Cuthbert', 'type' => 'Creature', 'mana' => 'Forest', 'rarity' => 'Mithyc', 'img_url' => 'test.jpg']
        ];
        $case = displayCard($input);
        $this->assertEquals($expected, $case);
    }

    public function testMalformedCard()
    {
        $this->expectException(TypeError::class);
        $input = 'lnlnln';
        $case = displayCard($input);
    }

    public function testSuccessValidation()
    {
        //expected result of the test
        $expected = '<article>
                        <div class="cardSection">
                            <div class="imageSection">
                              <img src="test.jpg" class="image"/>
                            </div>
                            <div class="cardDetails">
                              <p><b>Name: </b>Cuthbert</p>
                              <p><b>Type: </b>Creature</p>
                              <p><b>Mana: </b>Forest</p>
                              <p><b>Rarity: </b>Rare</p>
                            </div>
                        </div>
                    </article>';
        //create the input to get the expected output
        $input = [
            ['name' => 'Cuthbert', 'type_line' => 'Creature', 'mana' => 'Forest', 'rarity' => 'Rare', 'img_url' => 'test.jpg']
        ];
        //run the real function by passing in the input and saving the output
        $case = displayCard($input);
        //compare the expected result with the actual result
        $this->assertEquals($expected, $case);
    }
}