<?php

namespace Faker\Provider\sq_AL;

class Company extends \Faker\Provider\Company
{
    protected static $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{lastName}} {{companySuffix}}',
        '{{lastName}}',
        '{{lastName}}',
    ];
    
    protected static $companySuffix = ['ShPK', 'ShA', 'Group'];
}
