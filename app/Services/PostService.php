<?php

namespace App\Services;

use App\Repo\PostRepositoryInterface;
use App\Repo\PostTranslationRepositoryInterface;
use App\Models\Post;
use App\Models\PostTranslation;
use App;

class PostService extends BaseService
{
    /**
     * @var \App\Repo\PostRepositoryInterface
     */
    protected $postRepository;
    protected $postTranslationRepository;

    /**
     *
     * @param \App\Repo\PostRepositoryInterface $postRepository
     */
    public function __construct(PostRepositoryInterface $postRepository, PostTranslationRepositoryInterface $postTranslationRepository)
    {
        $this->postRepository = $postRepository;
        $this->postTranslationRepository = $postTranslationRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getListPostWithPostTranslations()
    {
        $listPost = $this->postRepository->getListPostWithPostTranslations();

        foreach ($listPost as $post) {
            if ($post->postTranslations->isNotEmpty()) {
                $translation = $post->postTranslations->first();
                $post->translation_id = $translation->id;
                $post->title = $translation->title;
                $post->content = $translation->content;
                $post->description = $translation->description;
            }
        }

        return $listPost;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  array  $params
     * @return \Illuminate\Http\Response
     */
    public function store(array $params)
    {
        $postTranslation = new PostTranslation;
        $postTranslation->title = $params['title'];

        $postTranslation->content = $params['content'];
        $postTranslation->description = $params['description'];
        $postTranslation->locale = App::getLocale();

        if ( isset($params['postId']) ) {
            $postTranslation->post_id = $params['postId'];
        } else {
            $post = new Post;
            $this->postRepository->store($post);
            $postTranslation->post_id = $post->id;
        }

        $this->postTranslationRepository->store($postTranslation);

        return true;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\Post  $post
     * 
     */
    public function destroy(Post $post)
    {
        return $this->postRepository->destroy($post);
    }

    public function changeLocale($locale)
    {
        return session(['website_language' => $locale]);
    }
}
