<?php

namespace App\Enum\Car;

enum Status : int
{
    case DRAFT = 1;
    case ACTIVE = 2;
    case SOLD = 3;
    case CANCELED = 4;

    public function text()
    {
        return match ($this) {
            self::DRAFT => 'Черновик',
            self::ACTIVE => 'Активно',
            self::SOLD => 'Продано',
            self::CANCELED => 'Отменено'
        };
    }
}
