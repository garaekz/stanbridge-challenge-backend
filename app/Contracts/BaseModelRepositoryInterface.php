<?php

namespace App\Contracts;

interface BaseModelRepositoryInterface
{
    public function all($paginate = null);

    public function create(array $data);

    public function update(array $data, $id);

    public function delete($id);

    public function findSingleBy(array $where, array $with = []);
}
