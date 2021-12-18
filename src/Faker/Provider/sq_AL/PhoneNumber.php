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
