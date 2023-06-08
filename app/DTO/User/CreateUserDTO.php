<?php

namespace App\DTO\User;

use App\Http\Requests\User\StoreUser;
use Illuminate\Support\Facades\Hash;

class CreateUserDTO
{
    public function __construct(
        public string $username,
        public string $email,
        public string $password,
        public string $password_confirmation
    ) {
    }

    public static function makeFromRequest(StoreUser $request): self
    {
        return new self(
            $request->username,
            $request->email,
            Hash::make($request->password),
            Hash::make($request->password_confirmation)
        );
    }
}
