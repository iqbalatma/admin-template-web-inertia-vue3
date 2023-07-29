<?php

namespace App\Enums;

use ArchTech\Enums\InvokableCases;

enum DatabaseSchema:string
{
    use InvokableCases;
    case AUTH = "auth";
}
