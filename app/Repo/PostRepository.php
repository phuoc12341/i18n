<?php

namespace App\Repo;

use App\Models\Post;

class PostRepository extends BaseRepository implements PostRepositoryInterface
{
    /**
     * @var Post
     */
    protected $model;

    /**
     * PostRepository constructor.
     *
     * @param Post $model
     */
    public function __construct(Post $model)
    {
        parent::__construct($model);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getListPostWithPostTranslations()
    {
        $listPost = Post::with(['postTranslations' => function ($query) {
            $query->select(['id', 'title' ,'content' ,'description', 'post_id']);
            $query->translation();
        }])->get('posts.id');

        return $listPost;
    }
}
