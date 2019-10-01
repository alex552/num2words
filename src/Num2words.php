<?php


namespace Alex552\Num2words;


class Num2words
{
    public static function convert($number)
    {
        return Converter::getInstance()->baa2words(1);
    }
}