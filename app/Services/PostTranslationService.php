<?php

namespace App\Services;

use App\Repo\PostTranslationRepositoryInterface;
use App\Models\PostTranslation;

class PostTranslationService extends BaseService
{
    /**
     * @var \App\Repo\PostTranslationRepositoryInterface
     */
    protected $postTranslationRepository;

    /**
     *
     * @param \App\Repo\PostTranslationRepositoryInterface $postTranslationRepository
     */
    public function __construct(PostTranslationRepositoryInterface $postTranslationRepository)
    {
        $this->postTranslationRepository = $postTranslationRepository;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($params, PostTranslation $postTranslation)
    {
        $data = [
            'title' => $params['title'],
            'content' => $params['content'],
            'description' => $params['description'],
        ];

        return $this->postTranslationRepository->update($data, $postTranslation);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostTranslation $postTranslation)
    {
        return $this->postTranslationRepository->destroy($postTranslation);
    }
}
