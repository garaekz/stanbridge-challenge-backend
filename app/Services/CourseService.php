<?php

namespace App\Services;

use App\Contracts\CourseRepositoryInterface;

class CourseService
{
    public function __construct(
        private CourseRepositoryInterface $repository
    ) {}

    public function getAll($perPage)
    {
        return $this->repository->all($perPage);
    }

}
