<?php

namespace App\Contracts;

interface StudentRepositoryInterface extends BaseModelRepositoryInterface
{
    public function getWithAttendance($course_id, $date, $perPage);
}
