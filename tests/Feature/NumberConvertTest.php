<?php


namespace Alex552\Num2words\Tests;

use Alex552\Num2words\Num2words;
use Orchestra\Testbench\TestCase;

class NumberConvertTest extends TestCase
{
    /** @test */
    public function one_number_to_word(){
        $this->assertEquals('one',Num2words::convert(1));
    }
    /** @test */
    public function two_number_to_word(){
        $this->assertEquals('one  thousand   ten',Num2words::convert(1010));
    }
}