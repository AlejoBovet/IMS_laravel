<?php 

namespace App\Services;

use App\Repositories\UserRepository;
# importar la clase Auth
use Illuminate\Support\Facades\Auth;

class UserService
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function all()
    {
        return $this->userRepository->all();
    }

    public function login(array $credentials)
    {
        // Intentar autenticar al usuario
        if (Auth::attempt($credentials)) {
            $user = Auth::user(); // Obtener el usuario autenticado
            return $user->userRepository->findByUsernameWithRol($credentials['username']);
        }

        return null; // Retornar null si la autenticación falla
    }

}