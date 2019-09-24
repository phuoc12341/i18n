<?php

namespace App\Repo;

use Illuminate\Database\Eloquent\Model;

class BaseRepository implements BaseRepositoryInterface
{
    /**
     * @var Model
     */
    protected $model;

    /**
     * BaseRepository constructor.
     *
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function store(Model $model)
    {   
        return $model->save();
    }

    public function destroy(Model $model)
    {
        return $model->delete();
    }
}
