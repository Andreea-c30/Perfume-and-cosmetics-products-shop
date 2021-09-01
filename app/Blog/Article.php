<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $attributes=[
        'title'=>' Article 1',
        'body '=>' This is the content of the article',
        'description'=>'This article has no description ',
        'author_id '=>'01',
        'category_id'=>'01',
        
    ];
    protected $fillable=[
        'title',
        'body',
        'description',
        'published_at',
        'image',
        'author_id',
        'category_id',
    ];
    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function tag()
    {
        return $this->belongsToMany(Tag::class);
    }
}
