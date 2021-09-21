<?php

namespace App\Models\Blog;

use App\Models\LoggableInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model implements LoggableInterface
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable=[
        'title',
        'body',
        'description',
        'published_at',
        'image',
        'author_id',
        'category_id',
    ];

     public function getImageUrlAttribute()
    {
    return \Illuminate\Support\Facades\Storage::url($this->image);
     }
     
    public function comments()
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
    
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function toArray(): array
    {
        return parent::toArray();
    }

    public function toString(): string
    {
       return 'Article with'.$this->id;
    }
}
