<?php

namespace App\Services\Management;
use App\Repositories\PermissionRepository;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Iqbalatma\LaravelServiceRepo\BaseService;

class PermissionService extends BaseService
{
    protected $repository;

    public function __construct()
    {
         $this->repository = new PermissionRepository();
    }

    public function getAllDataPaginated():array
    {
        return [
            "title" => "Permissions",
            "cardTitle" => "Permissions",
            "cardDescription" => "Available action permissions for user",
            "permissions" => $this->repository->getAllDataPaginated()
        ];
    }
}
