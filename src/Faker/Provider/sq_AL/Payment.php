<?php

namespace Faker\Provider\sq_AL;

class Payment extends \Faker\Provider\Payment
{
    /*
    https://www.xe.com/ibancalculator/sample/?ibancountry=albania
     */
    public static function bankAccountNumber($prefix = '', $countryCode = 'AL', $length = null)
    {
        return static::iban($countryCode, $prefix, $length);
    }
}
