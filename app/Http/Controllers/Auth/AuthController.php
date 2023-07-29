<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AuthenticateRequest;
use App\Services\Auth\AuthService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Inertia\Response;

class AuthController extends Controller
{
    /**
     * @return Response
     */
    public function login():Response
    {
        return Inertia::render("Auth/Login",[
            "title" => "Login"
        ]);
    }


    /**
     * @param AuthService $service
     * @param AuthenticateRequest $request
     * @return RedirectResponse
     */
    public function authenticate(AuthService $service, AuthenticateRequest $request):RedirectResponse
    {
        if ($service->authenticate($request->validated())) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'Invalid username or password',
        ])->onlyInput('email');
    }


    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function logout(Request $request):RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
