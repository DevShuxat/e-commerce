<?php

namespace App\Enums;

use Spatie\Enum\Enum;

class SettingType extends Enum
{

    const SELECT = 'select';
    const SWITCH = 'switch';

    protected static function values(): array
    {
        return [
            'SELECT' => 'select',
            'SWITCH' => 'switch',
        ];
    }
}
