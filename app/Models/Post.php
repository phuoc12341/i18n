<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\PostTranslation;

class Post extends Model
{
    use SoftDeletes;

    public function postTranslations()
    {
        return $this->hasMany(PostTranslation::class);
    }
}
