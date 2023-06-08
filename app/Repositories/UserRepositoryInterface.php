<?php

namespace App\Repositories;

use App\DTO\User\CreateUserDTO;
use stdClass;

interface UserRepositoryInterface
{
    public function new(CreateUserDTO $dto): stdClass;
}
