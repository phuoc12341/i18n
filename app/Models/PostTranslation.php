<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Post;
use App;

class PostTranslation extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'content',
        'description',
    ];
    
    public function post()
    {
        return $this->belongsTo(Post::class)->withDefault();
    }

    public function scopeTranslation($query)
    {
        return $query->where('locale', App::getLocale());
    }
}
