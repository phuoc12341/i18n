<?php

namespace App\Repo;

interface PostRepositoryInterface extends BaseRepositoryInterface
{
    public function getListPostWithPostTranslations();
}

