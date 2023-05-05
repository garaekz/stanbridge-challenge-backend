<?php

namespace App\Services;

use App\Contracts\AttendanceRepositoryInterface;

class AttendanceService
{
    public function __construct(
        private AttendanceRepositoryInterface $repository
    ) {
    }

    public function createOrDelete($data)
    {
        $existingAttendance = $this->repository->findSingleBy([
            ['student_id', $data['student_id']],
            ['course_id', $data['course_id']],
            ['date', $data['date']],
        ]);

        if ($existingAttendance && $data['attendance'] === false) {
            return $this->repository->delete($existingAttendance);
        }

        if (!$existingAttendance && $data['attendance'] === true) {
            return $this->repository->create($data);
        }

        if (($existingAttendance && $data['attendance'] === true) ||
            (!$existingAttendance && $data['attendance'] === false)) {
            return true;
        }

        // This should never happen.
        throw new \Exception('Attendance could not be updated.');
    }
}
