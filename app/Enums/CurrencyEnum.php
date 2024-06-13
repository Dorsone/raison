<?php

namespace App\Enums;

enum CurrencyEnum: string
{
    use ExtensionForEnumTrait;

    case USD = 'usd';
    case EUR = 'eur';
    case RUB = 'rub';
}
