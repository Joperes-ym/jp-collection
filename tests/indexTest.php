<?php

require_once '../functions.php';

use PHPUnit\Framework\TestCase;

class indexTest extends TestCase
{
    public function testSuccessDisplay()
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



    public function testSuccessAllDataPresent()
    {
        //expected result of the test
        $expected = true;
        //create the input to get the expected output
        $input = ['name' => 'Cuthbert', 'type_line' => 'Creature', 'mana' => 'Forest', 'rarity' => 'Rare', 'img_url' => 'test.jpg'];
        //run the real function by passing in the input and saving the output
        $case = allDataPresent($input);
        //compare the expected result with the actual result
        $this->assertEquals($expected, $case);
    }

    public function testFailureAllDataPresent()
    {
        $expected = '';
        $input = [
            ['name' => 'Cuthbert', 'type' => 'Creature', 'mana' => 'Forest', 'rarity' => 'Mythic', 'img_url' => 'test.jpg']
        ];
        $case = allDataPresent($input);
        $this->assertEquals($expected, $case);
    }

    public function testSuccessValidLength()
    {
        //expected result of the test
        $expected = true;
        //create the input to get the expected output
        $input = 'Lengendary creature';
        //run the real function by passing in the input and saving the output
        $case = validLength($input);
        //compare the expected result with the actual result
        $this->assertEquals($expected, $case);
    }

    public function testFailureValidLength()
    {
        $expected = false;
        $input = [
            ['name' => 'Cuthbert', 'type' => 'Creature', 'mana' => 'Forest', 'rarity' => 'Mythic', 'img_url' => 'test.jpg']
        ];
        $case = allDataPresent($input);
        $this->assertEquals($expected, $case);
    }

    public function testSuccessValidRarity()
    {
        $expected = 'Common';
        //create the input to get the expected output
        $input = 'Common';
        //run the real function by passing in the input and saving the output
        $case = validRarity($input);
        //compare the expected result with the actual result
        $this->assertEquals($expected, $case);
    }

    public function testFailureValidRarity()
    {
        $expected = false;
        $input = 'aaa';
        $case = validRarity($input);
        $this->assertEquals($expected, $case);
    }
}