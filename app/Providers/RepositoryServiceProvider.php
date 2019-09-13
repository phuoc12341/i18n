<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    protected static $repositories = [
        'base' => [
            \App\Repo\BaseRepositoryInterface::class,
            \App\Repo\BaseRepository::class,
        ],
        'post' => [
            \App\Repo\PostRepositoryInterface::class,
            \App\Repo\PostRepository::class,
        ],
        'postTranslation' => [
            \App\Repo\PostTranslationRepositoryInterface::class,
            \App\Repo\PostTranslationRepository::class,
        ],
    ];

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        foreach (static::$repositories as $repository) {
            $this->app->singleton(
                $repository[0],
                $repository[1]
            );
        }
    }
}