<?php

namespace App\Contracts\Interfaces\Services\Auth;

interface AuthServiceInterface
{
    public function authenticate(array $credentials);
}
