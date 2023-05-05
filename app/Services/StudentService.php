<?php

namespace App\Services;

use App\Contracts\StudentRepositoryInterface;

class StudentService
{
    public function __construct(
        private StudentRepositoryInterface $repository
    ) {}

    public function getPaginatedWithAttendance($date, $perPage)
    {
        return $this->repository->getWithAttendance($date, $perPage);
    }

}
