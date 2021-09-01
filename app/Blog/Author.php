<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $attributes=[
        'first_name'=>' Joe',
        'last_name '=>' Don',
        'email'=>'user@gmail.com ',
    ];
    protected $fillable=[
        'first_name',
        'last_name',
        'email',
        'phone',
	
    ];
    public function comment()
    {
        return $this->belongsTo(Comment::class);
    }
    public function article()
    {
        return $this->hasMany(Article::class);
    }
}
