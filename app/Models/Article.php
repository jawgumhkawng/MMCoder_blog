<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'image', 'like_count', 'view_count'];

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
    public function tag()
    {
        return $this->belongsToMany(Tag::class, 'article_tag');
    }

    public function programming()
    {
        return $this->belongsToMany(Programming::class, 'article_programming');
    }
}
