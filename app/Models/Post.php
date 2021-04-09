<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';

    protected $fillable = [
        'authorId',
        'title',
        'metaTitle',
        'slug',
        'content',
        'isBanner',
        'isDisplay'
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'authorId', 'id');
    }

    public function metaSeo()
    {
        return $this->hasOne(MetaPost::class);
    }

    public function categoryPost()
    {
        return $this->belongsTo(CategoryPost::class);
    }

}
