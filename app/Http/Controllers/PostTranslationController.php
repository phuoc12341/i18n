<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PostTranslation;
use App\Services\PostTranslationService;

class PostTranslationController extends Controller
{
    /**
     * @var \App\Services\PostTranslationService
     */
    protected $postTranslationService;

    /**
     * Instantiate a new instance.
     * @param PostTranslationService $postTranslationService
     */
    public function __construct(PostTranslationService $postTranslationService)
    {
        $this->postTranslationService = $postTranslationService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(PostTranslation $postTranslation)
    {
        return view('posts.translations.edit', ['postTranslation' => $postTranslation]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PostTranslation $postTranslation)
    {
        $params = $request->only('title', 'content', 'description');
        $this->postTranslationService->update($params, $postTranslation);

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostTranslation $postTranslation)
    {
        $this->postTranslationService->destroy($postTranslation);

        return redirect()->route('posts.index');
    }
}
