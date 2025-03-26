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
        return view('login.login');
    }

    public function login(LoginRequest $request){

        // Obtener las credenciales del formulario
        $credentials = $request->getCredentials();

        // Intentar autenticar al usuario a través del servicio
        $user = $this->Userservice->login($credentials);

        // Si las credenciales son inválidas, redirigir al login con un mensaje de error
        if (!$user) {
            return redirect('/login')->with('error', 'Credenciales inválidas');
        }

        return $this->authenticated($request, $user);
        
    }

    public function authenticated(Request $request, $user)
    {
        return 'funciona'; 
    }

}
