<?php

namespace App\Http\Controllers;

use App\DTO\User\CreateUserDTO;
use App\Http\Requests\User\StoreUser;
use App\Models\User;
use App\Services\UserService;

class UserController extends Controller
{
    public function __construct(
        protected UserService $service
    ) {
    }

    public function show()
    {
        return view('signup');
    }

    public function store(StoreUser $request, User $support)
    {
        $this->service->new(
            CreateUserDTO::makeFromRequest($request)
        );
        return redirect()->route('protected')->with('message', 'Cadastrado com Sucesso!');
    }
}
