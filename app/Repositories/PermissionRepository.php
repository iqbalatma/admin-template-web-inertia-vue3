<?php

namespace App\Repositories;

use App\Models\Permission;

class PermissionRepository extends \Iqbalatma\LaravelServiceRepo\BaseRepository
{
    protected $model;

    public function __construct()
    {
        $this->model = new Permission();
    }
}
