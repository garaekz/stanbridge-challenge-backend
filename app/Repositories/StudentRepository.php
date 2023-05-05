<?php

namespace App\Repositories;

use App\Contracts\StudentRepositoryInterface;
use App\Models\Student;

class StudentRepository implements StudentRepositoryInterface
{
    public function __construct(
        private Student $model
    ){}

    public function all($paginate = null)
    {
        return $paginate ? $this->model->paginate($paginate) : $this->model->all();
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update(array $data, $existingModel)
    {
        return $existingModel->update($data);
    }

    public function delete($existingModel)
    {
        return $existingModel->delete();
    }

    public function findSingleBy(array $where, array $with = [])
    {
        if (isset($where[0]) && !is_array($where[0])) {
            $where = [$where];
        }

        return $this->model->with($with)->where($where)->first();
    }

    public function getWithAttendance($date, $perPage)
    {
        return $this->model->withCount(['attendances as attendance' => function ($query) use ($date) {
            $query->where('date', $date);
        }])->orderBy('id')->paginate($perPage)->through(function ($student) {
            $student['attendance'] = $student['attendance'] > 0;
            return $student;
        });
    }
}
