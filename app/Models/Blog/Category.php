<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
  public $timestamps=false;
    protected $fillable=[
        'name',
        'description',
        'image',
    ];
    
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
