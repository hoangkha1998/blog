<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetaPost extends Model
{
    use HasFactory;

    protected $table = 'meta_posts';

    public function metaPost()
    {
        return $this->belongsTo(Post::class);
    }
}
