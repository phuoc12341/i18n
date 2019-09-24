<?php

namespace App\Repo;

use App\Models\PostTranslation;

class PostTranslationRepository extends BaseRepository implements PostTranslationRepositoryInterface
{
    /**
     * @var PostTranslation
     */
    protected $model;

    /**
     * PostRepository constructor.
     *
     * @param Post $model
     */
    public function __construct(PostTranslation $model)
    {
        parent::__construct($model);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(array $data, PostTranslation $postTranslation)
    {
        return $postTranslation->update($data);
    }
}
