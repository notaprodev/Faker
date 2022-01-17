<?php

namespace Faker\Provider\sq_AL;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    /**
     * @see https://en.wikipedia.org/wiki/Telephone_numbers_in_Albania
     */
    protected static $formats = [
        '+355 (#) ## ## #####',
        '00355 ### ####',
        '+355 0## ### ###',
        '0## ## ## ###',
        '+355 (0)## ### ###',
    ];
}
