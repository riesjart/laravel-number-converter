<?php

use Bluora\PhpNumberConverter\NumberConverter;

if (! function_exists('number_to_word')) {
    /**
     * Convert number to English word.
     *
     * @param integer $number
     *
     * @return string
     */
    function number_to_word($number)
    {
        return app('NumConvert')->word($number);
    }
}

if (! function_exists('number_to_roman')) {
    /**
     * Convert number to roman numerals.
     *
     * @param integer $number
     *
     * @return string
     */
    function number_to_roman($number)
    {
        return app('NumConvert')->roman($number);
    }
}

if (! function_exists('number_to_ordinal')) {
    /**
     * Convert number to ordinal.
     *
     * @param integer $number
     *
     * @return string
     */
    function number_to_ordinal($number)
    {
        return app('NumConvert')->ordinal($number);
    }
}