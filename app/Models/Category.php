<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $attributes=[
        'name'=>'News',
        'description '=>'Here you will find all the news',
        'image'=>'https://i.pinimg.com/originals/10/b2/f6/10b2f6d95195994fca386842dae53bb2.png',
    ];
    protected $fillable=[
        'name',
        'description',
        'image',
    ];
    public function article()
    {
        return $this->hasMany(Article::class);
    }
}
