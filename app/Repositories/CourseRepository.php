<?php

namespace App\Repositories;

use App\Contracts\CourseRepositoryInterface;
use App\Models\Course;

class CourseRepository implements CourseRepositoryInterface
{
    public function __construct(
        private Course $model
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
}
