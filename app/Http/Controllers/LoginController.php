<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Services\UserService;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    protected $Userservice;

    public function __construct(UserService $Userservice)
    {
        $this->Userservice = $Userservice;
    }

    public function show(){
        return view('auth.login');
    }

    public function login(LoginRequest $request){

        $credentials = $request->only('username', 'password');

        $rol = $this->Userservice->login($credentials);

        if ($rol) {
            // Redirigir según el rol
            if ($rol->nombre === 'admin') {
                return redirect()->route('admin.home');
            } elseif ($rol->nombre === 'user') {
                return redirect()->route('user.home');
            }
        }

        return back()->withErrors(['login' => 'Credenciales inválidas']);

    }

}
