<?php

namespace Faker\Provider\sq_AL;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = [
        '+### (#) ## ## #####',
        '+### ## #######',
        '+### ## ########',
        '+### ### #######',
        '+### ### ########',
        '+### #### #######',
        '+### #### ########',
        '00### ### ####',
        '+355 0## ### ###',
        '3## ### ###',
        '+355 (0)## ### ###',
    ];
}
/* https://en.wikipedia.org/wiki/Telephone_numbers_in_Albania
*/
