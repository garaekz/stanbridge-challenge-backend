<?php

namespace App\Contracts;

interface StudentRepositoryInterface extends BaseModelRepositoryInterface
{
    public function getWithAttendance($date, $perPage);
}
