<?php

namespace App\Models\Products;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable=[
        'name',
        'description',
    ];

    public function products()
    {
        return $this->hasMany(Products::class);
    }
}
