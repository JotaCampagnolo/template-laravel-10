<?php

namespace App\Repositories;

use App\Repositories\UserRepositoryInterface;
use App\DTO\User\CreateUserDTO;
use App\Models\User;
use stdClass;

class UserEloquentORM implements UserRepositoryInterface
{

    public function __construct(
        protected User $model
    ) {
    }

    public function new(CreateUserDTO $dto): stdClass
    {
        $user = $this->model->create(
            (array) $dto
        );
        return (object) $user->toArray();
    }
}
