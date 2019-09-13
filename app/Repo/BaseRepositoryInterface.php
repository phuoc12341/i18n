<?php

namespace App\Repo;

use Illuminate\Database\Eloquent\Model;

interface BaseRepositoryInterface
{
    public function store(Model $model);
    public function destroy(Model $model);
}
