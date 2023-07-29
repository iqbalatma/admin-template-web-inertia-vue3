<?php

namespace App\Models;

use App\Enums\Table;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends \Spatie\Permission\Models\Permission
{
    use HasFactory;
    protected $table = Table::PERMISSIONS->value;
}
