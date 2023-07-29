<?php

namespace App\Services\Auth;

use App\Contracts\Interfaces\Services\Auth\AuthServiceInterface;
use Illuminate\Support\Facades\Auth;

class AuthService extends \Iqbalatma\LaravelServiceRepo\BaseService implements AuthServiceInterface
{
    public function authenticate(array $credentials):bool
    {
        return Auth::attempt($credentials);
    }
}
