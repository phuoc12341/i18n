<?php

namespace App\Repo;

use App\Models\PostTranslation;

interface PostTranslationRepositoryInterface extends BaseRepositoryInterface
{
    public function update(array $data, PostTranslation $postTranslation);
}
