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

    public function validateUser($credentials)
    {
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return true;
        }
        return false;
    }
}