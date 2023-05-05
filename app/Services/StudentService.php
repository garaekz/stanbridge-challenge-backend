<?php

namespace App\Services;

use App\Contracts\StudentRepositoryInterface;

class StudentService
{
    public function __construct(
        private StudentRepositoryInterface $repository
    ) {}

    public function getPaginatedWithAttendance($course_id, $date, $perPage)
    {
        return $this->repository->getWithAttendance($course_id, $date, $perPage);
    }

}
