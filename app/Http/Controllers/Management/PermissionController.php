<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Services\Management\PermissionService;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class PermissionController extends Controller
{

    /**
     * @param PermissionService $service
     * @return Response
     */
    public function __invoke(PermissionService $service):Response
    {
        return Inertia::render('Management/Permissions/Index', $service->getAllDataPaginated());
    }
}
