<?php

require_once 'index.php';
require_once 'functions.php';

use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{
    public function testSuccessDisplay()
    {
        //expected result of the test
        $expected = 6;
        //create the input to get the expected output
        $input = 3;
        //run the real function by passing in the input and saving the output
        $case = multiplyByTwo($input);
        //compare the expected result with the actual result
        $this->assertEquals($expected, $case);
    }