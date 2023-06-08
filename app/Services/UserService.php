<?php

namespace App\Services;

use stdClass;
use App\DTO\User\CreateUserDTO;
use App\Repositories\UserRepositoryInterface;
use App\Repositories\PaginationInterface;

class UserService
{
    public function __construct(
        protected UserRepositoryInterface $repository
    ) {
    }

    public function new(CreateUserDTO $dto): stdClass
    {
        return $this->repository->new($dto);
    }
}
